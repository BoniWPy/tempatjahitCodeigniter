<!DOCTYPE html>
<html>
<head>
	<title>Setun Taylor</title>
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
				
				<a href="<?php echo base_url('Welcome/index'); ?>" class="active item">
					<i class="home icon"></i> Home
				</a>
				<a href="#products" class="item">
					<i class="shopping bag layout icon"></i> Product
				</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;


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

	<!-- content -->
	<br>
	<div class="ui equal width aligned grid container">
		<!-- breadcrumb -->
		<div class="column">
			<div class="ui breadcrumb">
				<a class="section">Home</a>
				<div class="divider"> / </div>
				<div class="active section">Checkout</div>
			</div>
		</div>
		<!-- end breadcrumb -->
		<div class="row border-top-custom">

			<!-- step -->
			<div class="ui four steps" style="margin-bottom: 35px;">
				<div class=" step">
					<i class="shop icon"></i>
					<div class="content">
						<div class="title">Keranjang</div>
					</div>
				</div>
				<div class="active step">
					<i class="truck icon"></i>
					<div class="content">
						<div class="title">Pengiriman & Pembayaran</div>
					</div>&emsp;
					<i class="payment icon"></i>
				</div>
				<div class="step">
					<i class="info icon"></i>
					<div class="content">
						<div class="title">Konfirmasi Order</div>
					</div>
				</div>
			</div>
			<!-- end step -->

			<!-- pembayaran content -->
			<div class="ui segment eight wide column right floated grid">

				<div class="ui positive message">
					<div class="header">
						Pilih Bank
					</div>
					<p>Pilih untuk melanjutkan proses pembayaran, segera lakukan pembayaran agar pengiriman dapat cepat diproses. Mohon ikuti petunjuk pembayaran pada langkah selanjutnya.</p>
				</div>

				<table class="ui single line table">
					<h4>Silahkan pilih bank</h4>
					<tbody>
						<tr>
							<td>
								<h4 class="ui image header">
									<img src="<?php echo base_url(); ?>assets/img/bank/bca.png" class="ui large rounded image">
									BCA
								</td>
								<td><a href="<?php echo base_url("c_routing/Konfirmasi"."/".$model->id); ?>"><div class="ui mini right floated positive button">
									Konfirmasi Pesanan
									<i class="right chevron icon"></i>
								</div></a></td>
							</tr>
							<tr>
								<td>
									<h4 class="ui image header">
										<img src="<?php echo base_url(); ?>assets/img/bank/mandiri.png" class="ui large rounded image">
										Mandiri
									</td>
									<td><div class="ui mini right floated positive button">
										Konfirmasi Pesanan
										<i class="right chevron icon"></i>
									</div></td>
								</tr>
								<tr>
									<td>
										<h4 class="ui image header">
											<img src="<?php echo base_url(); ?>assets/img/bank/bni.png" class="ui large rounded image">
											BNI
										</td>
										<td><div class="ui mini right floated positive button">
											Konfirmasi Pesanan
											<i class="right chevron icon"></i>
										</div></td>
									</tr>
							
									</tbody>
								</table>

							</div>
							<!-- end pembayaran content -->

							<!-- kanan -->


							<!-- item -->
							<div class=" five wide column left floated grid">
								<?php  ?>
								<!-- identitas -->
								<div class="ui segment">
									<h4>Identitas & Alamat Pengiriman</h4>
							
									<div class="ui list">
										<div class="item">
											<i class="user icon"></i>
											<div class="content">
												<b><?php echo $user->nama?></b>
											</div>
											
										</div>
										<div class="item">
											<i class="marker icon"></i>
											<div class="content">
												<?php echo $user->alamat?>
											</div>
										</div>
										<div class="item">
											<i class="call icon"></i>
											<div class="content">
												<?php echo $user->telepon?>
											</div>
										</div>
										<div class="item">
											<i class="mail icon"></i>
											<div class="content">
												<?php echo $user->email?>
											</div>
										</div>
									</div>
									<?php   ?>
									
									<!-- end identitas -->
								</div>
								<table class="ui basic table">
									<thead>
										<tr>
											<td><b style="font-size: 17px;">Rincian Pesanan</b></td>
											<td><small>( items)</small></td>
										</tr>
										<tr>
											<th>Produk</th>
											<th>Kuantitas</th>
											<th>Harga</th>
										</tr>
									</thead>
									<tbody>
								<?php 	$total_harga = 0; ?>
								<?php foreach ($product->result() as $row) { ?>
										<tr>
											<td><b><?php echo $model->jenis ?></b>
											<br><?php echo $row->jeniskain?><br>
											Ukuran : <?php echo $row->ukuransendiri?><?php echo $row->ukuran?></td>
											<td><?php echo $row->jumlah?></td>
											<!-- <td>100000</td> -->
											<td><?php 	echo $row->jumlah*100000; ?></td>

										</tr>
										
										
										
										<?php 	$total_harga = $total_harga + ($row->jumlah*100000) ?>
								<?php  } ?>
								<tr>
											<td>Subtotal</td>
											<td></td>
											<td><?php 	echo $total_harga; ?></td>
								</tr>
								<tr>
											<td><b style="font-size: 17px;">Total</b><br><small>(termasuk PPN, jika ada*)</small></td>
											<td></td>
											<td><b style="font-size: 17px;">Rp <?php 	echo $total_harga+3000; ?></b></td>
										</tr>
								</tbody>
								</table>
								<p><i class="protect huge icon"></i>100% PERLINDUNGAN PEMBELI</p>
							</div>
							<!-- end item -->
							<!-- end kanan -->

						</div>
					</div>
					<!-- end content -->

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
									Phone : +6281222333444 <br>
									Alamat : Gegerkalong Girang. 193 , Bandung
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
	<script src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
	<script src="<?php echo base_url().'assets/js/jquery-1.9.1.js' ?>"></script>
	<script src="<?php echo base_url().'assets/vendor/semantic/semantic.js' ?>"></script>
	<script src="<?php echo base_url().'assets/vendor/glidejs/dist/glide.js' ?>"></script>
	<script src="<?php echo base_url().'assets/js/semantic-custom.js' ?>"></script>
				</body>
			</body>
			</html>