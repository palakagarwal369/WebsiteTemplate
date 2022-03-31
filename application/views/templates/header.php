<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/service.css">

    <!------------------------bootstrap------------------------------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!----------------------------------------------------------------------->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato&family=PT+Serif&family=Playfair+Display:ital@0;1&family=Poppins&family=Roboto&display=swap"
        rel="stylesheet">

    <script>
        $(window).scroll(function () {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 140)
        })
    </script>

</head>

<body>

        
<nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top bgnav">

<div class="container-fluid">

    <a class="navbar-brand" href="#" style="color: white;">Company Name</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars text-light"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" style="color: white;" aria-current="page" href="<?php echo base_url();?>index.php/home#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white;" href="<?php echo base_url();?>index.php/home#intro">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white;" href="<?php echo base_url();?>index.php/service">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white;" href="<?php echo base_url();?>index.php/home#contactus">Contact Us</a>
            </li>
        </ul>
    </div>

</div>
</nav>
               
