<?php

namespace App\Http\Controllers;

use App\Repositories\CategoriasRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriasController extends Controller
{


    private $repository;

    public function __construct ( CategoriasRepository $repository )
    {
        $this->repository = $repository;
    }


    public function index()
    {

        $categorias = $this->repository->paginate(5);

        return view('admin.categorias.index', compact('categorias'));

    }


    public function create()
    {
        return view('admin.categorias.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        //dd($data);

        return redirect()->route('admin.categorias.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categorias = $this->repository->find($id);

        //dd($categoria);

        return view('admin.categorias.edit', compact('categorias'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.categorias.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.categorias.index');
    }
}
