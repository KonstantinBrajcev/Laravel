@extends('layouts.default')
@section('content')
    <div class="container">
        <h1>Редактирование работника</h1>
        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group"><label for="first_name">Имя:</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name', $employee->first_name) }}" required>
            </div>
            <div class="form-group"><label for="last_name">Фамилия:</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name', $employee->last_name) }}" required>
            </div>
            <div class="form-group"><label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $employee->email) }}" required>
            </div>
            <div class="form-group"><label for="workdata">Рабочие данные:</label>
                <input type="text" name="workdata" id="workdata" class="form-control" value="{{ old('workdata', $employee->workdata) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
    </div>
@stop
