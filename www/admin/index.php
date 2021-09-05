<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html lang="en">
    <head>
        <title>HUNTER -> admin</title>
        <meta charset="utf-8">
        <link rel="icon" href="images/icon.png">
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/product.js"></script>
        <!-- <script src="js/login.js"></script> -->
    </head>
    <body>
        <header>
            <a href="index.php">
                <img src="images/logo.png" id="hunter"> 
            </a>
        </header>
        <main>
            <div id="addProduct" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>add a new item</p>
                </div>
            </div>
            <div id="editProduct" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>edit a item</p>
                </div>
            </div>
            <div id="deleteProduct" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>delete a item</p>
                </div>
            </div>
            <button id="addItem">add a new item</button>
            <button id="deleteItem">delete an item</button>
            <button id="editItem">edit an item</button>
            <table border="1" id="productTable" class="center">
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
        </main>
    </body>
</html>