<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <title>Assignemnt-2</title>
</head>
<body>
    <center>
        <h2>
            Assignemnt 2 : BuzzFizz
        </h2>
        <br>
        <form action="<?= base_url('a2') ?>" method="get">
            Enter a Number : 
            <input type="number" name="number" id="number">
            <br>
            <br>
            <input type="submit" value="Check It..">
        </form>

    </center>
</body>
</html>