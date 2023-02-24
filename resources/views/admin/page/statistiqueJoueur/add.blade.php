@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="/administration/statistique-joueur" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-angle-left"></i> Retour</a>
                @include('admin.page.message')
                <form method="POST"  action="{{route('administration.statistique-joueur')}}" enctype="multipart/form-data">
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
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="club_id" class="col-md-4 col-form-label">Club</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="club_id" id="club_id">
                                        <option value="0" disabled="true" selected>Selectionnez un club</option>
                                       
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="joueur_id" class="col-md-4 col-form-label">Joueur</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="joueur_id" id="joueur_id">
                                        <option value="0" disabled="true" selected>Selectionnez un joueur</option>
                                       
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="tir" class="col-md-4 col-form-label">tir</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="tir"  id="tir" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="tir_cadre" class="col-md-4 col-form-label">tir cadré</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="tir_cadre"  id="tir_cadre" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="but_marque" class="col-md-4 col-form-label">but marqué</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="but_marque"  id="but_marque" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="passe_decisive" class="col-md-4 col-form-label">Passe decisive</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="passe_decisive"  id="passe_decisive" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="ballon_recupere" class="col-md-4 col-form-label">ballon recuperé</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="ballon_recupere"  id="ballon_recupere" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="ballon_intercepte" class="col-md-4 col-form-label">ballon interceptée</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="ballon_intercepte"  id="ballon_intercepte" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="tir_arrete" class="col-md-4 col-form-label">tir arreté</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="tir_arrete"  id="tir_arrete" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="but_encaisse" class="col-md-4 col-form-label">but encaissé</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="but_encaisse"  id="but_encaisse" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="faute_comise" class="col-md-4 col-form-label">faute comise</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="faute_comise"  id="faute_comise" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="hors_jeux" class="col-md-4 col-form-label">hors jeu</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="hors_jeux"  id="hors_jeux" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="minute_jouer" class="col-md-4 col-form-label">minute jouée</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="minute_jouer"  id="minute_jouer" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="faute_subis" class="col-md-4 col-form-label">faute subie</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="faute_subis"  id="faute_subis" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="carton_jaune" class="col-md-4 col-form-label">carton jaune</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="carton_jaune"  id="carton_jaune" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="carton_rouge" class="col-md-4 col-form-label">carton rouge</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="carton_rouge"  id="carton_rouge" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="centre" class="col-md-4 col-form-label">centre</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="centre"  id="centre" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="penelty_marque" class="col-md-4 col-form-label">penelty marqué</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="penelty_marque"  id="penelty_marque" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="Coup_franc_marque" class="col-md-4 col-form-label">Coup franc marqué</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="Coup_franc_marque"  id="Coup_franc_marque" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="passe_reussi" class="col-md-4 col-form-label">passe reussie</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="passe_reussi"  id="passe_reussi" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="penalty_arrete" class="col-md-4 col-form-label">penalty arreté</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="penalty_arrete"  id="penalty_arrete" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="penalty_concede" class="col-md-4 col-form-label">penalty concedé</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="penalty_concede"  id="penalty_concede" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="but_contre_camp" class="col-md-4 col-form-label">but contre camp</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="number" name="but_contre_camp"  id="but_contre_camp" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="homme_match" class="col-md-4 col-form-label">homme du match</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="text" name="homme_match"  id="homme_match" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="domiciliation" class="col-md-4 col-form-label">domiciliation</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="text" name="domiciliation"  id="domiciliation" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-4">
                            
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

            club(saison_id,competition_id,div);
            //club2(saison_id,competition_id,div);

        
        });


        $(document).on('change','#club_id',function(){
            var saison_id = $('.form-group #saison_id').val();
            var club_id=$(this).val();
            var op="";
            var div=$(this).parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent();
            //console.log(saison_id, competition_id);
            $.ajax({
                type:'get',
                url:"{{ route('administration.getJoueur') }}",
                data:{'saison_id':saison_id,'club_id':club_id},
                success:function(data){
                    console.log('success');
                    console.log(data);
                    op+='<option value="0" disabled="true" selected>Choisissez un joueur</option>';
                    for (var i = 0; i < data.length; i++) {
                        op+='<option value="'+data[i].joueur.id+'">'+data[i].joueur.nom+'</option> ';  
                    }
                    div.find('#joueur_id').html("");
                    div.find('#joueur_id').append(op);
                },
                error:function(){

                }
            });

        
        });

       

        function club(saison_id,competition_id,div) {
            var op="";
            $.ajax({
                type:'get',
                url:"{{ route('administration.getClub') }}",
                data:{'saison_id':saison_id,'competition_id':competition_id},
                success:function(data){
                    console.log('success');
                    console.log(data);
                    op+='<option value="0" disabled="true" selected>Choisissez un club</option>';
                    for (var i = 0; i < data.length; i++) {
                        op+='<option value="'+data[i].club.id+'">'+data[i].club.nom+'</option> ';  
                    }
                    div.find('#club_id').html("");
                    div.find('#club_id').append(op);
                },
                error:function(){

                }
            });
        }    
        
    });

    
</script>
    
@endsection
