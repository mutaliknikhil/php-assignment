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

    <div class="container m-5" style="width:50%">
        <h1>REGISTER PAGE</h1>
        <div class="text-danger">
            <?php 
                if(session()->getFlashdata('status'))
                    echo "<h5>".session()->getFlashdata('status')."</h5>";
            ?>
        </div>
        <form method="post" action="/register" id="idForm" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name"   >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" >
            </div>
            <div class="mb-3">
                <label for="profile_img" class="form-label">Upload Profile Photo</label>
                <input type="file" name="profile_img" class="form-control" id="profile_img" >
            </div>
            <button type="submit" id="register" class="btn btn-primary" > Click </button>
        </form>
    </div>

    

    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <script type="text/javascript">
        
        $(document).ready(function(){
            $("#register").click(function(e) {
                e.preventDefault(); // avoid to execute the actual submit of the form.
                var form = $(this);
                var actionUrl = "/register";
                var data = {
                    'name':$('#name').val(),
                    'email':$('#email').val(),
                    'password':$('#password').val(),
                    'profile_img':$('#profile_img')[0].files[0],
                }

                console.log(actionUrl);
                console.log(data);
                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    data: data, // serializes the form's elements.
                    success: function(response)
                    {
                      alert("Registration Succesfull"); // show response from the php script.
                    }
                });
            })
        });
    </script>
</body>
</html>