@extends('template.main')
@section('content')
    <section>
        <div class="container d-flex flex-wrap">
            @foreach ($joueurs as $joueur) 
            <div class="card border-secondary mb-3 w-50 mt-5 text-center m-3" style="max-width: 18rem;">
                <div class="card-header"><img width="250px" class="mx-2" src="{{asset('storage/img/'.$joueur->photos->src)}}">
                </div>
                <div class="card-header">Nom: {{$joueur->nom}}</div>
                <div class="card-body text-secondary">
                    <h5 class="card-title">Prenom: {{$joueur->prenom}}</h5>
                    <h5 class="card-title">Ville: {{$joueur->equipes->nom}}</h5>
                </div>
                <div>
                    <button href="/equipe/{{ $joueur->id }}/show" class="btn btn-primary text-white w-25 mb-4"
                        data-bs-toggle="modal" data-bs-target="#exampleModalToggle_{{ $joueur->id }}"
                        role="button">show</button>
                </div>
                @include('partials.modal.joueur.show')
            </div>
            @endforeach
        </div>
    </section>
@endsection
