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
<section class="container w-75">
    <div class="container mt-5 ">
        <h3>Création de joueurs</h3>
        <form action="/joueur" method="POST" class="form-control" enctype="multipart/form-data" class="w-50">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom:</label>
                <input type="text" name="nom" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prenom:</label>
                <input type="text" name="prenom" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Age:</label>
                <input type="number" name="age" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Télephone:</label>
                <input type="number" name="tlf" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <label for="exampleInputEmail1" class="form-label">Genre:</label>
            <select name="genre" class="form-select mb-3" aria-label="Default select example">
                <option selected>Choisis un genre</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
            </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pays:</label>
                <input type="text" name="pays_origine" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <label for="exampleInputEmail1" class="form-label">Role:</label>
            <select name="role_id" class="form-select mb-3" aria-label="Default select example">
                <option selected>Choisis un role</option>
                @foreach ($roles as $role)
                    <option value="{{$role->id}}">{{$role->role}}</option>
                @endforeach
            </select>
            <label for="exampleInputEmail1" class="form-label">Equipe:</label>
            <select name="equipe_id" class="form-select mb-3" aria-label="Default select example">
                <option selected>Choisis une équipe</option>
                @foreach ($equipes as $equipe)
                    <option value="{{$equipe->id}}">{{$equipe->nom}}</option>
                @endforeach
            </select>
            <div class="mb-3">
                <label for="formFile" class="form-label">Photo:</label>
                <input class="form-control" name="src" type="file" id="formFile">
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
        <table class="table mt-5 table-success table-striped w-50">
            <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Nom</th>
                    <th class="text-center" scope="col">Prenom</th>
                    <th class="text-center" scope="col">Age</th>
                    <th class="text-center" scope="col">Télephone</th>
                    <th class="text-center" scope="col">Email</th>
                    <th class="text-center" scope="col">Genre</th>
                    <th class="text-center" scope="col">Pays</th>
                    <th class="text-center" scope="col">Role</th>
                    <th class="text-center" scope="col">Equipe</th>
                    <th class="text-center" scope="col">Photo</th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($joueurs as $joueur)
                    <tr>
                        <th class="text-center" scope="row">{{ $joueur->id }}</th>
                        <td class="text-center">{{ $joueur->nom }}</td>
                        <td class="text-center">{{ $joueur->prenom }}</td>
                        <td class="text-center">{{ $joueur->age }}</td>
                        <td class="text-center">{{ $joueur->tlf }}</td>
                        <td class="text-center">{{ $joueur->email }}</td>
                        <td class="text-center">{{ $joueur->genre }}</td>
                        <td class="text-center">{{ $joueur->pays_origine }}</td>
                        <td class="text-center">{{ $joueur->roles->role }}</td>
                        <td class="text-center">{{ $joueur->equipes->nom }}</td>
                        {{-- <td class="text-center">{{ $joueur->photos->src }}</td> --}}
                        <td class="text-center "><img width="150px" class="mx-2" src="{{asset('storage/img/'.$joueur->photos->src)}}">
                            <a href="/joueur/{{ $joueur->id }}/download" class="btn btn-success text-white mt-2"
                                >Télecharger</a></td>
                        <td></td>
                        <td class="text-center">
                            <a class="btn btn-success text-white" href="/joueur/{{$joueur->id}}/edit">EDIT</a>
                        </td>
                        <td class="text-center">
                            <form action="/joueur/{{ $joueur->id }}" method="POST">
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