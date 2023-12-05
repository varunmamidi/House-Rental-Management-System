<?php
include("../db.php");

if (isset($_POST['login'])) {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    

    $query = "select * from owner where owner_name = '$name' and owner_password = '$password '";
    echo $query;
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);
    if ($count_rows == 0) {
        echo "<script>alert('Please Enter Valid Details');</script>";
        echo "<script>window.open('ownerlogin.php','_self')</script>";
    }
    while ($row = mysqli_fetch_array($run_query)) {
        $id = $row['owner_id'];
    }

    $_SESSION['name'] = $name;
    echo "<script>window.open('../ownerhome.php','_self')</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>
    *{
      margin: 0;
      padding: 0;
    }
    body{
      font-family: 'Poppins', sans-serif;
      text-align: center;
      background-image: url("https://img.freepik.com/premium-photo/abstract-multi-color-powder-explosion-white-background-freeze-motion-dust-particles-splash_36326-3453.jpg?w=996");
      background-size: cover;
      
    }
    h1{
      color:black;
      display:inline-block;
      box-shadow: 0 0 20px deeppink;
      padding: 5px;
      padding-left:10px;
      padding-right: 10px;
      font-family: cursive;
    }
    
    .login_div{
      background:linear-gradient(45deg,#f12711,#f5af19);
      width:400px;
      color:white;
      padding:15px;
      margin:  50px auto;
      box-shadow: 0 0 10px orange;
    }
    div p{
      font-size:30px;
      font-family: cursive;
      padding: 10px;
    }
    input{
      padding:5px;
      padding-right: 30px;
      border-radius: 5px;
      margin:5px;
    }
    label{
      font-size:20px;
    }
    button{
      padding: 10px;
      border-radius:5px;
      font-family:'Poppins', sans-serif; ;
      margin:10px;
      color:#f12711;
      background-color: lemonchiffon;
    }
    .login1{
      color:blueviolet;
    }
    .don{

    }
    
    
  </style>


</head>
<body>
  <div class="login_div" id="new1">
   
    <p>Login Here</p>
    <from calss="login_form" action="ownerlogin.php" method="post">
        <div class="login_group">
            <label>Username</label>
            <input type="text" name="name" calss="login_control">
        </div>
        <div class="login_group">
            <label>Password</label>
            <input type="Password" name="password" calss="login_control">
        </div>
        <div>
        <a id='link' href="ownerhome.php">
            <button name="login" value="Login">Login</button></a>
            <a id='link' href="ownerregistration.php">
            <button>Register</button>
            </a>
        </div>
    </from>

  </div>
   <h1> WELCOME   TO     HOME TO HOME</h1>
  
</body>
</html>