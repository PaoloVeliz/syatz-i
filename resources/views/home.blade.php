@extends('layouts.app')

@section('content')
<div style="width: 100%; display: flex; flex-direction: column">
  <div style="width: 100%; display: flex; align-content: center; justify-content: center;">
  <h1 style="padding-top: 10px;">Bienvenido {{auth()->user()->name }} que quieres hacer el dia de hoy</h1>
    </div>  
    
    <div>
      <inicio-component/>
      </div>
      <div style="width: 100%; display: flex; align-content: center; justify-content: center;">
        <h2 style="padding-top: 10px;">El dia de hoy quiero dar</h2>
      </div>
      <div style="display: flex; align-items: center; justify-content: center; padding-right: 20px">
        <actions-component/>
        {{-- <div>hola</div> --}}
      </div>
      <div  style="width: 100%; display: flex; align-content: center; justify-content: center;">
        <h2 style="padding-top: 10px;">Conoce a grandes amigos!</h2>
      </div>
      
    <div>
      <adoption-component/>
    </div>
 
       {{-- <adoption-component/> --}}
      {{-- hola --}}
 
</div>
@endsection
