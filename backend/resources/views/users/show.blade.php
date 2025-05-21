@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $user->name }}'s Profile</h2>
    <p>Email: {{ $user->email }}</p>

    <h4 class="mt-4">Listings:</h4>
    @if($user->listings->count())
        <ul>
            @foreach($user->listings as $listing)
                <li>
                    <strong>{{ $listing->title }}</strong> - ₹{{ $listing->price }} - {{ $listing->location }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No listings found.</p>
    @endif

    <a href="{{ route('users.edit', $user) }}" class="btn btn-primary mt-3">Edit Profile</a>
</div>
@endsection
