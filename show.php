<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php  

$server='localhost';
$username="root";
$password="";
$db='hotel_database';

$con=mysqli_connect($server,$username,$password,$db);
if ($con) {
	// echo "connection successful";
	// echo ("<script type='text/javascript'>alert('connection Successful');
    //   </script>");

}else{
	die("no connection".mysqli_connect_error());
}
  
$sql = 'SELECT * FROM hotels_table';  
$retval=mysqli_query($con, $sql);  
?> 
<div class="container">
<h2 style="margin-left:470px">Booked Room details</h2>

<table border="2" class="table table-bordered">
  <tr>
    <td>Sr.No.</td>
    <td>First Name</td>
    <td>Last Name</td>
        <td>Phone number</td>
        <td>Email</td>
        <td>Arrival Date</td>
        <td>Daparature Date</td>
        <td>No of guest</td>
        <td>Room type</td>
  </tr>

<?php
if(mysqli_num_rows($retval) > 0){  
 while($data = mysqli_fetch_assoc($retval)){  

    ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['firstname']; ?></td>
        <td><?php echo $data['lastname']; ?></td>
        <td><?php echo $data['phonenumber']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['arrivaldate']; ?></td>
        <td><?php echo $data['departuredate']; ?></td>
        <td><?php echo $data['noofguest']; ?></td>
        <td><?php echo $data['room type']; ?></td>
      </tr>  

         <?php
 } //end of while  
}else{  
echo "0 results";  
}  
mysqli_close($con);  
?>