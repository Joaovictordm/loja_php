<?php

namespace App\Http\Controllers;

use App\Models\NotaFiscal;
use App\Models\Cliente;
use Illuminate\Http\Request\StoreNotaFiscalRequest;

class NotaFiscalController extends Controller
{
    
    public function index()
    {
        $notaFiscal = NotaFiscal::with("cliente")->get();
        return view("notaFiscal.index", compact("notaFiscal"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::pluck("nome", "id");
        return view("notaFiscal.create", compact("clientes"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotaFiscalRequest $request)
    {
        NotaFiscal::create($request->validated());
        return redirect()->route("notaFiscal.index")->with("Sucess", "Nota fiscal gerada com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show(NotaFiscal $notaFiscal)
    {
        $notaFiscal->load("cliente");
        return view("notaFiscal.show", compact("notaFiscal"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NotaFiscal $notaFiscal)
    {
        $clientes = Cliente::pluck("nome", "id");
        return view("notaFiscal.edit", compact("notaFiscal", "clientes"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreNotaFiscalRequest $request, NotaFiscal $notaFiscal)
    {
        $notaFiscal->update($request->validated());
        return redirect()->route("notaFiscal.index")->with("sucess", "Nota gerada");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( NotaFiscal $notaFiscal)
    {
        $notaFiscal->delete();
        return redirect()->route("notaFiscal.index")->with("Success", "nota excluída");
    }
}
