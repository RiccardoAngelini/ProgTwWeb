@extends('layouts.navstaff')
@section('content')
    <h1>Nome Profilo</h1>
    <p>Nom: {{$users->name}} </p>
    <p>Nom: {{$users->email}} </p>
@endsection