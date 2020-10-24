<!DOCTYPE html>
<html>
<?php
session_start();
session_destroy();
if(isset($_COOKIE['email'])and isset($_COOKIE['pass'])){
$email=$_COOKIE['email'];
$pass=$_COOKIE['pass'];
setcookie('email',$email,time()-1);
setcookie('pass',$pass,time()-1);

}
echo "You successfully logout.click here to <a href='custlogin.php'>login again</a>";
?>
<title>Cinnamon's Restaurant</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/mystyle.css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/mdb.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}


.sidenav {
  margin-top: 5%;
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="Menu.html">Our Menu</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="contactus.html">Contact</a>
</div>


<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:100%;margin:auto; background-color: #b4f2e1;">
    <div class="w3-button w3-padding-16 w3-left"> 
<img src="meat.png" width="40px" height="35px" onclick="openNav()" alt="LOGO" >

    </div>
    <a style="color: black;" href="customerlogin.php"><div class="w3-button w3-right w3-padding-16">Login</div></a>
    <a style="color: black;" href="Menu.html"><div class="w3-button w3-right w3-padding-16" style="margin-right: 20px">our  Menu</div></a>
    <div class="w3-center w3-padding-16" style="margin-left: 18%; font-size: 30px;">Cinnamon's Restaurant</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->


<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
	<div class="w3-container w3-padding-32 w3-center" >  
 

  <h3 style="font-size: 60px;">Who We Are?</h3><br>
       <div class="id" style="text-align: center; margin-top: -30px; ">
   <!-- <video width="800" height="500" controls muted >
  <source src="videoplayback.mp4" type="video/mp4">


</video> --> <img class = "animated flipInX delay-1s"src="chef.jpg" width="578" height="400" usemap="#chefmap">
   <map name="chefmap">
    <area target="" alt="Chan Yan-tak" title="Chan Yan-tak" href="https://en.wikipedia.org/wiki/Chan_Yan-tak" coords="182,155,25" shape="circle">
    <area target="" alt="Martin Yan" title="Martin Yan" href="https://en.wikipedia.org/wiki/Martin_Yan" coords="315,121" shape="poly">
      <area target="" alt="David Chang" title="David Chang"  href="https://twitter.com/davidchang?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" coords="498,160,451,103" shape="rect">

   </map>
 </div>
    <div class="w3-padding-32 animated rubberBand delay-1s ">
      <h4  style="font-size: 30px;"><b>We Who We Are!</b></h4>
      <h6 style="font-weight: 600;"><i>With Passion For Real, Good Food</i></h6>
      <p style="color: #222831; font-weight: 600;"><i>Just we, exploring the universe of unknownment. We have a heart of love and an interest of towards the food. we want to share Our art of food with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</i></p>
    </div>
  </div>

  <hr>

  <!-- 3 -Column -->
  <div class="w3-row-padding w3-padding-16 w3-center " id="food">
    <div class="w3-quarter animated bounceIn delay-1s mb-3" style="margin-right: 130px"  style="box-sizing: border-box; border: 1px  black;">
    	
     <h3 style="margin-top: 0px">Today's Special</h3>
     <img src="dish1.jpg" alt="Steak" style="width:100%">
     <p style="margin-top: 25px;font-weight: 600;">Food is the Art and science.All being said about modulation we're serving people delicious food, we won't give you cahnce to complaint.</p>

        <a href="signup.html"><input type="button" value="Check Our Menu"></a>
      </p></p>
    </div>
    <div class="w3-quarter animated bounceIn delay-2s mb-3">
      
      <h3 style="margin-top: 0px">Co-working Space</h3>
      <img src="cowork.jpg" width="250px" height="155px"/><p style="margin-top: 25px;font-weight: 600;">We provide a space where people can work.we've a theory :<p><p style="font-weight: 600;"><i>"if you love your workspace, you'll love your work liitle more"</i>
 <br>
        <a href="signup.html"><input type="button" value="Get your Space"></a>
      </p></p>
      
     
    </div>
    <div class="w3-quarter animated bounceIn delay-3s mb-3" style="margin-left: 130px">
    	     <h3 style="margin-top: 0px">Our Location</h3>
      <a href="https://goo.gl/maps/wfS9NtNnfDZctJs49">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14646.786811001351!2d85.38170146977536!3d23.399187000000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e384bcca6f23%3A0x32eb156e5f3e9469!2sAroma%20Restaurant!5e0!3m2!1sen!2sin!4v1591514432304!5m2!1sen!2sin" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></a>
<p style="margin-top: 25px;font-weight: 600;">You can find world tastiest food here.If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.</p>

<a href="https://maps.google.com/maps?ll=23.399187,85.390456&z=13&t=m&hl=en&gl=IN&mapclient=embed&cid=3669049885211923561"><input type="button" value="Reach Us"></a>
      </p>
    </div>
    
  </div>
  
  
  
  <hr id="about">
  <!-- Footer -->
  <footer class="panel-footer" style="color: #000000;  width: 100%;" >
    <div class="container-fluid"style="width: 100%;">
      <div class="row">
        <section id="hours" class="col-sm-4">
          
          <span>Hours</span><br>
          <ul style="list-style-type: square">
          <li>Sun-Thurs: 11:15am - 2:30pm</li>
          <li>Saturday Closed</li>
          <ul>
        

        </section>
        <section id="Address" class="col-sm-4">
          <dl>
          <dt>Address:</dt>
          <dd>Sushila Enclave, Lowadih Chowk, Purulia Road, Kantatoli, Ranchi<dd><b>*Deliver available within 3-4 miles, with minimum order of 15EUR plus 1EUR charge for all deliveries</b>
          
        </section>
        <section id="testimonials" style="font-style: italic;" class ="col-sm-4">
          <p> "The best Spanish restaurant We've been to! And that's saying a lot, Since We've been to many!"</p>
          <p>"Amazing food! Great Service! couldn't ask for more! we'll be back again and again to serve you!"</p>
        </section>
  </div>
  <div class="text-center" style="float: right;">&copy; Cinnamon's Restauran Since 2000</div>
    

  </footer>
  

<!-- End page content -->
</div>

<script>
  var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');
      var imageObj = new Image();

      imageObj.onload = function() {
        context.drawImage(imageObj, 42, 0);
      };
      imageObj.src = 'chef.jpg';


 function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
    </script>

    
    

</body>
</html>
