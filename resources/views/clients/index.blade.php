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
                        <a href="{{ route('clients.create') }}" class="btn btn-success">Add Client</a>
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
                    <a href="/exportclientpdf" class="btn btn-primary me-md-2">Download PDF</a>
                    </li>
                    <li class="nav-item">
                        <a href="/exportclientexcel" class="btn btn-primary me-md-2">Download Excel</a>
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
                <th scope="col">ID Client</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Age</th>
                <th scope="col">Fonction</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        @auth


        <tbody>
            @foreach ($listclient as $client)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $client->idclient }}</td>
                <td>{{ $client->FirstName }}</td>
                <td>{{ $client->LastName }}</td>
                <td>{{ $client->gender }}</td>
                <td>{{ $client->age }}</td>

                <td>{{ $client->fonction ? $client->fonction->Fonction : 'No Fonction' }}</td>

                <td><a href="{{ route('clients.edit',  ['idclient' => $client->idclient]) }}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{ route('clients.destroy', ['idclient' => $client->idclient]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
        @endauth



    </table>

    @guest
    <h4>You need to Login or Register to see the Table elements</h4>
@endguest

@endsection
