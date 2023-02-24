@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('administration.joueur.edit',$joueur->id)}}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="nom" class="col-md-2 col-form-label">Nom</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nom"  id="nom" value="{{$joueur->nom}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_nais" class="col-md-2 col-form-label">Date de naissance</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" name="date_nais"  id="date_nais" value="{{$joueur->date_nais}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nationalite" class="col-md-2 col-form-label">Nationalité</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nationalite"  id="nationalite" value="{{$joueur->nationalite}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nationalite_en" class="col-md-2 col-form-label">Nationalité_en</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nationalite_en"  id="nationalite_en" value="{{$joueur->nationalite_en}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pays_id" class="col-md-2 col-form-label">Pays</label>
                        <div class="col-md-10">
                            <select class="form-control" name="pays_id" id="pays_id">
                                @foreach ($pays as $item)
                                    @if ($item->id ==$joueur->pays_id)
                                    <option value="{{$item->id}}" selected>{{$item->libelle}}</option>
                                    @else
                                    <option value="{{$item->id}}">{{$item->libelle}}</option>
                                    @endif
                                    
                                @endforeach
                                
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lieu_nais" class="col-md-2 col-form-label">Lieu de naissance</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="lieu_nais"  id="lieu_nais" value="{{$joueur->lieu_nais}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="taille" class="col-md-2 col-form-label">Taille (cm)</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="taille"  id="taille" value="{{$joueur->taille}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="poids" class="col-md-2 col-form-label">Poids</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="poids"  id="poids" value="{{$joueur->poids}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pied_fort" class="col-md-2 col-form-label">Pied fort</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="pied_fort"  id="pied_fort" value="{{$joueur->pied_fort}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pied_fort_en" class="col-md-2 col-form-label">Pied fort_en</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="pied_fort_en"  id="pied_fort_en" value="{{$joueur->pied_fort_en}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="photo" class="col-md-2 col-form-label">Photo</label>
                        <div class="col-md-10">

                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;border: 1px solid #ddd; border-radius: 4px;">
                                  <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                  <img src="{{asset('/storage/imgs/'.$joueur->photo)}}" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px; border: 1px solid #ddd; border-radius: 4px;"></div>
                                <div>
                                  <span class="btn btn-primary btn-file">
                                    <span class="fileupload-new"><i class="fas fa-paperclip"></i> Select image</span>
                                  <span class="fileupload-exists"><i class="fas fa-undo"></i> Change</span>
                                  <input type="file" class="default" id="photo" name="photo"  />
                                  
                                  </span>
                                  <a href="/administration/stade/#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
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
                            <a href="/administration/joueur" type="button" class="btn btn-outline-danger waves-effect waves-light mt-3"> Annuler</a>
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
