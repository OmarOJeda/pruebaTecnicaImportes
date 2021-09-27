<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Importe;
use DB;

class ImporteController extends Controller
{
    public function index()
    {
        return importe::all();
    }


    public function store(Request $request)
    {
        $importe = new Importe;
        $importe->contrato =  request('contrato');
        $importe->iva =  request('iva');
        $importe->importe =  request('importe');
        $importe->anticipo =  request('anticipo');
        $importe->enrogacion =  request('enrogacion');
        $importe->cincoMillar =  request('cincoMillar');
        $importe->dosMillar =  request('dosMillar');
        $importe->save();
        return $importe;
    }


    public function show($id)
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
