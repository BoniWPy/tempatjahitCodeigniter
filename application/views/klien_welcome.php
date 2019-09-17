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
					Setun Taylor
				</div>
				
				<a href="<?php echo base_url('Welcome/index'); ?>" class="item">
					<i class="home icon"></i> Home
				</a>
				<a href="#eight" class="active item">
					<i class="shopping bag layout icon"></i> Product
				</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;


				<?php
					if(isset($username)){
						echo "<a href='#'><div class='ui  button' style=' color:#fff; background-color:transparent; height20px;'>
					<i class='user icon'>Hi, $username</i>
						</div></a>";
						echo "<div class='ui  button' style=' color:#fff; background-color:transparent; margin-top: 5px;'>
						Logout
						</div>";
					}

					else{
						echo "<div class='ui login button' style=' color:#fff; background-color:transparent; margin-top: 5px;'>
					<i class='user icon'>Login/Register</i>
						</div>";
					}

				?>
				</a>
				<a class=" right item">
					
				</a>
			</div>
		</div>
	</div>
	

	<div class="ui equal width center aligned grid container">
		<div class="eight wide column">
			<br>
			<br>
			<h2>Selamat Datang, <?php echo $username; ?></h2>
			<h3>Username baru anda adalah <?php echo $email; ?></h3>
			<br>
			<p>terima kasih telah membuat akun Setun Taylor.</p>
			<br><br><br><br><br>
			<a href="<?php echo base_url("c_user/klien_profile"); ?>">
				<div class="positive ui button">Lanjutkan</div>
			</a>
		</div>
	</div>

<br><br><br><br><br><br><br><br><br>
<!-- footer -->
<div class="ui equal width center aligned grid border-top-custom">

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