<?php
// echo "login.php worked";


  //connecting to database
  $servername='localhost';
  $username='root';
  $password='';
  $database='registered employees';

  $conn=mysqli_connect($servername,$username,$password,$database);
  if($conn)
  {
      echo '<br>';
  }
else{
    echo 'connection to the database is not sucessful <br>';
    echo mysqli_connect_error();
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $userid=$_POST['userid'];
    $password=$_POST['password'];

}

$sql="SELECT * FROM `login`;";
$result=mysqli_query($conn,$sql);
$resultarray=mysqli_fetch_array($result);
$userid2= $resultarray['User id'];
$password2=$resultarray['Password'];

if($userid==$userid2 && $password==$password2)
{
    header("Location:../Admin/admin.html");
    exit;
}
else{
   echo "You are not admin";
}

?>