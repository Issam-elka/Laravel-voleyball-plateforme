<div class="modal fade" id="exampleModalToggle_{{ $joueur->id }}" aria-hidden="true" role="dialog"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalToggleLabel">Plus d'info sur l'équipe</h5>
                <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="card border-secondary mb-3 w-100 mt-5 text-center ">
                    <div class="card-header"><img width="250px" class="mx-2" src="{{asset('storage/img/'.$joueur->photos->src)}}">
                        </div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Prenom: {{$joueur->ville}}</h5>
                        <p class="card-title">Prenom: {{$joueur->prenom}}</p>
                        <p class="card-text">Age: {{$joueur->age}}</p>
                        <p class="card-text">Telephone: {{$joueur->tlf}}</p>
                        <p class="card-text">Email: {{$joueur->email}}</p>
                        <p class="card-text">Genre: {{$joueur->genre}}</p>
                        <p class="card-text">Pays: {{$joueur->pays_origine}}</p>
                        <p class="card-text">Role: {{$joueur->roles->role}}</p>
                        <button class="card-text btn" data-bs-toggle="modal"  data-bs-target="#exampleModalToggle3_{{ $joueur->equipes->id }}" data-bs-dismiss="modal">Equipe: {{$joueur->equipes->nom}}</button>
                    </div>
                    @include('partials.modal.equipe.allInfo')
                </div>
            </div>
        </div>
    </div>
</div>