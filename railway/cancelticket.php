<?php
session_start();
$conn = mysqli_connect("localhost","root","","demo");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$adhar=$_POST['adhar'];
$query="DELETE FROM train_booked WHERE adhar = $adhar";

if(mysqli_query($conn, $query))
{  
    $message = "ticket cancelled sucessfully";
    
}
else
{  
	$message = "Could not cancel ticket"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>railway reservation system</title>
    <style>
        body
        {
           background-image: url('train11.jpeg');
        }
        #adhar 
        {
            color: white;

        }
        .form_book
        {
            border: 1px solid #ffae42;
            width:30%;
            margin: auto;
            border-radius:1%;
            padding:20px;
            box-sizing:border-box;
            background:rgba(0,0,0,0.6);
        }
        label{
           color:#fff;
           font-size:150%;
        }
        .form_book input
        {
            border:none;
            outline:none;
            background:none;
            border-bottom: 2px solid #ffae42;
            margin-left:-1px;
            color:white;
        }
        h1
        {
            text-align: center;
            text-decoration: underline;
            color: black;
            margin: 7% 30% 2% 30% ;
        }
        .submit{
            margin: 1% 8% 0% 35% ;
            font-size:25px;
            font-family: sans-serif;
            border:2px solid #283747;
            background:none;
            color:white;
            padding:0.2% 5% 0.2% 5%;
            cursor:pointer;
            background-color:#283747; 
            border-radius: 2px;  
        }
        .submit:hover{
            background-color:#fff;
            color:black;
        }
        a{
            text-decoration:none;
            border:1px solid #283747;
            color:#fff;
            margin:-1% 8% 0% 35% ;
            background-color:#283747;
            padding:0.2% 6% 0.2% 6%;
            font-size:25px;
            border-radius: 2px;  
        }
        a:hover{
            background-color:#fff;
            color:black;
        }

    </style>
</head>
<body>
   
        <form method="POST"  action="cancelticket.php" name="bookticket" onsubmit="return validate()">
        <h1>CANCEL TICKETS</h1>
        <div class="form_book">
            <label for='adhar'>Adhar number:</label>
            <input type='number' id='adhar' name='adhar' placeholder=" Enter your adhar" class="adhar" value="<?php echo $_SESSION['user_adhar']; ?>" required><br/><br>
        </div>

            <input type="submit" name="submit" value="CONFIRM" class="submit"><br><br>
            <a href="navigate.php">Home</a>   
       
    </form>
</body>
</html>