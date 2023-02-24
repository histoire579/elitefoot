@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="/administration/effectif" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-angle-left"></i> Retour</a>
                @include('admin.page.message')
                <form method="POST" action="{{route('administration.effectif')}}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label">Saison</label>
                        <div class="col-md-10">
                            <select class="form-control" name="saison_id" id="saison_id">
                                @foreach ($saisons as $saison)
                                    <option value="{{$saison->id}}">{{$saison->libelle}}</option>
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label">Club</label>
                        <div class="col-md-10">
                            <select class="form-control" name="club_id" id="club_id">
                                @foreach ($club as $item)
                                    <option value="{{$item->id}}">{{$item->nom}}</option>
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="joueur_id" class="col-md-2 col-form-label">Joueur</label>
                        <div class="col-md-10">
                            <select class="form-control" name="joueur_id" id="joueur_id">
                                @foreach ($joueurs as $item)
                                    <option value="{{$item->id}}">{{$item->nom}}</option>
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label">Poste</label>
                        <div class="col-md-10">
                            <select class="form-control" name="poste_id" id="poste_id">
                                
                                @foreach ($postes as $item)
                                    <option value="{{$item->id}}">{{$item->libelle}}</option>
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dorssad" class="col-md-2 col-form-label">Dorssad</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="dorssad"  id="dorssad" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label"></label>
                        <div class="col-md-3">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Sauvegarder</button>
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
