@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('administration.poule.edit',$poule->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="libelle" class="col-md-2 col-form-label">Libelle</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="libelle"  id="libelle" value="{{$poule->libelle}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label">Saison</label>
                        <div class="col-md-10">
                            <select class="form-control" name="saison_id" id="saison_id">
                                @foreach ($saisons as $saison)
                                    @if ($saison->id ==$poule->saison_id)
                                    <option value="{{$saison->id}}" selected>{{$saison->libelle}}</option>
                                    @else
                                    <option value="{{$saison->id}}">{{$saison->libelle}}</option>
                                    @endif
                                    
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label"></label>
                        <div class="col-md-3">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Sauvegarder</button>
                            <a href="/administration/poule" type="button" class="btn btn-outline-danger waves-effect waves-light mt-3"> Annuler</a>
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
