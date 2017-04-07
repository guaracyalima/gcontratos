@extends('layouts.index')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Mensal</div>

                    {!! Charts::assets() !!}

                    <div class="panel-body">

                        {!! $chart->render() !!}

                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Status de pagamentos</div>
                    {!! Charts::assets() !!}
                    <div class="panel-body">

                        {!! $chart->render() !!}

                    </div>
                </div>
            </div>

    </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Despesas</div>

                    {!! Charts::assets() !!}

                    <div class="panel-body">

                        {!! $chartDespesas->render() !!}

                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Receitas</div>
                    {!! Charts::assets() !!}
                    <div class="panel-body">

                        {!! $chartReceitas->render() !!}

                    </div>
                </div>
            </div>

        </div>






        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Teste</div>

                    {!! Charts::assets() !!}

                    <div class="panel-body">

                        {!! $chat->render() !!}

                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Teste</div>
                    {!! Charts::assets() !!}
                    <div class="panel-body">

                        {!! $chat->render() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
