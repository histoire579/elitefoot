@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="/administration/detail-match" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-angle-left"></i> Retour</a>
                @include('admin.page.message')
                <form method="POST"  action="{{route('administration.detail-match')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="libelle_en" class="col-md-4 col-form-label">Compétition</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="competition_id" id="competition_id">
                                        @foreach ($competitions as $item)
                                            <option value="{{$item->id}}">{{$item->libelle}}</option>
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="libelle_en" class="col-md-4 col-form-label">Saison</label>
                                <div class="col-md-8">
                                    
                                    <select class="form-control" name="saison_id" id="saison_id">
                                        <option value="0" disabled="true" selected>Chosir une saison</option>
                                        @foreach ($saisons as $item)
                                            <option value="{{$item->id}}">{{$item->libelle}}</option>
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="match_id" class="col-md-2 col-form-label">Match</label>
                                <div class="col-md-10">
                                    
                                    <select class="form-control" name="match_id" id="match_id">
                                        <option value="0" disabled="true" selected>Chosir un match</option>
                                        {{-- @foreach ($saisons as $item)
                                            <option value="{{$item->id}}">{{$item->libelle}}</option>
                                        @endforeach --}}
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="club1_id" class="col-md-5 col-form-label">Club 1</label>
                                <div class="col-md-7">
                                    <select class="form-control" name="club1_id" id="club1_id">
                                        <option value="0" disabled="true" selected>Selectionnez un club</option>
                                        {{-- @foreach ($club as $item)
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endforeach --}}
                                        
                                    </select>
                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_but_club1" class="col-md-5 col-form-label">Nb but club1</label>
                                <div class="col-md-5">
                                    <input class="form-control"  type="number" name="nbre_but_club1"  id="nbre_but_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="possession_club1" class="col-md-5 col-form-label">Possession club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="possession_club1"  id="possession_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tir_club1" class="col-md-5 col-form-label">nbre tir club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_tir_club1"  id="nbre_tir_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tir_cadre_club1" class="col-md-5 col-form-label">nbre tir cadré club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_tir_cadre_club1"  id="nbre_tir_cadre_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tir_arrete_club1" class="col-md-5 col-form-label">nbre tir arrêté club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_tir_arrete_club1"  id="nbre_tir_arrete_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_faute_club1" class="col-md-5 col-form-label">nbre faute club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_faute_club1"  id="nbre_faute_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_hors_jeu_club1" class="col-md-5 col-form-label">nbre hors jeu club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_hors_jeu_club1"  id="nbre_hors_jeu_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_carton_jaune_club1" class="col-md-5 col-form-label">nbre carton jaune club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_carton_jaune_club1"  id="nbre_carton_jaune_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_carton_rouge_club5" class="col-md-5 col-form-label">nbre carton rouge club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_carton_rouge_club1"  id="nbre_carton_rouge_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_corner_club1" class="col-md-5 col-form-label">nbre corner club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_corner_club1"  id="nbre_corner_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_centre_club1" class="col-md-5 col-form-label">nbre centre club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_centre_club1"  id="nbre_centre_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tacle_club1" class="col-md-5 col-form-label">nbre tacle club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_tacle_club1"  id="nbre_tacle_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_coup_franc_club1" class="col-md-5 col-form-label">nbre coup franc club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_coup_franc_club1"  id="nbre_coup_franc_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_interception_club1" class="col-md-5 col-form-label">nbre iterception club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_interception_club1"  id="nbre_interception_club1" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_passe_reussie_club1" class="col-md-5 col-form-label">nbre passe réussie club1</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_passe_reussie_club1"  id="nbre_passe_reussie_club1" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="club2_id" class="col-md-5 col-form-label">Club 2</label>
                                <div class="col-md-7">
                                    <select class="form-control" name="club2_id" id="club2_id">
                                        <option value="0" disabled="true" selected>Selectionnez un club</option>
                                       
                                        
                                    </select>
                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_but_club2" class="col-md-5 col-form-label">Nb but club2</label>
                                <div class="col-md-5">
                                    <input class="form-control"  type="number" name="nbre_but_club2"  id="nbre_but_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="possession_club2" class="col-md-5 col-form-label">Possession club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="possession_club2"  id="possession_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tir_club2" class="col-md-5 col-form-label">nbre tir club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_tir_club2"  id="nbre_tir_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tir_cadre_club2" class="col-md-5 col-form-label">nbre tir cadré club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_tir_cadre_club2"  id="nbre_tir_cadre_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tir_arrete_club2" class="col-md-5 col-form-label">nbre tir arrêté club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_tir_arrete_club2"  id="nbre_tir_arrete_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_faute_club2" class="col-md-5 col-form-label">nbre faute club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_faute_club2"  id="nbre_faute_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_hors_jeu_club2" class="col-md-5 col-form-label">nbre hors jeu club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_hors_jeu_club2"  id="nbre_hors_jeu_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_carton_jaune_club2" class="col-md-5 col-form-label">nbre carton jaune club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_carton_jaune_club2"  id="nbre_carton_jaune_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_carton_rouge_club2" class="col-md-5 col-form-label">nbre carton rouge club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_carton_rouge_club2"  id="nbre_carton_rouge_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_corner_club2" class="col-md-5 col-form-label">nbre corner club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_corner_club2"  id="nbre_corner_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_centre_club2" class="col-md-5 col-form-label">nbre centre club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_centre_club2"  id="nbre_centre_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_tacle_club2" class="col-md-5 col-form-label">nbre tacle club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_tacle_club2"  id="nbre_tacle_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_coup_franc_club2" class="col-md-5 col-form-label">nbre coup franc club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_coup_franc_club2"  id="nbre_coup_franc_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_interception_club2" class="col-md-5 col-form-label">nbre iterception club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_interception_club2"  id="nbre_interception_club2" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nbre_passe_reussie_club2" class="col-md-5 col-form-label">nbre passe réussie club2</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="number" name="nbre_passe_reussie_club2"  id="nbre_passe_reussie_club2" >
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

