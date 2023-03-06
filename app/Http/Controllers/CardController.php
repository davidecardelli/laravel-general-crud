<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $card = new Card();
        return view('cards.create', compact('card'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $card = new Card();
        $card->fill($data);
        $card->save();
        return to_route('cards.show', $card->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        return view('cards.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {
        $data = $request->all();
        $card->update($data);
        return to_route('cards.show', $card->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
