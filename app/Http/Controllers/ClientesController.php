<?php

namespace App\Http\Controllers;


use App\Carnes;
use App\Http\Requests\AdminClientesRequest;
use App\Repositories\CarnesRepository;
use App\Repositories\ClientesRepository;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ProdutosRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ClientesController extends Controller
{
    /**
     * @var ProdutsoRepository
     */
    private $repository;
    /**
     * @var CarnesRepository
     */
    private $carnesRepository;
    /**
     * @var ProdutosRepository
     */
    private $produtosRepository;
    /**
     * @var Carnes model
     */
    private $carnesModel;

    public function __construct (ClientesRepository $repository,
                                 CarnesRepository $carnesRepository,
                                 ProdutosRepository $produtosRepository, Carnes $carnesModel )
    {

        $this->repository = $repository;
        $this->carnesRepository = $carnesRepository;
        $this->produtosRepository = $produtosRepository;
        $this->carnes = $carnesModel;
    }


    public function index()
    {
        $clientes = $this->repository->paginate(10);
        $idDosCarnes = $this->carnesRepository->lists('id');
        $list_status = [0 => 'Pendente', 1 => 'Quitado', 2 => 'Protestado', 3 => 'Cancelado'];
        $clienteCerto = $this->repository->lists('cpf', 'nome');
        foreach ($clientes as $item){
            $idDaParcela = DB::select('SELECT * FROM carnes');
        }
        $produtos = $this->produtosRepository->lists('nome', 'id');
        return view('admin.clientes.index', compact('clientes','idDaParcela', 'produtos', 'idDosCarnes', 'list_status', 'clienteCerto', 'carnez'));
    }


    public function create()
    {

        $estados = ['AC' => 'AC',
                    'AL' => 'AL',
                    'AM' => 'AM',
                    'AP' => 'AP',
                    'BA' => 'BA',
                    'CE' => 'CE',
                    'DF' => 'DF',
                    'ES' => 'ES',
                    'GO' => 'GO',
                    'MA' => 'MA',
                    'MG' => 'MG',
                    'MS' => 'MS',
                    'MT' => 'MT',
                    'PA' => 'PA',
                    'PB' => 'PB',
                    'PE' => 'PE',
                    'PI' => 'PI',
                    'PR' => 'PR',
                    'RJ' => 'RJ',
                    'RN' => 'RN',
                    'RO' => 'RO',
                    'RR' => 'RR',
                    'RS' => 'RS',
                    'SC' => 'SC',
                    'SE' => 'SE',
                    'SP' => 'SP',
                    'TO' => 'TO'
        ];

        $sexo = ['Mulher' => 'Mulher', 'Homen' => 'Homen'];
        return view('admin.clientes.create', compact('estados', 'sexo'));
    }


    public function store( AdminClientesRequest $request)
    {
        $data = $request->all();
        DB::table('carnes')->insert(
            ['cpf' => $data['cpf']]
        );
        $this->repository->create($data);
        return redirect()->route('admin.clientes.index');
    }

    public function edit($id)
    {
        $cliente = $this->repository->find($id);

        return view('admin.clientes.edit', compact('cliente'));
    }

    public function show($id)
    {
        $cliente = $this->repository->find($id);

        return view('admin.clientes.show', compact('cliente'));
    }


    public function update(AdminClientesRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.clientes.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.clientes.index');
    }


    public function getCarne ($cpf)
    {
        $carne = DB::table('carnes')->select('id')->where('cpf', '=', $cpf )->get();
        return Response::json($carne);
    }

    public function getPrecoProduto ($id)
    {
        $preco = DB::table('produtos')->select('precoUnitario')->where('id', '=', $id )->get();
        return Response::json($preco);
    }

}
