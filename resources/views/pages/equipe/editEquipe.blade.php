@extends('template.main')
@section('content')
    <section>
        <div class="container mt-5">
            <form action="/equipe/{{$equipe->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">animal</label>
                    <input type="text" name="animal" value="{{$edit->nom}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">animal</label>
                    <input type="text" name="animal" value="{{$edit->ville}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">animal</label>
                    <input type="text" name="animal" value="{{$edit->pays}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">animal</label>
                    <input type="text" name="animal" value="{{$edit->maxJoueurs}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <select name="type_id" class="form-select mb-3" aria-label="Default select example">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{$edit->types->type == $type->type? 'selected' : null }}>{{ $type->type }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary text-white">Submit</button>
            </form>
        </div>
    </section>
@endsection