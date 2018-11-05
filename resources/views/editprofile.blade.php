@extends('app')

@section('head')
  <meta charset="utf-8">
@endsection

@section('title', 'Perfil')

@section('main')
<div class="contenerdor_formulario_usuario">

    <h2 class="fuente_formulario_usuario" id="id_contacto">Editar perfil de   {{ $user->name }}</h2>

    <div class="row">
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Editar Datos de usuario</a>
          {{-- <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Datos personales</a> --}}
          <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Editar Datos de Facturacion</a>
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">

          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <form method="POST" action="{{ route('updateProfile') }}">
              @csrf
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Nuevo Email</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{$user->email}}" name="email">
              </div>
              <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nuevo Nombre</span>
              </div>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{$user->name}}" name="name">
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nuevo Apellido</span>
              </div>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{$user->lastname}}" name="lastname">
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nuevo Telefono</span>
              </div>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{$user->telephone}}" name="telephone">
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nueva Direccion</span>
              </div>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{$user->address}}" name="address">
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nuevo Pais</span>
              </div>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{$user->country}}" name="country">
            </div>
            <button type="submit" value="Submit">Guardar</button>
            <button type="button" value="Submit">Cancelar</button>
          </form>
          </div>


          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            <form class="" action="index.html" method="post">
              <div class="form-group">
                <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label" for="card-number">Card Number</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-xs-3">
                      <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                        <option>Month</option>
                        <option value="01">Jan (01)</option>
                        <option value="02">Feb (02)</option>
                        <option value="03">Mar (03)</option>
                        <option value="04">Apr (04)</option>
                        <option value="05">May (05)</option>
                        <option value="06">June (06)</option>
                        <option value="07">July (07)</option>
                        <option value="08">Aug (08)</option>
                        <option value="09">Sep (09)</option>
                        <option value="10">Oct (10)</option>
                        <option value="11">Nov (11)</option>
                        <option value="12">Dec (12)</option>
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
                <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
                </div>
              </div>
              <button type="submit" value="Submit">Guardar</button>
              <button type="button" value="Submit">Cancelar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
