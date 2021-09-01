@extends('template.main')
@section('content')
@if (session()->has('message'))
        <div class="container alert alert-success mt-2 w-50">
            {{ session()->get('message') }}
        </div>
    @endif
    @if (session()->has('messageDelete'))
        <div class="container alert alert-danger mt-2 w-50">
            {{ session()->get('messageDelete') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-warning alert-block">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="container">
        <div class="container mt-5  mb-3">
            <h3 class="text-white text-center">Création d'équipes</h3>

            <form action="/equipe" style="font-size: 18px" class="form-control w-50 m-auto" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom d'équipe:</label>
                    <input type="text" name="nom" value="{{old('nom')}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ville:</label>
                    <input type="text" name="ville" value="{{old('ville')}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pays:</label>
                    <input type="text" name="pays" value="{{old('pays')}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Maximum de joueurs:</label>
                    <input type="number" name="maxJoueurs" value="{{old('maxJoueurs')}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <label for="exampleInputEmail1" class="form-label">Continent:</label>
                <select name="continent_id" value="{{old('continent_id')}}" class="form-select mb-3" aria-label="Default select example">
                    <option selected>Choisis un continent</option>
                    @foreach ($continents as $continent)
                        <option value="{{ $continent->id }}">{{ $continent->nom_continent }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary text-white">Créer</button>
            </form>
            <table class="table mt-5 table-primary table-striped w-100 m-auto">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">Ville</th>
                        <th class="text-center" scope="col">Pays</th>
                        <th class="text-center" scope="col">Max joueurs</th>
                        <th class="text-center" scope="col">Continent</th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipes as $equipe)
                        <tr>
                            <th class="text-center" scope="row">{{ $equipe->id }}</th>
                            <td class="text-center">{{ $equipe->nom }}</td>
                            <td class="text-center">{{ $equipe->ville }}</td>
                            <td class="text-center">{{ $equipe->pays }}</td>
                            <td class="text-center">{{ $equipe->maxJoueurs }}</td>
                            <td class="text-center">{{ $equipe->continents->nom_continent }}</td>
                            <td class="text-center">
                                <a class="btn btn-primary text-white" href="/equipe/{{$equipe->id}}/edit">EDIT</a>
                            </td>
                            <td class="text-center">
                                <form action="/equipe/{{ $equipe->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-white" type="submit">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
@endsection