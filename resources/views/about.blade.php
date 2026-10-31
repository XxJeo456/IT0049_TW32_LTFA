@extends('layouts.app')
@section('title', 'About')

@section('content')
    <h1>About this app</h1>
    <p class="lede">A small point-of-sale prototype built for IT0049 (Web System Technologies).</p>

    <div class="card">
        <h3>How it works</h3>
        <p>A request hits a route, which calls a controller method. The controller prepares a static PHP array and passes it to a Blade view, which loops through it with @@foreach. The arrays are temporary and will be replaced by database models later.</p>
    </div>
@endsection