<?php
//session_start();
require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="stylesheet1.css" />
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
    <div id="header">TRUETECH PRODUCTS</div>
    <div id="content">
        <table align="center">
            <tr>
                <td align="center">
                    <img class="product" src="computer-case.jpg"/>
                    <p><b>Computer Case</b></p>
                    <p>$59.99</p>
                    <input type="number" id="computercase" name="casequantity" placeholder="Quantity" class="textbox"/>
                    <button type="button">Add to cart</button>
                </td>
                <td align="center">
                    <img class="product" src="hard-drive.jpg"/>
                    <p><b>Hard drive</b></p>
                    <p>$53.99</p>
                    <input type="number" id="harddrive" name="hddquantity" placeholder="Quantity" class="textbox"/>
                    <button type="button">Add to cart</button>
                </td>
                <td align="center">
                    <img class="product" src="motherboard1.jpeg"/>
                    <p><b>Motherboard</b></p>
                    <p>$199.99</p>
                    <input type="number" id="mboard" name="mboardquantity" placeholder="Quantity" class="textbox"/>
                    <button type="button">Add to cart</button>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <img class="product" src="graphics-card.jpg"/>
                    <p><b>Graphics Card</b></p>
                    <p>$344.99</p>
                    <input type="number" id="gcard" name="gcardquantity" placeholder="Quantity" class="textbox"/>
                    <button type="button">Add to cart</button>
                </td>
                <td align="center">
                    <img class="product" src="power-supply.jpg"/>
                    <p><b>Power supply</b></p>
                    <p>$39.99</p>
                    <input type="number" id="psupply" name="psupplyquantity" placeholder="Quantity" class="textbox"/>
                    <button type="button">Add to cart</button>
                </td>
                <td align="center">
                    <img class="product" src="CPU.jpg"/>
                    <p><b>CPU</b></p>
                    <p>$389.99</p>
                    <input type="number" id="cpu" name="cpuquantity" placeholder="Quantity" class="textbox"/>
                    <button type="button">Add to cart</button>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <img class="product" src="ram.jpg"/>
                    <p><b>RAM</b></p>
                    <p>$40.99</p>
                    <input type="number" id="ram" name="ramquantity" placeholder="Quantity" class="textbox"/>
                    <button type="button">Add to cart</button>
                </td>
                <td align="center">
                    <img class="product" src="sound-card.jpg"/>
                    <p><b>Sound card</b></p>
                    <p>$82.99</p>
                    <input type="number" id="scard" name="scardquantity" placeholder="Quantity" class="textbox"/>
                    <button type="button">Add to cart</button>
                </td>
                <td align="center">
                    <img class="product" src="fan1.jpg"/>
                    <p><b>Computer Case Fans</b></p>
                    <p>$9.99</p>
                    <input type="number" id="fan" name="fanquantity" placeholder="Quantity" class="textbox"/>
                    <button type="button">Add to cart</button>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
