<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Admin Dashboard</h1>
    <p>Welcome, {{ Auth::guard('admin')->user()->name }}</p>

    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
