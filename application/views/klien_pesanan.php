<!DOCTYPE html>
<html>
<head>
	<title>Taylor</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/semantic/semantic.css' ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/glidejs/dist/css/glide.core.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/glidejs/dist/css/glide.theme.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom-style.css' ?>">
</head>
<body style="background-color:#fff">

	<!-- navbar -->
	<div class="ui inverted segment">
		<div class="ui attached stackable inverted secondary pointing large menu">
			<div class="ui container">
				<div class="header item">
					Setun Taylor
				</div>
				<a href="<?php echo base_url(); ?>Welcome/index" class="item">
					<i class="home icon"></i> Home
				</a>
				<a href="#" class="active item">
					<i class="shopping bag layout icon"></i> Product
				</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<!-- <div class="ui login button" style=" color:#fff; background-color:transparent; margin-top: 5px;">
					<a href="<?php echo base_url(); ?>c_login/logout_user">Logout</a>
				</div> -->
				<?php
					if(isset($user->nama)){ ?>
						<a href="<?php echo base_url("c_user/klien_profile"); ?>">
							<div class="ui  button" style=" color:#fff; background-color:transparent; 
								height:20px;">
								<i class="user icon">Hi, <?php echo $user->nama; ?></i>
							</div>
						</a>
						<a href="<?php echo base_url(); ?>c_login/logout_user" class="item">
					<i class=" icon"></i> Logout
					<?php }

					else{ ?>
						<div class='ui login button' style=' color:#fff; background-color:transparent; margin-top: 5px;'>
							<i class='user icon'>Login/Register</i>
						</div>
					<?php }

				?>
				</a>
				<a class=" right item">
					
				</a>
			</div>
		</div>
	</div>
	
	<!-- end navbar -->
	<!-- end navbar -->

	<!-- content -->
	<br>
	<div class="ui grid">
		<div class="three wide column right floated">
			<div class="ui secondary vertical pointing menu">
				<a href="<?php echo base_url("c_user/klien_profile"); ?>" class=" item">
					Profile
				</a>
				<a href="<?php echo base_url(); ?>c_user/klien_pesanan" class=" active item">
					Pesanan
				</a>
				
			</div>
		</div>

		<div class="eleven wide column left floated">
			<h4>Panel Pesanan</h4>

			<div class="ui row border-top-custom"></div>

			<table class="ui single line table">
				<thead>
					<tr>
						<th>Nama Barang</th>
						<th>Deskripsi</th>
						<th>Kuantitas</th>
						<th>Harga</th>
						<th>Status</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php 	$total_harga = 0; ?>
					<?php foreach ($products as $orderan) { ?>
					<tr>
						<td>
							<h4 class="ui image header">
								<?php 	if ($orderan->id_model == "1") {?>
									<img src="<?php echo base_url(); ?>assets/img/bajuhitam1.jpg" class="ui massive rounded image">&emsp;
								<?php }elseif ($orderan->id_model == "2") {?>
									<img src="<?php echo base_url(); ?>assets/img/kemeja1.jpg" class="ui massive rounded image">&emsp;
								<?php }elseif ($orderan->id_model == "3") {?>
									<img src="<?php echo base_url(); ?>assets/img/jacket1.jpg" class="ui massive rounded image">&emsp;
								<?php } ?>
								<!-- <img src="<?php echo base_url(); ?>assets/img/bajuhitam1.jpg" class="ui massive rounded image">&emsp; -->
								<div class="content">
									<!-- Kaos -->
								</div>
							</h4>
						</td>
						<td>
							Warna : <?php echo $orderan->warna?><br>
							Kain : <?php echo $orderan->jeniskain?> <br>
							Ukuran : <?php echo $orderan->ukuran?><?php echo $orderan->ukuransendiri?>
						</td>
						<td><?php echo $orderan->jumlah?></td>
						<td>Rp. <?php echo $orderan->total_harga; $total_harga += $orderan->total_harga;?></td>
						<td><i class=" icon green"></i> <?php echo $orderan->status?></td>
						<td>
							<?php if ($orderan->status == "menunggu konfimasi") {
								echo "
								<div class='ui basic icon buttons'>
									<div class='ui deleteorder button' data-inverted='' data-tooltip='Batalkan Pesanan' data-id='' data-position='top left'><i class='trash icon'></i>
									</div>

								</div>
								";
							} ?>
							

								
						</td>
					</tr>
					<?php 	} ?>
				</tbody>
				<tfoot>
					<tr></tr>
					<tr>
						<td><b>Total Harga</b></td>
						<td></td>
						<td></td>
						<td>Rp. <?php 	echo $total_harga; ?></td>
						<td></td>
						<td></td>
					</tr>
				</tfoot>
			</table>

			</div>
		</div>
		<!-- end content -->

		<!-- modal delete-order -->
			<div class="ui mini deleteorder modal">
				<div class="header">Batalkan Pesanan</div>
				<div class="content">
					<p>Apakah anda yakin membatalkan pesanan ini?</p>
				</div>
			<div class="actions">
					<div class="ui cancel button">Tidak</div>
					<a href="<?php echo base_url("c_user/batalkan_order"."/".$orderan->id_keranjang); ?>"><div class="ui  ok negative button" >Ya</div></a> 
				</div>
			</div>
		<!-- end modal delete-order -->
		<br>
		<br>
		<br>
		<br>
		<!-- footer -->
		<div class="ui equal width center aligned grid border-top-custom" style="margin-top: 40px;">
			<div class="row">
				<div class="column" style="text-align: left; padding: 30px 60px;">
					<h4>Setun taylor</h4>
					<p style="font-size: 11px;">Dengan keunggulan yang kami tawarkan, kami harapkan semoga anda bisa menikmati kebebasan disaat berbelanja baju/kemeja/jacket dengan ukuran yang ditentukan sendiri dan juga bahan yang kami sudah sediakan sesuai model pakaian. Kenikmatan kami adalah kepuasan anda disaat berbelanja di toko Setun Taylor.</p>
				</div>
				<div class="column" style="text-align: left; padding: 30px 60px;">
					<h4>Penjahit & Bahan</h4>
					<p style="font-size: 11px;">Penjahit yang handal dalam setiap model dan sudah terpercaya, selain itu juga bahan yang kami tawarkan dalah bahan dengan kualitas No. 1 pada setiap model.</p>
				</div>
				<div class="column" style="text-align: left; padding: 30px 60px;">
					<h4>Hubungi Kami</h4>
					<p style="font-size: 11px;">
						<i class="whatsapp icon"></i>Phone/whatsapp : +6281222333444 <br>
						<i class="marker icon"></i>Alamat : Gegerkalong Girang. 193 , Bandung
					</p>
					<button class="mini ui circular facebook icon button">
						<i class="facebook icon"></i>
					</button>
					<button class="mini ui circular twitter icon button">
						<i class="twitter icon"></i>
					</button>
					<button class="mini ui circular youtube plus icon button">
						<i class="youtube plus icon"></i>
					</button>
					<button class="mini ui circular instagram plus icon button">
						<i class="instagram plus icon"></i>
					</button>
				</div>
			</div>
			<div class="black row">
				<div class="column">
					<p style="font-size: 11px;">Setun Taylor Created By Ivan Ali Budiman <i class="copyright icon"></i>2017</p>
				</div>
			</div>
		</div>
		<!-- end footer -->

		<!-- js -->
	<<script src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
	<script src="<?php echo base_url().'assets/js/jquery-1.9.1.js' ?>"></script>
	<script src="<?php echo base_url().'assets/vendor/semantic/semantic.js' ?>"></script>
	<script src="<?php echo base_url().'assets/vendor/glidejs/dist/glide.js' ?>"></script>
	<script src="<?php echo base_url().'assets/js/semantic-custom.js' ?>"></script>

	</body>
	</html>