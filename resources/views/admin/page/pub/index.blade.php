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

                <a href="/administration/pub/add" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-plus"></i> Ajouter</a>
                
                @include('admin.page.message')
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Raison sociale</th>
                        <th>Url</th>
                        <th>Début</th>
                        <th>Fin</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>
                     @foreach ($publicites as $pub)
                        <tr>
                            <td><img src="{{asset('/storage/imgs/'.$pub->image)}}" alt="" style="width: 150px; height: 100px;"></td>
                            <td>{{$pub->raison_sociale}}</td>
                            <td>{{$pub->site}}</td>
                            <td>{{$pub->debut}}</td>
                            <td>{{$pub->fin}}</td>
                            <td><a href="/administration/pub/edit/{{$pub->id}}" title="Modifier"> <i class="fas fa-edit" style="color: #08367A" aria-hidden="true"></i></a></td>
                            <td>
                                <form action="/administration/pub/destroy/{{$pub->id}}" method="DELETE">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/administration/pub/destroy/{{$pub->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fas fa-trash-alt" style="color: red" aria-hidden="true"></i></a></td>
                                    
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
