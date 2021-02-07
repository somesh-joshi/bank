<?php
include 'connect.php';

$Date = $_POST['Date'];
$Name = $_POST['From'];
$Email = $_POST['To'];
$Amount = $_POST['amount'];

$sql1 = "Update person Set Amount = Amount-$Amount Where Name = '$Name'";
mysqli_query($con,$sql1);
$sql2 = "Update person Set Amount = Amount+$Amount Where Name = '$Email'";
mysqli_query($con,$sql2);
$sql = "INSERT INTO transion (Date,From_Name,To_Name,Amount) VALUES ('$Date','$Name','$Email','$Amount')";
mysqli_query($con,$sql);

header("refresh:2; url=index.php");
?>