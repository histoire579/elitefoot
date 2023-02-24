@extends('layouts.main')

@section('content')
	<section class="wrapper bg-soft-primary">
		<div class="py-md-12 container py-10 text-center">
			<div class="row">
				<div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
					<h1 class="display-1 mb-3">PUB</h1>

				</div>
				<!-- /column -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /section -->
	<section class="wrapper bg-light angled lower-end" style="margin: 0 5%">
		<div class="py-md-8 container-fluid py-6">
			<div class="row gx-lg-8 gx-xl-12 gy-10 mb-md-17 align-items-center mb-14">
				<div class="col-md-12 position-relative">
					<ul class="nav nav-tabs nav-pills col-md-12 d-flex justify-content-center">
						<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="tab" href="#tab1-1">
								<i class="uil uil-phone-volume pe-1"></i>
								<span>INFOS SUR LE CLUB</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-2">
								<i class="uil uil-shield-exclamation pe-1"></i>
								<span>EFFECTIF</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-3">
								<i class="uil uil-laptop-cloud pe-1"></i>
								<span>CALENDRIER</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-4">
								<i class="uil uil-laptop-cloud pe-1"></i>
								<span>RESULTATS</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-5">
								<i class="uil uil-laptop-cloud pe-1"></i>
								<span>STATISTIQUES</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-6">
								<i class="uil uil-laptop-cloud pe-1"></i>
								<span>EVALUTION</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-7">
								<i class="uil uil-laptop-cloud pe-1"></i>
								<span>PALMARES</span>
							</a>
						</li>
					</ul>
					<!-- /.nav-tabs -->

					<div class="tab-content">
						
						<div class="tab-pane fade show active" id="tab1-1">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $club->nom }}</h4>
								<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
									<div class="col-lg-7">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<div class="card-body">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td><img src="{{ asset($club->stade->photo) }}" alt=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nom : {{ $club->stade->nom }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lieu : {{ $club->stade->lieu }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Capacité : {{ $club->stade->capacite }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
												</div>
												<!--/.card-body -->
                                        
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Contacts</th>
                                                            <th scope="col">Boutique</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>BP : {{ $club->bp }}</td>
                                                            <td>Lieu : {{ $club->boutique->lieu }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tel : {{ $club->telephone }}</td>
                                                            <td>Tel : {{ $club->boutique->telephone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email : {{ $club->email }}</td>
                                                            <td>Horaire : {{ $club->boutique->horaire }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Site : {{ $club->site }}</td>
                                                            <td>Vente maillots : {{ $club->boutique->maillot_v }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Twitter : {{ $club->twitter }}</td>
                                                            <td>Vente Gadgets : {{ $club->boutique->gajet_v }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Facebook : {{ $club->facebook }}</td>
                                                            <td>Vente tickets : {{ $club->boutique->tikect_v }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->

									<div class="col-lg-5">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<table class="table table-striped">
													<tbody>
														<tr>
															<td>Siege Social</td>
                                                            <td>{{ $club->siege }}</td>
														</tr>
														<tr>
															<td>Président</td>
															<td>{{ $club->president }}</td>
														</tr>
														<tr>
															<td>Vice-président</td>
															<td>{{ $club->v_president }}</td>
														</tr>
														<tr>
															<td>Secrétaire G</td>
															<td>{{ $club->secretaire_g }}</td>
														</tr>
														<tr>
															<td>...</td>
															<td>...</td>
														</tr>
														<tr>
															<td>Coach Principal</td>
															<td>{{ $club->coach_p }}</td>
														</tr>
														<tr>
															<td>Coach Adjoint</td>
															<td>{{ $club->coach_ad }}</td>
														</tr>
														<tr>
															<td>...</td>
															<td>...</td>
														</tr>
														<tr>
															<td>...</td>
															<td>...</td>
														</tr>
														<tr>
															<td>...</td>
															<td>...</td>
														</tr>
													</tbody>
												</table>
												<!--/.card-body -->
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->
								</div>
								<!--/.row -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab1-2">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $club->nom }}</h4>
								<form action="" method="get">
									@csrf
									<div class="row mb-6">
										<div class="col-md-6">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" name="saison_id" id="saison_id" aria-label="Default select example">
													@foreach ($saisons as $saison)
														<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<button class="btn btn-primary">Rechercher</button>
										</div>
									</div>
								</form>

								<label for="">Gardiens -- {{ $nbre_gard }}</label>
								<hr class="mb-1">
								@foreach ($gardiens as $gardien)
								<div class="col-md-3">
									<!--/.swiper-slide -->
									<div class="swiper-slide">
										<div class="item-inner">
											<div class="card">
												<div class="card-body">
													<img class="rounded-circle w-15 mb-4" src="{{ asset($gardien->joueur->photo) }}" alt="" />
													<h4 class="mb-1">{{ $gardien->joueur->nom }}</h4>
													<div class="meta mb-2">Dorssad : {{ $gardien->dorssad }}</div>
												</div>
												<!--/.card-body -->
											</div>
											<!-- /.card -->
										</div>
										<!-- /.item-inner -->
									</div>
								</div>
								<!--/column -->
								@endforeach

								<label for="">Défenseurs -- {{ $nbre_def }}</label>
								<hr class="mb-1">
								@foreach ($defenseurs as $defenseur)
								<div class="col-md-3">
									<!--/.swiper-slide -->
									<div class="swiper-slide">
										<div class="item-inner">
											<div class="card">
												<div class="card-body">
													<img class="rounded-circle w-15 mb-4" src="{{ asset($defenseur->joueur->photo) }}" alt="" />
													<h4 class="mb-1">{{ $defenseur->joueur->nom }}</h4>
													<div class="meta mb-2">Dorssad : {{ $defenseur->dorssad }}</div>
												</div>
												<!--/.card-body -->
											</div>
											<!-- /.card -->
										</div>
										<!-- /.item-inner -->
									</div>
								</div>
								<!--/column -->
								@endforeach

								<label for="">Milieux -- {{ $nbre_mil }}</label>
								<hr class="mb-1">
								@foreach ($milieux as $milieu)
								<div class="col-md-3">
									<!--/.swiper-slide -->
									<div class="swiper-slide">
										<div class="item-inner">
											<div class="card">
												<div class="card-body">
													<img class="rounded-circle w-15 mb-4" src="{{ asset($milieu->joueur->photo) }}" alt="" />
													<h4 class="mb-1">{{ $milieu->joueur->nom }}</h4>
													<div class="meta mb-2">Dorssad : {{ $milieu->dorssad }}</div>
												</div>
												<!--/.card-body -->
											</div>
											<!-- /.card -->
										</div>
										<!-- /.item-inner -->
									</div>
								</div>
								<!--/column -->
								@endforeach

								<label for="">Attaquants -- {{ $nbre_attaq }}</label>
								<hr class="mb-1">
								@foreach ($attaquants as $attaquant)
								<div class="col-md-3">
									<!--/.swiper-slide -->
									<div class="swiper-slide">
										<div class="item-inner">
											<div class="card">
												<div class="card-body">
													<img class="rounded-circle w-15 mb-4" src="{{ asset($attaquant->joueur->photo) }}" alt="" />
													<h4 class="mb-1">{{ $attaquant->joueur->nom }}</h4>
													<div class="meta mb-2">Dorssad : {{ $attaquant->dorssad }}</div>
												</div>
												<!--/.card-body -->
											</div>
											<!-- /.card -->
										</div>
										<!-- /.item-inner -->
									</div>
								</div>
								<!--/column -->
								@endforeach
							</div>
						</div>

						<div class="tab-pane fade" id="tab1-3">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $club->nom }}</h4>
								<form action="" method="get">
									@csrf
									<div class="row mb-6">
										<div class="col-md-6">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" name="saison_id" id="saison_id" aria-label="Default select example">
													@foreach ($saisons as $saison)
														<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<button class="btn btn-primary">Rechercher</button>
										</div>
									</div>
								</form>
								<div class="row gy-12 gx-xl-12">
									<div class="card table-responsive">
										<table class="table-hover table">
											<thead>
												<tr>
													<th scope="col">Compétitions</th>
													<th scope="col">Dates</th>
													<th scope="col">Journées/Phases</th>
													<th scope="col">Matchs</th>
													<th scope="col">Heures</th>
													<th scope="col">Lieux</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($calendiers as $calendier)
												<tr>
													<td>{{ $calendier->competition->libelle }}</td>
													<td>{{ $calendier->date }}</td>
													<td>{{ $calendier->journee->libelle }}</td>
													<td><img src="{{ asset($calendier->club1->logo) }}" style="height: 50px; width: 50px;" alt=""> {{ $calendier->club1->nom }} <strong>VS</strong> {{ $calendier->club2->nom }} <img src="{{ asset($calendier->club2->logo) }}" style="height: 50px; width: 50px;" alt=""></td>
													<td>{{ $calendier->heure }}</td>
													<td>{{ $calendier->stade->nom }}</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								<!--/.row -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab1-4">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $club->nom }}</h4>
								<form action="" method="get">
									@csrf
									<div class="row mb-6">
										<div class="col-md-6">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" name="saison_id" id="saison_id" aria-label="Default select example">
													@foreach ($saisons as $saison)
														<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<button class="btn btn-primary">Rechercher</button>
										</div>
									</div>
								</form>
								<div class="row gy-12 gx-xl-12">
									<div class="card table-responsive">
										<table class="table-hover table">
											<thead>
												<tr>
													<th scope="col">Compétitions</th>
													<th scope="col">Dates</th>
													<th scope="col">Journées/Phases</th>
													<th scope="col">Heures</th>
													<th scope="col">Matchs</th>
													<th scope="col">Lieux</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($resultats as $resultat)
												<tr>
													<td>{{ $resultat->competition->libelle }}</td>
													<td>{{ $resultat->date }}</td>
													<td>{{ $resultat->journee->libelle }}</td>
													<td>{{ $resultat->heure }}</td>
													<td><img src="{{ asset($resultat->club1->logo) }}" style="height: 50px; width: 50px;" alt=""> {{ $resultat->club1->nom }}<strong> {{ $resultat->nbre_but_club1 }} Score {{ $resultat->nbre_but_club2 }} </strong>{{ $resultat->club2->nom }} <img src="{{ asset($resultat->club2->logo) }}" style="height: 50px; width: 50px;" alt=""></td>
													<td>{{ $resultat->stade->nom }}</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								<!--/.row -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab1-5">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">CLASSEMENT BUTEURS</h4>
								<div class="row mb-6">
									<div class="col-md-6">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option selected>Selectionner une saison</option>
												<option value="1">2022/2023</option>
												<option value="2">2021/2022</option>
												<option value="3">2020/2021</option>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option selected>Selectionner une journée</option>
												<option value="1">Journée 1</option>
												<option value="2">Journée 2</option>
												<option value="3">Journée 3</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<button class="btn btn-primary">Rechercher</button>
									</div>
								</div>
								<div class="row gy-12 gx-xl-12">
									<div class="card">
										<div class="card-body table-responsive">
											<table class="table-hover table">
												<thead>
													<tr>
														<th scope="col">Rang</th>
														<th scope="col">Jouer</th>
														<th scope="col">Clubs</th>
														<th scope="col">Buts Marqués</th>
														<th scope="col">Penaltys</th>
														<th scope="col">Matchs Afférents</th>
														<th scope="col">Minutes Jouées</th>
														<th scope="col">Points Rapportés</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													</tr>
													</tr>
												</tbody>
											</table>
										</div>
										<!--/.card-body -->

									</div>
								</div>
								<!--/.row -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab1-6">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">CLASSEMENT PASSEURS DECISIFS</h4>
								<div class="row mb-6">
									<div class="col-md-6">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option selected>Selectionner une saison</option>
												<option value="1">2022/2023</option>
												<option value="2">2021/2022</option>
												<option value="3">2020/2021</option>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option selected>Selectionner une journée</option>
												<option value="1">Journée 1</option>
												<option value="2">Journée 2</option>
												<option value="3">Journée 3</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<button class="btn btn-primary">Rechercher</button>
									</div>
								</div>
								<div class="row gy-12 gx-xl-12">
									<div class="card">
										<div class="card-body table-responsive">
											<table class="table-hover table">
												<thead>
													<tr>
														<th scope="col">Rang</th>
														<th scope="col">Jouer</th>
														<th scope="col">Clubs</th>
														<th scope="col">Passes Décisives</th>
														<th scope="col">Matchs Afférents</th>
														<th scope="col">Minutes Jouées</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/.row -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab1-7">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $club->nom }}</h4>
								<form action="" method="get">
									@csrf
									<div class="row mb-6">
										<div class="col-md-6">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" name="saison_id" id="saison_id" aria-label="Default select example">
													<option selected>Toutes les saisons</option>
													@foreach ($saisons as $saison)
														<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<button class="btn btn-primary">Rechercher</button>
										</div>
									</div>
								</form>
								<div class="row gy-12 gx-xl-12">
									<div class="card table-responsive">
										<table class="table-hover table">
											<thead>
												<tr>
													<th scope="col">Rang</th>
													<th scope="col">Compétition</th>
													<th scope="col">Saison</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($palmares_clubs as $palmares_club)
												<tr>
													<td>{{ $palmares_club->rang }}</td>
													<td>{{ $palmares_club->competition->libelle }}</td>
													<td>{{ $palmares_club->saison->libelle }}</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								<!--/.row -->
							</div>
						</div>
						<!--/.tab-pane -->
					</div>
					<!-- /.tab-content -->
				</div>
				<!--/column -->
			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- /section -->
@endsection
