<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html lang="en">
    <head>
        <title>HUNTER -> tops</title>
        <meta charset="utf-8">
        <link rel="icon" href="icon.png">
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <header>
            <a href="index.php">
                <img src="logo.png" alt="pawhub"> 
            </a>
            <nav>
                <ul>
                    <li><a href="tops.php">tops</a></li>
                    <li><a href="bottoms.php">bottoms</a></li>
                    <li><a href="footwear.php">footwear</a></li>
                    <li><a href="headwear.php">headwear</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <p>Showing all tops in the products table</p>
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
                    $q = $pdo->query("SELECT * FROM products WHERE product_category='tops'");
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
        </main>
    </body>
</html>