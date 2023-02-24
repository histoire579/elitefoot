@extends('layouts.mainAdmin')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Boutique</h4>

           
            
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="/administration/boutique/add" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-plus"></i> Ajouter</a>
                
                @include('admin.page.message')
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Lieu</th>
                        <th>Téléphone</th>
                        <th>Horaire</th>
                        <th>maillot vendu</th>
                        <th>Gajet vendu</th>
                        <th>Tikect vendu</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>
                     @foreach ($boutiques as $boutique)
                        <tr>
                            <td>{{$boutique->libelle}}</td>
                            <td>{{$boutique->lieu}}</td>
                            <td>{{$boutique->telephone}}</td>
                            <td>{{$boutique->horaire}}</td>
                            <td>{{$boutique->maillot_v}}</td>
                            <td>{{$boutique->gajet_v}}</td>
                            <td>{{$boutique->tikect_v}}</td>
                            <td><a href="/administration/boutique/edit/{{$boutique->id}}" title="Modifier"> <i class="fas fa-edit" style="color: #08367A" aria-hidden="true"></i></a></td>
                            <td>
                                <form action="/administration/boutique/destroy/{{$boutique->id}}" method="DELETE">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/administration/boutique/destroy/{{$boutique->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fas fa-trash-alt" style="color: red" aria-hidden="true"></i></a></td>
                                    
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
