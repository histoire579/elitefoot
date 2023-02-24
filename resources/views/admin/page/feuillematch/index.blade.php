@extends('layouts.mainAdmin')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Feuille de match</h4>

           
            
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="/administration/feuille/AddFeuille" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-plus"></i> Ajouter</a>
                
                @include('admin.page.message')
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Saison</th>
                        <th>Match</th>
                        <th>Joueur</th>
                        <th>Club1</th>
                        <th>Joueur</th>
                        <th>Club2</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>
                     @foreach ($feuilles as $item)
                        <tr>
                            <td>{{$item->saison->libelle}}</td>
                            <td>{{$item->match->slug}}</td>
                            <td>
                                @if ($item->equipe1)
                                {{$item->joueur_equipe1->nom}}
                                @endif
                            </td>
                            <td><img src="{{asset('/storage/imgs/'.$item->club1->logo)}}" alt="" style="height: 20px" ></td>
                            <td>
                                @if ($item->equipe2)
                                {{$item->joueur_equipe2->nom}}
                                @endif
                            </td>
                            <td><img src="{{asset('/storage/imgs/'.$item->club2->logo)}}" alt="" style="height: 20px" ></td>
                            <td><a href="/administration/feuille/edit/{{$item->id}}" title="Modifier"> <i class="fas fa-edit" style="color: #08367A" aria-hidden="true"></i></a></td>
                            <td>
                                <form action="/administration/feuille/destroy/{{$item->id}}" method="DELETE">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/administration/feuille/destroy/{{$item->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fas fa-trash-alt" style="color: red" aria-hidden="true"></i></a></td>
                                    
                                </form>
                            </td>
                            
                        </tr>
                     @endforeach   
   
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
