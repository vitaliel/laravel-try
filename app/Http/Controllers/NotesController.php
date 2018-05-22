<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use App\User;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
        $note = new Note($request->all());
        $note->user_id = User::first()->id;
        $card->addNote($note);

        return back();
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $note->update($request->all());

        return back();
    }
}
