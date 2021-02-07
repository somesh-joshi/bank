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
    <h2>ADD Customer</h2>
    <form class="" action="insert.php" method="post">
      <div class="row g-3">
        <div class="col">
          Name:<input type="text" class="form-control" placeholder="Name" name="name" required>
        </div>
        <div class="col">
          Email:<input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>
        <div class="col">
          Amount:<input type="number" class="form-control" placeholder="Amount" name="amount" required>
        </div>
      </div><br>
      <div class="col">
        <center><input type="submit" name="submit" value="ADD Customer" class="btn btn-primary"></center>
      </div>
    </form>
    <hr>
    <h2>ADD Transaction</h2>
    <form class="" action="insert1.php" method="post">
      <div class="row g-3">
        <div class="col">
          Date:<input type="Date" class="form-control" placeholder="Date" name="Date" required>
        </div>
        <div class="col">
          From:<input type="text" class="form-control" placeholder="From" name="From" required>
        </div>
        <div class="col">
          To:<input type="text" class="form-control" placeholder="To" name="To" required>
        </div>
        <div class="col">
          Amount:<input type="number" class="form-control" placeholder="Amount" name="amount" required>
        </div>
      </div><br>
      <div class="col">
        <center><input type="submit" name="submit" value="ADD Transaction" class="btn btn-primary"></center>
      </div>
    </form>
    <hr>
    <center><h2>Customer List</h2>
  <table>
  <tr>
    <th>ACC. ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Amount</th>
  </tr>
  <?php

include 'connect.php';

$selectquery = "Select * From person";
$query = mysqli_query($con,$selectquery);
while($res = mysqli_fetch_array($query)) {
  echo '<tr>';
    echo '<td>'.$res['ID'].'</td>';
    echo '<td>'.$res['Name'].'</td>';
    echo '<td>'.$res['Email'].'</td>';
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
