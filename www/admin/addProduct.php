<?php
    $db_host   = '192.168.2.13';
    $db_name   = 'fvision';
    $db_user   = 'webuser';
    $db_passwd = 'insecure_db_pw';
    $conn = new mysqli($db_host, $db_user, $db_passwd, $db_name);
    $category = $_POST['category'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_POST['image'];
    $query = "INSERT INTO products (product_category, product_name, product_desc, product_price, product_quantity, product_imagepath) VALUES ('$category', '$name', '$description', '$price', '$quantity', '$image')";
    if ($conn->query($query) === TRUE) {
        echo "New product created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }   
?>