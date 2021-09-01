<div class="modal fade" id="exampleModalToggle_{{ $equipe->id }}" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalToggleLabel">Plus d'info sur l'équipe</h5>
                <button type="button" class="btn-close btn-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center ">
                <div class="card border-secondary mb-3 w-100 mt-5 text-center ">
                    <div class="card-header">Equipe: {{ $equipe->nom }}</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Ville: {{ $equipe->ville }}</h5>
                        <p class="card-text">Joueurs maximum: {{ $equipe->maxJoueurs }}</p>

                        <div class="d-flex flex-wrap">
                            @foreach ($joueurs as $joueur)
                                @if ($joueur->equipe_id == $equipe->id)
                                    <div class="card border-secondary w-25 m-2 text-center p-3">
                                        <p>Nom: {{ $joueur->nom }}</p>
                                        <p>Prenom: {{ $joueur->prenom }}</p>
                                        <p>Role: {{ $joueur->roles->role }}</p>
                                        <td>
                                            <a class="btn btn-primary text-white" title="Show player"
                                                data-bs-target="#exampleModalToggle2_{{ $equipe->id }}"
                                                data-bs-toggle="modal" data-bs-dismiss="modal">show</a>
                                        </td>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2_{{ $equipe->id }}" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalToggleLabel2">Info sur les joueurs</h5>
                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card border-secondary mb-3 w-autp mt-5 text-center m-3">
                <div class="card-header"><img width="250px" class="mx-2"
                        src="{{ asset('storage/img/' . $joueur->photos->src) }}">
                </div>
                <div class="card-body text-secondary">
                    <h5 class="card-title">Prenom: {{ $joueur->ville }}</h5>
                    <p class="card-title">Prenom: {{ $joueur->prenom }}</p>
                    <p class="card-text">Age: {{ $joueur->age }}</p>
                    <p class="card-text">Telephone: {{ $joueur->tlf }}</p>
                    <p class="card-text">Email: {{ $joueur->email }}</p>
                    <p class="card-text">Genre: {{ $joueur->genre }}</p>
                    <p class="card-text">Pays: {{ $joueur->pays_origine }}</p>
                    <p class="card-text">Role: {{ $joueur->roles->role }}</p>
                    <p class="card-text">Equipe: {{ $joueur->equipes->nom }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
