<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>taylor</title>


	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/semantic/semantic.css' ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/glidejs/dist/css/glide.core.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/glidejs/dist/css/glide.theme.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom-style.css' ?>">
</head>
</head>
<body style="background-color:#fff">

	<!-- navbar -->
	<div class="ui inverted segment">
		<div class="ui attached stackable inverted secondary pointing large menu">
			<div class="ui container">
				<div class="header item">
					TempatJahit.com
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
	<!-- Modal Login -->
	<div class="ui basic fullscreen  login modal">
		<i style="color:#fff;" class="close icon"></i>
		<div class="ui grid equal width center aligned container">
			<div class=" seven wide column ">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<h2 style="color:#fff;">Login</h2>
				<form class="ui form"  method="post" action="<?php echo base_url("c_login/user"); ?>">
					<div class="field">
						<input type="email" name="email" placeholder="email" required>
					</div>
					<div class="field">
						<input type="password" name="password" placeholder="password" required>
					</div>
					<button class="positive ui button" type="submit" style="width:100%;height:50px;font-size:20px;">Login</button>
				</form>
				<br>
				<br>
				
			</div>
			<div class="one wide column">
				<hr style="height:250px;width:0.1px" color="grey"/>
				<h5 style="color:#fff;">Atau</h5>
				<hr style="height:250px;width:0.1px" color="grey"/>
			</div>
			<div class="column">	
				<form class="ui form" method="post" action="<?php echo base_url("c_login/insert_user"); ?>">
					<div class="field"><br>
						<center><h2 style="color:#fff;">Daftar Sekarang</h2></center>
						<br>  
						
						<input class="users icon" type="text" name="nama" placeholder="nama" required>
						
					</div>
					<div class="field">
						
						<input type="email" name="email" placeholder="Email" required>
						
					</div>
					<div class="field">
						
						<input type="password" name="password" placeholder="password" min="6" required>
						
					</div>
					<div class="field">
						
						<textarea rows="3" type="text" name="alamat" placeholder="Masukan alamat lengkap" required></textarea>
						
					</div>
					<div class="field">
						
						<input type="number" min="0" name="telepon" placeholder="Telepon" required>
						
					</div>

					<hr size="" color="grey">
					<label><h3 style="color:#fff;">Masukan Ukuran</h3></label>

					<div class="fields">
						<div class="four wide field">
							<label style="color:#fff;" >Lingkar Bahu</label>
							<input placeholder="cm" type="number" min="0" name="lingkarbahu" required>
						</div>
						<div class="four wide field">
							<label style="color:#fff;" >Lingkar Dada</label>
							<input placeholder="cm" type="number" min="0" name="lingkardada" required>
						</div>
						<div class="four wide field">
							<label style="color:#fff;">Lingkar Leher</label>
							<input placeholder="cm" type="number" min="0" name="lingkarleher" required>
						</div>
					</div>
					
					<div class="fields">
						<div class="four wide field">
							<label style="color:#fff;">Lingkar Ketiak</label>
							<input placeholder="cm" type="number" min="0" name="lingkarketiak" required>
						</div>
						<div class="four wide field">
							<label style="color:#fff;">Lingkar Perut</label>
							<input placeholder="cm" type="number" min="0" name="lingkarperut" required>
						</div>
						<div class="four wide field">
							<label style="color:#fff;">Lingkar Pinggul</label>
							<input placeholder="cm" type="number" min="0" name="lingkarpinggul" required>
						</div>
						<div class="four wide field">
							<br>
							<div class="tiny ui inverted basic green  button" style="float:right;"><a href="https://www.youtube.com" target="_blank">Lihat cara mengukur disini</a></div>
						<!-- <div class="tiny ui inverted basic green  button" style="float:right;">Lihat cara mengukur disini</div> --> 
					</div>
					</div>
					<button class="positive ui button" type="submit" style="width:100%;height:50px;font-size:20px;">Daftar</button>
				</form>
			</div>

		</div>



	</div>
	<!-- end modal login-->
	<!-- modal Login dulu -->
		<div class="ui mini login_dulu modal">
			<div class="header"></div>
			<div class="content">
				<p>Silahkan Login dahulu untuk berbelanja</p>
			</div>
			<div class="actions">
				<div class="ui cancel button">Cancel</div>
				
				<div class="ui positive login button" >Login</div>
			</div>
		</div>
	<!-- end modal Login dulu -->
