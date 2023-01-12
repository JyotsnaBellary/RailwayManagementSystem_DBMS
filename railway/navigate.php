
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NAVIGATE</title>
    <script src="https://kit.fontawesome.com/3cc21c4012.js" crossorigin="anonymous"></script>
   
</head>
<body>
<?php
session_start();
if ($_SESSION['user_email']){
echo '<p style="text-align:center;color:white;background-color:#4caf50;width:30%;margin-left:35%;padding-top:1%;margin-top:-1%;padding-bottom:1%">'."WELCOME " . $_SESSION['user_email'];
}
else{
    header('Location:login.php');
}
?>
     
 <div class="bor" >
 <h1>Welcome to Indian Railways<i class="fas fa-train"></i></h1>
    <div class="nav">
    
    <a href="display.php" class="dis" >Display Trains <i class="fas fa-clipboard-list"></i></a>
    <a href="booking.php" class="boo">Book Train<i class="fas fa-train"></i></a>
    <a href="ticket1.php" class="tic">View Ticket <i class="fas fa-ticket-alt"></i></a>
    <a href="cancelticket.php" class='can'>Cancel Ticket <i class="far fa-window-close"></i></a>
    <a href="logout.php" class="log">User Logout <i class="fas fa-sign-out-alt"></i></a>
    
    </div>
</div>
    <style>

        body
        {
            background:url("train11.jpeg");
            
        }
        .bor{

            padding-top:1%;
            padding-bottom:19%;
        }
        
        h1{
            
            margin:2% 3% 0% 30% ;
            width: 500px;
            text-align:center;
            font-size:200%;
            color:black;
            border-bottom:6px solid #4caf50;
            padding-bottom:1%;    
        }
        .nav{
            margin-top:13%;
           
        }
        
        .dis{
            
            margin-left:9%;
            text-decoration:none;
            border:4px solid #4caf50;
            padding:3% 1% 3% 1%;
            margin-top:100%;
            color:black;
            background:white;
            cursor:pointer;
            
        }
        .boo{
            margin-left:6%;
            text-decoration:none;
            border:4px solid #4caf50;
            padding:3% 2% 3% 1.5%;
            margin-top:100%;
            color:black;
            background:white;
            cursor:pointer;
        }
        .tic{
            
            margin-left:6%;
            text-decoration:none;
            border:4px solid #4caf50;
            padding:3% 1.5% 3% 1.5%;
            margin-top:100%;
            color:black;
            background:white;
            cursor:pointer;
        }
        .can{
            margin-left:6%;
            text-decoration:none;
            border:4px solid #4caf50;
            padding:3% 1% 3% 1%;
            margin-top:100%;
            color:black;
            background:white;
            cursor:pointer;
            
        }
        .log{
            margin-left:6%;
            text-decoration:none;
            border:4px solid #4caf50;
            padding:3% 1.5% 3% 1.5%;
            margin-top:100%;
            color:black;
            background:white;
            cursor:pointer;
           
            
        }
        
        .dis:hover,.can:hover,.tic:hover,.log:hover,.admin:hover,.boo:hover{
            background-color:rgb(108, 167, 108);
        }

    </style>
</body>
</html>
