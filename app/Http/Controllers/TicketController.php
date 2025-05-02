<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Vista para crear un nuevo ticket
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = new Ticket();
        $ticket->id_sorteo = $request->id_sorteo;
        $ticket->ticket_token = $this->buildtoken();
        $ticket->nombre_cliente = $request->nombre_cliente;
        $ticket->telefono_cliente = $request->telefono_cliente;
        $ticket->correo_cliente = $request->correo_cliente;
        $ticket->descripcion = $request->descripcion;
        $ticket->confirmacion_de_pago = $request->confirmacion_de_pago;
        $ticket->created_at = now();
        $ticket->updated_at = now();
        $ticket->save();
        //return redirect()->route('ticket.index')->with('success', 'Ticket created successfully.');
    }

    private function buildtoken($length = 8)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //Vista para editar un ticket
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $ticket->id_sorteo = $request->id_sorteo;
        $ticket->ticket_token = $request->ticket_token;
        $ticket->nombre_cliente = $request->nombre_cliente;
        $ticket->telefono_cliente = $request->telefono_cliente;
        $ticket->correo_cliente = $request->correo_cliente;
        $ticket->descripcion = $request->descripcion;
        $ticket->confirmacion_de_pago = $request->confirmacion_de_pago;
        $ticket->created_at = now();
        $ticket->updated_at = now();
        $ticket->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
