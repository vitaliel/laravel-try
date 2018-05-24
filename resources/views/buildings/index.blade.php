@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1>@lang('Buildings')</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>@lang('Name')</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="/buildings/{{ 1 }}">House 1</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/buildings/{{ 2 }}">House 2</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/buildings/{{ 3 }}">House 3</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection
