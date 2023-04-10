<?php include 'Connection.php';
$date_out=$_GET['date_out'];
$select="SELECT * FROM book_lending WHERE date_out='$date_out'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
<div align="center">
		<form action="" method="POST">
			<input value="<?php echo $row['date_out']?>" type="date" name="date_out" placeholder="Date Out"><br><br>
			<input value="<?php echo $row['due_date']?>" type="date" name="due_date" placeholder="Due Date"><br><br>
			<input value="<?php echo $row['book_id']?>" type="number" name="book_id" placeholder="Book Id"><br><br>
			<input value="<?php echo $row['branch_id']?>" type="number" name="branch_id" placeholder="Branch Id"><br><br>			
			<input type="submit" name="update_btn" value="Update">
			<button><a href="view5.php">Back</button>
		</form>
</div>
<?php
if(isset($_POST['update_btn']))
{
	$date_out=$_POST['date_out'];
	$due_date=$_POST['due_date'];
	$book_id=$_POST['book_id'];
	$branch_id=$_POST['branch_id'];
	

$update="UPDATE book_lending SET date_out='$date_out',due_date='$due_date',book_id='$book_id',branch_id='$branch_id' WHERE date_out='$date_out'";

$data=mysqli_query($con,$update);
if($data){
?>
<script type="text/javascript">
	alert("Data Updated Successfully");
	window.open("http://localhost/Library1/view5.php","_self");
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