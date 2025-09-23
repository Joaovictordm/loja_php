<?php

namespace App\Http\Controllers;

use App\Models\NotaFiscal;
use App\Models\Cliente;
use Illuminate\Http\Request\StoreNotaFiscalRequest;

class NotaFiscalController extends Controller
{
    
    public function index()
    {
        $vendas = NotaFiscal::with("cliente")->get();
        return view("notaFiscal.index", compact("notaFiscal"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Venda $venda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venda $venda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venda $venda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venda $venda)
    {
        //
    }
}
