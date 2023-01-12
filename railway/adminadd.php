<?php
session_start();
if (isset($_POST['submit']))
{
    $conn = mysqli_connect("localhost","root","","demo");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
$trainame=$_POST['train'];
$trainumber=$_POST['train_no'];
$start=$_POST['start'];
$dest=$_POST['dest'];
$arrival=$_POST['arrtime'];
$departure=$_POST['depar'];   
$sql="INSERT INTO trains_display (train_name, train_number, starting_point, destination, arrival, departure) VALUES ('$trainame', '$trainumber', '$start', '$dest', '$arrival', '$departure');";
if(mysqli_query($conn, $sql))
{
    $message='successfully updated';
    header('Location:admintrains.php');
}
else{
	$message = 'updation unsuccessfull';
}
echo "<script type='text/javascript'>alert('$message');</script>";

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
	<title>railway resevation system</title>
    <meta name="viewport" content="width=device-width,initial scale=1">
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
                margin: 3% 0% 3% 0% ;
            }
            .one
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
            .one input
            {
            border:none;
            outline:none;
            background:none;
            border-bottom: 2px solid white;
            margin-left:-1px;
            color:white;
            opacity: 1;
            }
            .button {
                margin: -11% 0% 0% 0%;
            }
            .button input, a
            {
                text-decoration:none;
                border: 1px solid black;
                border-radius: 1px;
                padding:0.5%;
                font-size:20px;
                background-color:white;
                color:#202020;
                width: 10%;
            }
            .submit 
            {
                margin: 0.5% 0% 0% 34%;
            }
            a:hover, .submit:hover
            {
                background-color:#202020;
                color:white;
            }
            #train {
                width: 50%;
            }
            #train_no {
                width: 45%;
            }
            #start {
                width: 44%;
            }
            #dest {
                width: 50%;
            }
            #arrtime {
                width: 49%;
            }
            #depar {
                width: 44%;
            }

        </style>
</head>
<body>
<h1>Add Train Info</h1>
<div class = 'one'>
<form method="post" action="adminadd.php">
    <label for='train_name'>TRAIN NAME:</label>
    <input type='text' id='train' name='train' ><br/><br>

    <label for='train_no'>TRAIN NUMBER:</label>
    <input type='number' id='train_no' name='train_no'><br/><br>

    <label for='start'>STARTING POINT:</label>
    <input type='text' id='start' name='start'><br/><br>

    <label for='dest'>DESTINATION:</label>
    <input type='text' id='dest' name='dest' ><br/><br>
             

    <label for='arrtime'>ARRIVAL TIME:</label>
    <input type='text' id='arrtime' name='arrtime' ><br/><br>

    <label for='depar'>DEPARTURE TIME:</label>
    <input type='text' id='depar' name='depar'  ><br/><br>

    </div>   <!--one-->  
    <div class="button">
            <INPUT TYPE="Submit" value="submit" name="submit" id="submit" class="submit">
            <a href="admintrains.php">Cancel</a></p> 
    </div>   
</form>
</body>
</html>