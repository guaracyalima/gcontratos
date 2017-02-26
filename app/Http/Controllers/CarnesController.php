<?php

namespace App\Http\Controllers;

use App\Carnes;
use App\Http\Requests\AdminCarnesRequest;

use App\Http\Requests\AdminDatesRequest;
use App\Http\Requests\AdminParcelamentoRequest;
use App\Repositories\CarnesRepository;
use App\Repositories\ClientesRepository;
use App\Repositories\ParcelasRepository;
use App\Repositories\ProdutosRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Jenssegers\Date\Date;


class CarnesController extends Controller
{

    private $repository;
    /**
     * @var ProdutosRepository
     */
    private $produtosRepository;
    /**
     * @var ClientesRepository
     */
    private $clientesRepository;

    private $list_status = [0 => 'Aguardando pagamento', 1 => 'Pago', 2 => 'Vencido', 3 => 'Cancelado'];
    /**
     * @var ParcelasRepository
     */
    private $parcelasRepository;


    public function __construct (CarnesRepository $repository,
                                 ProdutosRepository $produtosRepository,
                                 ClientesRepository $clientesRepository,
                                 ParcelasRepository $parcelasRepository )
    {

        $this->repository = $repository;
        $this->produtosRepository = $produtosRepository;
        $this->clientesRepository = $clientesRepository;
        $this->parcelasRepository = $parcelasRepository;
    }


    public function index()
    {

        $produtos = $this->produtosRepository->lists('nome', 'id');
        $clientes = $this->clientesRepository->lists('cpf', 'nome');
        $idDosCarnes = $this->repository->lists('id');
        $list_status = [0 => 'Pendente', 1 => 'Quitado', 2 => 'Protestado', 3 => 'Cancelado'];

        $carnes = $this->repository->paginate(10);

        foreach ($carnes as $item){
            $dadosDaParcela = DB::select('SELECT nome FROM clientes WHERE cpf = ?', [$item->cpf]);
        }
        return view('admin.carnes.index', compact('carnes', 'produtos', 'clientes', 'idDosCarnes', 'list_status', 'dadosDaParcela'));
    }

    public function create()
    {
        $produtos = $this->produtosRepository->lists('nome', 'id');
        $clientes = $this->clientesRepository->lists('cpf', 'nome');

        return view('admin.carnes.create', compact('produtos', 'clientes'));
    }

    public function store( AdminCarnesRequest $request)
    {
        $data = $request->all();

        $parcelas = $request->input('parcelas');

        $vencimento= $request->input('primeiroVencimento');

        $dt = Carbon::createFromFormat('Y-m-d', $vencimento);

        for ($i = 0; $i < $parcelas ; $i++ ){

            if($parcelas == 1){

                $data['primeiroVencimento'] = $dt;

            }elseif($parcelas > 1){
                //$dt->addMonth(1);

                $data['primeiroVencimento'];

                //= $dt;
            }

            $this->repository->create($data);
        }
//        $this->repository->create($data);
        return redirect()->route('admin.carnes.index');
    }

    public function show($cpf)
    {

        $carne = DB::select('select * from parcelas WHERE  cpf = ?', [$cpf]);

        foreach ($carne as $item){

            $nomeDoCliente = DB::select('select * from clientes WHERE  cpf = ?', [$item->cpf]);

            $nomeDoProduto = DB::select('select * from produtos WHERE  id = ?', [$item->produto_id]);

            $status = DB::select('SELECT * FROM parcelas  WHERE  cpf = ?', [$item->cpf]);
        }


        if ($carne == null){
            //return redirect('admin/clientes');

            return back()->with('erro', 'Erro: Esse cliente não possui compras ativas');

        }else{
            return view('admin.carnes.show', compact('carne', 'nomeDoCliente', 'nomeDoProduto', 'status', 'hoje'));
        }


    }

    public function edit($id)
    {
        $carne = $this->repository->find($id);
        $produtos = $this->produtosRepository->lists('nome', 'id');
        $clientes = $this->clientesRepository->lists(['nome', 'cpf']);
        return view('admin.carnes.edit', compact('carne','produtos', 'clientes'));
    }

    public function update(AdminCarnesRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.carnes.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.carnes.index');
    }

    public function confPagamento (AdminDatesRequest $request,$id, $status)
    {
        $data = Carbon::now();
        $dados = $this->parcelasRepository->find($id);
        $teste = DB::table('parcelas')
            ->where('id', $id)
            ->update(['status' => $status, 'updated_at' => $data]);
        return redirect()->route('admin.carnes.show', ['cpf' => $dados->cpf]);
    }

    public function cancelarParcela (AdminDatesRequest $request,$id, $status)
    {
        $data = Carbon::now();

        $dados = $this->parcelasRepository->find($id);

        $teste = DB::table('parcelas')
            ->where('id', $id)
            ->update(['status' => $status, 'updated_at' => $data]);

        return redirect()->route('admin.carnes.show', ['cpf' => $dados->cpf]);
    }

    public function ajaxAdd ( AdminCarnesRequest $request )
    {
        $dados = $request->all();
        $this->repository->create($dados);
    }

    public function ajaxParcela ( Request $request )
    {
        $dados = $request->all();

        $parcelas = $request->input('numParcelas');

        $vencimento= $request->input('vencimento');

        $dt = Carbon::createFromFormat('Y-m-d', $vencimento);;

        DB::table('parcelas')->insert([
            'cpf' => $dados['cpf'],
            'carne_id' => $dados['carne_id'],
            'produto_id' => $dados['produto_id'],
            'quantidade' => $dados['quantidade'],
            'valorUnitario' => $dados['valorUnitario'],
            'entrada' => $dados['entrada'],
            'desconto' => $dados['desconto'],
            'numParcelas' => $dados['numParcelas'],
            'vencimento' => $dados['vencimento'],
            'valorParcela' => $dados['valorParcela'],
            'total' => $dados['total']
        ]);
        for ($i = 0; $i < $parcelas ; $i++ ){

            $dt->addMonth(1);
            $dados['vencimento'] = $dt;

            $this->parcelasRepository->create($dados);
        }

    }
}
