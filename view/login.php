<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>

    body {
    background-image: url('gambar/loginBackground.PNG');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    *{
        margin: 0;
        padding-top: 3%;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif
    }

    </style>
    </head>

    <body>
        <!-- Card Login -->
        <div class="container">
            <div class="wrapper">   
                <div class="logo">
                    <img src="gambar/DKR.PNG" alt="">
                </div>
                <div class="text-center mt-4 name"> Dewan Kerja Ranting <br /> Kelapa Dua </div>
                <form class="p-3 mt-3" action="../controller/loginProses.php" method="get">
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