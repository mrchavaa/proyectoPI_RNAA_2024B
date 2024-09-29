<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ClienteController extends Controller// implements HasMiddleware
{
    
    // public static function middleware(): array
    // {
    //     return [
    //         new Middleware('auth', except: ['index', 'show']),
    //     ];
    // }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index-cliente', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("clientes.create-cliente");
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
            'telefono'  => ['required', 'max:20'],
            'correo' => ['required', 'email']
        ]);

        //ASIGNACIÓN MASIVA DE DATOS
        $cliente = Cliente::create($request->all());

        //REDIRECCIONAR AL USUARIO A LA VISTA 'CREAR USUARIO'
        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show-cliente', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit-cliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('cliente.show', $cliente);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
