<?php include 'Connection.php'; ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div align="center">
		<form action="" method="POST">
			<input type="text" name="publisher_name" placeholder="PUBLISHER_NAME"><br><br>
			<input type="text" name="address" placeholder="ADDRESS"><br><br>
			<input type="number" name="phone_no" placeholder="phone_no"><br><br>
			<input type="submit" name="save_btn" value="Save">
			<button><a href="view.php">View</button>
		</form>
	</div>
<?php
if(isset($_POST['save_btn']))
{
	$publishername=$_POST['publisher_name'];
	$address=$_POST['address'];
	$ph_no=$_POST['phone_no'];

$query="INSERT INTO publisher(publisher_name,address,phone_no) VALUES('$publishername','$address','$ph_no')";

$data=mysqli_query($con,$query);
if($data){
?>
<script type="text/javascript">
	alert("Data Saved Successfully");
</script>
<?php
}
else
{
	?>
<script type="text/javascript">
	alert("Please Try Again");
</script>
<?php
}
}	
?>
</body>
</html>