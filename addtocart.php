<?php

require_once('connection.php');

session_start();

if (empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet1.css" />
    <meta charset="UTF-8">
    <title>Truetech</title>
</head>
<body>
<div class="overlay"></div>
<div id="website">
    <div id="nav">
        <ul class="nav">
            <li><a href="main.html"><img src="logo.png" id="logo" /></a></li>
            <li class="test"><a href="main.html"><b>HOME</b></a></li>
            <li class="test"><a href="products.php"><b>PRODUCTS</b></a></li>
            <li class="test"><a href="contact.html"><b>CONTACTS</b></a></li>
            <li class="test"><a href="about.html"><b>ABOUT</b></a></li>
            <li class="test"><a href="faq.html"><b>FAQ</b></a></li>
            <li id="shoppingcart"><a href="cart.php"><img src=shopping-cart.png id="cart" /></a></li>
        </ul>
    </div>
    <div id="header"></div>
    <div id="content">
        <div id="text">
            <p>Product was successfully added to your cart.</p>
            <p><a href="products.php"><button type="button">Continue Shopping</button></a><a href="cart.php"><button type="button">View Shopping Cart</button></a></p>
        </div>
    </div>
</div>
</body>
</html>
