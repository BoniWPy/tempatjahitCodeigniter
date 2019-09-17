<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>taylor</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/semantic/semantic.css' ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/glidejs/dist/css/glide.core.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/glidejs/dist/css/glide.theme.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom-style.css' ?>">
</head>
<body style="background-color:#fff">
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
				</a>

				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;


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
				<a class="section">Product</a>
				<div class="divider"> / </div>
				<div class="active section">Kaos</div>
			</div>
		</div>
		<!-- end breadcrumb -->
		<div class="row border-top-custom">
			<!-- form order -->
			<?php foreach ($product as $row) { ?>

			<div class="seven wide column">
				<img class="ui large rounded image bordered" src="<?php echo base_url("assets/img/" . $row['gambar'] ) ?>">
			</div>

			<div class="row border-top-custom"></div>
			<div class="nine wide column left aligned">
				<h2><?php echo $row['jenis']; ?></h2>
				<p style="font-size: 13px; color: grey; text-align: justify;"><?php echo $row['keterangan'] ?><p>
					<p><?php echo $row['harga'] ?></p>
					<br>
					<form method="post" action="<?php echo base_url("c_pemesanan/insert_order"."/".$row['id']); ?>" enctype="multipart/form-data">

						<input type="hidden" name="id_model" value="<?php echo $row['id']?>">


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
							<div class="ui form">
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
										<select class="ui search dropdown" name="ketebalan" required="">
											<option value="">Pilih Ketebalan</option>
											<option value="20s">20s</option>
											<option value="24s">24s</option>
											<option value="30s">30s</option>
										</select>
									</div>

									<div class="tiny circular ui teal basic icon jeniskain button">
										<i class="icon info"></i>Info kain
									</div>

									<!-- modal jenis kain -->
									<div class="ui jeniskain modal">
										<i class="close icon"></i>
										<div class="header">
											<h3>Informasi Jenis Kain</h3>
										</div>
										<div class="row border-top-custom">
											<div class="content">
												<div class="ui equal width center aligned padded grid">
													<div class="row">
														<div class="column" style="padding: 0px 30px; text-align: justify;">
															<h4>Cotton Combed</h4>
															<p>Katun Combed adalah jenis bahan kain katun yang paling banyak beredar di pasaran. Katun Combed menjadi bahan favorit konsumen industri konveksi kaos dikarenakan bahannya yang lembut dan halus.
																Sifatnya yang human friendly membuat Katun Combed menjadi juara unggulan. Hingga kini, belum ada bahan lain yang mampu menandingi penjualannya di sektor pakaian untuk segmen menengah ke atas.
																Pada proses pembuatannya, Katun Combed melalui proses yang panjang. Serat kain Katun Combed diproses secara khusus sebelum diputar di mesin pemintal. Salah satu proses yang paling terkenal adalah carding, yaitu penyisihan kain dari benang kasar.
																Setelahnya, bahan kain ini diseleksi lagi dengan proses combing, yaitu seleksi dari bulu-bulu sisa. Itulah mengapa disebut combed, karena bahan katun ini telah melewati tahap combing.
																Kaos dengan bahan Katun Combed sangat cocok digunakan di daerah beriklim tropis seperti di Indonesia karena sifatnya yang menyerap keringat.
																Secara umum, Katun Combed lebih mahal dibandingkan kain katun lainnya. Karena sifatnya yang sangat halus dan kuat, bahan Katun Combed sering digunakan sebagai bahan dasar sprei, kaos, kaos kaki, piyama dan bahan pakaian lainnya yang bersentuhan langsung dengan kulit.
															</p>
														</div>
														<div class="column" style="padding: 0px 30px; text-align: justify;">
															<h4>CVC</h4>
															<p>Chief Value Cotton (CVC) merupakan jenis bahan kaos polos yang dibuat dengan mengkombinasi kain Polyester dengan Cotton, dengan perbandingan komposisi Cottonnya sama atau lebih dominan dibandingkan dengan Polyesternya.  Biasanya komposisi kain yang digunakan memiliki perbandingan 55% Cotton dan 45% Polyester, 60% Cotton dan 40% Polyester atau 50% Cotton dan 50% Polyester.  Dengan demikian bisa disimpulkan bahwa untuk jenis kain CVC, kandungan serat kapas alaminya bisa sama atau lebih besar dari kandungan Polyesternya sehingga memiliki karakteristik yang berbeda dengan jenis kain TC.  Jenis kain Chief Value Cotton (CVC) banyak digunakan untuk pembuatan kaos oblong polos maupun sablon.Jenis kain ini memiliki hygienic properties yang lebih baik jika dibandingkan dengan jenis kain TC.Karakteristiknya lebih kuat jika dibandingkan dengan jenis kain Cotton yang mengandung 100% serat kapas alami.
															</p>
														</div>
														<div class="column" style="padding: 0px 30px; text-align: justify;">
															<h4>Cotton Bamboo</h4>
															<p>Sama halnya dengan bahan combet yang juga dari alam. Kalau bahan combet berasal dari bahan serat kapas sedangkan cotton bambu berasal dari serat bambu. Keduanya mempunyai sifat yang hampir mirip sehingga orang lebih mudah menyebutnya dengan nama Cotton Bamboo. Lantas apa sih yang menyebabkan bahan kaos cotton bamboo diasumsikan sebagai bahan kaos ternyaman dan terbaik. Berikut beberapa kelebihan dari cotton bamboo:
																Anti Bahkteri, Bau dan alergi Berdasarkan bahan dasarnya yang dari serat bambu, sudah bukan rahasia lagi bahwa bambu mempunyai zat alami “Penny quinone” yang memang tidak disenangi oleh bakteri dan serangga. Sehingga bagi Anda yang biasa berkeringat entah aktifitas kerja maupun olah raga, tidak perlu kawatir akan bakteri yang bersarang di media kaos yang dapat menimbulakn bau tak sedap.Daya Serap Tinggi
																Dibandingkan dengan bahan kaos lainnya, serat bambu mempunyai daya serap yang tinggi serta mempunyai kemampunan untuk menghilangkan tingkat kelembaban udara. Sehingga proses pengeringannya jauh lebih cepat.Anti Sinar UV
															Karakter dasar dari bambu salah satunya adalah daya tangkalnya terhadp radiasi sinar UV. Cotton Bamboo diyakini dapat memberi perlindungan dari efek sinar UV hingga 97,5%.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- end modal jenis kain -->

								</div>

								<div class="ui form">
									<div class="inline fields">

										<div class=" field">
											<label>Ukuran</label>&emsp;&thinsp;&thinsp;&thinsp;
											<select class="ui search dropdown" name="ukuran">
												<option value="">Pilih Ukuran</option>
												<option value="S">S</option>
												<option value="M">M</option>
												<option value="L">L</option>
												<option value="XL">XL</option>
												
											</select>
										</div>atau&emsp; 
										
										<div class="boxes">
											<input class="checkbox" type="checkbox" id="box-1" name="ukuransendiri" value="Kustom">
											<label for="box-1">Ukuran sendiri</label>

										</div>


										<!-- <div class="ui left floated compact segment">
											<div class="ui fitted toggle checkbox">
												<input type="checkbox" name="ukuransendiri" value="Kustom">
												<label></label>
											</div>
										</div> -->

										<!-- <div class="ui  login basic black button" style="margin-top: 5px;"> -->
											<!-- Ukuran sendiri -->
											<!-- </div>&emsp;&emsp; -->&emsp;
											<div class="tiny circular ui teal basic icon ukuran button">
												<i class="icon info"></i>Size chart
											</div>

											<!-- modal Size chart -->
											<div class="ui  ukuran modal">
												<i class="close icon"></i>
												<div class="header">
													<h3>Informasi Ukuran</h3>
												</div>
												<div class="row border-top-custom">
													<div class="content">
														<div class="ui equal width center aligned padded grid">
															<div class="row">
																<div class="column" style="padding: 0px 30px;""> 
																	<div class="image content">
																		<img src="<?php echo base_url(); ?>assets/img/sizechart.jpg">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- end modal jenis kain -->
											&emsp;

										</div>
									</div>

									<div class="ui form">
										<div class="inline fields">
											<div class="required field">
												<label>Jumlah</label>&emsp;&thinsp;&thinsp;
												<div class="ui  input">
													<input placeholder="Jumlah" type="number" min="0" name="jumlah" required="">
												</div>
											</div>
										</div>
									</div>
									<?php
										if(isset($user->nama)){ ?>
											<input type="hidden" name="id_user" value="<?php echo $user->id; ?>" />
									<?php } ?>
									<input type="hidden" name="harga" value="<?php echo $row['harga']; ?>" />
									<input type="hidden" name="status" value="menunggu konfimasi" />
									<div class="border-top-custom" style="margin-bottom: 15px;"></div>

									<!-- <a href="</?php echo base_url("setun/index.php/c_routing/keranjang"."/".$row['id']); ?>"> -->
										<button class="positive ui button" style="float:left;width:40%;" type="submit" name="submit">
											<i class="icon shop"></i>Tambah ke keranjang
										</button>
										<!-- </a> -->


									</form>
								</div>

								<?php  } ?>

								<!-- end form order -->
							</div>
						</div>
					</div>
				</div>
				<!-- end content -->


				<!-- more model -->
				<div class="ui equal width center aligned grid">
					<div class="row">

					</div>
				</div>
				<!-- end more model -->

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