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
        $importe->create($request->all());
        $importe->save();
        return $importe;
    }


    public function show(Importe $importe)
    {
        return $importe;
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Importe $importe)
    {
        $importe->delete();
    }
}
