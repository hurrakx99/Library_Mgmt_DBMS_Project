<?php include 'Connection.php';
$branch_id=$_GET['branch_id'];
$select="SELECT * FROM lib_branch WHERE branch_id='$branch_id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
<div align="center">
		<form action="" method="POST">
			<input value="<?php echo $row['branch_id']?>" type="number" name="branch_id" placeholder="Branch Id"><br><br>
			<input value="<?php echo $row['branch_name']?>" type="text" name="branch_name" placeholder="Branch Name"><br><br>
			<input value="<?php echo $row['branch_address']?>" type="text" name="branch_address" placeholder="Branch Address"><br><br>
			<input type="submit" name="update_btn" value="Update">
			<button><a href="view2.php">Back</button>
		</form>
</div>
<?php
if(isset($_POST['update_btn']))
{
	$branch_id=$_POST['branch_id'];
	$branch_name=$_POST['branch_name'];
	$branch_address=$_POST['branch_address'];

$update="UPDATE lib_branch SET branch_id='$branch_id',branch_name='$branch_name',branch_address='$branch_address' WHERE branch_id='$branch_id'";

$data=mysqli_query($con,$update);
if($data){
?>
<script type="text/javascript">
	alert("Data Updated Successfully");
	window.open("http://localhost/Library1/view2.php","_self");
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