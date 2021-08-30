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
                
                <select name="nom_continent" class="form-select mb-3" aria-label="Default select example">
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
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Ville</th>
                        <th scope="col">Pays</th>
                        <th scope="col">Max joueurs</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipes as $equipe)
                        <tr>
                            <th scope="row">{{ $equipe->id }}</th>
                            <td>{{ $equipe->nom }}</td>
                            <td>{{ $equipe->ville }}</td>
                            <td>{{ $equipe->pays }}</td>
                            <td>{{ $equipe->maxJoueurs }}</td>
                            <td>
                                <a class="btn btn-success text-white" href="/equipe/{{$equipe->id}}/edit">EDIT</a>
                            </td>
                            <td>
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