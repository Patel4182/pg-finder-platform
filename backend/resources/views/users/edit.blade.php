@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Profile: {{ $user->name }}</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('users.update', $user) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input name="name" class="form-control" value="{{ old('name', $user->name) }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input name="email" class="form-control" value="{{ old('email', $user->email) }}">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>New Password (optional)</label>
            <input type="password" name="password" class="form-control">
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Confirm New Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
