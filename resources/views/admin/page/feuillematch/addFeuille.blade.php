@extends('layouts.mainAdmin')

@section('content')

<div class="row" id="app">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="/administration/feuille" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-angle-left"></i> Retour</a>
                @include('admin.page.message')
                <add-feuille></add-feuille>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection


