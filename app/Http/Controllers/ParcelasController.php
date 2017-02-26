<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminParcelamentoRequest;
use App\Repositories\CarnesRepository;
use App\Repositories\ClientesRepository;
use App\Repositories\ParcelasRepository;
use App\Repositories\ProdutosRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ParcelasController extends Controller
{

    /**
     * @var ParcelasRepository
     */
    private $repository;
    /**
     * @var ProdutosRepository
     */
    private $produtosRepository;
    /**
     * @var ClientesRepository
     */
    private $clientesRepository;
    /**
     * @var CarnesRepository
     */
    private $carnesRepository;

    /**
     * @var ClientesRepository
     */

    public function __construct( ParcelasRepository $repository, ProdutosRepository $produtosRepository,
                                 ClientesRepository $clientesRepository, CarnesRepository $carnesRepository)
    {

        $this->repository = $repository;
        $this->produtosRepository = $produtosRepository;
        $this->clientesRepository = $clientesRepository;
        $this->carnesRepository = $carnesRepository;
    }
    
    public function index()
    {
        $parcelas = $this->repository->paginate(5);
        return view('admin.parcelas.index', compact('parcelas'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function defineParcelamento ( AdminParcelamentoRequest $request )
    {
        $dados = $request->all();

        return response($dados);

//        $this->repository->create($dados);
    }
}
