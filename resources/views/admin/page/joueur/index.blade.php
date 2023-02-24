@extends('layouts.mainAdmin')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Joueur</h4>

           
            
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="/administration/joueur/add" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-plus"></i> Ajouter</a>
                
                @include('admin.page.message')
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>date de naissance</th>
                        <th>Lieu de naissance</th>
                        <th>Nationalité</th>
                        <th>Taille</th>
                        <th>Poids</th>
                        <th>Pied fort</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>
                     @foreach ($joueurs as $joueur)
                        <tr>
                            <td>{{$joueur->nom}}</td>
                            <td>{{$joueur->date_nais}}</td>
                            <td>{{$joueur->lieu_nais}}</td>
                            <td><img src="{{asset('/storage/imgs/'.$joueur->pays->drapeau)}}" alt="" style="height: 20px" ></td>
                            <td>{{$joueur->taille}}</td>
                            <td>{{$joueur->poids}}</td>
                            <td>{{$joueur->pied_fort}}</td>
                            <td><a href="/administration/joueur/edit/{{$joueur->id}}" title="Modifier"> <i class="fas fa-edit" style="color: #08367A" aria-hidden="true"></i></a></td>
                            <td>
                                <form action="/administration/joueur/destroy/{{$joueur->id}}" method="DELETE">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/administration/joueur/destroy/{{$joueur->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fas fa-trash-alt" style="color: red" aria-hidden="true"></i></a></td>
                                    
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
