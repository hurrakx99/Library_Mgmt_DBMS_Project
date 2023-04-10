<?php include 'Connection.php';
$author_name=$_GET['author_name'];

$select="SELECT * FROM author WHERE author_name='$author_name'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
<div align="center">
		<form action="" method="POST">
			<input value="<?php echo $row['author_name']?>" type="text" name="author_name" placeholder="Author Name"><br><br>
			<input value="<?php echo $row['book_id']?>" type="number" name="book_id" placeholder="Branch Name"><br><br>
			
			<input type="submit" name="update_btn" value="Update">
			<button><a href="view3.php">Back</button>
		</form>
</div>
<?php
if(isset($_POST['update_btn']))
{
	$author_name=$_POST['author_name'];
	$book_id=$_POST['book_id'];
$update="UPDATE author SET author_name='$author_name',book_id='$book_id' WHERE author_name='$author_name'";
$data=mysqli_query($con,$update);
if($data){
?>
<script type="text/javascript">
	alert("Data Updated Successfully");
	window.open("http://localhost/Library1/view3.php","_self");
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