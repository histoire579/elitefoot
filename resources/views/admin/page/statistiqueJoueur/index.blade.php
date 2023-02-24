@extends('layouts.mainAdmin')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Statistique Joueur</h4>

           
            
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="/administration/statistique-joueur/add" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-plus"></i> Ajouter</a>

                <a href="/administration/statistique-joueur-liste" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-plus"></i> Générer le fichier excel</a>
                
                @include('admin.page.message')
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Saison</th>
                        <th>Match</th>
                        <th>Joueur</th>
                        <th>Tir</th>
                        <th>But marqué</th>
                        <th>Passe décisive</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>
                     @foreach ($statistiques as $item)
                        <tr>
                            
                            <td>{{$item->saison->libelle}}</td>
                            <td>{{$item->match->slug}}</td>
                            <td>{{$item->joueur->nom}}</td>
                            <td>{{$item->tir}}</td>

                            <td>{{$item->but_marque}}</td>
                            <td>{{$item->passe_decisive}}</td>
                            <td><a href="/administration/statistique-joueur/edit/{{$item->id}}" title="Modifier"> <i class="fas fa-edit" style="color: #08367A" aria-hidden="true"></i></a></td>
                            <td>
                                <form action="/administration/statistique-joueur/destroy/{{$item->id}}" method="DELETE">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/administration/statistique-joueur/destroy/{{$item->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fas fa-trash-alt" style="color: red" aria-hidden="true"></i></a></td>
                                    
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
