<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes/index-cliente', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("clientes/create-cliente");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //VALIDAR DATOS
        $request->validate([
            'nombre'  => ['required'],
            'apellido1'  => ['required'],
            'apellido2'  => ['required'],
            'telefono'  => ['required', 'max:20']
        ]);

        //CREAR INSTANCIA CLIENTE
        $cliente = new Cliente();

        /*ASIGNARLE DATOS A LA INSTANCIA CLIENTE
        A TRAVÉS DEL REQUEST*/
        $cliente->nombre = $request->nombre;
        $cliente->apellido1 = $request->apellido1;
        $cliente->apellido2 = $request->apellido2;
        $cliente->telefono = $request->telefono;

        //GUARDARLO EN LA BASE DE DATOS
        $cliente->save();

        //REDIRECCIONAR AL USUARIO A LA VISTA 'CREAR USUARIO'
        return redirect('alta-clientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect('/listar-clientes');
    }
}
