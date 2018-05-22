@extends('layout')

@section('content')
    <h3>Edit the Note</h3>

    <form action="/notes/{{ $note->id }}" method="post">
        @method('patch')
        @csrf
        <div class="form-group">
            <textarea name="body" class="form-control">{{ $note->body}}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Note</button>
        </div>
    </form>

@stop
