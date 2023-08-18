<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
        Cliente::query()->create($request->all());

        return back();
    }
    public function update(Request $request, $id)
    {
        $cliente = Cliente::query()->findOrFail($id);

        $cliente->update($request->all());

        $clientes = Cliente::query()->get();

        return view('list', ['clientes' => $clientes]);
    }

    public function edit($id)
    {
        $cliente = Cliente::query()->findOrFail($id);

        return view('edit', ['cliente' => $cliente]);
    }
    public function excluir($id)
    {
        $cliente = Cliente::query()->findOrFail($id);
        $cliente->delete();

        $clientes = Cliente::query()->get();

        return view('list', ['clientes' => $clientes]);
    }
    public function listar()
    {
        $clientes = Cliente::query()->get();

        return view('list', ['clientes' => $clientes]);
    }
}