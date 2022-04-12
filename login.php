<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome dan CSS Bootstrap -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="stylesheet" href="style.css">

    <!-- Title dan Gambar di Halaman File -->
    <link rel="icon" href="gambar/DKR.png">
    <title>DKR Kelapa Dua</title>

    <style>
        body {
            background-image: url('gambar/Background.PNG');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        *{
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif
        }

    </style>
</head>

<body>
    <div class="row">
        <div class="col-5">
            <p class="font">Dewan Kerja Ranting <br /> Kelapa Dua</p>
        </div>
        <div class="col-5 d-flex justify-content-end p-5">
             <img src='gambar/DKR.PNG'  style="width: 200px;"/>
        </div>
        <div class="col-2">
        </div>
    </div>
        
    <!-- Card Login -->
    <div class="container">
        <div class="wrapper">   
            <div class="logo">
                <img src="gambar/DKR.PNG" alt="">
            </div>
            <div class="text-center mt-4 name"> Dewan Kerja Ranting <br /> Kelapa Dua </div>
            <form class="p-3 mt-3" action="loginProses" method="get">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"> </span>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <button type="submit" name="input" value="Submit" class="btn mt-3">Masuk</button>
            </form>
            <!-- <div class="text-center fs-6">
                <a href="#">Forget password?</a>
                or
                <a href="#">Sign up</a>
            </div> -->
        </div>
    </div>
</body>
</html>