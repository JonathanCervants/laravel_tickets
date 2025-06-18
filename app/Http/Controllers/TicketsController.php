<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketFormRequest;
use App\Models\Ticket;
use App\Models\Category;
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
        return Inertia::render('tickets/Create');        //$categories = Category::orderBy('name')->get();
        // return Inertia::render('tickets/Create', [
        //     // 'categories' => $categories
        // ]);
    }

    /**
     * Store a newly created resource in storage.
         */
    public function store(TicketFormRequest $request)
    {       
        echo('title');
        $slug = uniqid();
        $ticket = new Ticket(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'user_id' => 1,
            'slug' => $slug
        ));
    
        $ticket->save();
        return redirect('/tickets')->with('status', 'Your ticket has been created! Its unique id is: '.$slug);  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::whereId($id)->firstOrFail();
        return Inertia::render('tickets/Show', compact('ticket'));
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
