<?php include 'Connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
</head>
<body>
	<div align="center">
	<h3>Book Copies</h3>
		<form action="" method="POST">
			<input type="number" name="no_of_copies" placeholder="Number Of Copies"><br><br>
			<input type="number" name="book_id" placeholder="Book Id"><br><br>
			<input type="number" name="branch_id" placeholder="Branch Id"><br><br>
			<input type="submit" name="save_btn4" value="Save">
			<button><a href="view4.php">View</button>
		</form>
</div>
<?php
if(isset($_POST['save_btn4']))
{
	$no_of_copies=$_POST['no_of_copies'];
	$book_id=$_POST['book_id'];
	$branch_id=$_POST['branch_id'];

$query4="INSERT INTO book_copies(no_of_copies,book_id,branch_id) VALUES('$no_of_copies','$book_id','$branch_id')";

$data4=mysqli_query($con,$query4);
if($data4){
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