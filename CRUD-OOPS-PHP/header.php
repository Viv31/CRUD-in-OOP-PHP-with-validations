<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD With OOPS PHP </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
     
      background:linear-gradient(0deg, rgba(1, 1, 1, 0.3), rgba(0, 0, 0, 0.3)),url('img/wooden-bg.jpg');
      background-size: cover;
    }
    #form_div{
      background-color: rgba(0,0,0,0.7);
      color: white;
      padding: 20px;
      
    }
    #all_data{
      background-color: rgba(0,0,0,0.7);
      

    }
    td,th{
      color: white!important;
    }
  </style>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  </nav>

<div class="container" style="margin-top: 50px;">