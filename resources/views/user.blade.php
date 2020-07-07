<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Busca Simples - Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}} ">


    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route('users') }}">BS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('users') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input type="text" name="name" class="form-control mr-sm-2" placeholder="Pesquisar Nome"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-5 mr-2 my-sm-0" type="submit">Pesquisar</button>

                    <input type="text" name="email" class="form-control mr-sm-2" placeholder="Pesquisar Email"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-5 mr-2 my-sm-0" type="submit">Pesquisar</button>

                    <input type="text" name="bio" class="form-control mr-sm-2" placeholder="Pesquisar Bio"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-5 mr-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col mt-3">
                    <h1 class="text-center text-info">Lista Usuários</h1>
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="table-dark" scope="col">#</th>
                                    <th class="table-dark" scope="col">Nome</th>
                                    <th class="table-dark" scope="col">Email</th>
                                    <th class="table-dark" scope="col">Bio</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <th class="table-primary" scope="row">{{ $user->id }}</th>
                                    <td> {{ $user->name }} </td>
                                    <td> {{ $user->email }} </td>
                                    <td> {{ $user->bio }} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        {{ $users->links() }}
                    </div>

                </div>
            </div>

        </div>



        {{-- <div class="container">
            <div class="row">
                <div class="col bg-primary">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Busca de Usuários</h5>
                            <div class="d-flex justify-content-center">
                                <form action="{{route('users')}}" method="GET" class="form-inline">


        <label class="sr-only" for="inlineFormInputName2">Nome</label>
        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Nome">

        <label class="sr-only" for="inlineFormInputGroupUsername2">Email</label>
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
                <div class="input-group-text">@</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Email">
        </div>

        <label class="sr-only" for="inlineFormInputName3">Bio</label>
        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName3" placeholder="Bio">

        <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
        </div>

        </div>
        </div>
        </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    {!! $users->appends(Request::all())->links() !!}
                </div>
            </div>
        </div>

        </div> --}}

        <script src="{{ asset('js/app.js') }} "></script>
    </body>

</html>
