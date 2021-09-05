<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html lang="en">
    <head>
        <title>HUNTER</title>
        <meta charset="utf-8">
        <link rel="icon" href="images/icon.png">
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/cart.js"></script>
        <script src="js/cartPopup.js"></script>
    </head>
    <body>
        <header>
            <a href="index.php">
                <img src="images/logo.png" id="hunter"> 
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
            <button id="cartButton">cart</button>
            <div id="cartModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>cart</p>
                    <table border="1" id="cartTable" class="center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody id="tableContent"></tbody>
                    </table>
                </div>
            </div>
            <div id="addToCartModal" class="modal">
                <div class="modal-content">
                    <span class="addToClose">&times;</span>
                    <p>how many would you like?</p>
                    <select id="quant">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                    <button id="finalAdd">add to cart</button>
                </div>
            </div>
            <p>all items</p>
            <table border="1" id="productTable" class="center">
                <tr>
                    <th>product_id</th>
                    <th>product_category</th>
                    <th>product_name</th>
                    <th>product_price</th>
                    <th>product_desc</th>
                    <th>product_quantity</th>
                    <th>add to cart</th>
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
                        echo "<td id='addToCart'><div><button>Add</button></div></td>";
                        echo "</tr>\n";
                    }
                ?>
            </table>
        </main>
    </body>
</html>