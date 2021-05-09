<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

$ServerName="localhost";
$UserName="root";
$password="";
$DB="shop_project";

$ID=$_POST['ID'];
$FirstName=$_POST['first_name'];
$LastName=$_POST['last_name'];
$Phone=$_POST['phone'];
$Email=$_POST['mail'];
$Adress=$_POST['adress'];
$Pass=$_POST['pass'];

$conn=new mysqli($ServerName,$UserName,$password,$DB);
/*
if($conn->connect_error){
    die("Connection Faild ". $conn->connect->error);
}
else{
    echo "connection succeed";
}*/
mysqli_set_charset($conn, 'utf8');
$sql_insert_command="INSERT INTO customers(CustomerID,CustomerName, CustomerLastName, CustomerPhone,Email,Adress,PasswordCustomer) VALUES('".$ID."','".$FirstName."','".$LastName."','".$Phone."','".$Email."','".$Adress."','".$Pass."')";

mysqli_query($conn,$sql_insert_command);

if ($conn->query($sql_insert_command) === TRUE) {
  echo "המשתמש הוכנס בהצלחה";
} else {
  echo "Error: " . $sql_insert_command . "<br>" . $conn->error;
}

?>