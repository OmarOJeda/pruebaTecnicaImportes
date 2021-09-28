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
        $importe->id = request('id');
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


    public function show(Importe $importe)
    {
        return $importe;
    }


    public function update(Request $request, Importe $importe)
    {
        $importe->update($request->all());
    }


    public function destroy(Importe $importe)
    {
        $importe->delete();
    }
}
