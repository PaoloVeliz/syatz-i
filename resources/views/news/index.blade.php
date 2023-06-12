@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="padding-top: 20px; padding-bottom: 20px"> Una seccion para mantenernos informados y ayudarnos en lo que podamos</h1>
    <h2 style="padding-top: 20px; padding-bottom: 20px"> Se colocan noticias como jornadas de vacunación y mascotas perdidas </h2>
    <div>
        <actions-list/>
    </div>
    <news-list/>
</div>
@endsection