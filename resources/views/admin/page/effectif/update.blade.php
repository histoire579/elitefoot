@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('administration.effectif.edit',$effectif->id)}}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label">Saison</label>
                        <div class="col-md-10">
                            <select class="form-control" name="saison_id" id="saison_id">
                                @foreach ($saisons as $item)
                                @if ($item->id ==$effectif->saison_id)
                                <option value="{{$item->id}}" selected>{{$item->libelle}}</option>
                                @else
                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                                @endif
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label">Club</label>
                        <div class="col-md-10">
                            <select class="form-control" name="club_id" id="club_id">
                                @foreach ($club as $item)
                                @if ($item->id ==$effectif->club_id)
                                <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                @else
                                <option value="{{$item->id}}">{{$item->nom}}</option>
                                @endif
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="joueur_id" class="col-md-2 col-form-label">Joueur</label>
                        <div class="col-md-10">
                            <select class="form-control" name="joueur_id" id="joueur_id">
                                @foreach ($joueurs as $item)
                                @if ($item->id ==$effectif->joueur_id)
                                <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                @else
                                <option value="{{$item->id}}">{{$item->nom}}</option>
                                @endif
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="poste_id" class="col-md-2 col-form-label">Poste</label>
                        <div class="col-md-10">
                            <select class="form-control" name="poste_id" id="poste_id">
                                @foreach ($postes as $item)
                                @if ($item->id ==$effectif->poste_id)
                                <option value="{{$item->id}}" selected>{{$item->libelle}}</option>
                                @else
                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                                @endif
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dorssad" class="col-md-2 col-form-label">Dorssad</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="dorssad"  id="dorssad" value="{{$effectif->dorssad}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label"></label>
                        <div class="col-md-3">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Sauvegarder</button>
                            <a href="/administration/effectif" type="button" class="btn btn-outline-danger waves-effect waves-light mt-3"> Annuler</a>
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
