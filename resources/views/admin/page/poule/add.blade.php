@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="/administration/poule" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-angle-left"></i> Retour</a>
                @include('admin.page.message')
                <form method="POST" action="{{route('administration.poule')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="libelle" class="col-md-2 col-form-label">Libelle</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="libelle"  id="libelle" required>
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
