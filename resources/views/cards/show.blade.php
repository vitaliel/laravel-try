@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <h1>Card: {{ $card->title }}</h1>

        <ul class="list-group">
            @foreach($card->notes as $note)
            <li class="list-group-item">
                {{ $note->body }}
                <a href="#" class="float-right">
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
                <textarea name="body" class="form-control">{{ old('body') }}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Note</button>
            </div>
        </form>

        @if (count($errors))
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
      </div>
    </div>
</div>

@stop
