<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>taylor</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/semantic/semantic.css' ?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/login_admin.css' ?>">
</head>
</head>
<body>
  
  <br>
  <br>
  <br>
  <br>

  <div class="ui cards">
    <div class="card" style="margin-right: 15px;">
      <div class="content">
        <div class="header">Identitas</div>
        <i class="id card outline icon"></i>
        <?php echo $user->nama; ?>
        <br>
        <i class="mail outline icon"></i>
        <?php echo $user->email; ?>
        <br>
        <i class="phone icon"></i>
        <?php echo $user->telepon; ?>
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
          <?php echo $user->alamat; ?>
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
            Lingkar Bahu <span style="color: orange; font-weight: bold;"><?= $user->lingkarbahu ?></span>&thinsp;|  
            Lingkar Dada <span style="color: orange; font-weight: bold;"><?= $user->lingkardada ?></span>
            Lingkar Leher 
            <span style="color: orange; font-weight: bold;"><?= $user->lingkarleher ?>  
            </span>&thinsp;&thinsp;&thinsp;|
            Lingkar Ketiak <span style="color: orange; font-weight: bold;"><?= $user->lingkarketiak ?></span> 
            Lingkar Perut <span style="color: orange; font-weight: bold;"><?= $user->lingkarperut ?></span>&thinsp;&thinsp;&thinsp;&thinsp;| 
            Lingkar Pinggul <span style="color: orange; font-weight: bold;"><?= $user->lingkarpinggul ?></span>
          </div> <br>

        </div>
      </div>
    </div>
  </div>
  <br>
  <a href="<?php echo base_url('c_admin/v_admin'); ?>"><button class="positive ui button" type="submit">kembali</button></a>
</div>
</div>

<script src="<?php echo base_url().'assets/js/login_admin.js' ?>"></script>
</body>
</html>











