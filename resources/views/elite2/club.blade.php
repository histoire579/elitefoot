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
					<h4 class="display-6 mb-8 mt-6 text-center">CLUBS</h4>
					<form action="{{ route('club_journee_elite_two') }}" method="get">
						@csrf
						<div class="row">
							<div class="col-md-4">
								<div class="form-select-wrapper mb-4">
									<select class="form-select" name="saison_id" id="saison_id" aria-label="Default select example">
										@foreach ($saisons as $saison)
											<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
										@endforeach
									</select>
								</div>
							</div>
	
							<div class="col-md-4">
								<div class="form-select-wrapper mb-4">
									<select class="form-select" name="journee_id" id="journee_id" aria-label="Default select example">
										<option selected>Selectionner une journée</option>
										@foreach ($journees as $journee)
											<option value="{{ $journee->id }}">{{ $journee->libelle }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<button type="submit" class="btn btn-primary">Rechercher</button>
							</div>
						</div>
					</form>
				</div>

				@foreach ($clubs as $club)
				<div class="col-md-3">
					<!--/.swiper-slide -->
					<div class="swiper-slide">
						<div class="item-inner">
							<div class="card">
								<div class="card-body">
									<img class="rounded-circle w-15 mb-4" src="{{ asset($club->logo) }}" alt="" />
									<h4 class="mb-1"><a href="{{ route('detail_club_elite_two', $club->id) }}">{{ $club->club }}</a></h4>
									<div class="meta mb-2">{{ $club->stade }}</div>
									<p class="mb-2"></p>
									<nav class="nav social mb-0">
										<a href="{{ $club->twitter }}"><i class="uil uil-twitter"></i></a>
										<a href="{{ $club->facebook }}"><i class="uil uil-facebook-f"></i></a>
										<a href="{{ $club->site }}"><i class="uil uil-dribbble"></i></a>
									</nav>
									<!-- /.social -->
								</div>
								<!--/.card-body -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.item-inner -->
					</div>
				</div>
				@endforeach
				<!--/column -->
			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- /section -->
@endsection
