<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Log in</title>
    <link rel="icon" href="<?=base_url();?>/assets/filkom.png" type="image">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="<?=base_url(); ?>/assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style type="text/css">
    body {
        height: 100%;
        align-items: center;
        padding-top: 60px;
        padding-bottom: 165px;
        background-image: url(assets/img/gedungud.jpg);
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>
<body class="text-center mb-5">
    <form class="form-signin bg-body" method="POST" action="<?=base_url('Auth/login');?>"
        style="width: 100%; max-width: 330px; padding: 15px; margin: auto;" data-aos="fade-down" data-aos-easing="linear"
        data-aos-duration="1000">
        <img class="mb-4 animate__animated animate__flip animate__infinite infinite" src="<?=base_url();?>/assets/filkom.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
        
        <!-- Alert untuk pesan kesalahan -->
        <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

        <label for="inputEmail" class="sr-only float-start mb-2">Username</label>
        <input type="text" class="form-control mb-3" name="username" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only float-start mb-2">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <button class="btn btn-primary btn-block btn-lg form-control mt-3" type="submit">Login</button>
    </form>
</body><br>
</html>
