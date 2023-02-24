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

					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab1-1">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">ARBITRES</h4>
								<form action="" method="get">
									@csrf
									<div class="row mb-6">
										<div class="col-md-9">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" aria-label="Default select example">
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
													<th scope="col">Arbitres</th>
													<th scope="col">Nombre de matchs</th>
													<th scope="col">Carton jaunes</th>
													<th scope="col">Carton rouges</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="" style="height: 50px; width: 50px;" alt="">...</td>
													<td>...</td>
													<td>...</td>
													<td>...</td>
													<td><a href="" class="btn btn-primary" style="height: 5px;">Detail</a></td>
												</tr>
											</tbody>
										</table>
										<!--/.card-body -->
									</div>
								</div>
								<!--/.row -->
							</div>
						</div>
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
