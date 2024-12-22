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

      </div>
    </div>
  </nav>
  <br>
  <br>


<form method="post" action="{{route('fonctions.store')}}">
    @csrf
<div class="container-fluid">
    <div class="container-sm p-5 my-5 border">
    <div class="mb-3">



      <label for="Fonction" class="form-label">Fonction</label>
      <input type="text" class="form-control" id="Fonction"  name="Fonction" style="text-transform: uppercase;">


       </select>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <a href="/fonction" class="btn btn-danger">Cancel</a>
</form>
</div>
</div>
  @endsection
