@extends('layouts.default')
@section('content')

    <h1>Данные нового работника</h1>
    <p><strong>First Name:</strong> {{ $validatedData['first_name'] }}</p>
    <p><strong>Last Name:</strong> {{ $validatedData['last_name'] }}</p>
    <p><strong>Email:</strong> {{ $validatedData['email'] }}</p>
    <p><strong>Work Data:</strong> {{ $validatedData['workdata'] }}</p>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Назад</a>

@stop
