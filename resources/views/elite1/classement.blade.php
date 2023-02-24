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
								<span>GENERAL</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-2">
								<i class="uil uil-shield-exclamation pe-1"></i>
								<span>BUTEURS</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-3">
								<i class="uil uil-laptop-cloud pe-1"></i>
								<span>PASSEURS DECISIFS</span>
							</a>
						</li>
					</ul>
					<!-- /.nav-tabs -->

					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab1-1">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">CLASSEMENT GENERAL</h4>
								<div class="row mb-6">
									<div class="col-md-3">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option selected>Selectionner une saison</option>
												<option value="1">2022/2023</option>
												<option value="2">2021/2022</option>
												<option value="3">2020/2021</option>
											</select>
										</div>
									</div>

									<div class="col-md-3">
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
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option selected>Selectionner une phase</option>
												<option value="1">Poule A</option>
												<option value="2">Poule B</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option selected>Général</option>
												<option value="1">Dom</option>
												<option value="2">Ext</option>
												<option value="3">1ere Mt</option>
												<option value="3">2e Mt</option>
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
														<th scope="col">Ev</th>
														<th scope="col">Clubs</th>
														<th scope="col">Points</th>
														<th scope="col">MJ</th>
														<th scope="col">MG</th>
														<th scope="col">MN</th>
														<th scope="col">MP</th>
														<th scope="col">BM</th>
														<th scope="col">BE</th>
														<th scope="col">Dif</th>
														<th scope="col">Forme</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td><i class="uil uil-arrow-up"></i></td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>r-b-v-v-v</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td><i class="uil uil-arrow-up"></i></td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>r-b-v-v-v</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td><i class="uil uil-arrow-up"></i></td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>r-b-v-v-v</td>
													<tr>
														<th scope="row">1</th>
														<td><i class="uil uil-arrow-up"></i></td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>r-b-v-v-v</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td><i class="uil uil-arrow-up"></i></td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>r-b-v-v-v</td>
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
						<div class="tab-pane fade" id="tab1-2">
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
						<div class="tab-pane fade" id="tab1-3">
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
