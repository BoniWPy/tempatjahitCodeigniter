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
		<a href="<?php echo base_url('c_admin/v_admin'); ?>" class="active item"> <i class="users icon"></i>Daftar Client</a>
		<a href="<?php echo base_url('c_admin/v_admin_klien_order'); ?>" class="item"><i class="shopping basket icon"></i>Daftar Order</a>
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
								<th class="collapsing"><i class="id card outline grey icon"></i> ID</th>
								<th><i class="address book outline grey icon"></i> Nama</th>
								<th><i class="mail outline grey icon"></i> Email</th>
								<th><i class="phone icon"></i> telepon</th>
								<th><i class="marker grey icon"></i> Alamat</th>
								<th class="collapsing"><i class="options grey icon"></i> Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($user->result() as $row) { ?>
							<tr>
								<td><?php echo $row->id?></td>
								<td><?php echo $row->nama?></td>
								<td><?php echo $row->email?></td>
								<td><?php echo $row->telepon?></td>
								<td><?php echo $row->alamat?></td>
								<td>

									
									
									<div class="ui icon small buttons">
										<a href="<?php echo base_url("c_admin/check_profile"."/".$row->id); ?>">
											<div class=" ui basic blue button">
												<i class="unhide icon"></i>
											</div>
										</a>
										<!-- <div class="tiny ui  basic blue button view-ukur button" data-inverted="" data-tooltip="view profile" data-position="top right"><i class="unhide icon"></i></div> -->

										<div class="ui red basic deleteorder button" data-inverted="" data-tooltip="Hapus user" data-position="top right">
											<i class="trash icon"></i>
										</div>
										<!-- modal delete-order -->
											<div class="ui mini deleteorder modal">
												<div class="header">Hapus user</div>
												<div class="content">
													<p>Apakah anda yakin menghapus ini?</p>
												</div>
												<div class="actions">
													<div class="ui cancel button">Batal</div>
													<a href="<?php echo base_url("c_user/delete_user"."/".$row->id); ?>">
														<div class="ui negative button">Hapus</div>
													</a>
												</div>
											</div>
										<!-- End Modal Hapus -->
							<?php } ?>
										<!-- Modal View Profile -->
										<div class="ui large view-ukur modal">
											<i class="close icon"></i>
											<div class="header">
												<h3>Profile Klien</h3>
											</div>
											
											<div class="content">
												<div class="ui cards">
													<div class="card" style="margin-right: 15px;">
														<div class="content">
															<div class="header">Identitas</div>
															<i class="id card outline icon"></i>
															id
															<br>
															<i class="mail outline icon"></i>
															email
															<br>
															<i class="phone icon"></i>
															telepon
														</div>
													</div>
													&emsp;
													&emsp;
													&emsp;

													<div class="ui cards">
														<div class="card" style="margin-right: 15px;">
															<div class="content">
																<div class="header">Alamat</div>
																<i class="marker icon"></i>
																Alamat
																<br>
															</div>
														</div>
														&emsp;
														&emsp;
														&emsp;
														<div class="card">
															<div class="content">
																<div class="header">Ukuran Custom</div>
																<div class="description">
																	<br>
																	Lingkar Bahu <span style="color: orange; font-weight: bold;">12</span>&thinsp;|  
																	Lingkar Dada <span style="color: orange; font-weight: bold;">12</span>
																	Lingkar Leher 
																	<span style="color: orange; font-weight: bold;">12	
																	</span>&thinsp;&thinsp;&thinsp;|
																	Lingkar Ketiak <span style="color: orange; font-weight: bold;">12</span> 
																	Lingkar Perut <span style="color: orange; font-weight: bold;">12</span>&thinsp;&thinsp;&thinsp;&thinsp;| 
																	Lingkar Pinggul <span style="color: orange; font-weight: bold;">12</span>
																</div> <br>

															</div>
														</div>
													</div>

												</div>
											</div>
										</div>
										<!-- End Modal View-Profile -->
									</div>
								</td>
							</tr>
							
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