<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <title>Register Page</title>
</head>
<body>

    <div class="container m-5"style="width:50%">
        <h1>REGISTER PAGE</h1>
        <div class="text-danger">
            <?php 
                if(session()->getFlashdata('status'))
                    echo "<h5>".session()->getFlashdata('status')."</h5>";
            ?>
        </div>
        <form action="<?= base_url('register'); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required  >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
                <label for="profile_img" class="form-label">Upload Profile Photo</label>
                <input type="file" name="profile_img" class="form-control" id="profile_img" required>
            </div>
            <input type="submit" value="Register" id="register" class="btn btn-primary">
        </form>
    </div>

    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>