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
			<div class="ui four steps">
				<div class="active step">
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
				<div class="step">
					<i class="info icon"></i>
					<div class="content">
						<div class="title">Konfirmasi Order</div>
					</div>
				</div>
			</div>
			<!-- end step -->

			<!-- keranjang content -->
			<table class="ui single line table">
				<thead>
					<tr>
						<th>Detail Pesanan</th>
						<th>Jumlah</th>
						<th>Harga</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php 	$TotalHarga = 0; ?>
				<?php   $id_un = 0; ?>
				<?php foreach ($product->result() as $row) { ?>
					<tr>
						<td>
							<h4 class="ui image header">
								<img src="<?php echo base_url("assets/img/" . $row->gambar) ?>" class="ui massive rounded image">&emsp;
								<div class="content">
									<?php echo $row->jenis ?>
									<div class="sub header">
										<b><?php echo $row->keterangan ?></b>
									</div>
									<div class="sub header">
									 Warna :  <b><?php echo $row->warna ?></b>
									</div>
									<div class="sub header">
									Jenis Kain : <b><?php echo $row->jeniskain ?></b>
									</div>
									<div class="sub header">
									Ketebalan : <b><?php echo $row->ketebalan ?></b>
									</div>
									<div class="sub header">
									Ukuran : <b><?php echo $row->ukuran ?><?php echo $row->ukuransendiri ?></b>
									 
									</div>
									<div class="sub header">
										
									</div>
								</div>
							</h4>
						</td>
						
						<td><?php echo $row->jumlah?></td>
						<?php 	$TotalHarga = $TotalHarga+$row->jumlah*$row->harga ?>
						<td><?php echo $row->jumlah*$row->harga ?></td>
						<td>
							<div class="ui basic icon buttons">

								<div class="ui deleteorder button" data-inverted="" data-tooltip="Hapus Pesanan" data-id="<?php echo $row->id_keranjang ?>" data-position="top left"><i class="trash icon"></i>
								</div>

								<div class="ui editpesanan button" data-inverted="" data-tooltip="Ubah Pesanan" data-id="<?php echo $row->id_keranjang ?>" data-position="top right"><i class="pencil icon" ></i></div>

							</div>
						</td>
					</tr>
							
				<?php  } ?>
				</tbody>
					<tfoot>
						<tr>
							<th><b>Total Harga</b></th>
							<th></th>
							<th><b><?php echo $TotalHarga ?></b></th>
							<th></th>
						</tr>
					</tfoot>
				
			</table>
			<!-- end keranjang content -->

						<!-- modal delete-order -->
							<div class="ui mini deleteorder modal">
								<div class="header">Hapus Pesanan</div>
								<div class="content">
									<p>Apakah anda yakin menghapus pesanan ini?</p>
									
								</div>
								<div class="actions">
									<div class="ui cancel button">Batal</div>
									<a href="<?php echo base_url("c_pemesanan/delete_order"."/".$row->id_keranjang."/".$row->id_user."/".$row->id_model); ?>"><div class="ui  ok negative button" >Hapus</div></a> 
								</div>
							</div>
						<!-- end modal delete-order -->

						

						<!-- Modal Edit pesanan -->
							<div class="ui small editpesanan modal">
								<i class="close icon"></i>
								<div class="header"><center>Edit Pesanan</center></div>
								<div class="content">
									<form action="<?php echo base_url("c_pemesanan/edit_order"."/".$row->id_keranjang."/".$row->id_user."/".$row->id_model); ?>" method="POST" enctype="multipart/form-data">
										<div class="ui form">
											<div class="inline fields">
												<label for="fruit">Pilih warna</label>&thinsp;&thinsp;&thinsp;
												<div class="custom-radios">
													<div class="inline fields">
														<div>
															<input type="radio" id="color-1" name="warna" value="hitam">
															<label for="color-1">
																<span>
																	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
																</span>
															</label>&thinsp;
														</div>

														<div>
															<input type="radio" id="color-2" name="warna" value="merah">
															<label for="color-2">
																<span>
																	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
																</span>
															</label>&thinsp;
														</div>

														<div>
															<input type="radio" id="color-3" name="warna" value="putih">
															<label for="color-3">
																<span>
																	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
																</span>
															</label>&thinsp;
														</div>

														<div>
															<input type="radio" id="color-4" name="warna" value="biru">
															<label for="color-4">
																<span>
																	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
																</span>
															</label>
														</div>
													</div>
												</div>
											</div>

											<div class="inline fields">
												<div class="required field">
														<label>Jenis Kain</label>
														<select class="ui search dropdown" name="jeniskain" required="">
															<option value="">Pilih Jenis Kain</option>
															<option value="Cotton Combed">Cotton Combed</option>
															<option value="CVC">CVC</option>
															<option value="Cotton Bamboo">Cotton Bamboo</option>
														</select>
												</div>
												<div class="field">
														<select class="ui search dropdown" name="ketebalan">
															<option value="">Pilih Ketebalan</option>
															<option value="20s">20s</option>
															<option value="24s">24s</option>
															<option value="30s">30s</option>
														</select>
												</div>
											</div>

											<div class="ui form">
												<div class="inline fields">
													<div class="required field">
														<label>Ukuran</label>&emsp;&thinsp;&thinsp;&thinsp;
														<select class="ui search dropdown" name="ukuran">
															<option value="">Pilih Ukuran</option>
															<option value="S">S</option>
															<option value="M">M</option>
															<option value="L">L</option>
															<option value="XL">XL</option>
														</select>
													</div>
													atau&emsp; 
													<div class="boxes">
														<input class="checkbox" type="checkbox" id="box-1" name="ukuransendiri" value="Kustom">
														<label for="box-1">Ukuran sendiri</label>

													</div>
												</div>
											</div>

											<div class="ui form">
												<div class="inline fields">
													<div class="required field">
														<label>Jumlah</label>&emsp;&thinsp;&thinsp;
														<div class="ui input">
															<input type="number" name="jumlah">
														</div>
													</div>
												</div>
											</div>
						
											<center><button class="positive ui button">Edit</button></center>
										</div>
									</form>
								</div>
							</div>
						<!-- End Modal Edit pesanan -->

			<a href="<?php echo base_url("Welcome/index"); ?>"><button class="ui left labeled icon positive button">
				<i class="left arrow icon"></i>
				Kembali Berbelanja
			</button></a>
			<?php if (isset($row->id_model)) { ?>
				<a href="<?php echo base_url("c_routing/pembayaran"."/".$row->id_model); ?>"><button class="ui right labeled icon positive button">
				Lanjut Pembayaran
				<i class="right arrow icon"></i>
				</button></a>
			<?php } ?>
			<!-- <a href="<?php echo base_url("c_routing/pembayaran"."/".$row->id_model); ?>"><button class="ui right labeled icon positive button">
				Lanjut Pembayaran
				<i class="right arrow icon"></i>
			</button></a> -->

		</div>
	</div>
	<!-- end content -->

	<!-- footer -->
	<div class="ui equal width center aligned grid border-top-custom">
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