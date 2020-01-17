@extends('layouts.app')

@section('content')

<form action="/usuarios" method="POST">
  @csrf
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" name="name" placeholder="Escribe tu nombre">
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Escribe tu correo">
    </div>
  </div>

  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Ingresa una contrasegna">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Registar</button>
  <a href="/usuarios"><button type="button" class="btn btn-danger">Cancelar</button></a>

</form>

@endsection
