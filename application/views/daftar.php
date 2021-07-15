<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="icon" type="image/png"  href="assets/img/logo.png">
	<title>Techne ID</title>

    
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="<?= GOOGLE_CLIENT_ID ?>">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" >

    <!-- My CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">

    <style type="text/css">
        .shadow-kiri{
            box-shadow: -.3rem .5rem .7rem rgba(0, 0, 0, .15);
        }
        .shadow-kanan{
            box-shadow: .4rem .5rem .5rem rgba(0, 0, 0, .15);
        }
/* 
        #customBtn {
            display: inline-block;
            background: white;
            color: #444;
            width: 190px;
            border-radius: 5px;
            border: thin solid #888;
            box-shadow: 1px 1px 1px grey;
            white-space: nowrap;
        }
    #customBtn:hover {
      cursor: pointer;
    }
    span.label {
      font-family: serif;
      font-weight: normal;
    }
    span.icon {
      background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 42px;
      height: 42px;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      padding-left: 42px;
      padding-right: 42px;
      font-size: 14px;
      font-weight: bold;
      font-family: 'Roboto', sans-serif;
    } */
  </style>
</head>

<div class="row align-items-center justify-content-center bg-yellow" style="height: 100vh;margin-right: 0px;margin-left: 0px;">
        
        <div class="row shadow p-0" style="background-color: #FCFAF5; width: 80%; height: 75%; border-radius: 1rem">
            <div class="row p-5 m-0"  style="height: 100%; width: 65%; ">
                <h3 class="mb-0">Hello!</h3>
                <h3><b>Selamat Siang!</b></h3>
                <div class="shadow p-3" style="height: 80%; border-radius: 1rem;">
                    <h5 class="mt-3"><center><b>Daftar</b> ke Techne.Id</center></h5>
                    <input type="email" name="" id="" placeholder="Email" class="form-control" style="margin: 1rem 0 1rem 0; border-left: 0; border-top: 0; border-right: 0; background-color: #FCFAF5; border-radius: 0;">
                    <input type="text" name="" id="" placeholder="Username" class="form-control" style="margin: 1rem 0 1rem 0; border-left: 0; border-top: 0; border-right: 0; background-color: #FCFAF5; border-radius: 0;">
                    <input type="password" name="" id="" placeholder="Password" class="form-control" style="margin: 1rem 0 1rem 0; border-left: 0; border-top: 0; border-right: 0; background-color: #FCFAF5; border-radius: 0;">
                    <button class="btn" style="background-color: #FBDD54; color: #2E6993; font-weight: bold; width: 100%; margin: 2px 0 2px 0;">Daftar</button>
                    <p class="text-center mb-0 mt-3">Sudah punya akun? <a href="<?= base_url('main/login') ?>" style="text-decoration: none;" class="fw-bold text-blue">&nbsp; Masuk</a></p>
                    
                </div>
            </div>
            <div class="row bg-yellow m-0" style="height: 100%; width: 35%; border-radius: 0 1rem 1rem 0;">
                <div class="d-flex align-items-center">
                    <center>
                        <img src="<?php echo base_url(); ?>assets/img/Login Art.png" alt="Art" width="100%">
                    </center>
                </div>
            </div>
        </div>
</div>
<script>
    function onSignIn(googleUser) {
    // Useful data for your client-side scripts:
    var profile = googleUser.getBasicProfile();
    console.log("ID: " + profile.getId()); // Don't send this directly to your server!
    console.log('Full Name: ' + profile.getName());
    console.log('Given Name: ' + profile.getGivenName());
    console.log('Family Name: ' + profile.getFamilyName());
    console.log("Image URL: " + profile.getImageUrl());
    console.log("Email: " + profile.getEmail());

    // The ID token you need to pass to your backend:
    var id_token = googleUser.getAuthResponse().id_token;
    console.log("ID Token: " + id_token);
    }

    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
        console.log('User signed out.');
        });
    }
</script>
</html>