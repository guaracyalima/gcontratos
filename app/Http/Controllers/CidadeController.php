<?php

namespace App\Http\Controllers;

use App\Estados;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CidadeController extends Controller
{

    /**
     * @var Estados
     */
    private $estados;

    public function __construct ( Estados $estados )
    {

        $this->estados = $estados;
    }

    public function index()
    {
        $estados = $this->estados->lists('nome', 'id');

        return view('cidade', compact('estados'));
    }

    public function getCidades ( $idEstado )
    {
        $estado = $this->estados->find($idEstado);
        $cidades = $estado->cidades()->getQuery()->get(['id', 'nome']);

        return Response::json($cidades);
    }
}
