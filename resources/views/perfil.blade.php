@extends('layout')
@section('content')

<h1>PAGINA PERFIL</h1></br>

<h3>{{Auth::user()->name}}</h3></br>
<h3>{{Auth::user()->email}}</h3></br>

@stop
