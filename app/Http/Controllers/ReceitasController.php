<?php

namespace App\Http\Controllers;

use App\Repositories\ReceitasRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReceitasController extends Controller
{


    private $repository;

    public function __construct ( ReceitasRepository $repository )
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $receitas = $this->repository->paginate(5);
        return view('admin.receitas.index', compact('receitas'));
    }


    public function create()
    {
        $list_status = [0 => 'Pendente', 1 => 'Quitado', 2 => 'Protestado', 3 => 'Cancelado'];
        return view('admin.receitas.create', compact('list_status'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.receitas.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $receitas = $this->repository->find($id);
        $list_status = [0 => 'Pendente', 1 => 'Quitado', 2 => 'Protestado', 3 => 'Cancelado'];
        return view('admin.receitas.edit', compact('receitas', 'list_status'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
