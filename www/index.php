<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html lang="en">
    <head>
        <title>HUNTER</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <header>
            <a href="index.html">
                <img src="logo.png" alt="pawhub"> 
            </a>
            <nav>
                <ul>
                    <li><a href="index.html">about us</a></li>
                    <li><a href="bookings.html">bookings</a></li>
                    <li><a href="points_of_interest.html">points of interest</a></li>
                </ul>
            </nav>
        </header>

<p>Showing contents of products table:</p>

<table border="1">
<tr>
    <th>product_id</th>
    <th>product_category</th>
    <th>product_name</th>
    <th>product_price</th>
    <th>product_desc</th>
    <th>product_quantity</th>
</tr>

<?php
 
$db_host   = '192.168.2.13';
$db_name   = 'fvision';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("SELECT * FROM products");

while($row = $q->fetch()){
    echo "<tr>";
    echo "<td>".$row["product_id"]."</td>";
    echo "<td>".$row["product_category"]."</td>";
    echo "<td>".$row["product_name"]."</td>";
    echo "<td>".$row["product_price"]."</td>";
    echo "<td>".$row["product_desc"]."</td>";
    echo "<td>".$row["product_quantity"]."</td>";
    echo "</tr>\n";
}

?>
</table>
</body>
</html>
