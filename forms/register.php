<?php
session_start(); 

include("conn.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        // Save to database
        $query = "INSERT INTO clients_details (user_name, email, password) VALUES ('$user_name', '$email', '$password')";
        mysqli_query($conn, $query);

        // Get the user_id after registration
        $user_id = mysqli_insert_id($conn);

        // Store the user_id in the session
        $_SESSION["user_id"] = $user_id;

        header("Location: login.php");
    } else {
        echo "Please enter valid information";
    }
}
?>

<html lang="us">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width:device-width; initial-scale:0.1">
 <title>Register form</title>
 <link rel="stylesheet" href="../style/login.css">
</head>
<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script>
<body>
    <div class="login">
      <form method="POST" name="signup" onSubmit="return valid();" 
      style="width: 90%;
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
        <h1>Register</h1>
        <label for="Username">Username</label><br>
        <input type="text" name="user_name" placeholder="ENTER USERNAME" required></input><br><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="ENTER EMAIL ADDRESS" required><br><br><Br>
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="ENTER PASSWORD" required><br><br>
        <label for="password">Confirm Password</label><br>
        <input type="password" name="confirmpassword" placeholder="ENTER PASSWORD" required><br><br>
        
        <input id="button" type="submit"name="signup"  style="font-size: 23px;
    background-color: rgb(73, 167, 135);
    padding:6px 6px;
    border-radius:5px;
    border: 0px;
    color:azure;">
      </form>
    </div>
</body>
</html>