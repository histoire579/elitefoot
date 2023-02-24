@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="/administration/competition" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-angle-left"></i> Retour</a>
                @include('admin.page.message')
                <form method="POST" action="{{route('administration.competition')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="libelle" class="col-md-2 col-form-label">Libelle</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="libelle"  id="libelle" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="libelle_en" class="col-md-2 col-form-label">Libelle_en</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="libelle_en"  id="libelle_en" required>
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
