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
				<a href="<?php echo base_url(); ?>setun/index.php/Welcome/index" class="item">
					<i class="home icon"></i> Home
				</a>
				<a href="#" class="active item">
					<i class="shopping bag layout icon"></i> Product
				</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<div class="ui login button" style=" color:#fff; background-color:transparent; margin-top: 5px;">
					<i class="user icon"></i>Punya akun ?
				</div>

				<a class=" right item">
					<i class="shop icon"></i>
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
				<a href="<?php echo base_url(); ?>c_routing/klien_profile" class=" item">
					Profile
				</a>
				<a href="<?php echo base_url(); ?>c_routing/klien_pesanan" class="item">
					Pesanan
				</a>
				<a href="<?php echo base_url(); ?>c_routing/klien_kelolainformasi" class="active item">
					Kelola Informasi
				</a>
			</div>
		</div>

		<div class="twelve wide column left floated">
			<h4>Panel Kelola Informasi</h4>

			<div class="ui border-top-custom" style="margin-bottom: 25px;"></div>

			<div class="ui grid">
				<div class="ten wide column segment">
					<h4>Identitas</h4>
					<form class="ui form">
						<div class="field">
							<label>Nama Lengkap</label>
							<input placeholder="Nama Lengkap" type="text">
						</div>
						<div class="field">
							<label>Alamat Email</label>
							<input placeholder="Email" type="text">
						</div>
						<div class="field">
							<label>No. Telepon</label>
							<input placeholder="Telepon" type="text">
						</div>
						<div class="field">
							<label>Alamat Pengiriman</label>
							<textarea placeholder="Alamat Lengkap" rows="2"></textarea>
						</div>
						<button class="positive ui button" type="submit">Submit</button>
					</form>
				</div>
				<div class="six wide column segment">
					<h4>Custom Ukuran</h4>
					<div class="ui tiny visible message">
						<p>Ukuran dalam satuan Centimeters(cm), untuk melihat posisi ukuran. <b><a href="">Lihat contoh</a></b></p>
					</div>
					<form class="ui form">
						<div class="fields">
							<div class="five wide field">
								<label>Lingkar Bahu</label>
								<input placeholder="Bahu" type="number" min="0">
							</div>
							<div class="five wide field">
								<label>Lingkar Dada</label>
								<input placeholder="Dada" type="number" min="0">
							</div>
							<div class="five wide field">
								<label>Lingkar Leher</label>
								<input placeholder="Leher" type="number" min="0">
							</div>
						</div>
						<div class="fields">
							<div class="five wide field">
								<label>Lingkar Ketiak</label>
								<input placeholder="Ketiak" type="number" min="0">
							</div>
							<div class="five wide field">
								<label>Lingkar Perut</label>
								<input placeholder="Perut" type="number" min="0">
							</div>
							<div class="five wide field">
								<label>Lingkar Pinggul</label>
								<input placeholder="Pinggul" type="number" min="0">
							</div>
						</div>
						<button class="positive ui button" type="submit">Submit</button>
					</form>
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