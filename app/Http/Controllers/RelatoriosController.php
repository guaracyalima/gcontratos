<?php

namespace App\Http\Controllers;

use App\Repositories\ParcelasRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RelatoriosController extends Controller
{
    /**
     * @var ParcelasRepository
     */
    private $parcelasRepository;

    public function __construct ( ParcelasRepository $parcelasRepository )
    {

        $this->parcelasRepository = $parcelasRepository;
    }

    public function index()
    {

//        $dt = Carbon::createFromFormat('Y-m-d', $date); //pega a data de hoje para retirar esse mes
//
//        $status = 0;
//
//        $pegaTudo = DB::select('SELECT * FROM parcelas');
//        //$pegaTudo = DB::select('SELECT * FROM parcelas WHERE status = ?', [$status]);
//        $pegaId = DB::select('SELECT id FROM parcelas ORDER BY ID DESC LIMIT 1');
//
//        //dd($pegaTudo);
//
//        foreach ($pegaId as $treco)
//        {
//            foreach ( $pegaTudo as $item )
//            {
//
//                //$cu = DB::select('SELECT * FROM parcelas WHERE ')
//
//            }
//        }

        $xtudo = $this->parcelasRepository->paginate(20);
        return view('admin.relatorios.index', compact('xtudo'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
