

<?php
include("connect.php");

?>

<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
   $departuredate = $_POST['departuredate'];
    $arrivaldate = $_POST['arrivaldate'];
    $noofguest = $_POST['noofguest'];
    $roomtype = $_POST['roomtype'];


    //$password = $_POST['password'];
   // $number = $_POST['number'];

    // Database connection
   // $query="insert into hotels_table values('$firstname','$lastname','$phonenumber',' $email','$departuredate','$arrivaldate','$noofguest')";
   $query = "INSERT INTO `hotels_table`(`firstname`, `lastname`, `phonenumber`, `email`, `departuredate`, `arrivaldate`, `noofguest`, `room type`) VALUES ('$firstname','$lastname','$phonenumber','$email','$departuredate','$arrivaldate','$noofguest','$roomtype')";
   // $data=mysqli_query($con,$query);
   //     echo "<h2>".$data."</h2>";   
   if($con->query($query) ==true)
   {
      echo "data inserted into database";
      $startDate = strtotime($arrivaldate);
      $endDate = strtotime($departuredate);
       $noOfDays = ceil(abs( $startDate - $endDate) / 86400);
      echo "$noOfDays";
      $bill = $noofguest * $noOfDays * 300;
      echo ("<script type='text/javascript'>alert('Your room booked successfully !!! Your bill is Rs.{$bill} ');
      window.location.href='http://localhost/niwaas/show.php';
      </script>");

   }else
   {
      echo "failed to inserted data into database";
   }

?>

