@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('administration.club.edit',$club->id)}}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="nom" class="col-md-2 col-form-label">Nom</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="nom"  id="nom" value="{{$club->nom}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="siege" class="col-md-2 col-form-label">Siège</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="siege"  id="siege" value="{{$club->siege}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="bp" class="col-md-2 col-form-label">Bp</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="bp"  id="bp" value="{{$club->bp}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="telephone" class="col-md-2 col-form-label">Téléphone</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="tel" name="telephone"  id="telephone" value="{{$club->telephone}}" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="email" class="col-md-2 col-form-label">Email</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="email" name="email"  id="email" value="{{$club->email}}" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="site" class="col-md-2 col-form-label">Site (url)</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="site"  id="site" value="{{$club->site}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="twitter" class="col-md-2 col-form-label">Twitter</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="twitter"  id="twitter" value="{{$club->twitter}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="facebook" class="col-md-2 col-form-label">Facebook</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="facebook"  id="facebook" value="{{$club->facebook}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="president" class="col-md-2 col-form-label">President</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="president"  id="president" value="{{$club->president}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="v_president" class="col-md-2 col-form-label">Vice president</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="v_president"  id="v_president" value="{{$club->v_president}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="secretaire_g" class="col-md-2 col-form-label">secretaire général</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="secretaire_g"  id="secretaire_g" value="{{$club->secretaire_g}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="coach_p" class="col-md-2 col-form-label">coach principal</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="coach_p"  id="coach_p" value="{{$club->coach_p}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="coach_ad" class="col-md-2 col-form-label">coach adjoint</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="coach_ad"  id="coach_ad" value="{{$club->coach_ad}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="stade_id" class="col-md-2 col-form-label">Stade</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="stade_id" id="stade_id">
                                        @foreach ($stades as $item)
                                        @if ($item->id ==$club->stade_id)
                                        <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                                        @else
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="boutique_id" class="col-md-2 col-form-label">Boutique</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="boutique_id" id="boutique_id">
                                        @foreach ($boutiques as $item)
                                        @if ($item->id ==$club->boutique_id)
                                        <option value="{{$item->id}}" selected>{{$item->libelle}}</option>
                                        @else
                                        <option value=""></option>
                                        <option value="{{$item->id}}">{{$item->libelle}}</option>
                                        @endif
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="coach_ad" class="col-md-2 col-form-label">Année de création</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="annee_creation"  id="annee_creation" value="{{$club->annee_creation}}" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="photo" class="col-md-2 col-form-label">Logo</label>
                                <div class="col-md-10">
        
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;border: 1px solid #ddd; border-radius: 4px;">
                                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                          <img src="{{asset('/storage/imgs/'.$club->logo)}}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px; border: 1px solid #ddd; border-radius: 4px;"></div>
                                        <div>
                                          <span class="btn btn-primary btn-file">
                                            <span class="fileupload-new"><i class="fas fa-paperclip"></i> Select image</span>
                                          <span class="fileupload-exists"><i class="fas fa-undo"></i> Change</span>
                                          <input type="file" class="default" id="logo" name="logo"  />
                                          
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
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="libelle_en" class="col-md-2 col-form-label"></label>
                                <div class="col-md-3">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Sauvegarder</button>
                                    <a href="/administration/club" type="button" class="btn btn-outline-danger waves-effect waves-light mt-3"> Annuler</a>
                                </div>
                            </div>
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
