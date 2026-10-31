@extends('layouts.app')
@section('title', 'Customer Accounts')

@section('content')
    <h1>Customer Accounts</h1>
    <p class="lede">{{ $customers->count() }} customers loaded from the database.</p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr><th>ID</th><th>Full Name</th><th>Email</th><th>Phone</th></tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td><strong>{{ $customer->full_name }}</strong></td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection