<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <title>Home page</title>
</head>
<body>
    <div class="container m-5">
        <center>
            <h1 class="text-success"> Your are loged in Successfull</h1>
            <h2 class="text-primary"> Welcome - <?php echo session()->getFlashdata('name'); ?> </h2>
        </center>
    </div>
    
</body>
</html>