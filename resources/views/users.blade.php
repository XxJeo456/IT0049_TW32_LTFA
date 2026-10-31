@extends('layouts.app')
@section('title', 'User Accounts')

@section('content')
    <h1>User Accounts</h1>
    <p class="lede">{{ $users->count() }} system users loaded from the database.</p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr><th>ID</th><th>Username</th><th>Full Name</th></tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td><strong>{{ $user->full_name }}</strong></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection