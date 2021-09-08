<?php
    $db_host   = '192.168.2.13';
    $db_name   = 'fvision';
    $db_user   = 'webuser';
    $db_passwd = 'insecure_db_pw';
    $conn = new mysqli($db_host, $db_user, $db_passwd, $db_name);
    $name = $_POST['name'];
    $sql = "DELETE FROM products WHERE product_name='$name'";
    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully";
    } else {
        echo "Error deleting product: " . $conn->error;
    }
?>