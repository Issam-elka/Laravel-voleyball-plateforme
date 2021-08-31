@extends('template.main')
@section('content')
    <section class="container w-75">
        <div class="container mt-5">
            <form action="/equipe" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom d'équipe:</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ville:</label>
                    <input type="text" name="ville" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pays:</label>
                    <input type="text" name="pays" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Maximum de joueurs:</label>
                    <input type="number" name="maxJoueurs" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <label for="exampleInputEmail1" class="form-label">Continent:</label>
                <select name="continent_id" class="form-select mb-3" aria-label="Default select example">
                    <option selected>Choisis un continent</option>
                    @foreach ($continents as $continent)
                        <option value="{{ $continent->id }}">{{ $continent->nom_continent }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Créer</button>
            </form>
            <table class="table mt-5 table-success table-striped">
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
                                <a class="btn btn-success text-white" href="/equipe/{{$equipe->id}}/edit">EDIT</a>
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