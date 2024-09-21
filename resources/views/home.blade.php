@extends('layouts.default')
@section('content')
<div class="container">
        <h1>Добро пожаловать на главную страницу!</h1>

        @if ($age > 18)
            <p>Ваш возраст: {{ $age }}</p>
        @else
            <p>Предупреждение: Вы слишком молоды!</p>
        @endif
    </div>
@stop
