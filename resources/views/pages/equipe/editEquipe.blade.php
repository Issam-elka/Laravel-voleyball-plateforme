@extends('template.main')
@section('content')
    <section>
        <div class="container mt-5 w-50 mb-5">
            <form action="/equipe/{{ $edit->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom de l'Equipe :</label>
                    <input type="text" name="nom" value="{{ $edit->nom }}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ville :</label>
                    <input type="text" name="ville" value="{{ $edit->ville }}" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pays :</label>
                    <input type="text" name="pays" value="{{ $edit->pays }}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Max. Joueurs :</label>
                    <input type="number" name="maxJoueurs" value="{{ $edit->maxJoueurs }}" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Continent :</label>
                    <select name="continent_id" class="form-select mb-3" value="{{ $edit->continent_id }}"
                        aria-label="Default select example">
                        @foreach ($continents as $continent)
                            <option value="{{ $continent->id }}">
                                {{ $continent->nom_continent }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary text-white">Update</button>
            </form>
        </div>
    </section>
@endsection
