@extends('layouts.mainAdmin')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Match</h4>

           
            
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="/administration/match/add" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-plus"></i> Ajouter</a>
                
                @include('admin.page.message')
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Compétition</th>
                        <th>Saison</th>
                        <th>Phase</th>
                        <th>Journée</th>
                        <th>Club1</th>
 
                        <th>Nb but</th>
                        <th>Club2</th>

                        <th>Nb but</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Composition</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>
                     @foreach ($matchs as $item)
                        <tr>
                            
                            <td>{{$item->competition->libelle}}</td>
                            <td>{{$item->saison->libelle}}</td>
                            <td>{{$item->phase->libelle}}</td>
                            <td>{{$item->journee->libelle}}</td>

                            <td>{{$item->club1->nom}}</td>
                            <td>{{$item->nbre_but_club1}}</td>

                            <td>{{$item->club2->nom}}</td>
                            <td>{{$item->nbre_but_club2}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->heure}}</td>
                            <td><a href="{{route('administration.getFeuille',[$item->id,$item->club1_id,$item->club2_id])}}" title="Feuille" class="btn btn-primary">Feuille de match</a></td>
                            <td><a href="/administration/match/edit/{{$item->id}}" title="Modifier"> <i class="fas fa-edit" style="color: #08367A" aria-hidden="true"></i></a></td>
                            <td>
                                <form action="/administration/match/destroy/{{$item->id}}" method="DELETE">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/administration/match/destroy/{{$item->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fas fa-trash-alt" style="color: red" aria-hidden="true"></i></a></td>
                                    
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
