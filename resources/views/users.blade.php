@extends('layouts.app')
@section('title', 'User Accounts')

@section('content')
    <h1>User Accounts</h1>
    <p class="lede">{{ count($users) }} system users from a static array.</p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr><th>ID</th><th>Name</th><th>Username</th><th>Role</th><th>Status</th></tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td><strong>{{ $user['name'] }}</strong></td>
                        <td>{{ $user['username'] }}</td>
                        <td>{{ $user['role'] }}</td>
                        <td><span class="badge {{ $user['status'] === 'Active' ? '' : 'off' }}">{{ $user['status'] }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection