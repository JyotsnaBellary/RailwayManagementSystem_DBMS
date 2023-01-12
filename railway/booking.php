<?php
session_start();

$conn = mysqli_connect("localhost","root","","demo");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if ($_SESSION['user_email']){
    echo '<p style="padding:0.5%;margin-left:34%;color:black;background-color:FF9933;width:30%;text-align:center;">'. $_SESSION['user_email'];
    }
    else{
        header('Location:login.php');
    }
if (isset($_POST['submit']))
{
   
$train=$_POST['train'];
$name=$_POST['name'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$adhar=$_POST['adhar'];
$user_id=$_POST['id'];
$_SESSION['user_adhar'] = $adhar;

$sql = "INSERT INTO train_booked (name, age, gender, adhar, phone, train_booked, user_id) VALUES ('$name', '$age',  '$gender', '$adhar', '$phone', '$train', '$user_id');";
if(mysqli_query($conn, $sql))
{  
    
            $message = "ticket booked sucessfully";
            header('Location:ticket1.php');
          
}
else
{  
    $message = "Could not insert record";
     
}
echo "<script type='text/javascript'>alert('$message');</script>";	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>railway reservation system</title>
    <script src="https://kit.fontawesome.com/3cc21c4012.js" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST"  action="booking.php" name="bookticket" onsubmit="return validate()">
        <div class="form_book">
        
            <label  for='train'><i class="fas fa-train"></i>    Train:</label><!--dropdown-->
                <select id="train" name="train" class="train" >
                    <option selected disabled>     --------Select trains here--------</option>
                    <option value="Rajdhani Express">Rajdhani Express</option>
                    <option value="Duron Express">Duron Express</option>
                    <option value="Geeta Express">Geeta Express</option>
                    <option value="Garib rath">Garib rath</option>
                    <option value="Mysore Express">Mysore Express</option>
                    <option value="Rani-Chennamma">Rani-Chennamma</option>
            </select><br><br>
        <div class="bor">
        <label  for='user_id' ><i class="fas fa-id-card-alt"></i> User_id:</label>
            <input type='number' id='id' name='id'  class="id"  placeholder="Enter user id" value="<?php echo $_SESSION['user_id']; ?>" required><br/><br>

            <label for='name'><i class="fas fa-user-check"></i> Name:</label>
            <input type='text' id='name' name='name' placeholder="Enter your name"  class="name" required><br/><br>

            <label for='age'>Age:</label>
            <input type='number' id='age' name='age' placeholder="Enter your age" class="age" required><br/><br>

            <label for='gender'><i class="fas fa-venus-mars"></i>  Gender:</label>
            <input type='text' id='gender' name='gender' placeholder="Enter your gender" class="gender" required><br/><br>
             

            <label for='adhar'><i class="far fa-sticky-note"></i>  Adhar number:</label>
            <input type='text' id='adhar' name='adhar' placeholder="Enter your adhar" class="adhar" required><br/><br>

            <label for='phone'><i class="fas fa-phone"></i>  Phone Number:</label>
            <input type='text' id='phone' name='phone' placeholder="Enter your phone number" class="phone" required><br/><br>

            <div class="button">
            <input type="submit" name="submit" value="Confirm Booking" class="submit">
            <a href="navigate.php">Home</a> 
            </div>
        </div>
        </div>
<style>
    body{
        max-width:100%;
        height:auto;
        font-family: sans-serif;
        background:url("train7.jpg");   
        }

        .form_book{
            border:1px solid #ffae42;
            width:500px;
            margin:3% 0% 0% 29%;
            color:#fff;
            background:rgba(0,0,0,0.6);
            padding: 1%;
        }
        .form_book input{
            border:none;
            outline:none;
            background:none;
            border-bottom: 2px solid #ffae42;;
            margin-left:1%;
            color:white;
        }
        .form_book .submit, a{
            margin:1% 0% 0% 12%;
            font-size:25px;
            font-family: sans-serif;
            border:2px solid #ffae42;;
            background:none;
            color:white;
            padding:0% 2% 0% 2%;
            cursor:pointer;
            background:rgba(0,0,0,0.6); 
            text-decoration: none;       
        }
        .submit:hover, a:hover{
            background-color:rgb(108, 167, 108);
        }
        label{
            margin-left:7%;
            text:bold;
            margin-top:1%;  
        }
            .name{
            overflow:hidden;
            font-size:20px;
            margin:5px;
            border-bottom: 2px solid #4caf50;
            margin-left:8%;
            width: 74%;
            }
            .age{
            width: 82%;
            overflow:hidden;
            font-size:20px;
            margin:5px 0;
            border-bottom: 2px solid #4caf50;
            margin-left:8%;
            }
            .adhar{
            width: 63%;
            overflow:hidden;
            font-size:20px;
            margin:5px 0;
            border-bottom: 2px solid #4caf50;
            margin-left:8%;
            }

            .phone{    
            overflow:hidden;
            font-size:20px;
            margin:5px 0;
            border-bottom: 2px solid #4caf50;
            margin-left:8%;
            width: 60%;
            }
            .train{
            width: 90%;
            overflow:hidden;
            font-size:20px;
            margin:.05% 0% 0% 0% ;
            margin-left:8%;
            outline:none;
            border:none;
            background:none;
            border-bottom: 2px solid #ffae42;
            color:white;
            }
            .gender{
            width: 72%;
            overflow:hidden;
            font-size:20px;
            padding:5px 0;
            margin:5px 0;
            border-bottom: 2px solid #4caf50;
            margin-left:8%;
            }
            .id{
            width: 71%;
            overflow:hidden;
            font-size:20px;
            padding:5px 0;
            margin:5px 0;
            border-bottom: 2px solid #4caf50;
            margin-left:8%;
            }
            option{
                background:black;
                
            }
        </style>
    </form>
</body>
</html>
    