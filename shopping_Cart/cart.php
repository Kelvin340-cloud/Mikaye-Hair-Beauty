<?php 
    session_start();
    $dbhost ="localhost";
    $dbuser ="root";
    $dbpass = "";
    $dbname ="clients";

#$conn = myqsli_connect($dbhost,$dbuser,$dbpass,$dbname);
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }

        #header{ 
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 80px;
    background: #fff; /* makes the navigation bar to be transparent*/
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    z-index: 999;
    position: sticky;
    top: 0;
    left: 0;
}

#navbar {
    display: flex;
    align-items: center;
    justify-content: center;
}

#navbar li { 
    list-style: none;
    padding: 0 20px;
    position: relative;
}

#navbar li a {
    text-decoration: none;
    font-weight: 600;
    font-size: 15px;
    color: black;
    transition: 0.3s ease;
}

#navbar li a:hover,
#navbar li a.active {    
    color:#f5c951 ;
    text-decoration: underline;
}

#navbar li a.active::after
#navbar li a.active:hover::after {
    content: "";
    width: 30px;
    height: 3px;
    background: rgb(239, 195, 76);
    position: absolute;
    bottom: -4px;
    left: 30px;
}

        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>

<section id="header">
        <img src="/images/logo.png" class="logo" alt="" width="100px" height="30vh">

         <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li></li>
                <li id="lg-cart  "><a  href="cart.php"><span class="material-symbols-outlined">
                    shopping_cart
                    </span></a></li>
                <a href="#" id="close"><span class="material-symbols-outlined">close</span></a>
            </ul>
         </div>
</section>         
</head>

<body>

    
        
         <div class="cointainer" style="width: 65%">
            <h2>Mikaye Shopping Cart</h2>
            <?php
                $query = 'SELECT * FROM product ORDER BY id ASC';
                #$result = myqsli_query($conn,$query);
                if(myqsli_num_row($result) > 0){

                    while ($row = mysqli_fetch_array($reuslt)){

                        ?>
                <div class="col-md-3">

                     <form method="post" action="Cart.php?action=add&id=<?php echo $row["id"]?>">

                        <div class="product">
                            <img src="<?php echo $row ["image"]; ?>" class="img-responsive">
                            <h5 class="text-info"><?php $row["pname"]; ?></h5>
                            <h5 class="text-danger"><?php $row["price"]; ?></h5>
                            <input type="text" name="quantuty" class="form-control" value="1">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                value="Add to Cart">

                        </div>
                    </form>        
                </div>
                <?php 
                
                    }
                }
            ?>
 
                <div class="clear: both"></div>
                <h3 class="title2">Shooping Cart Details</h3>
                <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th width="30%">Product Name</th>
                        <th width="10%">Quantity</th>
                        <th width="13%">Price Details</th>
                        <th width="10%">Total Price</th>
                        <th width="17%">Remove Item</th>
                    </tr>

                    <?php
                        if(!empty($_SESSION["cart"])){
                            $total = 0;
                            foreach ($_SESSION["cart"] as $key => $value){
                                ?>

                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>$ <?php echo number_format(number: $value["item_quantity"] * $value["product_price"], decimal:2); ?></td>
                            <td><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>   
                        
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                            }
                            ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php

                        }
                    
                    ?>
                </table>
                </div>
        </div>
   

    <section id="page-header" class="about-header">
    </section>