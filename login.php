<?php
include("connect.php");

?>

<?php
    $userName = $_POST['userName'];
    $password = $_POST['password'];
   
    //$password = $_POST['password'];
   // $number = $_POST['number'];

    // Database connection
   // $query="insert into hotels_table values('$firstname','$lastname','$phonenumber',' $email','$departuredate','$arrivaldate','$noofguest')";
//    $query = "INSERT INTO `hotels_table`(`firstname`, `lastname`, `phonenumber`, `email`, `departuredate`, `arrivaldate`, `noofguest`, `room type`) VALUES ('$firstname','$lastname','$phonenumber','$email','$departuredate','$arrivaldate','$noofguest','$roomtype')";
   // $data=mysqli_query($con,$query);
   //     echo "<h2>".$data."</h2>";   
   if($userName == "Admin" && $password == "Admin123")
   {
      echo ("<script type='text/javascript'>alert('Your login done successfully !!! ');
      window.location.href='http://localhost/niwaas/Main.html';
      </script>");
   }else
   {
    echo ("<script type='text/javascript'>alert('Please enter valid data');
    window.location.href='http://localhost/niwaas/login.html';
    </script>");
   }
?>

