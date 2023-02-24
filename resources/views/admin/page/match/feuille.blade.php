@extends('layouts.mainAdmin')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Feuille de match: {{$match->match->slug}}</h4>

           
            
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="/administration/match" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-angle-left"></i> Retour</a>
                
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Joueur</th>
                        
                        <th>Titularisation</th>
                        <th>Joueur</th>
                        
                        <th>Titularisation</th>

                    </tr>
                    </thead>


                    <tbody>
                        <tr>
                            <td><img src="{{asset('/storage/imgs/'.$match->club1->logo)}}" alt="" style="height: 20px" ></td>
                            <td></td>
                            <td><img src="{{asset('/storage/imgs/'.$match->club2->logo)}}" alt="" style="height: 20px" ></td>
                            <td></td>
                        </tr>
                     @foreach ($feuilles as $item)
                        <tr>
                            
                            <td>
                                @if ($item->equipe1)
                                {{$item->joueur_equipe1->nom}}
                                @endif
                                
                            </td>
                            
                            <td>{{$item->titularisation_equipe1}}</td>
                            <td>
                                @if ($item->equipe2)
                                {{$item->joueur_equipe2->nom}}
                                @endif
                            </td>
                            
                            <td>{{$item->titularisation_equipe2}}</td>
                            
                            
                        </tr>
                     @endforeach   
   
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
