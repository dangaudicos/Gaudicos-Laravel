<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yesteryear&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <style>
        #navcon{
            font-family: "Lato", sans-serif;
            font-weight: bold;
            font-style: normal;
            color:#FFF0F5;
        }

        body{
            background-color: #FFE4E1;
        }
        body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        }

        .hero-image {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/banner.png");
        height: 50%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        }

        .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        }

        .cursive{
            font-family: "Brush Script MT", cursive;
            color: #BC8F8F;
        }
        .tagline{
            font-family: "Lato", sans-serif;
            font-weight: bold;
            font-style: normal;
            color: #BC8F8F;
        }
        .welcome{
            font-family: "Yesteryear", cursive;
            font-weight: 400;
            font-style: normal;
            font-size: 25px;
        }
        .seccont{
            background-color: #E9967A;
            border-radius: 30px;
        }
        #title{
            font-family: "Brush Script MT", cursive; 
        }
        .meetda{
            font-family: "Lato", sans-serif;
            font-weight: bold;
            font-style: normal;
            color: #FFF0F5;
        }
        .sweet{
            font-family: "Brush Script MT", cursive; 
           font-size: 30px; 
        }
        #profile{
            border-radius: 100px;
        }
        #cardcontext{
            font-family: "Lato", sans-serif;
            font-weight: bold;
            font-style: normal;
        }
        #maincard{
            border-radius:50px;
        }
        #footertxt{
            font-family: "Lato", sans-serif;
            font-weight: bold;
            font-style: normal;
            color:#FFF0F5;
            text-decoration: none;
        }
        #footericon{
            transform: scale(2);
        }
        .border{
            border-top-style: hidden;
            border-right-style: hidden;
            border-bottom-style: solid;
            border-left-style: hidden;
            opacity: 10%;
        }
        .conthree{
            font-family: "Yesteryear", cursive;
            font-weight: bold;
            font-style: normal;
        }
        .lastmsg{
            font-family: "Lato", sans-serif;
            font-weight: bold;
            font-style: normal; 
        }
/*instructor section*/
        .containerinstructor {
        position: relative;
        width: 50%;
        }

        .imageinstructor {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
        border-radius: 100%;
        }

        .middleinstructor {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%)
        }

        .containerinstructor:hover .imageinstructor {
        opacity: 0.3;
        }

        .containerinstructor:hover .middleinstructor {
        opacity: 1;
        }

        .textinstructor {
        color: #FFF0F5;
        font-size: 16px;
        padding: 16px 32px;
        border-radius: 20px;
        }
        .belowins{
            font-family: "Yesteryear", cursive;
            font-weight: 400;
            font-style: normal;
        }
/*polaroid images*/
        .polaroid {
        width: 80%;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-bottom: 25px;
        }

        .polcontainer {
        text-align: center;
        padding: 10px 20px;
        }
    </style>

    <title>Sweet acoustic</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #E9967A;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color:#FFF0F5;" id="title"><h3>Sweet Acoustic</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" id="navcon" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="navcon" aria-current="page" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="navcon" aria-current="page" href="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="navcon" aria-current="page" href="services">Services</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit"><a>Search</a></button>
                </form>
            </div>
        </div>
    </nav>
<!----------------------------------banner------------------------------>
    <div class="hero-image">
        <div class="hero-text">
            <h1 class="cursive" style="font-size:75px">Sweet Acoustic</h1>
            <p class="tagline">Whispers of Warmth</p>   
        </div>
    </div>
<!----------------------------------Content------------------------------> 
    <div class="container-fluid">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <div>
        @yield('contenttwo')
    </div>
    
    <div class="container-fluid">
        <div class="container">
            @yield('contentthree')
        </div>
    </div>
<!----------------------------------Footer------------------------------> 
    <div style="background-color: #000000;" class="pt-5 pb-5">
        <div class="container-fluid mx-auto" style="width:1000px;">
            <div class="container row">

                <div class="container-fluid col">
                    <div class="container" id="footertxt">
                        <a href="home" id="footertxt">Home</a></br></br>
                        <a href="about" id="footertxt">About</a></br></br>
                        <a href="contact" id="footertxt">Contact</a></br></br>
                        <a href="services" id="footertxt">Services</a>
                    </div>
                </div>

                <div class="container-fluid col">
                    <div class="container mx-auto" id="footertxt" style="width: 200px">
                        <p >Get in touch with us:</p>
                        <div class="row">
                            <div class="col" id="footericon"><i class="bi bi-facebook"></i></div>
                            <div class="col" id="footericon"><i class="bi bi-twitter"></i></div>
                            <div class="col" id="footericon"><i class="bi bi-instagram"></i></div>
                        </div>
                    </div>

                    <div class="row pt-5">
                    <label for="colFormLabelLg" class=" col-form-label col-form-label-lg" id="footertxt">Subscribe:</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Email address">
                        </div>
                        <button type="button" class="btn btn-outline-light col-md-2">Submit</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="border mt-5"></div>
        <div class="text-center pt-2">
            <p style="color: white; opacity: 50%;">©2024 Sweet Acoustic, All rights reserve</p>
        </div>
    </div>
</body>
</html>
    