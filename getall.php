<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Shopping Project</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta charset="utf-8">
</head>
<body>
    <div style="text-align: center;
    margin-top:0px;
    direction: rtl;
    margin-left: auto;
    margin-right: auto;
    width: 80%;
    height: 100%;
    padding:10px;
    margin-left:auto;
    margin-right: auto;
    overflow: visible">
<?php
header('Content-Type: text/html; charset=utf-8');
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
$sql = "SELECT * FROM product WHERE CatagoryID = '".$q."'";
$result = $conn->query($sql);
$i=1;
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo " <div id='MyQ' style='background-color:white;border:5px solid black;height:200px;width:50%;float:right;padding:5px;'>   " . $row['ItemName']."<br> דגם: " .$row['Brand']."<br> מחיר: ".$row['Price']."<br>  ".$row['Size']."<br> <input type='button' value='הוספה לעגלה' style='background-color:white'
    onclick='save()'></div>";
  
      if($i%2==0)
      {
          echo "<br>";
      }
      $i++;
  }
} else {
  echo "0 results";
}
      echo" <script>
    function save(){ alert('save func');}
 </script>";
?>
</div>
</body>
      
</html>