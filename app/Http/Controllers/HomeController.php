<?php

namespace App\Http\Controllers;


use App\Carnes;
use App\Contratos;
use App\Despesas;
use App\Receitas;
use Charts;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index()
    {

        $chart = Charts::database(Carnes::all(), 'line', 'highcharts')
            ->title('Ponto de equilibrio')
            ->elementLabel("Status")
            ->responsive(true)
            ->groupBy('status', null, [0 => 'Pendente', 1 => 'Quitado', 2 => 'Protestado', 3 => 'Cancelado']);

        $chartReceitas = Charts::database(Receitas::all(), 'pie', 'highcharts')
            ->title('Receitas mensal ')
            ->elementLabel("Status")
            ->responsive(true)
            ->groupBy('status', null, [0 => 'Pendente', 1 => 'Quitado', 2 => 'Protestado', 3 => 'Cancelado']);

        $chartDespesas = Charts::database(Despesas::all(), 'line', 'highcharts')
            ->title('Ponto de equilibrio ')
            ->elementLabel("Status")
            ->responsive(true)
            ->groupBy('status', null, [0 => 'Pendente', 1 => 'Quitado', 2 => 'Protestado', 3 => 'Cancelado']);

        ///testes para o graico mensal
        $data = Carnes::all();
        $charty = Charts::create('donut', 'highcharts')
            ->title('Desempenho semestral')
            ->elementLabel('My nice label')
            ->labels($data->pluck('primeiroVencimento'))
            ->values($data->pluck('desconto'))
            ->responsive(true);

        return view('admin.home.index', ['chart' => $chart, 'chartReceitas' => $chartReceitas, 'chartDespesas' => $chartDespesas, 'chat' =>$charty]);
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
}
