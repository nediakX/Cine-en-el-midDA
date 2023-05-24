<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Pelicula;
use App\Models\Sala;
use App\Models\Horario;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        $peliculas = Pelicula::all();
        $salas = Sala::all();
        $horarios = Horario::all();
        return view('tickets.create', compact('peliculas', 'salas', 'horarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelicula_id' => 'required',
            'sala_id' => 'required',
            'horario_id' => 'required',
            'asiento' => 'required',
        ]);

        $ticket = new Ticket([
            'pelicula_id' => $request->input('pelicula_id'),
            'sala_id' => $request->input('sala_id'),
            'horario_id' => $request->input('horario_id'),
            'asiento' => $request->input('asiento'),
        ]);
        $ticket->save();

        return redirect()->route('tickets.index')->with('success', 'Ticket creado exitosamente.');
    }

    public function edit(Ticket $ticket)
    {
        $peliculas = Pelicula::all();
        $salas = Sala::all();
        $horarios = Horario::all();
        return view('tickets.edit', compact('ticket', 'peliculas', 'salas', 'horarios'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'pelicula_id' => 'required',
            'sala_id' => 'required',
            'horario_id' => 'required',
            'asiento' => 'required',
        ]);

        $ticket->update([
            'pelicula_id' => $request->input('pelicula_id'),
            'sala_id' => $request->input('sala_id'),
            'horario_id' => $request->input('horario_id'),
            'asiento' => $request->input('asiento'),
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket actualizado exitosamente.');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->with('success', 'Ticket eliminado exitosamente.');
    }
}
