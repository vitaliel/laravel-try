@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

    <h1>All Cards</h1>

    @foreach($cards as $card)
        <div>
            <a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
        </div>
    @endforeach

        </div>
    </div>
</div>

@stop
