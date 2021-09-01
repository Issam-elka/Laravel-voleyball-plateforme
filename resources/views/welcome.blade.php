@extends('template.main')
@section('content')

    <h4 class="text-white mt-5 m-2">Pour une meilleure navigation : </h4> <br>
    <section class="text-center  m-auto  d-flex ">
        <a class="btn btn-outline-light  m-2 btn1 " style="font-size: 18px" href="#rempli">équipes completes</a>
        <a class="btn btn-outline-light  m-2 btn1" style="font-size: 18px" href="#pasRempli">2 équipes incomplete</a>
        <a class="btn btn-outline-light  m-2 btn1" style="font-size: 18px" href="#sansEquipe">4 joueurs sans équipes au hasard</a>
        <a class="btn btn-outline-light  m-2 btn1" style="font-size: 18px" href="#sansEquipe">4 joueurs avec équipe</a>
        <a class="btn btn-outline-light  m-2 btn1" style="font-size: 18px" href="#sansEquipe">les equipes d'europe</a>
        <a class="btn btn-outline-light  m-2 btn1" style="font-size: 18px" href="#sansEquipe">les equipes hors d'europe</a>
        <a class="btn btn-outline-light  m-2 btn1" style="font-size: 18px" href="#sansEquipe">5 joueuses au hasard </a>
        <a class="btn btn-outline-light  m-2 btn1" style="font-size: 18px" href="#sansEquipe">5 joueurs homme au hasard </a>
    </section>
    <section class="text-center mt-5" id="rempli">
        <h2 class="text-white"> équipes remplies </h2>
        <section class="text-center">
            <div class="container d-flex flex-wrap justify-content-center">
                <div class="card border-secondary mb-3 w-50 mt-5 text-center m-3" style="max-width: 18rem;">
                    <div class="card-header">Equipe</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Ville: </h5>
                        <p class="card-text">Joueurs maximum: }</p>
                    </div>
                </div>
        </section>
    </section>
    <section class="text-center" id="pasRempli">
        <h2 class="text-white">2 équipes non remplies </h2>
        <section>
            <div class="container d-flex flex-wrap justify-content-center">
                <div class="card border-secondary mb-3 w-50 mt-5 text-center m-3" style="max-width: 18rem;">
                    <div class="card-header">Equipe</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Ville: </h5>
                        <p class="card-text">Joueurs maximum: }</p>
                    </div>
                </div>
        </section>
    </section>
    <section class="text-center" id="sansEquipe">
        <h2 class="text-white">4 joueurs sans équipes au hasard </h2>
        <section>
            <div class="container d-flex flex-wrap justify-content-center">
                <div class="card border-secondary mb-3 w-50 mt-5 text-center m-3" style="max-width: 18rem;">
                    <div class="card-header">Equipe</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Ville: </h5>
                        <p class="card-text">Joueurs maximum: }</p>
                    </div>
                </div>
        </section>
    </section>
    <section class="text-center">
        <h2 class="text-white">4 joueurs avec équipe </h2>
        {{-- <section>
            <div class="container d-flex flex-wrap">
            @foreach ($joueurAvec as $joueurAve)
                    <div class="card border-secondary mb-3 w-50 mt-5 text-center m-3" style="max-width: 18rem;">
                        <div class="card-header">Nom: {{ $joueurAve->nom }}</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Prenom: {{ $joueurAve->prenom }}</h5>
                        <p class="card-text">Age: {{ $joueurAve->age }}</p>
                        <p class="card-text">Telephone: {{ $joueurAve->tlf }}</p>
                        </div>
                    </div>
            @endforeach
        </div> --}}
    </section>
    </section>
    <section class="text-center">
        <h2 class="text-white">les equipes d'europe </h2>
        <section>
                <div class="container d-flex flex-wrap justify-content-center">
                @foreach ($teamEurope as $teamEurop)
                        <div class="card border-secondary mb-3 w-50 mt-5 text-center m-3" style="max-width: 18rem;">
                            <div class="card-header">{{ $teamEurop->nom }}</div>
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Ville: {{ $teamEurop->nom }}</h5>
                            <p class="card-text">Pays: {{ $teamEurop->pays }}</p>
                            <p class="card-text">Joueurs maximum: {{ $teamEurop->maxJoueurs }}</p>
                            </div>
                        </div>
                @endforeach
            </div>
        </section>
    </section>
    <section class="text-center">
        <h2 class="text-white">les equipes hors d'europe </h2>
        <section>
            <div class="container d-flex flex-wrap justify-content-center">
            @foreach ($horsEurope as $horsEurop)
                    <div class="card border-secondary mb-3 w-50 mt-5 text-center m-3" style="max-width: 18rem;">
                        <div class="card-header">{{ $horsEurop->nom }}</div>
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Ville: {{ $horsEurop->nom }}</h5>
                            <p class="card-text">Pays: {{ $horsEurop->pays }}</p>
                            <p class="card-text">Joueurs maximum: {{ $horsEurop->maxJoueurs }}</p>
                        </div>
                    </div>
            @endforeach
            </div>
        </section>
    </section>
    <section class="text-center">
        <h2 class="text-white">5 joueuses au hasard qui ont une équipe !</h2>
        <section>
            <div class="container d-flex flex-wrap justify-content-center">
            @foreach ($femmeRand as $random)
                    <div class="card border-secondary mb-3 w-50 mt-5 text-center m-3" style="max-width: 18rem;">
                        <div class="card-header">Nom: {{ $random->nom }}</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Prenom: {{ $random->prenom }}</h5>
                        <p class="card-text">Age: {{ $random->age }}</p>
                        <p class="card-text">Telephone: {{ $random->tlf }}</p>
                        </div>
                    </div>
            @endforeach
        </div>
    </section>
    </section>
    <section class="text-center">
        <h2 class="text-white">5 joueurs homme au hasard qui ont une équipe !</h2>
        <section>
            <div class="container d-flex flex-wrap justify-content-center">
            @foreach ($hommeRand as $random)
                    <div class="card border-secondary mb-3 w-50 mt-5 text-center m-3" style="max-width: 18rem;">
                        <div class="card-header">Nom: {{ $random->nom }}</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Prenom: {{ $random->prenom }}</h5>
                        <p class="card-text">Age: {{ $random->age }}</p>
                        <p class="card-text">Telephone: {{ $random->tlf }}</p>
                        </div>
                    </div>
            @endforeach
        </div>
    </section>
    </section>



@endsection
