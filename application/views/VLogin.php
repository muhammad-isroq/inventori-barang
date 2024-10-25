<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="icon" href="<?= base_url();?>/assets/logo-login.png" type="image">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body{
        height: 100%;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 165px;        
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-color: #babcc3;
    }
    form{
        width: 100%; 
        max-width: 330px; 
        padding: 15px; 
        margin: auto;
    }
    h4{
        width: 100%; 
        max-width: 330px; 
        padding: 15px; 
        margin: auto;

    }
</style>
<body class="text-center mb-5">
    <h4 class="bg-white rounded">oke</h4>
    <br>
    <form class="form-signin bg-body rounded form-lg" method="POST" action=""
     >
    <img class="mb-4" src="<?=base_url();?>/assets/logo-login.png" alt="" width="100" height="100">
    <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>    

    <label for="inputEmail" class="sr-only float-start mb-2">Username</label>
    <input type="text" class="form-control mb-3" name="username" placeholder="Username" required autofocus>
    <label for="inputPassword" class="sr-only float-start mb-2">Password</label>
    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
    <button class="btn btn-primary btn-block btn-lg form-control mt-3" type="submit">Login</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>