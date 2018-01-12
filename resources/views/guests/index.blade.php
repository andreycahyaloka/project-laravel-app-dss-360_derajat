@extends('layouts.master')

@section('title', '| Guest Index')

@section('content')

	<nav class="navbar navbar-expand-md sticky-top navbar-light bg-light">
		<span class="navbar-brand mb-0 h1">DSS App</span>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a href="#" class="nav-link">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Link</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card border-dark mt-3">
					<div class="card-header text-center border-dark">
						DSS (Decision Support System)
					</div>
					<div class="card-body mb-0 pb-0">
						<h5 class="card-title">Penentuan Jurusan SMA</h5>
						<h6 class="card-subtitle mb-2 text-muted">Metode 360 Derajat</h6>
						<p class="card-text">
							<form>
								<div class="form-group">
									<label>Nama</label>
									<input type="text" class="form-control" placeholder="masukkan nama" autofocus />
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
										<label>Rata-rata Nilai IPA</label>
										<input type="number" class="form-control" id="myNilai_ipa" placeholder="00.00" />
									</div>
									<div class="form-group col-md-4">
										<label>Rata-rata Nilai IPS</label>
										<input type="number" class="form-control" id="myNilai_ips" placeholder="00.00" />
									</div>
									<div class="form-group col-md-4">
										<label>Rata-rata Nilai BHS</label>
										<input type="number" class="form-control" id="myNilai_bhs" placeholder="00.00" />
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
										<label>Hasil Angket Urutan 1</label>
										<select class="form-control" id="myAngket_1">
											<option>--- IPA / IPS / BHS ---</option>
											<option value="ipa">IPA</option>
											<option value="ips">IPS</option>
											<option value="bhs">BHS</option>
										</select>
									</div>
									<div class="form-group col-md-4">
										<label>Hasil Angket Urutan 2</label>
										<select class="form-control" id="myAngket_2">
											<option>--- IPA / IPS / BHS ---</option>
											<option value="ipa">IPA</option>
											<option value="ips">IPS</option>
											<option value="bhs">BHS</option>
										</select>
									</div>
									<div class="form-group col-md-4">
										<label>Hasil Angket Urutan 3</label>
										<select class="form-control" id="myAngket_3">
											<option>--- IPA / IPS / BHS ---</option>
											<option value="ipa">IPA</option>
											<option value="ips">IPS</option>
											<option value="bhs">BHS</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label>Hasil Psikotes Urutan 1</label>
										<select class="form-control" id="myPsikotes_1">
											<option>--- IPA / IPS / BHS ---</option>
											<option value="ipa">IPA</option>
											<option value="ips">IPS</option>
											<option value="bhs">BHS</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label>Hasil Psikotes Urutan 2</label>
										<select class="form-control" id="myPsikotes_2">
											<option>--- IPA / IPS / BHS ---</option>
											<option value="ipa">IPA</option>
											<option value="ips">IPS</option>
											<option value="bhs">BHS</option>
										</select>
									</div>
								</div>
								<div class="form-group text-center">
									<button type="button" class="btn btn-outline-primary btn-block btn-lg" onClick="DSSCalc();">Proses</button>
								</div>

						</p>
					</div>
					<div class="card-footer">

								<div class="form-group">
									<label>Hasil</label>
									<input type="text" class="form-control" id="myResult_value" value="0" disabled />
								</div>
							</form>
					</div>
				</div>
			</div>

		</div>
	</div>

	@include('layouts._footer')

	<div class="x3-screen_message">
		<p>Your screen is too wide.</p>
		<p>Try to resize your browser window.</p>
	</div>

@endsection