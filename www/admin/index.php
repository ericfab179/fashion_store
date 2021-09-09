<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html lang="en">
    <head>
        <title>HUNTER -> admin</title>
        <meta charset="utf-8">
        <link rel="icon" href="images/icon.png">
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/delete.js"></script>
        <script src="js/add.js"></script>
    </head>
    <body>
        <header>
            <a href="index.php">
                <img src="images/logo.png" id="hunter"> 
            </a>
            <p>administration</p>
        </header>
        <main>
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
                    <form action="" method="post" id="addForm">
                        <div class="field">
                            <label class="label">category:</label>
                            <p class="control">
                                <input class="input" type="text" name="addCat" id="addCat">
                            </p>
                        </div>
                        <div class="field">
                            <label class="label">name:</label>
                            <p class="control">
                                <input class="input" type="text" name="addName" id="addName">
                            </p>
                        </div>
                        <div class="field">
                            <label class="label">description:</label>
                            <p class="control">
                                <input class="input" type="text" name="addDesc" id="addDesc">
                            </p>
                        </div>
                        <div class="field">
                            <label class="label">price:</label>
                            <p class="control">
                                <input class="input" type="text" name="addPrice" id="addPrice" placeholder="00.00">
                            </p>
                        </div>
                        <div class="field">
                            <label class="label">quantity in stock:</label>
                            <p class="control">
                                <input class="input" type="text" name="addQuantity" id="addQuantity" placeholder="0">
                            </p>
                        </div>
                        <div class="field">
                            <label class="label">image name: (with extension)</label>
                            <p class="control">
                                <input class="input" type="text" name="imagePath" id="imagePath">
                            </p>
                        </div>
                    </form>
                    <button id="addFinal">add item</button>
                    <div id="errors"></div>
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