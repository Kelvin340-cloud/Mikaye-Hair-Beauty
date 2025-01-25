<?php 
session_start();
include 'conn.php';
 
if($_SERVER['REQUEST_METHOD']=="POST"){
//SOMETHING WAS POSTED

$email = $_POST['email'];
$password = $_POST['password'];

if(!empty($email) && !empty($password)){
 //read from database
 $query = "SELECT * FROM clients_details where email = '$email' limit 1" ;

$result = mysqli_query($conn, $query);
if($result)
{
  if($result && mysqli_num_rows($result) > 0 )
  {
    $user_data = mysqli_fetch_assoc($result);
    
    if($user_data['password']===$password){
       header("Location: ../index.php");
       die;
    }
    echo "Wrong password";
  }
}
 
}else{
 echo "Please enter valid information";
}
}


?>
<html lang="us">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width:device-width; initial-scale:0.1">
 <title>Login form</title>
 <link rel="stylesheet" href="../style/login.css">
</head>
<body>
    <div class="login">
      <form method="post" style="width: 90%;
    max-width: 450px;
    position: absolute;
    top: 50%;
    left: 50%;
    background: transparent;
    border: 2px solid rgba(10, 10, 10, 0.5);
    border-radius: 20px;
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);
    transform: translate(-50%,-50%);
    background: #fff;
    padding: 50px 60px 70px;
    text-align: center;">
        <h1>Login </h1>
        <label style="font-family: 'Inter', sans-serif;
    font-weight: 600;
    padding: 5px;
    color: #383030;" for="email">EMAIL</label><br>
        <input type="email" name="email" placeholder="ENTER EMAIL" required  style=" padding: 10px 70px 0; border-radius: 3px;
    border-color: #a5b4e6;"><br><br><Br>
        <label for="passsword" >PASSWORD</label><br>
        <input type="password" name="password" placeholder="ENTER PASSWORD" required  style=" padding: 10px 70px 0; border-radius: 3px;
    border-color: #a5b4e6;"><br>
        
        <br><input id="button" type="submit" href="../index.php" value="Login" style="font-size: 23px;
    background-color: rgb(73, 167, 135);
    padding:6px 6px;
    border-radius: 30px;
    border: 0px;
    color:azure;
    width:22%;"><br>

        <br><a href="" style="float: center">forgot password</a><br>
      </form>
    </div>
</body>
</html>
