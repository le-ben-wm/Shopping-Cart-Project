<?php

require_once('connection.php');

session_start();

$whereIn = implode(',', $_SESSION['cart']);

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Name</th><th>Price</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "127.0.0.1";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=shoppingcart", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT idproducts, product_name, product_price FROM products WHERE idproducts IN ($whereIn)");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="stylesheet1.css" />
    <title>Truetech</title>
</head>
<body>
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
<div class="overlay"></div>
</body>
</html>
