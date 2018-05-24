<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

class CardsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
        $card->load('notes.user');
        return view('cards.show', compact('card'));
    }
}
