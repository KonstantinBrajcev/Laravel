@extends('layouts.default')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Список работников</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Добавить нового работника</a>
        <table class="table table-bordered">
            <thead><tr><th>ID</th>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Email</th>
                        <th>Действия</th></tr></thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr><td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td><a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Редактировать</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form></td></tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
@stop
