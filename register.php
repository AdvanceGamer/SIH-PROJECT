<?php


  //connecting to database
  $servername='localhost';
  $username='root';
  $password='';
  $database='registered employees';

  $conn=mysqli_connect($servername,$username,$password,$database);
  if($conn)
  {
      echo 'connection to the database is sucessful <br>';
  }
else{
    echo 'connection to the database is not sucessful <br>';
    echo mysqli_connect_error();
}


// collecitng data from registration form
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $userid=$_POST['userid'];
    $employee_password=$_POST['password'];
    // echo "FIRST NAME : " .$fname ."<br>";
    // echo "LAST NAME : " .$lname ."<br>";
    // echo "USER ID : " .$userid ."<br>";
    // echo "PASSWORD : " .$employee_password ."<br>";



 
if(isset($_POST['submit'])){
    $files=$_FILES['file'];
    // print_r( $files);
    $filename=$files['name'];
    $fileerror=$files['error'];
    $filetemp=$files['tmp_name'];
    $fileext=explode('.',$filename);
    $filecheck=strtolower(end($fileext));
    $fileextstored=array('png','jpg','jpeg');
    if(in_array($filecheck,$fileextstored)){
          $destinationfile='upload/'.$filename;
          move_uploaded_file($filetemp,$destinationfile);
          echo "photo uploaded successfully in file<br>";
        //   $sq= "INSERT INTO `employees` (`Photo`) VALUES('$destinationfile');";
    }
    else{
        echo "photo is not in' png, jpg, jpeg '  format<br>";
    }
}
else
{
    echo "photo is not uploaded<br>";
}

$sql="INSERT INTO `employees` (`First Name`, `Last Name`, `User Id`, `Password`, `Serial No`, `Photo`) VALUES ('$fname', '$lname', '$userid', '$employee_password', '', '$destinationfile');
";
$result=mysqli_query($conn,$sql);
if($result){
    echo " Data inserted succesfully";
}
else{
    echo " Data insertion unsuccesful";
}

}
else{
    echo "sorry method was not post!!";
}




?>