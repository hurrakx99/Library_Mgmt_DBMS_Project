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
			<input type="date" name="date_out" placeholder="Date Out"><br><br>
			<input type="date" name="due_date" placeholder="Due Date"><br><br>
			<input type="number" name="book_id" placeholder="Book Id"><br><br>
			<input type="number" name="branch_id" placeholder="Branch Id"><br><br>
			<input type="submit" name="save_btn" value="Save">
			<button><a href="view5.php">View</button>
		</form>
	</div>
<?php
if(isset($_POST['save_btn']))
{
	$date_out=$_POST['date_out'];
	$due_date=$_POST['due_date'];
	$book_id=$_POST['book_id'];
	$branch_id=$_POST['branch_id'];

$query="INSERT INTO book_lending(date_out,due_date,book_id,branch_id) VALUES('$date_out','$due_date','$book_id','$branch_id')";

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