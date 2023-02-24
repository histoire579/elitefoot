@extends('layouts.mainAdmin')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Club</h4>

           
            
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="/administration/club/add" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-plus"></i> Ajouter</a>
                
                @include('admin.page.message')
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Nom</th>
                        <th>Siège</th>
                        <th>Bp</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>President</th>
                        <th>Coach</th>
                        <th>Année de création</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>
                     @foreach ($club as $item)
                        <tr>
                            <td><img src="{{asset('/storage/imgs/'.$item->logo)}}" alt="" style="height: 25px" ></td>
                            <td>{{$item->nom}}</td>
                            <td>{{$item->siege}}</td>
                            <td>{{$item->bp}}</td>
                            <td>{{$item->telephone}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->president}}</td>
                            <td>{{$item->coach_p}}</td>
                            <td>{{$item->annee_creation}}</td>
                            <td><a href="/administration/club/edit/{{$item->id}}" title="Modifier"> <i class="fas fa-edit" style="color: #08367A" aria-hidden="true"></i></a></td>
                            <td>
                                <form action="/administration/club/destroy/{{$item->id}}" method="DELETE">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/administration/club/destroy/{{$item->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fas fa-trash-alt" style="color: red" aria-hidden="true"></i></a></td>
                                    
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
