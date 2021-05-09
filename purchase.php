<html>
<head>
    <title>Shopping Project</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta charset="utf-8">
</head>
<body>
   
<?php

$ServerName="localhost";
$UserName="root";
$password="";
$DB="shop_project";

$conn=new mysqli($ServerName,$UserName,$password,$DB);
/*
if($conn->connect_error){
    die("Connection Faild ". $conn->connect->error);
}
else{
    echo "connection succeed";
}
        echo "<br><br><br>";
      */
mysqli_set_charset($conn, 'utf8');
          $q = intval($_GET['q']);
          $r = intval($_GET['r']);
    
 $sql = "INSERT INTO purchase(ItemID, ItemName, Price,CustomerID) VALUES ('".$q."',(SELECT ItemName FROM product WHERE ItemID='".$q."'),(SELECT Price FROM product WHERE ItemID='".$q."'),'".$r."')";
$result = $conn->query($sql);
?>
</body>     
</html>