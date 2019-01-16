<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profil Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style type="text/css">
        ul a {
            color: #ffad33;
        }
        .jumbotron {
            margin-top: 2.5%;
            margin-left: 2.5%;
            margin-right: 2.5%;
        }
        body {
            background-color: #b3b3b3;
        }
        </style>
</head>
<body style="background: #8c8c8c; text-align: center;">
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
    <div class="jumbotron text-center">
        <h1>Adam Wildan Ramadhan Susanto</h1>
        <img style="width: 200px;" src="<?=base_url()?>assets/img/profil.jpg" alt="">
        <h5>WEB DEVELOPER</h5>
        <p style="font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Facilis necessitatibus repudiandae aspernatur minima beatae dolores, 
        provident laudantium cumque corrupti consectetur assumenda maxime nostrum? 
        Delectus, ut. Reiciendis non cumque assumenda quaerat.</p>
        <p style="font-size: 20px;">Hubungi kontak saya : 085331964070</p>
    </div>
</body>
</html>