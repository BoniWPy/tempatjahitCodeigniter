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
<body style="background-color: #10101010">
  <br>
  <br>
  <br>
  <br>
<div class="ui grid center aligned">
  <div class="five wide column">
<form id="login-form" method="post" action="<?php echo base_url("c_login/administrator"); ?>">
  <div class="row">
    <h1 class="h1" style="font-family:Nunito;">LOGIN OWNER</h1>
  </div>
  <br>
  <br>
  <div class="row">
    <div class="form-input login-email">
      <input type="text" id="username" name="username">
      <label for="login-email">Username</label>
     
    </div>
  </div>
  <div class="row">
    <div class="form-input login-password">
      <input type="password" id="password" name="password">
      <label for="login-password">Password</label>
      <div class="warning-message">Password is incorrect.</div>
    </div>
  </div>
 <div class="row form-buttons">
    <input class="button" type="submit" value="LOGIN" style="font-family:Nunito;">
</form>

  </div>
</div>
  
    <script src="<?php echo base_url().'assets/js/login_admin.js' ?>"></script>
  </body>
  </html>











