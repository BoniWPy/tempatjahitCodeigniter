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
						<div class=" step">
							<i class="truck icon"></i>
							<div class="content">
								<div class="title">Pengiriman & Pembayaran</div>
							</div>&emsp;
							<i class="payment icon"></i>
						</div>
						<div class="active step">
							<i class="info icon"></i>
							<div class="content">
								<div class="title">Konfirmasi Order</div>
							</div>
						</div>
					</div>
					<!-- end step -->

					<!-- total bayar -->
					<?php 	$total_harga_a = 0; ?>
								<?php foreach ($product->result() as $row) { ?>
								<?php 	if ($user->id == $row->id_user) {?>
									<?php 	$total_harga_a = $total_harga_a+ $row->jumlah*100000; ?>
								<?php 	} ?>
								<?php  } ?>
					<!-- End total bayar -->

					<!-- confirmation content --> 
					<div class="ui eight wide column right floated segment gird">

						<h3><i class="checkmark green icon"></i>Selamat</h3>
						<p>Hi, <b><?php echo $user->nama;?></b></p>
						<p>Terima kasih telah berbelanja di Setun Taylor <br>Mohon lakukan pembayaran pesanan Anda sejumlah <b>Rp. <?php echo $total_harga_a+3000; ?></b> ke Rekening BCA <b style="color: orange">885575112431851</b>  dalam jangka waktu <b>24 Jam</b>. jumlah tersebut sudah termasuk ongkos kirim .</p>
						<p>	Jika pembayaran tidak dilakukan dalam kurun waktu tersebut maka pesanan akan dibatalkan.</p>
						<p><b>Info Penting:</b> Silahkan catat nomor Virtual Account Anda <b style="color: orange">885575112431851</b> atau lihat Email Anda untuk informasi.</p>

						</div>

					<div class="ui seven wide column left floated segment gird">

						<h3><i class="credit card alternative green icon"></i> ATM BCA, Mandiri, BNI & Bank Lainnya</h3>
						<div class="ui info message">
							Silahkan ikuti petunjuk dibawah ini untuk memproses pemasanan barang Anda.
						</div>

						<ol class="ui list">
							<li>Masukan kartu Anda</li>
							<li>Pilih Bahasa</li>
							<li>Masukan PIN ATM Anda</li>
							<li>Pilih <b>"Menu Lainnya"</b></li>
							<li>Pilih <b>"Transfer"</b></li>
							<li>Pilih <b>"Rekening Tabungan"</b></li>
							<li>Pilih <b>"Ke Rekening BCA"</b></li>
							<li>Masukan nomor rekening tujuan <b style="color: orange">885575112431851</b></li>
							<li>Masukan nominal transfer (<b>Rp. <?php echo $total_harga_a+3000; ?></b>)</li>
							<li>Konfirmasi pemindahbukuan</li>
							<li>Transaksi telah selesai</li>
						</ol>

						</div>

						<div class="ui sixteen wide column centered" style="margin-top: 15px;">

						<table class="ui single line table">
							<thead>
								<tr>
								
									<th>Identias, Alamat dan Item Pemesan</th>
									<th></th>
									<th>

									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<b><?php echo $user->nama?></b><br>
										<?php echo $user->alamat?><br>
										<?php echo $user->telepon?> <br>
										<b>Email konfirmasi dikirimkan</b> ke alamat email Anda <b><?php echo $user->email?></b> <br>
									</td>
									<td></td>
									<td>
										<a href="<?php echo base_url("c_routing/bukti_pesanan"."/".$row->id_model); ?>"> 
											<div class="positive ui button"><i class="print icon" ></i>Print Bukti Pesanan</div>
										</a>			
									</td>
								</tr>
								<?php 	$total_harga = 0; ?>
								<?php foreach ($product->result() as $row) { ?>
								<?php 	if ($user->id == $row->id_user) {?>
									<tr>
									<td>
									
										<h4 class="ui image header">
											<img src="<?php echo base_url("assets/img/" . $row->gambar) ?>" class="ui massive rounded image">&emsp;
											<div class="content">
												<?php echo $model->jenis; ?>
												<div class="sub header">
													Desikripsi : <br>
													Warna: <?php echo $row->warna?><br>
													Jenis Kain : <?php echo $row->jeniskain?> <?php echo $row->ketebalan?><br>
													 Ukuran : <?php echo $row->ukuransendiri?> <br>
													Kuantitas : <?php echo $row->jumlah?>
												</div>
												
											</div>
										</h4>
									</td>
									<td class="right aligned"><b></b></td>
									<td><b>Rp. <?php 	echo $row->jumlah*100000; ?></b></td>
									<?php 	$total_harga = $total_harga+ $row->jumlah*100000 ?>
								</tr>
								<?php 	} ?>
								<?php  } ?>
								<tr>
									<td></td>
									<td class="right aligned">Subtotal <br> <span style="color: green;">Biaya Pengiriman</span></td>
									<td>Rp. Rp <?php 	echo $total_harga; ?> <br><span style="color: green;">Rp. 3.000</span></td>
								</tr>
								<tr>
									<td></td>
									<td class="right aligned"><b>Total (Termasuk Pajak)</b><br>Dibayar dengan ATM BCA</td>
									<td><h3 style="color: orange;">RP. <?php echo $total_harga+3000; ?></h3></td>
								</tr>
							</tbody>
						</table>
							
					</div>
					<!-- end confirmation content -->

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
</html>
