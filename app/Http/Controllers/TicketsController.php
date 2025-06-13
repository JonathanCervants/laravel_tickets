<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Inertia\Inertia;


class TicketsController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return Inertia::render('tickets/Index', ['tickets'=> $tickets]);   
    
    }

    public function create()
    {
        return Inertia::render('tickets/create');
    }

    /**
     * Store a newly created resource in storage.
         */
    public function store(TicketFormRequest $request)
    {       
        $slug = uniqid();
        $ticket = new Ticket(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'status' =>1,
            'user_id' => 1,
            'slug' => $slug
        ));
    
        $ticket->save();
        return redirect('/tickets')->with('status', 'Your ticket has been created! Its unique id is: '.$slug);  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        return Intertia::render('tickets/Show');
        // $ticket = Ticket::whereSlug($slug)->firstOrFail();
        // $comentario= $ticket->comentarios->all();
        // return view('tickets.show',compact('ticket','comentario')); 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticket = Ticket::whereSlug($id)->firstOrFail();         
        return view('tickets.edit',['ticket'=>$ticket]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TicketFormRequest $request, string $slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->titulo = $request->get('titulo');
        $ticket->contenido = $request->get('contenido');
        if($request->get('estado') != null) {
            $ticket->estado = 0;
        } else {
            $ticket->estado = 1;
        }
        $ticket->save();
        return redirect(route('ticket.edit', $ticket->slug))->with('estado', '¡El ticket '.$slug.' ha sido actualizado!');
        }

    public function destroy(string $slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->delete();
        return redirect('/tickets')->with('estado', '¡El ticket '.$slug.' ha sido eliminado!');
    }
}
