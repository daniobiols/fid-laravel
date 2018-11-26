@extends('app')

@section('head')
  <meta charset="utf-8">
@endsection

@section('title', 'Perfil')

@section('main')
<div class="contenerdor_formulario_usuario">

    <h2 class="fuente_formulario_usuario" id="id_contacto">Editar perfil de   {{ $user->name }}</h2>

    <div class="row" style="padding: 10px;">
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active fidTypo" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Editar Datos de usuario</a>
          <a class="list-group-item list-group-item-action fidTypo" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Editar Datos de Facturacion</a>
          <a class="list-group-item list-group-item-action fidTypo" id="list-messages-list" data-toggle="list" href="/profile" role="tab" aria-controls="messages">Volver a mi cuenta</a>
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">

          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <form method="POST" action="{{ route('updateProfile') }}">
              @csrf
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text ancho_campo_fact fidTypo" id="inputGroup-sizing-sm">Email</span>
                </div>
                <input type="text" class="form-control corrige_datos_facturacion fidTypo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm fidTypo" value="{{$user->email}}" name="email">
              </div>
              <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text ancho_campo_fact fidTypo" id="inputGroup-sizing-sm">Nombre</span>
              </div>
              <input type="text" class="form-control corrige_datos_facturacion fidTypo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm " value="{{$user->name}}" name="name">
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text ancho_campo_fact fidTypo" id="inputGroup-sizing-sm">Apellido</span>
              </div>
              <input type="text" class="form-control corrige_datos_facturacion fidTypo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{$user->lastname}}" name="lastname">
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text ancho_campo_fact fidTypo" id="inputGroup-sizing-sm">Telefono</span>
              </div>
              <input type="text" class="form-control corrige_datos_facturacion fidTypo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{$user->telephone}}" name="telephone">
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text ancho_campo_fact fidTypo" id="inputGroup-sizing-sm fidTypo fidTypo">Direcion</span>
              </div>
              <input type="text" class="form-control corrige_datos_facturacion fidTypo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{$user->address}}" name="address">
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text ancho_campo_fact fidTypo" id="inputGroup-sizing-sm fidTypo">Pais</span>
              </div>
              <input type="text" class="form-control corrige_datos_facturacion fidTypo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{$user->country}}" name="country">
            </div>
            <button type="submit" class="btn btn-secondary fidTypo" value="Submit">Guardar</button>
            <a href="/profile"><button type="button" class="btn btn-danger fidTypo" value="Submit">Cancelar</button></a>
          </form>
          </div>


          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            <form class="" action="index.html" method="post">
              <div class="form-group">
                <label class="col-sm-3 control-label flota_campos fidTypo" for="card-holder-name">Nombre</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label flota_campos fidTypo" for="card-number">Numero</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="card-number" id="card-number" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label flota_campos fidTypo" for="expiry-month">Vencimiento</label>
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
                        <option value="18">2018</option>
                        <option value="19">2019</option>
                        <option value="20">2020</option>
                        <option value="21">2021</option>
                        <option value="22">2022</option>
                        <option value="23">2023</option>
                        <option value="23">2024</option>
                        <option value="23">2025</option>
                        <option value="23">2026</option>
                        <option value="23">2027</option>
                        <option value="23">2028</option>
                        <option value="23">2029</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label flota_campos fidTypo" for="cvv">CVV</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control fidTypo" name="cvv" id="cvv" placeholder="">
                </div>
              </div>
              <button type="submit" class="btn btn-secondary fidTypo" value="Submit">Guardar</button>
              <a href="/profile"><button type="button" class="btn btn-danger fidTypo" value="Submit">Cancelar</button></a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
