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
	<h3>Authors</h3>
		<form action="" method="POST">
			<input type="text" name="author_name" placeholder="Author Name"><br><br>
			<input type="number" name="book_id" placeholder="Book Id"><br><br>
			<input type="submit" name="save_btn4" value="Save">
			<button><a href="view3.php">View</button>
		</form>
</div>
<?php
if(isset($_POST['save_btn4']))
{
	$author_name=$_POST['author_name'];
	$book_id=$_POST['book_id'];

$query4="INSERT INTO author(author_name,book_id) VALUES('$author_name','$book_id')";

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