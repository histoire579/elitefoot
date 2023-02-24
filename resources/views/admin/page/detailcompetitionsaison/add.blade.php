@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="/administration/detail-competion-saison" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-angle-left"></i> Retour</a>
                @include('admin.page.message')
                <form method="POST" action="{{route('administration.detail-competion-saison')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label">Compétition</label>
                        <div class="col-md-10">
                            <select class="form-control" name="competition_id" id="competition_id">
                                @foreach ($competitions as $item)
                                    <option value="{{$item->id}}">{{$item->libelle}}</option>
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>
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
                        <label for="libelle_en" class="col-md-2 col-form-label">Phase</label>
                        <div class="col-md-10">
                            <select class="form-control" name="phase_id" id="phase_id">
                                
                                @foreach ($phases as $item)
                                    <option value="{{$item->id}}">{{$item->libelle}}</option>
                                @endforeach
                                
                            </select>
                            
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
