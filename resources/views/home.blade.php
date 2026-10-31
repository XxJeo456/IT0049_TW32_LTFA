@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <h1>Point of sale,<br>built in Laravel.</h1>
    <p class="lede">A small point-of-sale prototype built for IT0049 (Web System Technologies).</p>

    <a class="btn" href="{{ route('customers') }}">Customer Accounts</a>
    <a class="btn alt" href="{{ route('users') }}">User Accounts</a>

    <div class="grid">
        <div class="card"><h3>Routes</h3><p>Four pages in routes/web.php.</p></div>
        <div class="card"><h3>Controllers</h3><p>Page, Customer and User controllers.</p></div>
        <div class="card"><h3>Views</h3><p>Blade templates sharing one layout.</p></div>
    </div>
@endsection