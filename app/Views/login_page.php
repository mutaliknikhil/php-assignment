<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <title>Login Page</title>
</head>
<body>
<div class="container m-5"style="width:50%">
        <div class="text-success">
            <?php 
                if(session()->getFlashdata('status'))
                    echo "<h5>".session()->getFlashdata('status')."</h5>";
            ?>
        </div>

        <div class="text-danger">
            <?php 
                if(session()->getFlashdata('status_red'))
                    echo "<h5>".session()->getFlashdata('status_red')."</h5>";
            ?>
        </div>
        <h1>Login PAGE</h1>
        <br>
        <form action="<?= base_url('login_user'); ?>" method="get">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <input type="submit" value="Login" class="btn btn-primary">
        </form>
    </div>




    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>