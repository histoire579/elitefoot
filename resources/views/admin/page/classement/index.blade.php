@extends('layouts.mainAdmin')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Classement</h4>

           
            
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="/administration/classement/add" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-plus"></i> Initialiser un classement</a>
                
                @include('admin.page.message')
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Rang</th>
                        <th>Compétition</th>
                        <th>Saison</th>
                        <th>Club</th>
                        <th>Point</th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>
                        @php
                            $i=1;
                        @endphp
                     @foreach ($classements as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$item->competition->libelle}}</td>
                            <td>{{$item->saison->libelle}}</td>
                        
                            <td><img src="{{asset('/storage/imgs/'.$item->club->logo)}}" alt="" style="height: 20px" ></td>
                            <td>{{$item->point}}</td>
                            
                            <td>
                                <form action="/administration/feuille/destroy/{{$item->id}}" method="DELETE">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/administration/feuille/destroy/{{$item->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fas fa-trash-alt" style="color: red" aria-hidden="true"></i></a></td>
                                    
                                </form>
                            </td>
                            
                        </tr>
                        @php
                            $i= $i + 1;
                        @endphp
                     @endforeach   
   
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
