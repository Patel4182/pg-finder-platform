@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">All Users</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Listings Count</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->listings_count }}</td>
                    <td>
                        <a href="{{ route('users.show', $user) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
