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
    $Mysum=0;
mysqli_set_charset($conn, 'utf8');
 $q = intval($_GET['q']);
 $sql = "SELECT * FROM purchase WHERE CustomerID = '".$q."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
 echo "<table>
         <tr>
    <th>מחיר</th>
     <th>שם המוצר</th>
  </tr>
  <tr>
    <td>".$row['Price']."</td>
     <td>".$row['ItemName']."</td>
  </tr>
  <tr>
      </table>
      <style>
      table,td,tr,th,h3,p {
       background-color:#FFFFFF;border-collapse:collapse;border:2px solid #6699FF;color:#000000;width:400;text-align:center;margin:auto;
}
</style>
      ";
      
    $Mysum+=$row['Price'];
  }
    echo "<p>סך הכל ".$Mysum."</p>";
}
?>
</body>     
</html>