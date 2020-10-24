<!DOCTYPE html>
<html>

<?php include 'menu_crud.php' ?>
<?php 
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $record = mysqli_query($db, "SELECT * FROM breaktable WHERE id=$id");


        if (count($record) == 1 ) {
            $n = mysqli_fetch_array($record);
            $id = $n['id'];
            $category = $n['category'];
            $description = $n['description'];
            $price=$n['price'];
            $qty=$n['qty'];
        }
    }
?>
<head>
	<title>Cinnamon's Admin menu</title>
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


<link rel="stylesheet" href="css/mystyle.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
</head>
<style type="text/css">
    body {
    font-size: 19px;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
     padding: 8px;
}
tr:hover {
    background: #8d93ab;
}

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}





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



<div style="background-color: #686d76; "id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <div>
  <img class="rounded-circle" style="height: 60px;width: 60px;border-radius: 50%;"alt="100x100" src="images/billgates.jpg"
          data-holder-rendered="true" style="border-radius: 50%;">
         <p style="font-size: 20px;color: #e8ffff;"> 
          <?php 
          if($_SESSION['username']!=""){
         echo "Welcome<br> " .$_SESSION['username'];
  
       }
       else{
        header('location:mainpage.php');

       }
?></p>
<hr>
        </div>
  <a style="color: #ecf4f3;" href="Menu.php">Menu Card</a>
  <a style="color: #ecf4f3;"href="#">Blogs</a>
  <a style="color: #ecf4f3;"href="#">Catering Services</a>
  <a style="color: #ecf4f3;"href="contactus.html">Contact</a>
  <a style="color: #ecf4f3;" href='mainpage.php'>Logout</a>
</div>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:100%;margin:auto; background-color: #b4f2e1;">
    <div class="w3-button w3-padding-16 w3-left"> 
<img src="meat.png" width="40px" height="35px" onclick="openNav()" alt="LOGO" >

    </div>
    <a style="color: black;" href="Menu.php"><div class="w3-button w3-right w3-padding-16" style="margin-right: 20px">our  Menu</div></a>
    <div class="w3-center w3-padding-16" style="margin-left: 18%; font-size: 30px;">Cinnamon's Restaurant</div>
  </div>
</div>

<?php $results = mysqli_query($db, "SELECT * FROM breaktable"); ?>
<div class="card" style="width: 50%;margin: 40px; margin-top: 100px; margin-left: 80px; background-color: #f1f3f8;">
    <?php if (isset($_SESSION['message'])): ?>
    <div class="msg">
        <?php 
            echo $_SESSION['message']; 
            unset($_SESSION['message']);
        ?>
    </div>
<?php endif ?>
<table style="width:80%; text-align: center; font-size: 30px;">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>price</th>
            <th>qty</th>
            <th>Category</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['qty']; ?></td>
            <td><?php echo $row['foodtype']; ?></td>
            <td>
                <a href="admin_menu.php?edit=<?php echo $row['id']; ?>" class="edit_btn btn btn-success" >Edit</a>
            
            </td>
            <td>
                <a href="admin_menu.php?del=<?php echo $row['id']; ?>" class="del_btn btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
</div>


<div class="card" style="width: 600px;margin: 40px auto; float: right;  position: absolute;
  top: 8px;
  right: 16px; margin-top: 70px;">

    <h5 class="card-header  white-text text-center py-4" style="background-color:#8d93ab;">
        <strong>Menu card customizer</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0" >

        <!-- Form -->
        <form method="post" class="text-center" style="width:80%; color: #757575;" action="menu_crud.php">

            <!-- Name -->
            <div class="md-form mt-3">
                <input type="number" name="id" id="materialContactFormName" class="form-control" value="<?php echo $id; ?>">
                <label for="materialContactFormName">id</label>
            </div>


            <!-- E-mail -->

            <!-- Subject -->
            <span>Category</span>
            <select class="mdb-select" name="foodtype">
                <option value="0" disabled>Choose option</option>
                <option value="1">maincourse</option>
                <option value="2">Starter</option>
                <option value="3">breakfast</option>
                <option value="4">desert</option>
            </select>
            <div class="md-form mt-3">
                <input type="text" id="category" name="category" class="form-control" value="<?php echo $category; ?>">
                <label for="category">Food name</label>
            </div>
            <div class="md-form mt-3">
                <input type="text" id="description" name="description" class="form-control" value="<?php echo $description; ?>">
                <label for="description">Description</label>
            </div>

          <div class="md-form mt-3">
                <input type="number" id="price" name="price" class="form-control" step="0.01" value="<?php echo $price; ?>">
                <label for="price">price</label>
            </div>
              <div class="md-form mt-3">
                <input type="number" id="qty" name="qty" class="form-control" value="<?php echo $qty; ?>">
                <label for="qty">Quantity</label>
            </div>
            <!-- Copy -->
            

            <!-- Send button -->
            <?php if ($update == true): ?>
    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
    <button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form contact -->

<script>
    function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


</script>

</div>


</body>
</html>