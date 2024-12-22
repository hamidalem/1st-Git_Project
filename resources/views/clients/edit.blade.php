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



<form  action="{{ route('clients.update', ['idclient' => $client->idclient]) }}" method="POST">
    @csrf
    @method('PUT')




<div class="container-fluid">
    <div class="container-sm p-5 my-5 border">
    <div class="mb-3">
      <label for="FirstName" class="form-label" >First Name</label>
      <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{ $client->FirstName }}" style="text-transform: uppercase;">

      <label for="LasttName" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="LasttName"  name="LastName" value="{{ $client->LastName }}" style="text-transform: uppercase;">

      <label for="Age" class="form-label">Age</label>
      <input type="number" class="form-control" id="Age" name="age" value="{{ $client->age }}" >

      <label for="Gender" class="form-label">Gender</label>
      <select  class="form-select" id="gender" name="gender" value="{{ $client->gender }}" >

        <option value="Male" {{$client->gender ==='Male' ? 'selected' :''}}>Male</option>
      <option value="Female" {{$client->gender ==='Female' ? 'selected' :''}}>Female</option>

      </select>



       <label for="Fonction" class="form-label">Fonction</label>
       <select type="select" class="form-select" id="idf" name="idf">

       @foreach ( $fonctions as $fonction)
       <option @IF ($fonction->idfonction ==$client->idf ) selected @endif value="{{$fonction->idfonction}}" style="text-transform: uppercase;">{{$fonction->Fonction}}</option>
       @endforeach


        </select>
    </div>




    <button type="submit" class="btn btn-success">Save</button>
    <a href="/client" class="btn btn-danger">Cancel</a>
</form>
</div>
</div>
  @endsection
