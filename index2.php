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
	<h3>Library Branch</h3>
		<form action="" method="POST">
			<input type="number" name="branch_id" placeholder="Branch_id"><br><br>
			<input type="text" name="branch_name" placeholder="Branch Name"><br><br>
			<input type="test" name="branch_address" placeholder="Branch Address"><br><br>
			<input type="submit" name="save_btn3" value="Save">
			<button><a href="view2.php">View</button>
		</form>
</div>
<?php
if(isset($_POST['save_btn3']))
{
	$branch_id=$_POST['branch_id'];
	$branch_name=$_POST['branch_name'];
	$branch_address=$_POST['branch_address'];
	
	
$query3="INSERT INTO lib_branch(branch_id,branch_name,branch_address) VALUES('$branch_id','$branch_name','$branch_address')";

$data3=mysqli_query($con,$query3);
if($data3){
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