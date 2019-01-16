<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style type="text/css">
        a {
            color: #ffad33;

        }
        .nav-link:hover {
            color: #f2f2f2;
        }
        .container {
            margin-top: 18%;
            padding-left: 18%;
            padding-right: 18%;
            opacity: 0.0;
            min-height: 150px;
        }
        h1 {
            font-size: 400%;
            color: #1a1aff;
        }
        body {
            background: url("<?=base_url()?>assets/img/24301.jpg");
        }
        p {
            margin-top: 1.5%;
            font-size: 105%;
            color: #ff0000;
        }
        .bg {
            background-image: url("<?=base_url()?>assets/img/Logo.png");
            background-position: center;
            background-attachment: inherit;
            background-repeat: no-repeat;   
        }
    </style>
</head>
<body style="margin: 0; padding: 0;">
     <header>
            <div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <p class="nav-item active"> Website <?=$portofolio?> <?=$nama_lengkap?> </p>
                    <li class="nav-link"><a href="<?=base_url()?>index.php/welcome/dashboard/Predator/Official">Home</a></li>
                    <li class="nav-link"><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
                    <li class="nav-link"><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
                    <li class="nav-link"><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
                    <li class="nav-link"><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>
    <div class="bg">
    <div class="container"> 
        <p>Website <?=$portofolio?>
        <br>  <?=$nama_lengkap?> </p>
    </div>
    </div>
</body>
</html>