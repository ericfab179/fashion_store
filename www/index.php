<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Database test page</title>
<style>
th { text-align: left; }

table, th, td {
  border: 2px solid grey;
  border-collapse: collapse;
}

th, td {
  padding: 0.2em;
}
</style>
</head>

<body>
<h1>Database testsss page</h1>

<p>Showing contents of papers table:</p>

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

$q = $pdo->query("SELECT * FROM PRODUCTS");

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
