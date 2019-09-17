<!DOCTYPE html>
<html>
<head>
	<title>Setun Taylor</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/semantic/semantic.css' ?> ">
	<style type="text/css">
		
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/glidejs/dist/css/glide.core.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/glidejs/dist/css/glide.theme.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom-style.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom-style-admin.css' ?>">
</head>
<body style="background-color: white">

	
	<!-- body content -->
	<div class="ui equal width aligned grid container" style="background-color: white">
		<!-- <div class="ui grid"> -->
			


				<div class="ui sixteen wide column centered" style="margin-top: 15px;">
						<h4>Terima kasih telah berbelanja</h4>
						<p>Simpan bukti ini sebagai bukti pemesanan anda</p>
						<p>tanggal : <?php $tgl=date('d-m-Y'); echo $tgl; ?></p>
						<table class="ui single line table">
							<thead>
								<tr>
									<th>Identias</th>
									<th>Alamat Pengiriman</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									
									<td>Nama <?php echo $user->nama?><br>
										Telp <?php echo $user->telepon?>
									</td>
									<td>
										<?php echo $user->alamat?>
									</td>
									<td></td>
								</tr>
							</tbody>
						</table>
						<table class="ui single line table">						
							<thead>
								<tr>
									<th class="center aligned">No</th>
									<th>Pesanan</th>
									<th></th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
								<?php 	$total_harga = 0; ?>
								<?php 	$nomor = 1; ?>
								<?php foreach ($product->result() as $row) { ?>
								<?php 	if ($user->id == $row->id_user) {?>
								<tr>
									<td class="center aligned"><b><?= $nomor; ?></b></td>

									<td>
									
										<h4 class="ui image header">
											<div class="content">
												<?php echo $model->jenis; ?>
												<div class="sub header">
													
													Warna: <?php echo $row->warna?><br>
													Jenis Kain : <?php echo $row->jeniskain?> <?php echo $row->ketebalan?><br>
													 Ukuran : <?php echo $row->ukuransendiri?> <br>
													Kuantitas : <?php echo $row->jumlah?>
												</div>
												
											</div>
										</h4>
									</td>
									<td></td>
									<td><b>Rp. <?php 	echo $row->jumlah*100000; ?></b></td>
									<?php 	$total_harga = $total_harga+ $row->jumlah*100000 ?>
								</tr>
								<?php 	} ?>
								<?php  $nomor++;} ?>
								<tr>
									<td></td>
									<td></td>
									<td class="right aligned">Subtotal <br> <span style="color: green;">Biaya Pengiriman</span></td>
									<td>Rp. Rp <?php 	echo $total_harga; ?> <br><span style="color: green;">Rp. 3.000</span></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td class="right aligned"><b>Total (Termasuk Pajak)</b><br>Dibayar dengan ATM BCA</td>
									<td><h3 style="color: orange;">RP. <?php echo $total_harga+3000; ?></h3></td>
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