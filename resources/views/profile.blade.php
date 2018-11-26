@extends('app')

@section('head')
  <meta charset="utf-8">
@endsection

@section('title', 'Perfil')

@section('main')
<div class="contenerdor_formulario_usuario">

    <h1 class="col-12 fuente_formulario_usuario" id="id_contacto">bienvendid@ {{ $user->name }}</h1>

    <div class="row" style="padding: 10px;">
      <div class="col-4">
        <div class="list-group fidTypo" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action  active fidTypo"  activeid="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Datos personales</a>
          {{-- <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Datos de Facturacion</a> --}}
          <a class="list-group-item list-group-item-action" href="{{ url('/editprofile') }}">Editar Datos</a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Eliminar cuenta</a>
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          {{-- <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
          </div> --}}
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            <ul class="list-group list-group-flush">
              <li class="list-group-item fidTypo" style="text-align: left;">Email</li>
              <li class="list-group-item fidTypo">{{$user->email}}</li>
              <li class="list-group-item fidTypo" style="text-align: left;">Nombre</li>
              <li class="list-group-item fidTypo">{{$user->name}}</li>
              <li class="list-group-item fidTypo" style="text-align: left;">Apellido</li>
              <li class="list-group-item fidTypo">{{$user->lastname}}</li>
              <li class="list-group-item fidTypo" style="text-align: left;">Telefono</label></li>
              <li class="list-group-item fidTypo">{{$user->telephone}}</li>
              <li class="list-group-item fidTypo" style="text-align: left;">Address</label></li>
              <li class="list-group-item fidTypo">{{$user->address}}</li>
              <li class="list-group-item fidTypo" style="text-align: left;">Pais</label></li>
              <li class="list-group-item fidTypo">{{$user->country}}</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            {{-- @include('partials.creditcard') --}}
{{--             <form class="" action="index.html" method="post">
              <div class="form-group">
                <label class="col-sm-4 control-label flota_campos fidTypo" for="card-holder-name">Nombre</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control fidTypo" name="card-holder-name" id="card-holder-name" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label flota_campos fidTypo" for="card-number">Numero</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control fidTypo" name="card-number" id="card-number" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label flota_campos fidTypo" for="expiry-month">Vencimiento</label>
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
                        <option value="13">2024</option>
                        <option value="14">2025</option>
                        <option value="15">2025</option>
                        <option value="16">2027</option>
                        <option value="17">2028</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label flota_campos fidTypo" for="cvv">CVV</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="cvv" id="cvv" placeholder="">
                </div>
              </div>
            </form> --}}
          </div>
          <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
            <form action="/profile/{{$user->id}}" method="post">
                @method('DELETE')
                @csrf

                <ul class="list-group list-group-flush">
                  <li class="list-group-item fidTypo" style="text-align: left;">¿Estas seguro de que desea eliminar su cuenta definitivamente?</li>
                  <li class="list-group-item fidTypo">
                    <button class="btn btn-danger fidTypo">
                     Eliminar Cuenta
                    </button>
                  </li>
                </ul>


              </form>
            </td>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
