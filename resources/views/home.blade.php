@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <p>Selamat datang, {{ Auth::user()->userid }}</p>
</div>
@endsection
