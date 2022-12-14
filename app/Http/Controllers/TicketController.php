<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\Ticket;
use App\Http\Resources\TicketResource;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		// Here : handle filters with local scope query
		// if softDelete is wished, use the adequat function to include soft-deleted tickets (e.g.: in a filter)
		if(Auth::user()->getRole() === 'customer') {
			return TicketResource::collection(Auth::user()->tickets);

		} else {
			return TicketResource::collection(Ticket::all());
		}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTicketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTicketRequest $request)
    {
		$validated = $request->validated();

		$new_ticket = new Ticket;
        $new_ticket->name = $request->name;
        $new_ticket->description = $request->description;
        $new_ticket->context = $request->context;
        $new_ticket->browser = $request->browser;
        $new_ticket->tested_by_customer = $request->tested_by_customer;
        $new_ticket->type = $request->type;
        $new_ticket->priority = $request->priority;
        $new_ticket->state = $request->state;
        $new_ticket->save();

		return response()->json('...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTicketRequest  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
