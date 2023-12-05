<?php
include("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home To Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<script>
  function fun(){
    var option=document.getElementById("room").value;
    var user=document.getElementById("main");
    if(option==="Double-BR"){
        user.action='index2.html';
        
    }
    if(option==="Duplex"){
        // place the name of duplex html page below
        user.action='index3.html';
        
    }
    
   }
</script>
<body>
    <header>
        <h1>HOME TO HOME</h1>
    </header>
    <nav>
        <a href="index.html">HOME</a>
        <a href="About.html">ABOUT</a>
        <a href="contact.html">CONTACT</a>
        <a href="login.html">LOGIN</a>
        <a href="sinup.html">SIGNUP</a>
    </nav>
    <section>
        <h3><img src="https://www.clipartmax.com/png/small/76-767749_private-cleaning-house-for-rental-png.png" width="30px" height="30px" >Rental House</h3>
        <p>Now, Its's easy to rent a property that you want or add a property.</p>
        <p>Everything related to properties is at oneplace.</p>
        <p>Find the place where you want to stay with this website easily.</p>
    </section>
     <div class="cover">
        <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" width="950px" height="500px">
        
     </div>



    <div>
        <form id="main" action="index1.html">
            
                <p><b>search information</b></p>
                <label>Location</label>
                <input type="text"  placeholder="Enter the Location">
                <label>House Type</label>
                <select id="room" class="new">
                    <option value="Single-BR">single</option>
                    <option value="Double-BR">Double-BR</option>
                    <option value="Duplex"> Duplex</option>
                </select>
                <label>Property Type</label>
                <select class="new">
                <option value="Rent a property"><u>Rent a property</u></option>
                <!--<option value="Add a property">Add a property</option>-->
                </select>
                <a href="index1.html" onclick="fun()"><button class="new">SUBMIT</button></a>
                <input  class="new" type="reset">
            </fieldset>
        </form>
    </div>
    <br>
    <br>
    <footer>
        <h4>Home To Home @ 2022</h4>
        <span>All rights are reserved</span>
    </footer>
    
</body>
</html>