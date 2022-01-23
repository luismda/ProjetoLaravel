@extends('layouts.main')

@section('title', 'Contato')

@section('content')

<h1>Essa é a página de contato!</h1>
<a href="/">Voltar para Home</a>

@if($busca != '')
    <p>O item buscado é: {{ $busca }}</p>
@endif

@endsection