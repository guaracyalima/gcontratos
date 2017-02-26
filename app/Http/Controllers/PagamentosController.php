<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminPagamentosRequest;
use App\Repositories\PagamentosRepository;

class PagamentosController extends Controller
{
    /**
     * @var ProdutsoRepository
     */
    private $repository;

    public function __construct (PagamentosRepository $repository  )
    {

        $this->repository = $repository;
    }


    public function index()
    {

        $pagamentos = $this->repository->paginate(5);
        return view('admin.pagamentos.index', compact('pagamentos'));
    }

    public function create()
    {
        return view('admin.pagamentos.create');
    }

    public function store( AdminPagamentosRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.pagamentos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pagamento = $this->repository->find($id);
        return view('admin.pagamentos.edit', compact('pagamento'));
    }

    public function update(AdminPagamentosRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.pagamentos.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.pagamentos.index');
    }
}
