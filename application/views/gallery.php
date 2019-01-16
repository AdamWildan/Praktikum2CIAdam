<!DOCTYPE html>
<html lang="en">
<head>
    <title>Galeri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style type="text/css">
        ul a {
            color: #ffad33;
        }
        .jumbotron {
            margin-top: 10.3%;
            margin-left: 25%;
            margin-right: 25%;
        }
        body {
            background-color: #b3b3b3;
        }
    </style>
</head>
<body style="margin: 0; padding: 0; font-family: 'Century Gothic', sans-serif; background-color: 
#ededed; text-align: center;">
<header>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-link"><a href="<?=base_url()?>index.php/welcome/dashboard/Predator/Official">Home</a></li>
                    <li class="nav-link"><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
                    <li class="nav-link"><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
                    <li class="nav-link"><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
                    <li class="nav-link"><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
                </ul>
            </nav>
        </div>
    </header>
<section class="content">
        <h1>Koleksi foto tempat wisata</h1>
        <div class="container">
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/mountain.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/beach.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/goldengate.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/berlin.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/africa.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/sydney.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/thailand.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="<?=base_url()?>assets/venice.jpeg" alt="">
                </div>
            </div>
        </div>
    
</body>
</html>