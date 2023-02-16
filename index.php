<?php
$server="localhost";
$user="root";
$password="";
$db="auto";
$conn=new mysqli($server,$user,$password,$db);
if($conn->connect_error) echo "Conexiunea esuata: ".$conn->connect_error;
echo "Conexiunea OOP cu succes<br>";
$sql = "INSERT INTO cars (Brand, Model, BodyType, Years,Combustible,Price) 
VALUES ('".$_POST['brand']."', '".$_POST['model']."', '".$_POST['body_type']."', ".$_POST['year'].", '".$_POST['combustible']."', ".$_POST['price'].") ";


$result=$conn->query($sql);
if($result) echo "Datele au fost inserate cu succes<br>";
else echo "Ceva nu a mers asa cum trebuia<br>";
$conn->close();
?>

