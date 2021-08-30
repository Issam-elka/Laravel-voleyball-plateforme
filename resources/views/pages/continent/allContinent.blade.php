
@extends('template.main')
@section('content')
    <section class="container w-75">
        <div class="container mt-5">
            <form action="/continent" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom du continent:</label>
                    <input type="text" name="nom_continent" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Créer</button>
            </form>
            <table class="table mt-5 table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom du continent</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($continents as $continent)
                        <tr>
                            <th scope="row">{{ $continent->id }}</th>
                            <td>{{ $continent->nom_continent }}</td>
                            <td>
                                <a class="btn btn-success text-white" href="/continent/{{$continent->id}}/edit">EDIT</a>
                            </td>
                            <td>
                                <form action="/continent/{{ $continent->id }}" method="POST">
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
