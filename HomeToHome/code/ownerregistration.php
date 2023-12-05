<?php

include("../db.php");


if (isset($_POST['register'])) {

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
	$mail = mysqli_real_escape_string($con, $_POST['mail']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

	

	if (strcmp($password, $confirmpassword) == 0) {

		$query = "insert into owner (owner_name,owner_number,owner_mail,owner_password) 
		values ('$name','$phonenumber','$mail','$password')";

		$run_register_query = mysqli_query($con, $query);
		echo "<script>alert('SucessFully Inserted');</script>";
		echo "<script>window.open('ownerlogin.php','_self')</script>";
	} else if (strcmp($password, $confirmpassword) != 0) {
		echo "<script>
			alert('Password and Confirm Password Should be same');
		</script>";
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/a06d91f56a.js" crossorigin="anonymous"></script>
    <style>
*{
    margin:0;
    padding: 0;
}
body{
    
    background-image: url("");
    background-size: cover;
}
.register_div{
    font-weight: arial,sans-serif;
    background:linear-gradient(45deg,#40E0D0,#FF8C00,#FF0080);
    width:300px;
    color:white;
    padding:15px;
    margin:  50px auto;
}
.register_div h2{
    text-align: center;
}
.form_group label{
    display:block;
    margin:1px 0;
}
.form_control{
    font-size: 18px;
    height:35px;
    outline: none;
    border: none;
    width:290px;
    border-radius: 10px;;

}
.submit_form{
    margin:15px 0;
    background: linear-gradient(45deg,#24c6dc, #514a9d);
    color:white;
    font-size: 18px;
    padding:10px 25px;
    width:290px;
    border:none;
    box-shadow: 0 5px 10px black ;
}
input{
    border:2px solid black;
    padding-left:20px;
    padding-bottom: 5px; 
    padding-right:30px;
    padding-top:5px;
    border-radius: 5px;
}
label{
   font-size: 20px;
}
.fa-circle-user{
    font-size: 80px;
    display: block;
    text-align: center;
    padding: 10px;
}
div p{
    margin:10px;
    font-size: 30px;
    text-align: center;
    color:darkred;
}
.register_div{
    position: relative;
    left:300px;
    box-shadow: 0 0 10px black;
}


 </style>
    
</head>
<body>
    <div class="register_div" id="new">
        <i class="fa-solid fa-circle-user"></i>
        <p>Register Here</p>
        <from calss="register_form"  action="ownerregistration.php" method="post">
            <div class="form_group">
             <label>Username</label>
             <input type="text" name="name" calss="form_control">
            </div>
            <div class="form_group">
                <label>Email</label>
                <input type="email" name="mail" calss="form_control">
            </div>
            <div class="form_group">
                <label>Phone number</label>
                <input type="phonenumber" name="phonenumber" calss="form_control">
            </div>
            <div class="form_group">
                <label>Password</label>
                <input type="Password" name="password" calss="form_control">
            </div>            
            <div class="form_group">
                <label>Confirm Password</label>
                <input type=" Password" name="confirmpassword" calss="form_control">
            </div>
            <div>
            <a id='link' value="register" name="register" href="ownerlogin.php">
            <button>Register</button>
            </a>
               <!-- <input type="submit" value="register" name="register" class="submit_form"> -->
            </div>
        </from>

    </div>
</body>
</html>