@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('administration.detail-competion-saison.edit',$detailSompetionSaison->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label">Compétition</label>
                        <div class="col-md-10">
                            <select class="form-control" name="competition_id" id="competition_id">
                                @foreach ($competitions as $item)
                                @if ($item->id ==$detailSompetionSaison->competition_id)
                                <option value="{{$item->id}}" selected>{{$item->libelle}}</option>
                                @else
                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                                @endif
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label">Saison</label>
                        <div class="col-md-10">
                            <select class="form-control" name="saison_id" id="saison_id">
                                @foreach ($saisons as $item)
                                @if ($item->id ==$detailSompetionSaison->saison_id)
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
                                @if ($item->id ==$detailSompetionSaison->club_id)
                                <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                @else
                                <option value="{{$item->id}}">{{$item->nom}}</option>
                                @endif
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label">Phase</label>
                        <div class="col-md-10">
                            <select class="form-control" name="phase_id" id="phase_id">
                                @foreach ($phases as $item)
                                @if ($item->id ==$detailSompetionSaison->phase_id)
                                <option value="{{$item->id}}" selected>{{$item->libelle}}</option>
                                @else
                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                                @endif
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label"></label>
                        <div class="col-md-3">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Sauvegarder</button>
                            <a href="/administration/detail-competion-saison" type="button" class="btn btn-outline-danger waves-effect waves-light mt-3"> Annuler</a>
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
