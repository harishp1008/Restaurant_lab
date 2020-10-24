<!--With text input, radio button input, Check box, drop down list with pre selected value, password input, and Input type date – with date picker – along with possible attributes for each. Demonstrate any five form elements apart from input types specific to HTML5.-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/mdb.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="css/mystyle.css">

 <link rel="stylesheet" href="css/contactus.css">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
 <style type="text/css">
 

 </style>
 <script>
</script>
</head>
<body>
  <!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:100%;margin:auto; background-color: #b4f2e1;">
    <div class="w3-button w3-padding-16 w3-left"> <a href="https://www.bellmontrestaurant.com/">
<img src="meat.png" width="40px" height="35px" alt="LOGO">
</a>
    </div>
    <div class="w3-button w3-right w3-padding-16" style="background-color: #797a7e">Contact Us</div>
    <a style="color: black;" href="Menu.html"><div class="w3-button w3-right w3-padding-16" style="margin-right: 20px">our  Menu</div></a>
    <div class="w3-center w3-padding-16" style="margin-left: 14%">Cinnamon's Restaurant</div>
  </div>
</div>
  
	<div id="login-box">
    <div class="left">
      <img id="contactus"src="images/contactus.png" style="opacity:0.8;box-shadow: 5px 5px 5px 5px #e0dede; margin-top: 60px; opacity:  " width="380px"
       height="530px">
     <h2 class="animated fadeInDownBig">(711)265-9193</h2>
  </div>
  <div style="margin-right: -50px;"class="right">
    <h1 class="animated fadeInLeft"><u>Get in Touch</u></h1>
<?php
// define variables and set to empty values
$nameErr = $emailError = $mobileError ="";
$name = $email = $mobile =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["subject"])) {
    $mobileError = "subject is required";
  } else {
    $mobile = test_input($_POST["subject"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^[a-zA-Z ]*$/', $mobile)) {
      $mobileError = "Subject is required"; 
    }
  }
  if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format"; 
    }
  }

 if (!empty($_POST["email"])) {
    function myFunction() {
  confirm("Press a button!");
}
  }
   
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return myFunction();">  

     <div id='name' class="md-form">
      
        <input type="text" id="form104" name ="name" class="form-control" value="<?php echo $name;?>">
        <label for="form104">Your name</label>
        <span class="error"> <?php echo $nameErr;?></span>
      </div>
   <div class="md-form">
  
        <input type="text" id="form105" name="email" class="form-control" value="<?php echo $email;?>">
        <label for="form105">Your email</label>
        <span class="error"> <?php echo $emailError;?></span>

      </div>
      <div class="md-form">
  
        <input type="text" id="form106" name="subject" class="form-control" value="<?php echo $mobile;?>">
        <label for="form106">Subject</label>
        <span class="error"> <?php echo $mobileError;?></span>
      </div>
    <div class="md-form">
  <textarea id="textarea-char-counter" class="form-control md-textarea" length="170" rows="3" required ></textarea>
  <label for="textarea-char-counter">Type your text</label>
  
  <br>
  <span style="font-size:15px; float: right;margin-right: 80px; "id="rchars">300 characters remaining</span>
</div>
    <br>

    <div class="row">

       <button  style="margin-left:70px;" type="submit" onclick="setTimeout(myFunction, 3000);" id="btn-one" class="btn btn-primary mt-5" data-toggle="modal" data-target="#basicExampleModal" >
  Send
</button>
    </div>
    </form>
    <br>
    <!-- AddToAny BEGIN -->
    <p style=" margin-left:40px;  font-size: 25px;">Connect us with</p>
<div style="margin-left: 70px; margin-top: 30px;" class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a style="color: #fff;"class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
  </div>




    <script type="text/javascript">

      $("#elementId")[0].setAttribute("required", "true");
      $('#btn-one').click(function() {
      $('#btn-one').html('<div class="animated delay-2s bounceIn">Sent</div>').attr('disabled', true)
    });
  $('#contactus').addClass('animated flipInX');
     $(document).ready(function() {
$('input#input_text, textarea#textarea1').characterCounter();
});
     var maxLength = 300;
$('textarea').keyup(function() {
  var textlen = maxLength - $(this).val().length;
  $('#rchars').text(textlen);
});
    function myFunction() {
       var x = document.forms["myForm"]["email"].value;
  if (x !== "") {
    confirm("Dear customer, thanks for reaching out!,We will look over your message and get back to you by tomorrow ");
    return false;
  }
}


    </script>


</body>
</html>