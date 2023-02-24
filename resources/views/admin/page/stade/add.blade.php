@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="/administration/stade" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-angle-left"></i> Retour</a>
                @include('admin.page.message')
                <form method="POST"  action="{{route('administration.stade')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="nom" class="col-md-2 col-form-label">Nom</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nom"  id="nom" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lieu" class="col-md-2 col-form-label">Lieu</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="lieu"  id="lieu" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="capacite" class="col-md-2 col-form-label">Capacité</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="capacite"  id="capacite" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="photo" class="col-md-2 col-form-label">Image</label>
                        <div class="col-md-10">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;border: 1px solid #ddd; border-radius: 4px;">
                                  <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px; border: 1px solid #ddd; border-radius: 4px;"></div>
                                <div>
                                  <span class="btn btn-primary btn-file">
                                    <span class="fileupload-new"><i class="fas fa-paperclip"></i> Select image</span>
                                  <span class="fileupload-exists"><i class="fas fa-undo"></i> Change</span>
                                  <input type="file" class="default" id="photo" name="photo"  />
                                  
                                  </span>
                                  <a href="/administration/stade/#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fas fa-trash"></i> Remove</a>
                                </div>
                            </div>
                              <span class="label label-info">NOTE!</span>
                              <span>
                                Attached image thumbnail is
                                supported in Latest Firefox, Chrome, Opera,
                                Safari and Internet Explorer 10 only
                                </span>
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
