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

<?php
 	
 	$judul = "laporan -".date('d-m-Y') ;
	header("Content-type: application/vnd-ms-excel");
	 
	header("Content-Disposition: attachment; filename=$judul.xls");
	 
	header("Pragma: no-cache");
	 
	header("Expires: 0");
	 
?>
	
	<!-- body content -->
	<div class="ui equal width aligned grid container" style="background-color: white">
		<!-- <div class="ui grid"> -->
			


				<div class="sixteen wide column">
					<!-- <h4>Laporan Keuangan Pendapatan</h4>
					<p>tanggal : <?php $tgl=date('d-m-Y'); echo $tgl; ?></p> -->
					<table class="ui single line table" style="margin-left: 3px;">
						<thead>
							<tr>
								<th class="collapsing"><i></i> No</th>
								<th>Model Pakaian</th>
								<th><i></i>Ukuran</th>
								<th><i></i>Identitas</th>
							</tr>
						</thead>
						<tbody>
							<?php $nomor = 1; ?>
							<?php foreach ($user->result() as $row) { ?>
							<tr>
								<td><?php echo $nomor?></td>
								<td></td>
								<td>
									Lingkar bahu    : <?php echo $row->lingkarbahu?><br>
									Lingkar dada    : <?php echo $row->lingkardada?><br>
									Lingkar leher   : <?php echo $row->lingkarleher?><br>
									Lingkar ketiak  : <?php echo $row->lingkarketiak?><br>
									Lingkar perut   : <?php echo $row->lingkarperut?><br>
									Lingkar pinggul : <?php echo $row->lingkarpinggul?>
								</td>
								<td>
									<?php echo $row->nama?><br>
									<?php echo $row->email?><br>
									<?php echo $row->telepon?><br>
									<?php echo $row->alamat?>
								</td>
								
							</tr>
							<?php $nomor++;} ?>
						</tbody>
					</table>
				</div>
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