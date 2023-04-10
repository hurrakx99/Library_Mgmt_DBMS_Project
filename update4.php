<?php include 'Connection.php';
$no_of_copies=$_GET['no_of_copies'];
$select="SELECT * FROM book_copies WHERE no_of_copies='$no_of_copies'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
<div align="center">
		<form action="" method="POST">
			<input value="<?php echo $row['no_of_copies']?>" type="number" name="no_of_copies" placeholder="Number of Copies"><br><br>
			<input value="<?php echo $row['book_id']?>" type="number" name="book_id" placeholder="Book Id"><br><br>
			<input value="<?php echo $row['branch_id']?>" type="number" name="branch_id" placeholder="Branch Id"><br><br>			
			<input type="submit" name="update_btn" value="Update">
			<button><a href="view4.php">Back</button>
		</form>
</div>
<?php
if(isset($_POST['update_btn']))
{
	$nos_of_copies=$_POST['no_of_copies'];
	$book_id=$_POST['book_id'];
	$branch_id=$_POST['branch_id'];
	

$update="UPDATE book_copies SET no_of_copies='$nos_of_copies',book_id='$book_id',branch_id='$branch_id' WHERE no_of_copies='$no_of_copies'";

$data=mysqli_query($con,$update);
if($data){
?>
<script type="text/javascript">
	alert("Data Updated Successfully");
	window.open("http://localhost/Library1/view4.php","_self");
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