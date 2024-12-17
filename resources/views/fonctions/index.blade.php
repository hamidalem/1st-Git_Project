@extends('layouts.app')

@section('content')
<nav  class="navbar navbar-expand-lg bg-body-tertiary " >
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
                @auth
                <li class="nav-item">
                    <a href="{{ route('fonctions.create') }}" class="btn btn-success">Add Fonction</a>
                </li>
                @endauth

            </ul>





<ul  class="nav justify-content-end ">
@guest
<li class="nav-item"><a href="{{ route('login') }}" class="btn btn-dark me-md-2">Login</a></li>

<li class="nav-item"><a href="{{ route('register') }}" class="btn btn-dark me-md-2">Register</a></li>

@endguest




              @auth
              <li class="nav-item">
                <a href="/exportfonctionpdf" class="btn btn-primary me-md-2">Download PDF</a>
                </li>
                <li class="nav-item">
                    <a href="/exportfonctionexcel" class="btn btn-primary me-md-2">Download Excel</a>
                    </li>
              <li class="nav-item">
              <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                  @csrf
                  <button type="submit" class="btn btn-dark me-md-2">Log out</button>
              </form>
              </li>

              @endauth



            </ul>


        </ul>


        </div>
    </div>
</nav>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID Fonction</th>

                <th scope="col">Fonction</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        @auth


        <tbody>
            @foreach ($listfonction as $fonction)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $fonction->idfonction }}</td>
                <td>{{ $fonction->Fonction }}</td>

                <td><a href="{{ route('fonctions.edit',  ['idfonction' => $fonction->idfonction]) }}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{ route('fonctions.destroy', ['idfonction' => $fonction->idfonction]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>






            </tr>
            @endforeach
        </tbody>
        </tbody>
        @endauth
    </table>
    @guest
    <h4>You need to Login or Register to see the Table elements</h4>
@endguest
@endsection
