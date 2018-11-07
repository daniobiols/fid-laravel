<<<<<<< HEAD
@section('title', 'Products')

@section('main')
  <div class="contacto">
    <h2 id="id_contacto">Comunicate con nosotros.</h2>
    <form class="formulario">
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" class="form-control" id="Name" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email Address</label>
            <input type="email" class="form-control" id="Email" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Phone Number</label>
            <input type="tel" class="form-control" id="Phone" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="Message" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-ttc">Send</button>
    </form>
    <hr style="color: #0054b2;" />
</div>
=======
@extends('app')

@section('title', 'Listar Productos')

@section('main')


<ul>
	@foreach ($products as $element)
		<li>{{$element->name}}</li>
		<li>{{$element->description}}</li>
		<li>{{$element->product_code}}</li>
	@endforeach
</ul>

>>>>>>> ea0784e3c1b5a636b894c0d74ca6988020bd347b
@endsection
