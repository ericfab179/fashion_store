<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html lang="en">
    <head>
        <title>HUNTER -> admin</title>
        <meta charset="utf-8">
        <link rel="icon" href="images/icon.png">
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/product.js"></script>
    </head>
    <body>
        <header>
            <a href="index.php">
                <img src="images/logo.png" id="hunter"> 
            </a>
            <p>administration</p>
        </header>
        <main>
            <div id="editProduct" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>edit item</p>
                </div>
            </div>
            <div id="deleteProduct" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>are you sure you want to delete this item?</p>
                    <button id='finalDelete'>yes</button>
                    <button id='noDelete'>no</button>
                </div>
            </div>
            <div id="addProduct" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>add a new item</p>
                </div>
            </div>
            <button id="addItem">add a new item</button>
            <div class="wrapper">
            <?php
                $db_host   = '192.168.2.13';
                $db_name   = 'fvision';
                $db_user   = 'webuser';
                $db_passwd = 'insecure_db_pw';
                $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
                $pdo = new PDO($pdo_dsn, $db_user, $db_passwd);
                $q = $pdo->query("SELECT * FROM products");
                while($row = $q->fetch()){
                    echo "<div id='".$row["product_name"]."'>";
                    echo "<div class='box'>";
                    echo "<a><img src='".$row["product_imagepath"]."' id='productImage'></a>";
                    echo "<p id='pname'>".$row["product_name"]."</p>";
                    echo "<p id='price'>".$row["product_price"]."</p>";
                    echo "<p>".$row["product_name"]." - $".$row["product_price"]."</p>";
                    echo "<p id='pdesc'>".$row["product_desc"]."</p>";
                    echo "<button id='editItem'>edit</button>";
                    echo "<button id='deleteItem'>delete</button>";
                    echo "</div>";
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