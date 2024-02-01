<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html lang="en">
    <head>
        <title>HUNTER -> footwear</title>
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
                <div class="modal-content" id="mainCart">
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
                    <div id="totalCart"></div>
                    <button id="clearCart">clear cart</button>
                    <button id="checkout">checkout</button>
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
            <div class="wrapper">
                <?php
                    $db_host   = '192.168.100.13';
                    $db_name   = 'fvision';
                    $db_user   = 'webuser';
                    $db_passwd = 'insecure_db_pw';
                    $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
                    $pdo = new PDO($pdo_dsn, $db_user, $db_passwd);
                    $q = $pdo->query("SELECT * FROM products WHERE product_category='footwear'");
                    while($row = $q->fetch()){
                        echo "<div class='box'>";
                        echo "<a><img src='".$row["product_imagepath"]."' id='productImage'></a>";
                        echo "<p id='pname'>".$row["product_name"]."</p>";
                        echo "<p id='price'>".$row["product_price"]."</p>";
                        echo "<p>".$row["product_name"]." - $".$row["product_price"]."</p>";
                        echo "<p>".$row["product_desc"]."</p>";
                        echo "<button id='addToCart'>Add</button>";
                        echo "</div>\n";
                    }
                ?>
            </div>
            <footer>
                <h2>about HUNTER</h2>
                <p>HUNTER is a world leader in contemporary mens fashion</p>
                <p>This site is the one place you need for the coming season</p>
                <h2>about me</h2>
                <address>
                    <p>Angus Hunter</p>
                    <p>Dunedin, New Zealand</p>
                    <p>angus.hunter2001@gmail.com</p>
                    <p>021 207 0224</p>
                </address>
            </footer>
        </main>
    </body>
</html>