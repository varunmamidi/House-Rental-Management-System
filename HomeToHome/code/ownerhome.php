<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a property</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            font-family:'Poppins', sans-serif;
            background-image: url("https://img.freepik.com/premium-photo/abstract-multi-color-powder-explosion-white-background-freeze-motion-dust-particles-splash_36326-3453.jpg?w=996 height: 1500px;");
            background-position: center;
            background-size: cover;
            width:640px;
            text-align: center;
            margin-left: 310px;
            box-shadow:0 0 10px purple;
            
            
        }

        .details{
            background-color: rgb(0,0,0,0,0.9);
            color:black;
            border-radius: 15px 15px 0px 0px;
        }
        input{
            padding: 10px;
            margin: 2px;
             font-family: cursive;
            border: 2px solid black;
            border-radius:10px;
        }
        .details1{
            padding: 10px;
            margin: 5px;
            border: 2px solid black;
            border-radius: 10px;
        }
       
       .submit{
            padding: 10px;
            margin: 10px;
            border: 2px solid black;
            border-radius: 10px;
       }
       div form i{
        font-size:18px;
        font-family:cursive;
        padding: 10px;
       }
        
        

    </style>
</head>
<body>
  <div class="addProperty">
    <div class="details">
        <h2>ADD PROPERTY DETAILS</h2>
    </div>
    <form>
           <div>
            <label>Username</label>
            <input type="text" placeholder="enter the Username">
           </div>
           <div>
              <label>Name of the Property</label>
              <input type="text" placeholder="enter name">
           </div>
           <div>
               <label>Email</label>
              <input type="email" placeholder="enter email">
           </div>
           <div>
             <label>password</label>
             <input type="password" placeholder="enter password">
           </div>
          <div>
          <lebel>Phone Number</lebel>
          <input type="number" placeholder="enter phone number">
          </div>
          <div>
          <label>enter price of property</label>
          <input type="number" placeholder="enter price">
          </div>
          <i>select</i>
          <select class="details1">
            <option value="Single-BR">Single-BR</option>
            <option value="Double-BR">Double-BR</option>
            <option value="Duplex">Duplex</option>
          </select>
          <button class="submit">submit</button>
          <button class="details1">reset</button>
    </form>
  </div>
</body>
</html>