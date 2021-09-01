@extends('template.main')
@section('content')
    <section>
        <div class="container mt-5 w-50 mb-5">
            <form action="/joueur/{{ $edit->id }}" style="font-size: 18px" method="POST" class="form-control" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom:</label>
                    <input type="text" name="nom" value="{{ $edit->nom }}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prenom:</label>
                    <input type="text" name="prenom" value="{{ $edit->prenom }}" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Age:</label>
                    <input type="number" name="age" value="{{ $edit->age }}" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Télephone:</label>
                    <input type="number" name="tlf" value="{{ $edit->tlf }}" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email:</label>
                    <input type="email" name="email" value="{{ $edit->email }}" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <label for="exampleInputEmail1" class="form-label">Genre:</label>
                <select name="genre" value="{{ $edit->genre }}" class="form-select mb-3 " value="{{$edit->genre}}"
                    aria-label="Default select example">
                    <option>Choisir un genre</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pays:</label>
                    <input type="text" name="pays_origine" value="{{ $edit->pays_origine }}" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <select name="role_id" class="form-select mb-3" value="{{ $edit->role_id }}"
                    aria-label="Default select example">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" {{ $edit->roles->role == $role->role ? 'selected' : null }}>
                            {{ $role->role }}</option>
                    @endforeach
                </select>
                <select name="equipe_id" class="form-select mb-3" value="{{ $edit->equipe_id }}"
                    aria-label="Default select example">
                    @foreach ($equipes as $equipe)
                        <option value="{{ $equipe->id }}"
                            {{ $edit->equipes->nom == $equipe->nom ? 'selected' : null }}>{{ $equipe->nom }}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Photo de profile :</label>
                    <input class="form-control" name="src" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-primary text-white">Update</button>
            </form>
        </div>
    </section>
@endsection