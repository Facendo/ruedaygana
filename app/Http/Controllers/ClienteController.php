<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pago;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
   
    
    public function store(Request $request)
    {   
        if(Cliente::where('cedula', $request->cedula)->exists()){
            $clienteregistrado = Cliente::where('cedula', $request->cedula)->first();
            $clienteregistrado+=$request->cantidad_de_tickets;
            $clienteregistrado->fecha_de_pago = $request->fecha_de_pago;
            $clienteregistrado->now();
            $clienteregistrado->save();
            return redirect()->route('cliente.index')->with('success', 'Cliente actualizado exitosamente.');
        }
        else{
        $cliente = new Cliente();
        
        $cliente->cedula = $request->cedula;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->telefono = $request->telefono;
        $cliente->correo = $request->correo;
        $cliente->cantidad_de_tickets = 0;
        $cliente->cantidad_de_tickets+= $request->cantidad_de_tickets;
        $cliente->fecha_de_pago = $request->fecha_de_pago; 
        $cliente->save();
        }
        $pago = new Pago();
        $pago->cedula_cliente = $request->cedula;
        $pago->referencia = $request->referencia;
        $pago->monto = $request->monto;
        $pago->cantidad_de_tickets = $request->cantidad_de_tickets;
        $pago->descripcion = $request->descripcion;
        $pago->fecha_pago = $request->fecha_pago;
        $pago->metodo_de_pago = $request->metodo_de_pago;
        $pago->estado_pago = $request->estado_pago;
        $pago->dir_imagen_comprobante = $request->dir_imagen_comprobante;
        $pago->save();
        return redirect()->route('cliente.index')->with('success', 'Cliente registrado exitosamente.');
    }

   
}
