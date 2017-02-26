<?php

namespace App\Http\Controllers;


use App\Http\Requests\AdminContratosRequest;
use App\Produtos;
use App\Repositories\ClientesRepository;
use App\Repositories\ContratosRepository;
use App\Repositories\ProdutosRepository;


class ContratosController extends Controller
{
    /**
     * @var ProdutsoRepository
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

    public function __construct (ContratosRepository $repository, ProdutosRepository $produtosRepository, ClientesRepository $clientesRepository)
    {
        $this->repository = $repository;
        $this->produtosRepository = $produtosRepository;
        $this->clientesRepository = $clientesRepository;
    }


    public function index()
    {
        $contratos = $this->repository->paginate(5);
        return view('admin.contratos.index', compact('contratos'));
    }


    public function create()
    {
        $produtos = $this->produtosRepository->lists('nome', 'id');
        $clientes = $this->clientesRepository->lists('nome', 'id');
        return view('admin.contratos.create', compact('produtos', 'clientes'));
    }


    public function store( AdminContratosRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.contratos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $contrato = $this->repository->find($id);
        $produtos = $this->produtosRepository->lists('nome', 'id');
        $clientes = $this->clientesRepository->lists('nome', 'id');
        return view('admin.contratos.edit', compact('contrato', 'produtos', 'clientes'));
    }


    public function update(AdminContratosRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.contratos.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.contratos.index');
    }
}
