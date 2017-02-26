<?php

namespace App\Http\Controllers;

use App\Repositories\CategoriasRepository;
use App\Repositories\DespesasRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DespesasController extends Controller
{



    private $repository;
    /**
     * @var CategoriasRepository
     */
    private $categoriasRepository;

    public function __construct ( DespesasRepository $repository,
                                    CategoriasRepository $categoriasRepository)
    {

        $this->repository = $repository;
        $this->categoriasRepository = $categoriasRepository;
    }

    public function index()
    {
        $despesas = $this->repository->paginate(5);

        return view('admin.despesas.index', compact('despesas'));
    }


    public function create()
    {
        $list_status = [0 => 'Pendente', 1 => 'Quitado', 2 => 'Protestado', 3 => 'Cancelado'];
        $categorias = $this->categoriasRepository->lists('nome', 'id');
        return view('admin.despesas.create', compact('list_status', 'categorias'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        //dd($data);

        return redirect()->route('admin.despesas.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $despesas = $this->repository->find($id);
        $list_status = [0 => 'Pendente', 1 => 'Quitado', 2 => 'Protestado', 3 => 'Cancelado'];
        $categorias = $this->categoriasRepository->lists('nome', 'id');

        return view('admin.despesas.edit', compact('despesas', 'list_status', 'categorias'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.despesas.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.despesas.index');
    }
}
