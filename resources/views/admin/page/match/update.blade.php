@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('administration.match.edit',$match->id)}}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="libelle_en" class="col-md-2 col-form-label">Compétition</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="competition_id" id="competition_id">
                                        @foreach ($competitions as $item)
                                        @if ($item->id ==$match->competition_id)
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
                                        @if ($item->id ==$match->saison_id)
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
                                <label for="libelle_en" class="col-md-2 col-form-label">Phase</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="phase_id" id="phase_id">
                                        
                                        @foreach ($phases as $item)
                                        @if ($item->id ==$match->phase_id)
                                        <option value="{{$item->id}}" selected>{{$item->libelle}}</option>
                                        @else
                                        <option value="{{$item->id}}">{{$item->libelle}}</option>
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
                                <label for="journee_id" class="col-md-2 col-form-label">Journée</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="journee_id" id="journee_id">
                                        
                                        @foreach ($journees as $item)
                                        @if ($item->id ==$match->journee_id)
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
                                <label for="stade_id" class="col-md-2 col-form-label">Stade</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="stade_id" id="stade_id">
                                        
                                        @foreach ($stades as $item)
                                        @if ($item->id ==$match->stade_id)
                                        <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                        @else
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="club1_id" class="col-md-2 col-form-label">Club 1</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="club1_id" id="club1_id">
                                        @foreach ($club as $item)
                                        @if ($item->id ==$match->club1_id)
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
                                <label for="nbre_but_club1" class="col-md-2 col-form-label">Nb but club1</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" name="nbre_but_club1"  id="nbre_but_club1" value="{{$match->nbre_but_club1}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="club2_id" class="col-md-2 col-form-label">Club 2</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="club2_id" id="club2_id">
                                        @foreach ($club as $item)
                                        @if ($item->id ==$match->club2_id)
                                        <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                        @else
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="nbre_but_club2" class="col-md-2 col-form-label">Nb but club2</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" name="nbre_but_club2"  id="nbre_but_club2" value="{{$match->nbre_but_club2}}" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="arbitre1_id" class="col-md-2 col-form-label">Arbitre 1</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="arbitre1_id" id="arbitre1_id">
                                        @foreach ($arbitres as $item)
                                            @if ($item->id ==$match->arbitre1_id)
                                            <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                            @else
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                            @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="arbitre2_id" class="col-md-2 col-form-label">Arbitre 2</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="arbitre2_id" id="arbitre2_id">
                                        @foreach ($arbitres as $item)
                                            @if ($item->id ==$match->arbitre2_id)
                                            <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                            @else
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                            @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="arbitre3_id" class="col-md-2 col-form-label">Arbitre 3</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="arbitre3_id" id="arbitre3_id">
                                        @foreach ($arbitres as $item)
                                            @if ($item->id ==$match->arbitre3_id)
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
                                <label for="arbitre4_id" class="col-md-2 col-form-label">Arbitre 4</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="arbitre4_id" id="arbitre4_id">
                                        @foreach ($arbitres as $item)
                                            @if ($item->id ==$match->arbitre4_id)
                                            <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                            @else
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                            @endif
                                            
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="date" class="col-md-2 col-form-label">Date</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" name="date"  id="date" value="{{$match->date}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="heure" class="col-md-2 col-form-label">Heure</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="heure"  id="heure" value="{{$match->heure}}" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="libelle_en" class="col-md-2 col-form-label"></label>
                                <div class="col-md-3">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Sauvegarder</button>
                                    <a href="/administration/match" type="button" class="btn btn-outline-danger waves-effect waves-light mt-3"> Annuler</a>
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