<!-- Modal View Ukur -->
	
<!-- End Modal View Ukur -->

	<!-- carousel -->
	<div id="Glide" class="glide">
		<div class="glide__arrows">
			<button class="glide__arrow prev" data-glide-dir="<">prev</button>
			
			<button class="glide__arrow next" data-glide-dir=">">next</button>
		</div>
		<div class="glide__wrapper">
			<ul class="glide__track">

				<li class="glide__slide"><img src="<?php echo base_url().'assets/img/carousel/1.jpg' ?>"></li>
				<li class="glide__slide"><img src="<?php echo base_url().'assets/img/carousel/2.jpg' ?>"></li>
				<li class="glide__slide"><img src="<?php echo base_url().'assets/img/carousel/3.jpg' ?>"></li>
				<li class="glide__slide"><img src="<?php echo base_url().'assets/img/carousel/4.jpg' ?>"></li>
			</ul>
		</div>
		<div class="glide__bullets"></div>
	</div>
	<!-- end carousel -->

	<div class="ui equal width center aligned grid container" id="products">
		<div class="eight wide column">
			<br>
			<br>
			<h2>Order or custom</h2>
			<p>Dengan model yang tersedia anda bisa memilih langsung ukuran atau bisa memilih ukuran yang tersedia ataupun bisa membuat sesuai ukuran yang anda inginkan.</p>
			<h3>Best Seller</h3>
		</div>
		

		<div class="row">
			<div class="column">
				<div class="ui centered special cards">
					<!-- card -->
					<?php foreach ($products->result() as $row) { ?>
					<div class="ui card">
						<div class="blurring dimmable image">
							<div class="ui dimmer">
								<div class="content">
									<div class="center">
										<?php if (isset($user->nama)){ ?>
											<a href="<?php echo base_url("c_routing/kustom"."/".$row->id); ?>">
												<div class="positive ui button">Beli / Kustom</div>
											</a>
										<?php } else { ?>
											<div class='ui login_dulu button' style=' color:#fff; background-color:transparent; margin-top: 5px;'>
												<div class="positive ui button">Beli / Kustom</div>
											</div>
										<?php } ?>
										
									</div>
								</div>
							</div>
							<img src="<?php echo base_url("assets/img/".$row->gambar ) ?>">
						</div>
						<div class="content">
							<h3><?php echo $row->jenis?></h3>
							<div class="meta">
								<span class="date"><?php echo $row->keterangan?></span>
							</div>
							<div class="meta">
								<span class="price">Rp <?php echo $row->harga?></span>
							</div>
						</div>
					</div>
					<?php } ?>
					<!-- end card -->
				</div>
			</div>
		</div>
	</div>
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->

<!-- footer -->
<div class="ui equal width center aligned grid border-top-custom">
	<div class="row">
		<div class=" column" style="text-align: left; padding: 30px 60px;">
			<h4>TempatJahit.com</h4>
			<p style="font-size: 11px;">Dengan keunggulan yang kami tawarkan, kami harapkan semoga anda bisa menikmati kebebasan disaat berbelanja baju/kemeja/jacket dengan ukuran yang ditentukan sendiri dan juga bahan yang kami sudah sediakan sesuai model pakaian. Kenikmatan kami adalah kepuasan anda disaat berbelanja di toko TempatJahit.com.</p>
		</div>
		<div class=" column" style="text-align: left; padding: 30px 60px">
			<h4>Penjahit & Bahan</h4>
			<p style="font-size: 11px;">Penjahit yang handal dalam setiap model dan sudah terpercaya, selain itu juga bahan yang kami tawarkan dalah bahan dengan kualitas No. 1 pada setiap model.</p>
		</div>
		<div class=" column" style="text-align: left; padding: 30px 60px;">
			<h4>Hubungi Kami</h4>
			<p style="font-size: 11px;">
				<i class="whatsapp icon"></i>Phone/whatsapp : +628112107299 <br>
				<i class="marker icon"></i>Alamat : Komplek Lapan No 4 , Bandung
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
			<p style="font-size: 11px;">TempatJahit.com  <i class="copyright icon"></i><?php echo date('Y')?></p>
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