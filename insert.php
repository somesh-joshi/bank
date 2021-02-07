<?php
include 'connect.php';

$Name = $_POST['name'];
$Email = $_POST['email'];
$Amount = $_POST['amount'];

$sql = "INSERT INTO person (Name,Email,Amount) VALUES ('$Name','$Email','$Amount')";

if(!mysqli_query($con,$sql))
{
  echo "NOT INSERTED";
}
else
{
    echo "INSERTED";
}

header("refresh:2; url=index.php");
?>
