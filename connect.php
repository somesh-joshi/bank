<?php
$con = mysqli_connect('sql211.epizy.com','epiz_27790427','PwSXQeeWfH');

if(!$con)
{
  echo "Not Connected";
}

if(!mysqli_select_db($con,'epiz_27790427_some'))
{
 echo " DB Not Selected ";
}
 ?>
