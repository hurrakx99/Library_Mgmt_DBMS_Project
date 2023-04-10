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
	<h3>Book</h3>
		<form action="" method="POST">
			<input type="number" name="book_id" placeholder="Book_id"><br><br>
			<input type="text" name="title" placeholder="Title"><br><br>
			<input type="text" name="publisher_name" placeholder="Publisher Name"><br><br>
			<input type="number" name="publisher_year" placeholder="Publish Year"><br><br>
			<input type="submit" name="save_btn2" value="Save">
			<button><a href="view1.php">View</button>
		</form>
</div>
<?php
if(isset($_POST['save_btn2']))
{
	$book_id=$_POST['book_id'];
	$title=$_POST['title'];
	$publisher_name=$_POST['publisher_name'];
	$publisher_year=$_POST['publisher_year'];
	
$query2="INSERT INTO book(book_id,title,publisher_name,publisher_year) VALUES('$book_id','$title','$publisher_name','$publisher_year')";

$data2=mysqli_query($con,$query2);
if($data2){
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