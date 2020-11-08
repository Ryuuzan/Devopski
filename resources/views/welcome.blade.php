@extends('layout')

@section('title','Index')

@section('content')
    <h1>Page d'acceuil</h1>
    @foreach($tasks as $task)
        <li><?= $task; ?></li>
    @endforeach
@endsection