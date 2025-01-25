<?php
session_start();
$dbname = "clients";
$con = mysqli_connect("localhost", "root", "", $dbname);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $owner = $_POST["owner"];
    $card_number = $_POST["cardnumber"];
    $amount = $_POST["amount"];
    $month = $_POST["month"];
    $year = $_POST["year"];

    // Check if the user is logged in and registered
    if (isset($_SESSION["user_id"])) {
        $id = $_SESSION["user_id"];
        if (is_user_registered($id)) {
            // User is registered, proceed with payment
            save_payments_details($owner, $card_number, $amount, $month, $year);
        } else {
            echo "User is not registered. Please register before making a payment.";
        }
    } else {
        echo "User not logged in";
    }
}

// Function to check if the user is registered
function is_user_registered($user_id)
{
    global $con;
    $query = "SELECT * FROM clients_details WHERE id = '$user_id'";
    $result = mysqli_query($con, $query);
    return mysqli_num_rows($result) > 0;
}

// Function to save payment details to the database
function save_payments_details($owner, $card_number, $amount, $month, $year)
{
    global $con;

    $user_id = $_SESSION["user_id"];
    $payment_date = date("Y-m-d");

    // Create a new payment record
    $insert_payments_query = "INSERT INTO payments (user_id, owner, card_number, amount, payment_date) 
                             VALUES ('$user_id', '$owner', '$card_number', '$amount', '$payment_date')";
    $result = mysqli_query($con, $insert_payments_query);

    if ($result) {
        // Display a success pop-up
        echo '<script>alert("Payment information successfully paid"); window.location.href = "index.php";</script>';
    } else {
        // Display an error pop-up
        echo '<script>alert("Error: ' . mysqli_error($con) . '"); window.location.href = "index.php";</script>';
    }
    
    
}
?>



<!DOCTYPE html>
<html lang="en">
<!--Kelvin, Kyla-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mikaye</title>
    <script src="https://kit.fontawesome.com/46b42500a5.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    
    <section id="header">
        <img src="./images/logo.png" class="logo" alt="" width="100px" height="30vh">

         <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li></li>
                <li><div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">User</a>
                            <div class="dropdown-menu m-0">
                            </div>
                    </div></li>
                <li><a class="active" href="payment.php">Payment</a></li>
            </ul>
         </div>
    </section>

</head>
<body>

<div class="form" style="border-radius: 1px;
    background-color: #f5f1f1;
    padding: 20px;
    width:50%;
    align-items: center;
    margin:auto ;
    margin-top: 70px;
    text-align: justify;">
   <form name="myform" method="post" action="payment.php" onsubmit="return validateform()">

        <h1 syle=" font-family: 'Quicksand', sans-serif;
                    text-align: center;">Confirm Purchase</h1>
        <section>

        <div class="row1" style="float: left; margin-right: 20px;">
            <label style="font-family: 'Inter', sans-serif;
                    font-weight: 600;
                    padding: 5px;
                    color: #383030;">Owner</label>
             <input type="text" name="owner" id="owner">
        </div>
        <div class="row2" style="float: left;">
            <label style="font-family: 'Inter', sans-serif;
                    font-weight: 600;
                    padding: 5px;
                    color: #383030;">Amount</label>
            <input type="text" name="amount" id="cvv">
        </div>

        <br style="clear: both;">
        </section>

        <section>
        <div class="row3">
            <label style="font-family: 'Inter', sans-serif;
                    font-weight: 600;
                    padding: 5px;
                    color: #383030;">Card Number</label>
        <input type="text" name="cardnumber" id="cardNumber">
        </div>
        </section>

        <div class="row4">
            <label style="font-family: 'Inter', sans-serif;
                    font-weight: 600;
                    padding: 3px;
                    color: #383030;">Expiration Date</label>
        </div>

        <div id="#" style="overflow: hidden; ">
            <div class="image-div" >
              <img src ="images/amex.jpg" style="width:70px; height: 50px;">
            </div>
          
            <div class="image-div" >
              <img src ="images/mastercardlogo.png" style="width: 50px; height: 45px;">
            </div>
          
            <div class="image-div" >
              <img src ="images/visalogo.png" style="width: 70px;" >
            </div>
            <div style="clear:left;"></div>
          </div>
          
          
        
        <select name="month">
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
        <select name="year">
            <option>2010</option>
            <option>2011</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
            <option>2023</option>
            <option>2024</option>
        </select><br>
        <input class="button1" type="submit" value="Confirm">

    </form>
    </div>
    <script>
    function validateform(){
        let owner = document.myform.owner.value;
        let amount = document.myform.amount.value;
        let cardNumber = document.myform.cardNumber.value;

        if(owner==null || owner==""){
            alert("Name can't be blank.");
            return false;
        }else if(amount == nill || amount==""){
            alert("Amount can't be blank.");
            return false;
        }else if(cardNumber<13){
            alert("Card Number must be at least 13 characters long.")
        }else{
            alert(" successful payment!");
            return true;
        }
    }
</script>
</body>

</html>
