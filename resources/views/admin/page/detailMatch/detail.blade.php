@extends('layouts.mainAdmin')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Détails du match: {{$detail->match->slug}}</h4>

           
            
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="/administration/match" type="button" class="btn btn-outline-primary waves-effect waves-light mb-5"><i class="fas fa-angle-left"></i> Retour</a>
                
                <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th></th>
                        
                        <th></th>
                        <th></th>
                        

                    </tr>
                    </thead>


                    <tbody>
                        <tr style="text-align: center;font-size: 20px">
                            <td><img src="{{asset('/storage/imgs/'.$detail->club1->logo)}}" alt="" style="height: 35px" > {{$detail->club1->nom}}</td>
                            <td style="font-size: 26px">{{$detail->nbre_but_club1}} - {{$detail->nbre_but_club2}}</td>
                            <td><img src="{{asset('/storage/imgs/'.$detail->club2->logo)}}" alt="" style="height: 35px" > {{$detail->club2->nom}}</td>
                        </tr>
                        <tr style="text-align: center;font-size: 20px">
                            <td>{{$detail->nbre_but_club1}}</td>
                            <td>But</td>
                            <td>{{$detail->nbre_but_club2}}</td>
                        </tr>
                        <tr style="text-align: center;font-size: 20px;">
                            <td>{{$detail->possession_club1}}%</td>
                            <td>Possession</td>
                            <td>{{$detail->possession_club2}}%</td>
                        </tr>
                        <tr style="text-align: center;font-size: 20px">
                            <td>{{$detail->nbre_tir_club1}}({{$detail->nbre_tir_cadre_club1}})</td>
                            <td>Tirs(Cadrés)</td>
                            <td>{{$detail->nbre_tir_club2}}({{$detail->nbre_tir_cadre_club2}})</td>
                        </tr>
                        
                        <tr style="text-align: center;font-size: 20px">
                            <td>{{$detail->nbre_faute_club1}}({{$detail->nbre_hors_jeu_club1}})</td>
                            <td>Fautes(Hors-jeu)</td>
                            <td>{{$detail->nbre_faute_club2}}({{$detail->nbre_hors_jeu_club2}})</td>
                        </tr>
                        <tr style="text-align: center;font-size: 20px">
                            <td>{{$detail->nbre_carton_jaune_club1}}({{$detail->nbre_carton_rouge_club1}})</td>
                            <td>Cartons jaune(Cartons rouge)</td>
                            <td>{{$detail->nbre_carton_jaune_club2}}({{$detail->nbre_carton_rouge_club2}})</td>
                        </tr>

                        <tr style="text-align: center;font-size: 20px">
                            <td>{{$detail->nbre_corner_club1}}</td>
                            <td>Corners</td>
                            <td>{{$detail->nbre_corner_club2}}</td>
                        </tr>
                        <tr style="text-align: center;font-size: 20px">
                            <td>{{$detail->nbre_coup_franc_club1}}</td>
                            <td>Coups francs</td>
                            <td>{{$detail->nbre_coup_franc_club2}}</td>
                        </tr>

                        <tr style="text-align: center;font-size: 20px;">
                            <td>{{$detail->nbre_passe_reussie_club1}}%</td>
                            <td>Passes réussies</td>
                            <td>{{$detail->nbre_passe_reussie_club2}}%</td>
                        </tr>
                        <tr style="text-align: center;font-size: 20px">
                            <td>{{$detail->nbre_centre_club1}}</td>
                            <td>Centres</td>
                            <td>{{$detail->nbre_centre_club2}}</td>
                        </tr>

                        <tr style="text-align: center;font-size: 20px">
                            <td>{{$detail->nbre_tacle_club1}}</td>
                            <td>Tacles</td>
                            <td>{{$detail->nbre_tacle_club2}}</td>
                        </tr>

                        <tr style="text-align: center;font-size: 20px">
                            <td>{{$detail->nbre_interception_club1}}</td>
                            <td>Interceptions</td>
                            <td>{{$detail->nbre_interception_club2}}</td>
                        </tr>

                        <tr style="text-align: center;font-size: 20px">
                            <td>{{$detail->nbre_tir_arrete_club1}}</td>
                            <td>Tirs arrêtés</td>
                            <td>{{$detail->nbre_tir_arrete_club2}}</td>
                        </tr>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
