<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employees' Record</title>
    <link rel="stylesheet" href="employeerecordstyle.css" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  </head>
  <body>
    <header>
      <h1>Registered Employees</h1>
    </header>

    <main>
      <div id="tablecontainer">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Serial No</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">User Id</th>
              <th scope="col">Password</th>
              <th scope="col">Photo</th>
            </tr>
          </thead>
          <tbody>
          <?php


//connecting to database
$servername='localhost';
$username='root';
$password='';
$database='registered employees';

$conn=mysqli_connect($servername,$username,$password,$database);
$displayquery="SELECT *FROM `employees`;";
$displaydata=mysqli_query($conn,$displayquery);
// echo var_dump($row);
while($result=mysqli_fetch_array($displaydata))
{
  ?>
  <tr>
  <td><?php echo $result['Serial No']; ?></td>
  <td><?php echo $result['First Name']; ?></td>
  <td><?php echo $result['Last Name']; ?></td>
  <td><?php echo $result['User Id']; ?></td>
  <td><?php echo $result['Password']; ?></td>
  <td> <img src="../Register New Employee/<?php echo $result['Photo']; ?>" alt="Not Uploaded" height="180px"></td>
</tr>
<?php
}
?>
          </tbody>
        </table>
      </div>
    </main>

    <script src="employeerecordscript.js"></script>
  </body>
</html>
