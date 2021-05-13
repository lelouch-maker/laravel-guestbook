@extends('layouts.app')

@section('title-block')Список записей@endsection

@section('content')

    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{$el->message}}</h3>
            <p>{{$el->email}}</p>
            <p>{{$el->name}}</p>
            <p><small>{{$el->created_at}}</small></p>
        </div>
    @endforeach
@endsection


