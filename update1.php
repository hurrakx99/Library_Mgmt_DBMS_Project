<?php include 'Connection.php';
$book_id=$_GET['book_id'];
$select="SELECT * FROM book WHERE book_id='$book_id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
<div align="center">
		<form action="" method="POST">
			<input value="<?php echo $row['book_id']?>" type="number" name="book_id" placeholder="Book Id"><br><br>
			<input value="<?php echo $row['title']?>" type="text" name="title" placeholder="Title"><br><br>
			<input value="<?php echo $row['publisher_name']?>" type="text" name="publisher_name" placeholder="PUBLISHER NAME"><br><br>
			<input value="<?php echo $row['publisher_year']?>" type="number" name="publisher_year" placeholder="PUBLISH YEAR"><br><br>
			<input type="submit" name="update_btn" value="Update">
			<button><a href="view1.php">Back</button>
		</form>
</div>
<?php
if(isset($_POST['update_btn']))
{
	$book_id=$_POST['book_id'];
	$title=$_POST['title'];
	$publisher_name=$_POST['publisher_name'];
	$publisher_year=$_POST['publisher_year'];

$update="UPDATE book SET book_id='$book_id',title='$title',publisher_name='$publisher_name',publisher_year='$publisher_year' WHERE book_id='$book_id'";


$data=mysqli_query($con,$update);
if($data){
?>
<script type="text/javascript">
	alert("Data Updated Successfully");
	window.open("http://localhost/Library1/view1.php","_self");
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