@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('administration.detail-match.edit',$detail->id)}}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="libelle_en" class="col-md-2 col-form-label">Saison</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="saison_id" id="saison_id">
                                        @foreach ($saisons as $item)
                                        @if ($item->id ==$detail->saison_id)
                                        <option value="{{$item->id}}" selected>{{$item->libelle}}</option>
                                        @else
                                        <option value="{{$item->id}}">{{$item->libelle}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="match_id" class="col-md-2 col-form-label">Match</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="match_id" id="match_id">
                                        
                                        @foreach ($matchs as $item)
                                        @if ($item->id ==$detail->match_id)
                                        <option value="{{$item->id}}" selected>{{$item->slug}}</option>
                                        @else
                                        <option value="{{$item->id}}">{{$item->slug}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="club1_id" class="col-md-2 col-form-label">Club 1</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="club1_id" id="club1_id">
                                        @foreach ($club as $item)
                                        @if ($item->id ==$detail->club1_id)
                                        <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                        @else
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_but_club1" class="col-md-5 col-form-label">Nb but club1</label>
                                <div class="col-md-5">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_but_club1}}" name="nbre_but_club1"  id="nbre_but_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="possession_club1" class="col-md-5 col-form-label">Possession club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->possession_club1}}" name="possession_club1"  id="possession_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tir_club1" class="col-md-5 col-form-label">nbre tir club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_tir_club1}}" name="nbre_tir_club1"  id="nbre_tir_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tir_cadre_club1" class="col-md-5 col-form-label">nbre tir cadré club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_tir_cadre_club1}}" name="nbre_tir_cadre_club1"  id="nbre_tir_cadre_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tir_arrete_club1" class="col-md-5 col-form-label">nbre tir arrêté club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_tir_arrete_club1}}" name="nbre_tir_arrete_club1"  id="nbre_tir_arrete_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_faute_club1" class="col-md-5 col-form-label">nbre faute club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_faute_club1}}" name="nbre_faute_club1"  id="nbre_faute_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_hors_jeu_club1" class="col-md-5 col-form-label">nbre hors jeu club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_hors_jeu_club1}}" name="nbre_hors_jeu_club1"  id="nbre_hors_jeu_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_carton_jaune_club1" class="col-md-5 col-form-label">nbre carton jaune club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_carton_jaune_club1}}" name="nbre_carton_jaune_club1"  id="nbre_carton_jaune_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_carton_rouge_club5" class="col-md-5 col-form-label">nbre carton rouge club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_carton_rouge_club1}}" name="nbre_carton_rouge_club1"  id="nbre_carton_rouge_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_corner_club1" class="col-md-5 col-form-label">nbre corner club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_corner_club1}}" name="nbre_corner_club1"  id="nbre_corner_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_centre_club1" class="col-md-5 col-form-label">nbre centre club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_centre_club1}}" name="nbre_centre_club1"  id="nbre_centre_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tacle_club1" class="col-md-5 col-form-label">nbre tacle club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_tacle_club1}}" name="nbre_tacle_club1"  id="nbre_tacle_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_coup_franc_club1" class="col-md-5 col-form-label">nbre coup franc club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_coup_franc_club1}}" name="nbre_coup_franc_club1"  id="nbre_coup_franc_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_interception_club1" class="col-md-5 col-form-label">nbre iterception club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_interception_club1}}" name="nbre_interception_club1"  id="nbre_interception_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_passe_reussie_club1" class="col-md-5 col-form-label">nbre passe réussie club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_passe_reussie_club1}}" name="nbre_passe_reussie_club1"  id="nbre_passe_reussie_club1" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="club2_id" class="col-md-2 col-form-label">Club 2</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="club2_id" id="club2_id">
                                        @foreach ($club as $item)
                                        @if ($item->id ==$detail->club2_id)
                                        <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                        @else
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_but_club2" class="col-md-5 col-form-label">Nb but club2</label>
                                <div class="col-md-5">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_but_club2}}" name="nbre_but_club2"  id="nbre_but_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="possession_club2" class="col-md-5 col-form-label">Possession club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->possession_club2}}" name="possession_club2"  id="possession_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tir_club2" class="col-md-5 col-form-label">nbre tir club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_tir_club2}}" name="nbre_tir_club2"  id="nbre_tir_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tir_cadre_club2" class="col-md-5 col-form-label">nbre tir cadré club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_tir_cadre_club2}}" name="nbre_tir_cadre_club2"  id="nbre_tir_cadre_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tir_arrete_club2" class="col-md-5 col-form-label">nbre tir arrêté club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_tir_arrete_club2}}" name="nbre_tir_arrete_club2"  id="nbre_tir_arrete_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_faute_club2" class="col-md-5 col-form-label">nbre faute club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_faute_club2}}" name="nbre_faute_club2"  id="nbre_faute_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_hors_jeu_club2" class="col-md-5 col-form-label">nbre hors jeu club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_hors_jeu_club2}}" name="nbre_hors_jeu_club2"  id="nbre_hors_jeu_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_carton_jaune_club2" class="col-md-5 col-form-label">nbre carton jaune club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_carton_jaune_club2}}" name="nbre_carton_jaune_club2"  id="nbre_carton_jaune_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_carton_rouge_club2" class="col-md-5 col-form-label">nbre carton rouge club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_carton_rouge_club2}}" name="nbre_carton_rouge_club2"  id="nbre_carton_rouge_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_corner_club2" class="col-md-5 col-form-label">nbre corner club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_corner_club2}}" name="nbre_corner_club2"  id="nbre_corner_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_centre_club2" class="col-md-5 col-form-label">nbre centre club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_centre_club2}}" name="nbre_centre_club2"  id="nbre_centre_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tacle_club2" class="col-md-5 col-form-label">nbre tacle club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_tacle_club2}}" name="nbre_tacle_club2"  id="nbre_tacle_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_coup_franc_club2" class="col-md-5 col-form-label">nbre coup franc club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_coup_franc_club2}}" name="nbre_coup_franc_club2"  id="nbre_coup_franc_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_interception_club2" class="col-md-5 col-form-label">nbre iterception club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_interception_club2}}" name="nbre_interception_club2"  id="nbre_interception_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_passe_reussie_club2" class="col-md-5 col-form-label">nbre passe réussie club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" value="{{$detail->nbre_passe_reussie_club2}}" name="nbre_passe_reussie_club2"  id="nbre_passe_reussie_club2" >
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
                                    <a href="/administration/detail-match" type="button" class="btn btn-outline-danger waves-effect waves-light mt-3"> Annuler</a>
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
