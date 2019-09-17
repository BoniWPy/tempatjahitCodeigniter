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
<body>

	<!-- sidebar -->
	<div class="ui left fixed inverted vertical menu">
		<div class="item">
			<img class="ui image" src="<?php echo base_url(); ?>assets/img/setunTaylorWhite.png">
		</div>
		<a class="item disabled"><h3 style="color: white;">Dashboard</h3></a>
		<a href="<?php echo base_url('c_admin/v_admin'); ?>" class="item"> <i class="users icon"></i>Daftar Client</a>
		<a href="<?php echo base_url('c_admin/v_admin_klien_order'); ?>" class="active item"><i class="shopping basket icon"></i>Daftar Order</a>
		<a href="<?php echo base_url('c_admin/v_admin_laporan'); ?>" class="item"><i class="sticky note outline icon"></i>Laporan</a>
		
	</div>
	<!-- end sidebar -->

	<!-- body content -->
	<div class="body-dashboard-admin">
		<div class="ui grid">
			<div class=""><br>
				<h3 style="color:white;">Selamat datang ,<br>   
					<?php echo $this->session->userdata('username'); ?></h3>
					<div class="ui compact menu">
						<div class="ui simple dropdown item">
							<i class="user icon"></i>
							<i class="dropdown icon"></i>
							<div class="menu">
								<a href="<?php echo base_url(); ?>c_login/logout_admin"><div class=" right item">Logout</div></a>
							</div>
						</div>
					</div>
			</div>


				<div class="sixteen wide column">
					
					
					<table class="ui single line table" style="margin-left: 3px;">
						<thead>
							<tr>
								<th class="collapsing"><i></i> No</th>
								<th><i></i> Deskripsi Pesanan</th>
								<th><i></i Klien></th>
								<th><i></i>Alamat pengiriman</th>
								<th><i></i> Status</th>
								<th class="collapsing"><i class="options grey icon"></i> Action</th>
							</tr>
						</thead>
						<tbody>
							
						<?php 	$i = 1 ?>
						<?php foreach ($products->result() as $orderan) { ?>
							<tr>
								<td><?php 	echo $i; ?></td>
								<td>
									<h4 class="ui image header">
										<img src="<?php echo base_url(); ?>assets/img/bajuhitam1.jpg" class="ui massive rounded image">
									</h4>
									<b>Kaos</b><br>
									Warna :<?php echo $orderan->warna?> <br>
									Kain : <?php echo $orderan->jeniskain?> <br>
									Ukuran : <?php echo $orderan->ukuransendiri?><?php echo $orderan->ukuran?>
								</td>
								<?php foreach ($user->result() as $row) { ?>
										<?php 	if ($orderan->id_user == $row->id) {?>
											<td>
											<?php echo $row->nama?>
										</td>
								
										<td>
											<?php echo $row->alamat?>
										</td>

										<td>
											<?php echo $orderan->status?>
										</td>

										<?php } ?>
										
								
								<?php  } ?>
								
								<td>
									<div class="ui icon small buttons">
										<div class="ui basic blue view-user-for-admin button" data-inverted="" data-tooltip="View Ukuran Pesanan" data-position="top right"><i class="unhide icon" ></i></div>
										<div class="ui basic green edit-user-for-admin button" data-inverted="" data-tooltip="Ubah Status Pesanan" data-position="top right"><i class="pencil icon" ></i></div>
										<button class="ui red basic delete-user-for-admin button" data-tooltip="Delete" data-position="top right">
											<i class="trash icon"></i>
										</button>

									</div>
								</td>
							</tr>
						<?php  $i++; } ?>
							
						</tbody>
					</table>

					<!-- modal delete-order -->
						<div class="ui mini delete-user-for-admin modal">
							<div class="header">Hapus Order</div>
							<div class="content">
								<p>Apakah anda yakin menghapus ini?</p>
							</div>
							<div class="actions">
								<div class="ui cancel button">Batal</div>
								<a href="<?php echo base_url("c_admin/delete_order"."/".$orderan->id_keranjang); ?>">
									<div class="ui negative button">Hapus</div>
								</a>
							</div>
						</div>
					<!-- End Modal Hapus -->

					<!-- Modal Edit pesanan -->
							<div class="ui mini edit-user-for-admin modal">
								<i class="close icon"></i>
								<div class="header"><center>Edit Status</center></div>
								<div class="content">
									<form action="<?php echo base_url("c_admin/edit_order_status"."/".$orderan->id_keranjang); ?>" method="POST" enctype="multipart/form-data">
										<div class="ui form">
											<div class="inline fields">
												<div class="required field">
														<label>Status</label>
														<select class="ui search dropdown" name="status" required="">
															<option value="">Pilih Status</option>
															<option value="menunggu konfimasi">Menunggu Konfirmasi</option>
															<option value="Sedang Di Proses">Sedang Di Proses</option>
															<option value="Selesai">Selesai</option>
														</select>
												</div>
												
											</div>

											<center><button class="positive ui button">Edit</button></center>
										</div>
									</form>
								</div>
							</div>
						<!-- End Modal Edit pesanan -->

						<!-- Modal View Ukuran -->
							<div class="ui mini view-user-for-admin modal">
											<i class="close icon"></i>
											<div class="header">
												<h3>Ukuran Klien</h3>
											</div>
											<div class="content">
													<div class="ui cards">
														<div class="card">
															<div class="content">
																<div class="header">Ukuran Custom</div>
																<div class="description">
																	<br>
																	<?php foreach ($user->result() as $row) { ?>
																			<?php 	if ($orderan->id_user == $row->id) {?>
																				Lingkar Bahu <span style="color: orange; font-weight: bold;"><?php echo $row->lingkarbahu; ?></span>&thinsp;|  
																				Lingkar Dada <span style="color: orange; font-weight: bold;"><?php echo $row->lingkardada; ?></span><br>
																				Lingkar Leher 
																				<span style="color: orange; font-weight: bold;"><?php echo $row->lingkarleher; ?>	
																				</span>&thinsp;&thinsp;&thinsp;|
																				Lingkar Ketiak <span style="color: orange; font-weight: bold;"><?php echo $row->lingkarketiak; ?></span><br> 
																				Lingkar Perut <span style="color: orange; font-weight: bold;"><?php echo $row->lingkarperut; ?></span>&thinsp;&thinsp;&thinsp;&thinsp;| 
																				Lingkar Pinggul <span style="color: orange; font-weight: bold;"><?php echo $row->lingkarpinggul; ?></span>

																			<?php } ?>
																			
																	
																	<?php  } ?>
																	
																</div> <br>

															</div>
														</div>
													</div>
											</div>

							</div>
						<!-- End Modal View-Ukuran -->

				</div>

				
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