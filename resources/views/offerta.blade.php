@extends('layouts.public')
@section('content')
Prodotto

@include('helpers/promotionImg', ['imgFile' => $sel_promId->image])

@endsection