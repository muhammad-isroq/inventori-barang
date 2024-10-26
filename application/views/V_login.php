<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="icon" href="<?= base_url();?>/assets/logo-login.png" type="image">
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('node_modules/aos/dist/aos.css'); ?>">
</head>
<style>
    body{
        height: 100%;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 105px;        
        background-repeat: no-repeat;
        background-size: 100% 100%;
        
    }
    form{
        width: 100%; 
        max-width: 330px; 
        padding: 15px; 
        margin: auto;
    }
    #sistem{
        width: 100%; 
        max-width: 330px; 
        
        margin: auto;

    }
</style>
<body class="text-center bg-secondary-subtle">
    <div class="container-fluid mx auto">
        <div class="row row-md-2" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="1000">
            <!-- <div class="col-md mb-3">
                <img src="<?= base_url();?>/assets/penyimpanan.jpg" class="img-fluid rounded" alt="">
            </div> -->
            <div class="col-md shadow-md">
                <div class="bg-light fw-bold rounded fs-6 shadow bg-body-tertiary rounded" id="sistem">
                    <img class="m-3" src="<?=base_url();?>/assets/logo-sistem.png" alt="" width="50" height="50">Sistem Inventori Barang
                </div>
                <br>
                <form class="form-signin bg-body rounded form-lg shadow bg-body-tertiary rounded" method="POST" action="<?= base_url('Auth/login');?>"
                    >
                    <img class="mb-4 animate__animated animate__flip animate__infinite infinite" src="<?=base_url();?>/assets/logo-login.png" alt="" width="100" height="100" >
                    <h1 class="h3 mb-3 font-weight-normal">Log In</h1>    

                    <label for="inputEmail" class="sr-only float-start mb-2">Username</label>
                    <input type="text" class="form-control mb-3" name="username" placeholder="Username" id="usr" required autofocus>
                    <label for="inputPassword" class="sr-only float-start mb-2">Password</label>
                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                    <button class="btn btn-primary btn-block btn-sm form-control mt-3" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url('node_modules/aos/dist/aos.js'); ?>"></script>
    <script>
        AOS.init();
    </script>

    <script type="text/javascript">        
        const usr = document.getElementById('usr');
        usr.addEventListener("keydown", function(){
            usr.classList.add('bg-success-subtle');

        })

        const pss = document.getElementById('inputPassword');
        pss.addEventListener("keydown", function(){
            pss.classList.add('bg-success-subtle');

        })
    </script>

    <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>