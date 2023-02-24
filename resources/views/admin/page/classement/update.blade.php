@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('administration.feuille.edit',$feuille->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="libelle_en" class="col-md-2 col-form-label">Compétition</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="competition_id" id="competition_id">
                                        @foreach ($competitions as $item)
                                        @if ($item->id ==$feuille->competition_id)
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
                                <label for="libelle_en" class="col-md-2 col-form-label">Saison</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="saison_id" id="saison_id">
                                        @foreach ($saisons as $item)
                                        @if ($item->id ==$feuille->saison_id)
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
                                        @if ($item->id ==$feuille->saison_id)
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
                                <label for="club1_id" class="col-md-2 col-form-label">Club1</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="club1_id" id="club1_id">
                                        @foreach ($club as $item)
                                        @if ($item->id ==$feuille->club1_id)
                                        <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                        @else
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="club2_id" class="col-md-2 col-form-label">Club2</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="club2_id" id="club2_id">
                                        @foreach ($club as $item)
                                        @if ($item->id ==$feuille->club2_id)
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
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="equipe1" class="col-md-2 col-form-label">Joueur club1</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="equipe1" id="equipe1">
                                        @foreach ($joueurs as $item)
                                        @if ($item->id ==$feuille->equipe1)
                                        <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                        @else
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="equipe2" class="col-md-2 col-form-label">Joueur club2</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="equipe2" id="equipe2">
                                        @foreach ($joueurs as $item)
                                        @if ($item->id ==$feuille->equipe2)
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
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="titulaire_equipe1" class="col-md-2 col-form-label">Titularisation Equipe 1</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="titulaire_equipe1" id="titulaire_equipe1">
                                        @if ($feuille->titulaire_equipe1 == 'Oui')
                                        <option value="Oui" selected>Oui</option>
                                        @else
                                        <option value="Non" selected>Non</option>
                                        @endif
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="titulaire_equipe2" class="col-md-2 col-form-label">Titularisation Equipe 2</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="titulaire_equipe2" id="titulaire_equipe2">
                                        @if ($feuille->titulaire_equipe2 == 'Oui')
                                        <option value="Oui" selected>Oui</option>
                                        @else
                                        <option value="Non" selected>Non</option>
                                        @endif
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label"></label>
                        <div class="col-md-3">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Sauvegarder</button>
                            <a href="/administration/feuille" type="button" class="btn btn-outline-danger waves-effect waves-light mt-3"> Annuler</a>
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
