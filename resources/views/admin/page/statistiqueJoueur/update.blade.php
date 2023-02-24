@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('administration.statistique-joueur.edit',$statistique->id)}}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="libelle_en" class="col-md-2 col-form-label">Saison</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="saison_id" id="saison_id">
                                        @foreach ($saisons as $item)
                                        @if ($item->id ==$statistique->saison_id)
                                        <option value="{{$item->id}}" selected>{{$item->libelle}}</option>
                                        @else
                                        <option value="{{$item->id}}">{{$item->libelle}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="match_id" class="col-md-2 col-form-label">Match</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="match_id" id="match_id">
                                        
                                        @foreach ($matchs as $item)
                                        @if ($item->id ==$statistique->match_id)
                                        <option value="{{$item->id}}" selected>{{$item->slug}}</option>
                                        @else
                                        <option value="{{$item->id}}">{{$item->slug}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="club1_id" class="col-md-2 col-form-label">Club</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="club_id" id="club_id">
                                        @foreach ($club as $item)
                                        @if ($item->id ==$statistique->club_id)
                                        <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                        @else
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="joueur_id" class="col-md-4 col-form-label">Joueur</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="joueur_id" id="joueur_id">
                                       
                                        @foreach ($joueurs as $item)
                                        @if ($item->joueur->id ==$statistique->joueur_id)
                                        <option value="{{$item->joueur->id}}" selected>{{$item->joueur->nom}}</option>
                                        @else
                                        <option value="{{$item->joueur->id}}">{{$item->joueur->nom}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="domiciliation" class="col-md-4 col-form-label">domiciliation</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="text" name="domiciliation" value="{{$statistique->domiciliation}}" id="domiciliation" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="tir" class="col-md-4 col-form-label">tir</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->tir}}" name="tir"  id="tir" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="tir_cadre" class="col-md-4 col-form-label">tir cadré</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->tir_cadre}}" name="tir_cadre"  id="tir_cadre" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="but_marque" class="col-md-4 col-form-label">but marqué</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->but_marque}}" name="but_marque"  id="but_marque" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="passe_decisive" class="col-md-4 col-form-label">Passe decisive</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->passe_decisive}}" name="passe_decisive"  id="passe_decisive" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="ballon_recupere" class="col-md-4 col-form-label">ballon recuperé</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->ballon_recupere}}" name="ballon_recupere"  id="ballon_recupere" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="ballon_intercepte" class="col-md-4 col-form-label">ballon interceptée</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->ballon_intercepte}}" name="ballon_intercepte"  id="ballon_intercepte" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="tir_arrete" class="col-md-4 col-form-label">tir arreté</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->tir_arrete}}" name="tir_arrete"  id="tir_arrete" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="but_encaisse" class="col-md-4 col-form-label">but encaissé</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->but_encaisse}}" name="but_encaisse"  id="but_encaisse" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="faute_comise" class="col-md-4 col-form-label">faute comise</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->faute_comise}}" name="faute_comise"  id="faute_comise" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="hors_jeux" class="col-md-4 col-form-label">hors jeu</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->hors_jeux}}" name="hors_jeux"  id="hors_jeux" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="minute_jouer" class="col-md-4 col-form-label">minute jouée</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->minute_jouer}}" name="minute_jouer"  id="minute_jouer" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="faute_subis" class="col-md-4 col-form-label">faute subie</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->faute_subis}}" name="faute_subis"  id="faute_subis" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="carton_jaune" class="col-md-4 col-form-label">carton jaune</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->carton_jaune}}" name="carton_jaune"  id="carton_jaune" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="carton_rouge" class="col-md-4 col-form-label">carton rouge</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->carton_rouge}}" name="carton_rouge"  id="carton_rouge" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="centre" class="col-md-4 col-form-label">centre</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->centre}}" name="centre"  id="centre" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="penelty_marque" class="col-md-4 col-form-label">penelty marqué</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->penelty_marque}}" name="penelty_marque"  id="penelty_marque" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="Coup_franc_marque" class="col-md-4 col-form-label">Coup franc marqué</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->Coup_franc_marque}}" name="Coup_franc_marque"  id="Coup_franc_marque" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="passe_reussi" class="col-md-4 col-form-label">passe reussie</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->passe_reussi}}" name="passe_reussi"  id="passe_reussi" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="penalty_arrete" class="col-md-4 col-form-label">penalty arreté</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->penalty_arrete}}" name="penalty_arrete"  id="penalty_arrete" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="penalty_concede" class="col-md-4 col-form-label">penalty concedé</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->penalty_concede}}" name="penalty_concede"  id="penalty_concede" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="but_contre_camp" class="col-md-4 col-form-label">but contre camp</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" value="{{$statistique->but_contre_camp}}" name="but_contre_camp"  id="but_contre_camp" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="homme_match" class="col-md-4 col-form-label">homme du match</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="text" value="{{$statistique->homme_match}}" name="homme_match"  id="homme_match" >
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="libelle_en" class="col-md-1 col-form-label mt-5"></label>
                                <div class="col-md-3">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Sauvegarder</button>
                                    <a href="/administration/statistique-joueur" type="button" class="btn btn-outline-danger waves-effect waves-light mt-3"> Annuler</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>

  
                </form>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection
