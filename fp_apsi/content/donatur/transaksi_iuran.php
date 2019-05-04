<!DOCTYPE HTML>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../css/button.css">
	</head>
	<body>
	
		<header class="container">
			<div class="row justify-content-center">
				<div class="col-md-auto">
					<img src="../logo/logo.png">
				</div>
			</div>
			<hr class="medium">
		</header>



		<div class="container">
			
			<h4 class="text-center py-3">FORM TRANSAKSI DONASI</h4>
			
			<form class="py-4">
				<div class="row justify-content-center">
					<div class="col-sm-6">
						<h6 class="py-3">INFORMASI DONASI</h6>
						<p class=" py-1">Silakan isi informasi besaran iuran di bawah ini.</p>
						<p class="font-weight-bold py-1">Besaran iuran antara Rp 50ribu s.d Rp 1juta</p>
						<p class="py-1">Isi hanya dengan angka, tanpa tanda titik atau koma. <br> 
Contoh : Rp 50.000 ditulis 50000</p>
						<div class="row justify-content-center py-2">
							<div class="col-sm-12">
								<div class="form-group row">
									    <label class="col-sm-3 col-form-label" for="noHandphone">Jumlah Donasi</label>
			    						<div class="input-group col-sm-9">
		  									<span class="input-group-addon">Rp</span>
		  									<input type="text" class="form-control" id="noHandphone" placeholder="">
		  									<span class="input-group-addon">per Bulan</span>
										</div>	
								</div>
							</div>
						</div>

						<div class="row justify-content-center py-2">
							<div class="col-sm-12">
								<div class="form-row align-items-center">
									        <label class="col-sm-3" for="komitmenDonasi" style="margin-right: 9px;">Periode Donasi (Bulan)</label>
		      									<select class="custom-select col-sm-8 mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
		        									<option selected>Berapa Bulan</option>
		        									<option value="3">3 Bulan</option>
		        									<option value="6">6 Bulan</option>
		        									<option value="9">9 Bulan</option>
		        									<option value="12">12 Bulan</option>
		      									</select>	
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="row justify-content-center pt-5 pb-3">
					<div>
						<button type="submit" class="btn btn-submit">Simpan & Lanjutkan</button>	
					</div>	
					<div class="pl-2">
						<a class="btn btn-cancel" href="../menu_donatur.php" role="button">Kembali</a>	
					</div>
				</div>
				
			</form>
		</div>	

		<footer class="container footer navbar-fixed-bottom" style="height: 100px;">
			<hr class="medium">	
				<h6 class="py-3">© 2017 Yayasan Indonesia Mengajar. Some Rights Reserved.</h6>
		</footer>












		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>