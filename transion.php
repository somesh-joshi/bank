<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }

            tr:nth-child(even) {
              background-color: #dddddd;
            }
    </style>
  </head>
  <body>
    <div class="p-3 mb-2 bg-info text-white"><h1 align="center">The Spark Bank</h1></div>
    <center>
      <a type="button" href="./index.php" class="btn btn-primary">Home</a>
      <a type="button" href="./transion.php" class="btn btn-primary">Transaction</a>
    </center>
    <hr>
    <center><h2>Transaction List</h2>
    <table>
  <tr>
    <th>TR ID</th>
    <th>Date</th>
    <th>From</th>
    <th>To</th>
    <th>TRs Amount</th>
  </tr>
  <?php

include 'connect.php';

$selectquery = "Select * From transion";
$query = mysqli_query($con,$selectquery);
while($res = mysqli_fetch_array($query)) {
  echo '<tr>';
    echo '<td>'.$res['ID'].'</td>';
    echo '<td>'.$res['Date'].'</td>';
    echo '<td>'.$res['From_Name'].'</td>';
    echo '<td>'.$res['To_Name'].'</td>';
    echo '<td>'.$res['Amount'].'</td>';
  echo '</tr>';
}


  ?>
  </table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

  </body>
</html>
