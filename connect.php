
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$server='localhost';
$username="root";
$password="";
$db='hotel_database';

$con=mysqli_connect($server,$username,$password,$db);
if ($con) {
	echo "connection successful";
	// echo ("<script type='text/javascript'>alert('connection Successful');
    //   </script>");

}else{
	die("no connection".mysqli_connect_error());
}
?>
</body>
</html>
