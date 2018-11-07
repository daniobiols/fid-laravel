@extends('app')

@section('head')
  <meta charset="utf-8">
@endsection

@section('title', 'Tiendas')

@section('main')

<div class="row shop">
  <div class="shops col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <img src="./images/tienda01.jpg" alt="">
  </div>

  <div class="shops col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <ul>
      <li><h1>Lomas de Zamora</h1></li>
      <li>Loria 345</li>
      <li>4245-3456</li>
      <li>lomas@fid.com.ar</li>
    </ul>
  </div>

  <div class="shops col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <ul>
      <li><h1>Palermo</h1></li>
      <li>Santa Fe 345</li>
      <li>3214-4567</li>
      <li>pelermo@fid.com.ar</li>
    </ul>
  </div>

  <div class="shops col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <img src="./images/tienda02.jpg" alt="">
  </div>

</div>
  
@endsection
