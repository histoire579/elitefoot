@extends('layouts.mainAdmin')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Stade</h4>

           
            
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="/administration/stade/add" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-plus"></i> Ajouter</a>
                
                @include('admin.page.message')
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Lieu</th>
                        <th>Capacité</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>
                     @foreach ($stades as $stade)
                        <tr>
                            <td><img src="{{asset('/storage/imgs/'.$stade->photo)}}" alt="" style="width: 150px; height: 100px;"></td>
                            <td>{{$stade->nom}}</td>
                            <td>{{$stade->lieu}}</td>
                            <td>{{$stade->capacite}}</td>
                            <td><a href="/administration/stade/edit/{{$stade->id}}" title="Modifier"> <i class="fas fa-edit" style="color: #08367A" aria-hidden="true"></i></a></td>
                            <td>
                                <form action="/administration/stade/destroy/{{$stade->id}}" method="DELETE">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/administration/stade/destroy/{{$stade->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fas fa-trash-alt" style="color: red" aria-hidden="true"></i></a></td>
                                    
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
