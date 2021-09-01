@extends('template.main')
@section('content')
    <section>
        <div class="container d-flex flex-wrap">
            @foreach ($equipes as $equipe) 
            <div class="card border-secondary mb-3 w-50 mt-5 text-center m-3" style="max-width: 18rem;">
                <div class="card-header">Equipe: {{$equipe->nom}}</div>
                <div class="card-body text-secondary">
                    <h5 class="card-title">Ville: {{$equipe->ville}}</h5>
                    <p class="card-text">Joueurs maximum: {{$equipe->joueurs->count()}}/{{$equipe->maxJoueurs}}</p>
                </div>
                <div>
                    <button href="/equipe/{{ $equipe->id }}/show" class="btn btn-primary text-white w-25 mb-4"
                        data-bs-toggle="modal" data-bs-target="#exampleModalToggle_{{ $equipe->id }}"
                        role="button">show</button>
                    </div>
                </div>
                @include('partials.modal.equipe.show')
            @endforeach
        </div>
    </section>
@endsection
