<!DOCTYPE html>
<html>
<head>
	<title>Setun Taylor</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/semantic/semantic.css' ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/glidejs/dist/css/glide.core.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/glidejs/dist/css/glide.theme.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom-style.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom-style-admin.css' ?>">
</head>
<body style="background-color: white">

	
	<!-- body content -->
	<div class="ui equal width aligned grid container" style="background-color: white">
		<!-- <div class="ui grid"> -->
			


				<div class="sixteen wide column">
					<h4>Laporan Keuangan Pendapatan</h4>
					<p>tanggal : <?php $tgl=date('d-m-Y'); echo $tgl; ?></p>
					<table class="ui single line table" style="margin-left: 3px;">
						<thead>
							<tr>
								<th class="collapsing"><i></i> No</th>
								<th><i></i> Produk terjual</th>
								<th><i></i>Jumlah Terjual</th>
								<th><i></i>Total Harga</th>
							</tr>
						</thead>
						<tbody>
							<?php $jumlah_kaos = 0; $jumlah_kemeja = 0; $jumlah_sweater = 0; $jumlah_harga = 0; ?>
							<?php foreach ($products->result() as $row) { ?>
								<?php if ($row->id_model == "1") {
									$jumlah_kaos = $jumlah_kaos + 1;
								}elseif ($row->id_model == "2") {
									$jumlah_kemeja = $jumlah_kemeja + 1;
								}elseif ($row->id_model == "3") {
									$jumlah_sweater = $jumlah_sweater + 1;
								} ?>
							<?php } ?>
							<?php $nomor = 1; ?>
							<?php foreach ($model->result() as $row) { ?>
							<tr>
								<td><?php echo $nomor ?></td>
								<td>
									<!-- <h4 class="ui image header">
										<img src="<?php echo base_url("assets/img/".$row->gambar ) ?>" class="ui massive rounded image">
									</h4> -->
									<b><?php echo $row->jenis?></b><br>
									Rp <?php echo $row->harga?> 
									
								</td>

								<td>
									<?php if ($row->id == "1") {
										echo $jumlah_kaos;
									}elseif ($row->id == "2") {
										echo $jumlah_kemeja;
									}elseif ($row->id == "3") {
										echo $jumlah_sweater;
									} ?>
								</td>
								<td> Rp. 
									<?php if ($row->id == "1") {
										echo $jumlah_kaos*$row->harga;
									}elseif ($row->id == "2") {
										echo $jumlah_kemeja*$row->harga;
									}elseif ($row->id == "3") {
										echo $jumlah_sweater*$row->harga;
									} ?>
								</td>
							</tr>
							<?php $nomor++; } ?>
							<tr>
									<td></td>
									<td ><b>Total pendapatan</b></td>
									<td></td>
									<td><h3 style="color: orange;">Rp. <?php echo ($jumlah_kaos*$row->harga)+($jumlah_kemeja*$row->harga)+($jumlah_sweater*$row->harga); ?></h3></td>
								</tr>
						</tbody>
					</table>

					
				</div>

				
			<!-- </div> -->
		</div>
		<!-- end body content -->

				<!-- js -->
				<script src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
				<script src="<?php echo base_url().'assets/js/jquery-1.9.1.js' ?>"></script>
				<script src="<?php echo base_url().'assets/vendor/semantic/semantic.js' ?>"></script>
				<script src="<?php echo base_url().'assets/vendor/glidejs/dist/glide.js' ?>"></script>
				<script src="<?php echo base_url().'assets/js/semantic-custom.js' ?>"></script>
			</body>
			</html>