@section('extra-js')

<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','#saison_id',function(){
            var competition_id = $('.form-group #competition_id').val();
            var saison_id=$(this).val();
            var op="";
            var div=$(this).parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent();
            //console.log(saison_id, competition_id);
            $.ajax({
                type:'get',
                url:"{{ route('administration.getMatch') }}",
                data:{'saison_id':saison_id,'competition_id':competition_id},
                success:function(data){
                    console.log('success');
                    console.log(data);
                    op+='<option value="0" disabled="true" selected>Choisissez un match</option>';
                    for (var i = 0; i < data.length; i++) {
                        op+='<option value="'+data[i].id+'">'+data[i].slug+'</option> ';  
                    }
                    div.find('#match_id').html("");
                    div.find('#match_id').append(op);
                },
                error:function(){

                }
            });

            //club1(saison_id,competition_id,div);
            //club2(saison_id,competition_id,div);

        
        });

        $(document).on('change','#match_id',function(){
            var competition_id = $('.form-group #competition_id').val();
            var saison_id = $('.form-group #saison_id').val();
            var match_id=$(this).val();
            var op="";
            var div=$(this).parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent();
            //console.log(saison_id, competition_id);
            $.ajax({
                type:'get',
                url:"{{ route('administration.getClubByMatch') }}",
                data:{'saison_id':saison_id,'competition_id':competition_id, 'match_id':match_id},
                success:function(data){
                    console.log('success');
                    console.log(data);
                    op+='<option value="0" disabled="true" selected>Choisissez un club</option>';
                    for (var i = 0; i < data.length; i++) {
                        op+='<option value="'+data[i].club1.id+'">'+data[i].club1.nom+'</option> ';   
                    }
                    div.find('#club1_id').html("");
                    div.find('#club1_id').append(op);

                },
                error:function(){

                }
            });

            //club1(saison_id,competition_id,div);
            club2(saison_id,competition_id,match_id,div);

        
        })

        function club1(saison_id,competition_id,div) {
            var op="";
            $.ajax({
                type:'get',
                url:"{{ route('administration.getMatch') }}",
                data:{'saison_id':saison_id,'competition_id':competition_id},
                success:function(data){
                    console.log('success');
                    console.log(data);
                    op+='<option value="0" disabled="true" selected>Choisissez une Journée</option>';
                    for (var i = 0; i < data.length; i++) {
                        op+='<option value="'+data[i].club1.id+'">'+data[i].club1.nom+'</option> ';  
                    }
                    div.find('#club1_id').html("");
                    div.find('#club1_id').append(op);

                },
                error:function(){

                }
            });
        }

        function club2(saison_id,competition_id,match_id,div) {
            var op="";
            $.ajax({
                type:'get',
                url:"{{ route('administration.getClubByMatch') }}",
                data:{'saison_id':saison_id,'competition_id':competition_id, 'match_id':match_id},
                success:function(data){
                    console.log('success');
                    console.log(data);
                    op+='<option value="0" disabled="true" selected>Choisissez un club</option>';
                    for (var i = 0; i < data.length; i++) {
                        op+='<option value="'+data[i].club2.id+'">'+data[i].club2.nom+'</option> ';   
                    }

                    div.find('#club2_id').html("");
                    div.find('#club2_id').append(op);
                },
                error:function(){

                }
            });
        }    
        
    });

    
</script>
    
@endsection
