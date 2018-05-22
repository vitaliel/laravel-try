@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <h1>Card: {{ $card->title }}</h1>

        <ul class="list-group">
            @foreach($card->notes as $note)
            <li class="list-group-item">
                {{ $note->body }}
                <a href="#" class="pull-right">
                    {{ $note->user->name }}
                </a>
            </li>
            @endforeach
        </ul>

        <hr />

        <h3>Add a New Note</h3>
        <form action="/cards/{{ $card->id }}/notes" method="post">
            @csrf
            <div class="form-group">
                <textarea name="body" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Note</button>
            </div>
        </form>
    </div>
</div>

@stop
