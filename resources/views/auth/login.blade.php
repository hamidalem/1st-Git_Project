@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TEST_1</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('clients.index')}}">Client</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('fonctions.index')}}">Fonction</a>
          </li>







        </ul>
        <ul  class="nav justify-content-end ">
            <li class="nav-item" ><a href="{{ route('register') }}" class="btn btn-dark me-md-2">Register</a></li>
       </ul>


      </div>
    </div>
  </nav>



<form method="post" action="{{route('login')}}">
    @csrf
<div class="container-fluid">
    <div class="container-sm p-5 my-5 border">
    <div class="mb-3">
      <label for="email" class="form-label">email</label>
      <input type="email" class="form-control" id="email" name="email" >


      <label for="password" class="form-label">password</label>
      <input type="password" class="form-control" id="password" name="password" >



    </div>
    <button type="submit" class="btn btn-success">Login</button>
    <a href="/client" class="btn btn-danger">Cancel</a>
</form>
</div>
</div>

@endsection
