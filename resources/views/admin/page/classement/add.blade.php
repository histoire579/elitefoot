@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="/administration/classement" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-angle-left"></i> Retour</a>
                @include('admin.page.message')
                <form method="POST"  action="{{route('administration.classement')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
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
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="libelle_en" class="col-md-2 col-form-label">Saison</label>
                                <div class="col-md-10">
                                    
                                    <select class="form-control" name="saison_id" id="saison_id">
                                        <option value="0" disabled="true" selected>Chosir une saison</option>
                                        @foreach ($saisons as $item)
                                            <option value="{{$item->id}}">{{$item->libelle}}</option>
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>

                        </div>


                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Club</h4>

                                    <div class="row" id="club">
                                        <div class="col-lg-4">
                                            <div>
                                                
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Default checkbox
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- end row -->

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
                url:"{{ route('administration.getClub') }}",
                data:{'saison_id':saison_id,'competition_id':competition_id},
                success:function(data){
                    console.log('success');
                    console.log(data);
                    //op+='<option value="0" disabled="true" selected>Choisissez un club</option>';
                    for (var i = 0; i < data.length; i++) {
                        //op+='<option value="'+data[i].club.id+'">'+data[i].club.nom+'</option> ';  
                        op+='<div class="col-lg-3"><div><div class="form-check mb-2"><input class="form-check-input" type="checkbox" value="'+data[i].club.id+'" name="club[]" id="club[]"><label class="form-check-label" for="defaultCheck1">'+data[i].club.nom+'</label></div></div></div>';
                    }
                    div.find('#club').html("");
                    div.find('#club').append(op);

                    
                },
                error:function(){

                }
            });


            
        });

        // $(document).on('change','#club1_id',function(){
        //     var club_id=$(this).val();
        //     var op="";
        //     var div=$(this).parent().parent().parent().parent().parent().parent();
        //     //console.log(saison_id, competition_id);
        //     $.ajax({
        //         type:'get',
        //         url:"{{ route('administration.getEffectif') }}",
        //         data:{'club_id':club_id},
        //         success:function(data){
        //             console.log('success');
        //             console.log(data);
        
        //             for (var i = 0; i < data.length; i++) {
                        
        //                 op+='<div class="col-lg-3"><div><div class="form-check mb-2"><input class="form-check-input" type="checkbox" value="'+data[i].joueur.id+'" name="equipe_club1[]" id="equipe_club1[]"><label class="form-check-label" for="defaultCheck1">'+data[i].joueur.nom+'(' +data[i].poste.libelle+')'+'</label></div></div></div>';
        //             }
        //             div.find('#equipe1').html("");
        //             div.find('#equipe1').append(op);

        //         },
        //         error:function(){

        //         }
        //     });

            
        // });

        // $(document).on('change','#club2_id',function(){
        //     var club_id=$(this).val();
        //     var op="";
        //     var div=$(this).parent().parent().parent().parent().parent().parent().parent();
        //     //console.log(saison_id, competition_id);
        //     $.ajax({
        //         type:'get',
        //         url:"{{ route('administration.getEffectif') }}",
        //         data:{'club_id':club_id},
        //         success:function(data){
        //             console.log('success');
        //             console.log(data);
        
        //             for (var i = 0; i < data.length; i++) {
                        
        //                 op+='<div class="col-lg-3"><div><div class="form-check mb-2"><input class="form-check-input" type="checkbox" value="'+data[i].joueur.id+'" name="equipe_club2[]" id="equipe_club2[]"><label class="form-check-label" for="defaultCheck1">'+data[i].joueur.nom+'(' +data[i].poste.libelle+')'+'</label></div></div></div>';
        //             }
        //             div.find('#equipe2').html("");
        //             div.find('#equipe2').append(op);

        //         },
        //         error:function(){

        //         }
        //     });

            
        // });

        

    

        
    });

    
</script>
    
@endsection
