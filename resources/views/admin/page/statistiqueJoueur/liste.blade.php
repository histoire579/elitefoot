@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="/administration/statistique-joueur" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-angle-left"></i> Retour</a>
                @include('admin.page.message')
                <form method="GET"  action="{{route('administration.getJoueurByClub')}}" enctype="multipart/form-data">
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
                                <label for="libelle_en" class="col-md-2 col-form-label"></label>
                                <div class="col-md-10">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Générer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>  
                
                <form method="POST"  action="{{route('administration.statistique-joueur-import')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        
                        <div class="col-md-8">
                            <div class="form-group row">
                                <label for="joueur_id" class="col-md-4 col-form-label">Choisir un fichier excel</label>
                                <div class="col-md-8">
                                    <input class="form-control"  type="file" name="stats"  id="stats" required>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="libelle_en" class="col-md-2 col-form-label"></label>
                                <div class="col-md-10">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Importez le fichier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
                    <div class="row">
                        <div class="col-md-12" style="overflow:scroll;overflow-y:hidden;">
                            <table id="datatable-buttons" class="table table-bordered table-responsive-sm" style="border-collapse: collapse; border-spacing: 0; width: 100%; ">
                                <thead>
                                <tr>
                                    <th>Saison</th>
                                    <th>Saisonid</th>
                                    <th>Match</th>
                                    <th>Matchid</th>
                                    <th>Joueur</th>
                                    <th>Joueurid</th>
                                    <th>tir</th>
                                    <th>tir_cadre</th>
                                    <th>but_marque</th>
                                    <th>passe_decisive</th>
                                    <th>ballon_recupere</th>
                                    <th>ballon_intercepte</th>
                                    <th>tir_arrete</th>
                                    <th>but_encaisse</th>
                                    <th>faute_comise</th>
                                    <th>hors_jeux</th>
                                    <th>minute_jouer</th>
                                    <th>faute_subis</th>
                                    <th>carton_jaune</th>
                                    <th>carton_rouge</th>
                                    <th>centre</th>
                                    <th>penelty_marque</th>
                                    <th>coup_franc_marque</th>
                                    <th>passe_reussi</th>
                                    <th>penalty_arrete</th>
                                    <th>penalty_concede</th>
                                    <th>but_contre_camp</th>
                                    <th>homme_match</th>
                                    <th>domiciliation</th>
                                </tr>
                                </thead>
            
            
                                <tbody>
                                    @foreach ($joueurs as $item)
                                    <tr>
                                        <td>{{$item->saison->libelle}}</td>
                                        <td>{{$item->saison->id}}</td>
                                        <td>{{$match->slug}}</td>
                                        <td>{{$match->id}}</td>
                                        <td>{{$item->joueur->nom}}</td>
                                        <td>{{$item->joueur->id}}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                                                            
                                    @endforeach
                                 {{-- @foreach ($statistiques as $item)
                                    <tr>
                                        
                                        <td>{{$item->saison->libelle}}</td>
                                        <td>{{$item->match->slug}}</td>
                                        <td>{{$item->joueur->nom}}</td>
                                        <td>{{$item->tir}}</td>
            
                                        <td>{{$item->but_marque}}</td>
                                        <td>{{$item->passe_decisive}}</td>
                                        
                                        
                                    </tr>
                                 @endforeach    --}}
               
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
  
                
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
