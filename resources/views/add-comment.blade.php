@extends('layouts.app')

@section('title-block')Добавить запись @endsection

@section('content')




    <form action={{ route('send_data') }} method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Введите email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" placeholder="Введите сообщение" id="message" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>

    </form>

@endsection


