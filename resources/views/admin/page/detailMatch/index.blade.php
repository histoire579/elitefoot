@extends('layouts.mainAdmin')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Détail du match</h4>

           
            
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="/administration/detail-match/add" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-plus"></i> Ajouter</a>
                
                @include('admin.page.message')
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Saison</th>
                        <th>Match</th>
                        <th>Club1</th>
                        <th>Nb but</th>
                        <th>Club2</th>
                        <th>Nb but</th>
                        <th>Composition</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>
                     @foreach ($details as $item)
                        <tr>
                            
                            <td>{{$item->saison->libelle}}</td>
                            <td>{{$item->match->slug}}</td>
                            <td>{{$item->club1->nom}}</td>
                            <td>{{$item->nbre_but_club1}}</td>

                            <td>{{$item->club2->nom}}</td>
                            <td>{{$item->nbre_but_club2}}</td>
                            <td><a href="{{route('administration.getDetail',$item->id)}}" title="Détail" class="btn btn-primary"> Voir</a></td>
                            <td><a href="/administration/detail-match/edit/{{$item->id}}" title="Modifier"> <i class="fas fa-edit" style="color: #08367A" aria-hidden="true"></i></a></td>
                            <td>
                                <form action="/administration/detail-match/destroy/{{$item->id}}" method="DELETE">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/administration/detail-match/destroy/{{$item->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fas fa-trash-alt" style="color: red" aria-hidden="true"></i></a></td>
                                    
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
