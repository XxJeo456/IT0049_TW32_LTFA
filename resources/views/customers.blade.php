@extends('layouts.app')
@section('title', 'Customer Accounts')

@section('content')
    <h1>Customer Accounts</h1>
    <p class="lede">{{ count($customers) }} customers from a static array.</p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>City</th></tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer['id'] }}</td>
                        <td><strong>{{ $customer['name'] }}</strong></td>
                        <td>{{ $customer['email'] }}</td>
                        <td>{{ $customer['phone'] }}</td>
                        <td>{{ $customer['city'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection