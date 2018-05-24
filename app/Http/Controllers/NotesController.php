<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use App\User;
use Illuminate\Http\Request;

class NotesController extends Controller
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

    public function store(Request $request, Card $card)
    {
        $this->validate($request, [
            'body' => 'required|min:10'
        ]);
        $note = new Note($request->all());
        $note->user_id = \Auth::id();
        $card->addNote($note);

        flash("Note was created succsessfully.");

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
