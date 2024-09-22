@extends('layouts.default')
@section('content')
        <h1>Создать нового работника</h1>
        <form name="employee-form" id="employee-form" method="POST" action="{{ url('employees.store') }}">
            @csrf
            <div class="form-group"><label for="first_name">FirstName</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required="true"></div>
            <div class="form-group"><label for="last_name">LastName</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required="true"></div>
            <div class="form-group"><label for="email">email</label>
                <input type="email" name="email" id="email" class="form-control" required="true"></div>
            <div class="form-group"><label for="workdata">workData</label>
                <textarea name='workdata' class="form-control" required='true'></textarea></div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@stop
