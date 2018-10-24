@extends('app')

@section('head')
  <meta charset="utf-8">
@endsection

@section('title', 'Perfil')

@section('main')
<div class="contenerdor_formulario_usuario">

    <h2 class="fuente_formulario_usuario" id="id_contacto">Bienvendida {{ $user->name }}</h2>

    <ul>
      <li>
        <label for="">Email</label>
        <p>{{$user->email}}</p>
      </li>
      <li>
        <label for="">Nombre</label>
        <p>{{$user->name}}</p>
      </li>
      <li>
        <label for="">Apellido</label>
        <p>{{$user->lastname}}</p>
      </li>
      <li>
        <label for="">Telefono</label>
        <label for="">Telefono</label>
      </li>
    </ul>
</div>
@endsection
