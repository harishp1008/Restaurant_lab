<!DOCTYPE html>
<html>

<?php include 'processform.php';
echo "Iam to process";?>
<head>
	<title>Cinnamon's Login</title>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</head>
<body>
	<div class='card' style='width:600px;top: 20%;left:32%;position: absolute;'>
	<!-- Default form register -->
<form method="post" class="text-center border border-light p-5" action="" enctype="multipart/form-data">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" name='firstname' id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" required>
        </div>
        
        <div class="col">
            <!-- Last name -->
            <input type="text" name='lastname' id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" required>
        </div>
    </div>


    <!-- E-mail -->
    <input type="email" name='user' id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" required>

    <!-- Password -->
    <input type="password" name='passw' id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>

    <!-- Phone number -->
    <input type="text" name='mobile' id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Optional - for two step authentication
    </small>
    <?php if(!empty($msg));
        ?>
    <div class="alert<?php echo $css_class;?>">
        <?php echo $msg;?>
</div>

    <php endif;?>
    <div class="form-group">
        <label for='profileimage'>Profile image</label>
        <input type="file" name="profileimage" id='profileimage' class="form-control" required>
    </div>

    <!-- Newsletter -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
    </div>

    <!-- Sign up button -->
     <input type='submit' class="btn btn-info btn-block my-4" name='Login' value='Register' type="submit">

    <!-- Social register -->
    <p>or sign up with:</p>

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our terms of service</p>

</form>

<!-- Default form register -->
</div>
</body>
</html>