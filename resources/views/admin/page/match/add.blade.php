@extends('layouts.mainAdmin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="/administration/match" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-angle-left"></i> Retour</a>
                @include('admin.page.message')
                <form method="POST"  action="{{route('administration.match')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="libelle_en" class="col-md-2 col-form-label">Compétition</label>
                                <div class="col-md-10">
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

                            {{-- <div class="form-group row">
                                <label for="club1_id" class="col-md-2 col-form-label">Club 1</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="club1_id" id="club1_id">
                                        <option value="0" disabled="true" selected>Selectionnez un club</option>
                                        
                                        
                                    </select>
                                    
                                </div>
                            </div> --}}

                            {{-- <div class="form-group row">
                                <label for="club2_id" class="col-md-2 col-form-label">Club 1</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="club1_id" id="club1_id">
                                        <option value="0" disabled="true" selected>Selectionnez un club</option>
                                        
                                        @foreach ($club as $item)
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                            </div> --}}
                            

                            {{-- <div class="form-group row">
                                <label for="club2_id" class="col-md-2 col-form-label">Club 2</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="club2_id" id="club2_id">
                                        <option value="0" disabled="true" selected>Selectionnez un club</option>
                                       
                                        
                                    </select>
                                    
                                </div>
                            </div> --}}


                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="libelle_en" class="col-md-2 col-form-label">Phase</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="phase_id" id="phase_id">
                                        <option value="0" disabled="true" selected>Choisir une phase</option>
                                        {{-- @foreach ($phases as $item)
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
                                <label for="journee_id" class="col-md-2 col-form-label">Journée</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="journee_id" id="journee_id">
                                        
                                        @foreach ($journees as $item)
                                        <option value="0" disabled="true" selected>Choisir une journée</option>
                                            {{-- <option value="{{$item->id}}">{{$item->libelle}}</option> --}}
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="stade_id" class="col-md-2 col-form-label">Stade</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="stade_id" id="stade_id">
                                        
                                        @foreach ($stades as $item)
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="club1_id" class="col-md-2 col-form-label">Club 1</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="club1_id" id="club1_id">
                                        <option value="0" disabled="true" selected>Selectionnez un club</option>
                                        {{-- @foreach ($club as $item)
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endforeach --}}
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="nbre_but_club1" class="col-md-2 col-form-label">Nb but club1</label>
                                <div class="col-md-10">
                                    <input class="form-control" disabled type="number" name="nbre_but_club1"  id="nbre_but_club1" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="club2_id" class="col-md-2 col-form-label">Club 2</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="club2_id" id="club2_id">
                                        <option value="0" disabled="true" selected>Selectionnez un club</option>
                                       
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="nbre_but_club2" class="col-md-2 col-form-label">Nb but club2</label>
                                <div class="col-md-10">
                                    <input class="form-control" disabled type="number" name="nbre_but_club2"  id="nbre_but_club2" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="arbitre1_id" class="col-md-2 col-form-label">Arbitre 1</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="arbitre1_id" id="arbitre1_id">
                                        @foreach ($arbitres as $item)
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="arbitre2_id" class="col-md-2 col-form-label">Arbitre 2</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="arbitre2_id" id="arbitre2_id">
                                        @foreach ($arbitres as $item)
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="arbitre3_id" class="col-md-2 col-form-label">Arbitre 3</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="arbitre3_id" id="arbitre3_id">
                                        @foreach ($arbitres as $item)
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="arbitre4_id" class="col-md-2 col-form-label">Arbitre 4</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="arbitre4_id" id="arbitre4_id">
                                        @foreach ($arbitres as $item)
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="date" class="col-md-2 col-form-label">Date</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" name="date"  id="date" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="heure" class="col-md-2 col-form-label">Heure</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="heure"  id="heure" required>
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
                    op+='<option value="0" disabled="true" selected>Choisissez un club</option>';
                    for (var i = 0; i < data.length; i++) {
                        op+='<option value="'+data[i].club.id+'">'+data[i].club.nom+'</option> ';  
                    }
                    div.find('#club1_id').html("");
                    div.find('#club1_id').append(op);

                    div.find('#club2_id').html("");
                    div.find('#club2_id').append(op);
                },
                error:function(){

                }
            });

            journee(saison_id,div);
            phase(saison_id,div);

            // $.ajax({
            //     type:'get',
            //     url:"{{ route('administration.getJournee') }}",
            //     data:{'saison_id':saison_id,},
            //     success:function(data){
            //         console.log('success');
            //         console.log(data);
            //         op+='<option value="0" disabled="true" selected>Choisissez une Journée</option>';
            //         for (var i = 0; i < data.length; i++) {
            //             op+='<option value="'+data[i].id+'">'+data[i].libelle+'</option> ';  
            //         }
            //         div.find('#journee_id').html("");
            //         div.find('#journee_id').append(op);

            //     },
            //     error:function(){

            //     }
            // });
        })

        function journee(id,div) {
            var op="";
            $.ajax({
                type:'get',
                url:"{{ route('administration.getJournee') }}",
                data:{'saison_id':id,},
                success:function(data){
                    console.log('success');
                    console.log(data);
                    op+='<option value="0" disabled="true" selected>Choisissez une Journée</option>';
                    for (var i = 0; i < data.length; i++) {
                        op+='<option value="'+data[i].id+'">'+data[i].libelle+'</option> ';  
                    }
                    div.find('#journee_id').html("");
                    div.find('#journee_id').append(op);

                },
                error:function(){

                }
            });
        }

        function phase(id,div) {
            var op="";
            $.ajax({
                type:'get',
                url:"{{ route('administration.getPhase') }}",
                data:{'saison_id':id,},
                success:function(data){
                    console.log('success');
                    console.log(data);
                    op+='<option value="0" disabled="true" selected>Choisissez une phase</option>';
                    for (var i = 0; i < data.length; i++) {
                        op+='<option value="'+data[i].id+'">'+data[i].libelle+'</option> ';  
                    }
                    div.find('#phase_id').html("");
                    div.find('#phase_id').append(op);

                },
                error:function(){

                }
            });
        }

        
    });

    
</script>
    
@endsection
