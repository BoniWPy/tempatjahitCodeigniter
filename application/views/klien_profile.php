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
				<a href="#" class=" item">
					<i class="shopping bag layout icon"></i> Product
				</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<!-- <a href="<?php echo base_url(); ?>c_login/logout_user" class="item">
					<i class=" icon"></i> Logout
				</a> -->
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
	<div class="ui grid">
		<div class="three wide column right floated">
			<div class="ui secondary vertical pointing menu">
				<a href="<?php echo base_url(); ?>c_user/klien_profile" class="active item">
					Profile
				</a>
				<a href="<?php echo base_url(); ?>c_user/klien_pesanan" class="item">
					Pesanan
				</a>
				
			</div>
		</div>

		<div class="twelve wide  column left floated">
			<h4>Panel Profile</h4>

			<div class="ui row border-top-custom"></div>

			<div class="ui visible message">
				<div class="header">
					<h5><i class="checkmark green icon"></i>Selamat datang di setun taylor</h5>
					&emsp;&thinsp;

					<?php echo $user->nama; ?>
					
					<center> <div class="header">
						Silahkan berbelanja
					<br>
					<br>
					<a href="<?php echo base_url(); ?>Welcome/index">
					<div class="ui orange button">Go shop !</div>
				</a>
					<!-- <button class="">Go Shop!</button> --></center>
				</div>
				
			</div>

			<div class="ui cards">
				
				
				<div class="card">
					<div class="content">
						<div class="header">Informasi Pribadi</div>
						<div class="description">
							<small>Pemesanan & konfirmasi dikirimkan identitas</small><br>
							<i class="id card outline icon"></i>
							<?php echo $user->nama; ?>
							<br>
							<i class="mail outline icon"></i>
							<?php echo $user->email; ?>
							<br>
							<i class="phone icon"></i>
							<?php echo $user->telepon; ?>
							<br>

						</div> <br>
						
					</div>
				</div>
				<div class="card">
					<div class="content">
						<div class="header">Alamat pengiriman utama</div>
						<div class="description">
								<small>Setiap pemesanan akan dikirim ke alamat :</small><br>
							<?php echo $user->alamat; ?>
						</div> <br>
						
					</div>
				</div>
				<div class="card">
					<div class="content">
						<div class="header">Ukuran Custom</div>
						<div class="description">
							<small>Ukuran custom kaos anda, <span style="color: red">*</span>satuan cm</small><br>
							Lingkar Bahu <span style="color: orange; font-weight: bold;"><?php echo $user->lingkarbahu ?></span>&thinsp;|  
							Lingkar Dada <span style="color: orange; font-weight: bold;"><?php echo $user->lingkardada ?></span>
							Lingkar Leher 
							<span style="color: orange; font-weight: bold;"><?php echo $user->lingkarleher ?>
							</span>&thinsp;&thinsp;&thinsp;|
							Lingkar Ketiak <span style="color: orange; font-weight: bold;"><?php echo $user->lingkarketiak ?></span> 
							Lingkar Perut <span style="color: orange; font-weight: bold;"><?php echo $user->lingkarperut ?></span>&thinsp;&thinsp;&thinsp;&thinsp;| 
							Lingkar Pinggul <span style="color: orange; font-weight: bold;"><?php echo $user->lingkarpinggul ?></span>
						</div> <br>
						
					</div>
				</div>&emsp;
				<button class='ui positive login button' style="">
				Ubah profile
				</button>
			</div>
		</div>
	</div>
	
	<!--Edit Modal-->
	<div class="ui basic fullscreen  login modal">
		<i style="color:#fff;" class="close icon"></i>
		<div class="ui grid equal width center aligned container">
			
				<div class="ui grid">
				<div class="ten wide column segment">
					<h4>Identitas</h4>
					<form class="ui form" action="<?php echo base_url("c_user/edit_userr"); ?>" method="POST">
						<div class="field">
							<label style="color:white; float:left;">Nama Lengkap</label>
							<input placeholder="Nama Lengkap" name="nama" value="<?php echo $user->nama; ?>" type="text">
						</div>
						<div class="field">
							<label style="color:white; float:left;">Alamat Email</label>
							<input placeholder="Email" name="email" value="<?php echo $user->email; ?>" type="text">
						</div>
						<div class="field">
							<label style="color:white; float:left;">No. Telepon</label>
							<input placeholder="Telepon" name="telepon" value="<?php echo $user->telepon; ?>" type="text">
						</div>
						<div class="field">
							<label style="color:white; float:left;">Alamat Pengiriman</label>
							<textarea placeholder="Alamat Lengkap" name="alamat"  rows="2"><?php echo $user->alamat; ?></textarea>
						</div>
						<input type="hidden" name="id_user" value="<?= $user->id ?>" />
						<input type="hidden" name="tipe_ubah" value="profile" />
						<button class="positive ui button" type="submit">Submit</button>
					</form>
				</div>
				<div class="six wide column segment">
					<h4>Custom Ukuran</h4>
					<div class="ui tiny visible message">
						<p>Ukuran dalam satuan Centimeters(cm), untuk melihat posisi ukuran. <b><a href="">Lihat contoh</a></b></p>
						<div class="ui small image" style="width:40%;">
							<img src="<?php echo base_url(); ?>assets/img/size-tshirt.jpg">
						</div>
					</div>
					<form class="ui form" action="<?php echo base_url("c_user/edit_userr"); ?>" method="POST">
						<div class="fields">
							<div class="five wide field">
								<label style="color:white; float:left;">Lingkar Bahu</label>
								<input placeholder="Bahu" name="lingkarbahu" value="<?php echo $user->lingkarbahu; ?>" type="number" min="0">
							</div>
							<div class="five wide field">
								<label style="color:white; float:left;">Lingkar Dada</label>
								<input placeholder="Dada" name="lingkardada" value="<?php echo $user->lingkardada; ?>" type="number" min="0">
							</div>
							<div class="five wide field">
								<label style="color:white; float:left;">Lingkar Leher</label>
								<input placeholder="Leher" name="lingkarleher" value="<?php echo $user->lingkarleher; ?>"type="number" min="0">
							</div>
						</div>
						<div class="fields">
							<div class="five wide field">
								<label style="color:white; float:left;">Lingkar Ketiak</label>
								<input placeholder="Ketiak" name="lingkarketiak" value="<?php echo $user->lingkarketiak; ?>" type="number" min="0">
							</div>
							<div class="five wide field">
								<label style="color:white; float:left;">Lingkar Perut</label>
								<input placeholder="Perut" name="lingkarperut" value="<?php echo $user->lingkarperut; ?>" type="number" min="0">
							</div>
							<div class="five wide field">
								<label style="color:white; float:left;">Lingkar Pinggul</label>
								<input placeholder="Pinggul" name="lingkarpinggul" value="<?php echo $user->lingkarpinggul; ?>" type="number" min="0">
							</div>
						</div>
						<input type="hidden" name="id_user" value="<?= $user->id ?>" />
						<input type="hidden" name="tipe_ubah" value="ukuran" />
						<button class="positive ui button" type="submit">Submit</button>
					</form>
				</div>
			</div>



			</div>
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
	<script src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
	<script src="<?php echo base_url().'assets/js/jquery-1.9.1.js' ?>"></script>
	<script src="<?php echo base_url().'assets/vendor/semantic/semantic.js' ?>"></script>
	<script src="<?php echo base_url().'assets/vendor/glidejs/dist/glide.js' ?>"></script>
	<script src="<?php echo base_url().'assets/js/semantic-custom.js' ?>"></script>
</body>
</html>