<?php
session_start();
$conn = mysqli_connect("localhost","root","","demo");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$train=$_POST['train_no'];
$query="DELETE FROM trains_display WHERE train_number = $train";

if(mysqli_query($conn, $query))
{  
    $message = "successfully deleted";
    
}
else
{  
	$message = "Could not delete"; 
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
            background:url("train11.jpeg");
        }
        h1 
        {
            text-align: center;
            text-decoration: underline;
            color: black;
            margin: 7% 0% 3% 0% ;
        }
        .train_no 
        {
            color: white;
        }
        .form_book
        {
            width:400px;
            margin: 15% 30% 0% 50%;
            transform: translate(-50%, -50%);
            border-radius:1%;
            padding:2%;
            color:#fff;
            box-sizing:border-box;
            background:rgba(0,0,0,0.6);
        }
        .form_book input
            {
            border:none;
            outline:none;
            background:none;
            border-bottom: 2px solid white;
            margin-left:-1px;
            color:white;
            opacity: 1;
            }
            .button input, .button a
            {
                text-decoration:none;
                border:1px solid black;
                padding:3%;
                font-size:15px;
                background-color:white;
                color: #202020;
            }
        .button :hover
        {
            background-color: rgb(23, 252, 23);
        }
    </style>
</head>
<body>
    <h1>DELETE TRAIN</h1>
        <form method="POST"  action="admindelete.php"  onsubmit="return validate()">
        <div class="form_book">
            <label for='train_no'>Train number:</label>
            <input type='number' id='train_no' name='train_no'><br/><br>
            <div class="button">
                <input type="submit" name="submit" value="CONFIRM" class="submit">
                <a href="admintrains.php">Cancel</a><br><br>
            </div>
        </div>
        
    </form>
</body>
</html>