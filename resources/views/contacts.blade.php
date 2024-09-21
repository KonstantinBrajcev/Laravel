@extends('layouts.default')
@section('content')
<div class="container">
        <h1>Контакты</h1>

        <p>Адрес: {{ $address }}</p>
        <p>Почтовый индекс: {{ $post_code }}</p>

        @if (!empty($email))
            <p>Email: {{ $email }}</p>
        @else
            <p>Адрес электронной почты не указан.</p>
        @endif

        <p>Телефон: {{ $phone }}</p>
    </div>
@stop
