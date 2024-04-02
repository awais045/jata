@extends('users.layouts.main')
@section('contant')
<style>
	.bottom-row
	{
		padding-top: 500px !important;
	}
	.comment_section{
		text-align: center;
	}
	.comment_section i {
		padding-top: 5px;
		margin-top: 1px;
		color: white;
		background: #34affe !important;
		border-radius: 100px;
		width: 30px;
		height: 29px;
	}
	@media (min-width: 320px) and (max-width: 450px)
	{
		.bottom-row
		{
			padding-top:0px !important ;
		}
		.Calendar
		{
			font-size: 17px !important;
		}
	}
	@media (min-width: 1024px) and (max-width: 3000px)
	{
		.comment_section
		{
			display: none !important;
		}
	}
</style>
<script src="assets/vendor/libs/sortablejs/sortable.js" />
<script>
	const cardEl = document.getElementById('sortable-cards');
	Sortable.create(cardEl);
</script>

<div class="content-wrapper">
	<!-- Content area -->
	<div class="content">
		<div class="container mobile_section">
			<div class="row">
				<div class="col-md-6 col-12">
					<div class="row">
						<div class="col-md-3 col-1">
							<div class="d-md-none">
								<button style="padding-left: 0px !important;" class="navbar-toggler sidebar-mobile-main-toggle" type="button">
									<i class="fas fa-sliders-h" style="color: black;"></i>
								</button>
							</div>
						</div>
						<div class="col-md-12 col-9" >
							<h1 class="Calendar" style="font-size: 32px; margin-top: -5px;">Tilføj Produktinformation</h1>
						</div>
						<div class="col-md-3 col-1">
							<div class="comment_section">
								<i class="fas fa-comment"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">

					<div class="col-md-6 mt-3">
						<div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;"> 
							<div class="card-body">
								<div class="row">
									<div class="col-md-12 col-12">
										<h4 class="font-size" style="font-size: 18px !Important;">
											Produktinformation
										</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="card" style="background: #EEF9FFE5;border: none;">
											<div class="card-body" style="padding:10px;">
												<label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
												">Produktnavn</label>
												<input style="border:none;background: #EEF9FFE5;" type="text" class="form-control" placeholder="Skriv her..." name="">
											</div>
										</div>

										<div class="card" style="background: #EEF9FFE5;border: none;">
											<div class="card-body" style="padding:10px;">
												<label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
												">Produktnavn</label>
												<input style="border:none;background: #EEF9FFE5;" type="text" class="form-control" placeholder="Skriv her..." name="">
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="card" style="background: #EEF9FFE5;border: none;">
													<div class="card-body" style="padding:10px;">
														<label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
														">Pris</label>
														<input style="border:none;background: #EEF9FFE5;" type="number" class="form-control" placeholder="Vælg" name="quantity">	
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="card" style="background: #EEF9FFE5;border: none;">
													<div class="card-body" style="padding:10px;">
														<label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
														">Før-Pris</label>
														<input style="border:none;background: #EEF9FFE5;" type="number" class="form-control" placeholder="Vælg" name="quantity">	
													</div>
												</div>
											</div> 		
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="card" style="background: #EEF9FFE5;border: none;">
													<div class="card-body" style="padding:10px;">
														<label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
														">Lager</label>
														<input style="border:none;background: #EEF9FFE5;" type="number" class="form-control" placeholder="Vælg" name="quantity">	
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="card" style="background: #EEF9FFE5;border: none;">
													<div class="card-body" style="padding:10px;">
														<label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
														">Beskrivelse</label>
														<input style="border:none;background: #EEF9FFE5;" type="text" class="form-control" placeholder="Skriv her..." name="">
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="card" style="background: #EEF9FFE5;border: none;">
													<div class="card-body" style="padding:10px;">
														<label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
														">SKU</label>
														<input style="border:none;background: #EEF9FFE5;" type="text" class="form-control" placeholder="Skriv her..." name="">	
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="card" style="background: #EEF9FFE5;border: none;">
													<div class="card-body" style="padding:10px;">
														<label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
														">Produktvægt</label>
														<input style="border:none;background: #EEF9FFE5;" type="number" class="form-control" placeholder="Vælg" name="number">	
													</div>
												</div>
											</div> 		
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="card" style="background: #EEF9FFE5;border: none;">
													<div class="card-body" style="padding:10px;">
														<label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
														">URL</label>
														<input style="border:none;background: #EEF9FFE5;" type="text" class="form-control" placeholder="Skriv her..." name="">
													</div>
												</div>
											</div>
										</div>

										

									</div>
								</div>
							</div>
						</div>

						<div class="card mt-2" style="border-radius: 23.99px;margin-bottom: 0px !important;"> 
							<div class="card-body">
								<div class="row">
									<div class="col-md-12 col-12">
										<h4 style="font-size: 18px !Important;">
											Varianter
										</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="card" style="background: #EEF9FFE5;border: none;">
											<div class="card-body" style="padding:10px;">
												<label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
												">Variant</label>
												<input style="border:none;background: #EEF9FFE5;" type="text" class="form-control" placeholder="Skriv her..." name="">	
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-7">										
									</div>
									<div class="col-md-5 col-12">
										<a href="" class="btn btn-info w-100">Opret Produkt</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 mt-3">
						<div class="card" style="border-radius: 23.99px;margin-bottom: 0px !important;"> 
							<div class="card-body">
								<div class="row">
									<div class="col-md-12 col-12">
										<h4 style="font-size: 18px !Important;">
										Produktbillede
										</h4>
									</div>
								</div>
								<div class="row" id="sortable-cards">
									<div class="col-lg-12 col-12">
										<p style="font-size: 14px !Important;">Tilføj Kampagnefiler</p>
										<div class="card drag-item cursor-move mb-lg-0 mb-4"style="background: #EEF9FFE5;height: 250px;border: 1px dashed #2CAAE1 !important;border-radius:12px;">
											<div class="card-body text-center">
												<h2>
													<i class="bx bx-cart text-success display-6"></i>
												</h2>
												<div class="pt-5 ">
													<img src="website/user/../assets/images/drag-icon-removebg-preview.png">
													<h4 style="font-size: 16px;margin-top:10px">Upload Billede</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row mt-5">
									<div class="col-md-10 col-10">
										<p class="ps-2" style="font-size: 14px !Important;">
											Brug "byd" for at indlede køb
										</p>
									</div>
									<div class="col-md-2 col-2 text-end">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
											<label class="form-check-label" for="flexCheckChecked">
											</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="card" style="background: #EEF9FFE5;border: none;">
											<div class="card-body" style="padding:10px;">
												<label class="ps-2" style="color: #2E32388F;font-size: 12px !important;
												">Tilføj Søgeord</label>
												<input style="border:none;background: #EEF9FFE5;" type="text" class="form-control" placeholder="Skriv her..." name="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
