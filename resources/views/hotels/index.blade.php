@extends('layouts.app')

@section('content')
<div style="width: 100%; display: flex; flex-direction: column">
  <div style="width: 100%; display: flex; align-content: center; justify-content: center;">
  <h1 style="padding-top: 20px;">Encuentra el lugar perfecto para tu mascota</h1>
    </div>
      <div style="width: 100%; display: flex; align-content: center; justify-content: center;">
        <h2 style="padding-top: 5px;">Un ambiente acogedor y seguro donde tu mascota puede disfrutar de una estancia cómoda</h2>
      </div>
      <div>
        <hotels-actions/>
     </div>
    <hotels-list/>

</div>

@endsection