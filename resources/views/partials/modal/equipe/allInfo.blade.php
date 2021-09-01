<div class="modal fade" id="exampleModalToggle3_{{ $joueur->equipes->id }}" aria-hidden="true" role="dialog"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog ">
        <div class="modal-content modal-sm">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalToggleLabel">Plus d'info sur l'équipe</h5>
                <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="card border-secondary mb-3 w-100 mt-5 text-center ">
                    <div class="card-header">Nom: {{$joueur->equipes->nom}}</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Ville: {{$joueur->equipes->ville}}</h5>
                        <p class="card-text">Pays: {{$joueur->equipes->pays}}</p>
                        <p class="card-text">Joueurs maximum: {{$joueur->equipes->maxJoueurs}}</p>
                        <p class="card-text">Continent: {{$joueur->equipes->continents->nom_continent}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>