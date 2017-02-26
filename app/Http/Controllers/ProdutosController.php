<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminProdutosRequest;
use App\Repositories\ProdutosRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProdutosController extends Controller
{
    /**
     * @var ProdutsoRepository
     */
    private $repository;

    public function __construct (ProdutosRepository $repository  )
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $produtos = $this->repository->paginate(5);
        return view('admin.produtos.index', compact('produtos'));
    }


    public function create()
    {
        return view('admin.produtos.create');
    }

    public function store( AdminProdutosRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.produtos.index');
    }

    public function show($id)
    {
        $produto = $this->repository->find($id);

        //dd($produto);
        return view('admin.produtos.show', compact('produto'));
    }

    public function edit($id)
    {
        $produto = $this->repository->find($id);
        return view('admin.produtos.edit', compact('produto'));
    }

    public function update(AdminProdutosRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.produtos.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.produtos.index');
    }
}
