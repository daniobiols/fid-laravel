@extends('app')

@section('head')
  <meta charset="utf-8">
@endsection

@section('title', 'Perfil')

@section('main')
<div class="contenerdor_formulario_usuario">

    <h1 class="fuente_formulario_usuario" id="id_contacto">Bienvendida {{ $user->name }}</h1>

    <div class="row">
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action  active"  activeid="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Datos personales</a>
          <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Datos de Facturacion</a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Eliminar cuenta</a>
          <a class="list-group-item list-group-item-action" href="{{ url('/editprofile') }}">Editar Datos</a>
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          {{-- <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
          </div> --}}
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="text-align: left;">Email</li>
              <li class="list-group-item">{{$user->email}}</li>
              <li class="list-group-item" style="text-align: left;">Nombre</li>
              <li class="list-group-item">{{$user->name}}</li>
              <li class="list-group-item" style="text-align: left;">Apellido</li>
              <li class="list-group-item">{{$user->lastname}}</li>
              <li class="list-group-item" style="text-align: left;">Telefono</label></li>
              <li class="list-group-item">{{$user->telephone}}</li>
              <li class="list-group-item" style="text-align: left;">Address</label></li>
              <li class="list-group-item">{{$user->address}}</li>
              <li class="list-group-item" style="text-align: left;">Pais</label></li>
              <li class="list-group-item">{{$user->country}}</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            {{-- @include('partials.creditcard') --}}
            <form class="" action="index.html" method="post">
              <div class="form-group">
                <label class="col-sm-3 control-label" for="card-holder-name">Nombre en la tarjeta</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Nombre">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label" for="card-number">Numero de la tarjeta</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Numero">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label" for="expiry-month">Fecha de vencimiento</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-xs-3">
                      <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                        <option>Mes</option>
                        <option value="01">Ene (01)</option>
                        <option value="02">Feb (02)</option>
                        <option value="03">Mar (03)</option>
                        <option value="04">Abr (04)</option>
                        <option value="05">May (05)</option>
                        <option value="06">Jun (06)</option>
                        <option value="07">Jul (07)</option>
                        <option value="08">Ago (08)</option>
                        <option value="09">Sep (09)</option>
                        <option value="10">Oct (10)</option>
                        <option value="11">Nov (11)</option>
                        <option value="12">Dic (12)</option>
                      </select>
                    </div>
                    <div class="col-xs-3">
                      <select class="form-control" name="expiry-year">
                        <option value="13">2013</option>
                        <option value="14">2014</option>
                        <option value="15">2015</option>
                        <option value="16">2016</option>
                        <option value="17">2017</option>
                        <option value="18">2018</option>
                        <option value="19">2019</option>
                        <option value="20">2020</option>
                        <option value="21">2021</option>
                        <option value="22">2022</option>
                        <option value="23">2023</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                {{-- <label class="col-sm-3 control-label" for="cvv">Codigo de Seguridad CVV</label> --}}
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="cvv" id="cvv" placeholder="CVV">
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
            <button type="button" name="button">Eliminar Cuenta</button>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
