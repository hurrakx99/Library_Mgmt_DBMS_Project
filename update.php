<?php include 'Connection.php';
$publisher_name=$_GET['publisher_name'];
$select="SELECT * FROM publisher WHERE publisher_name='$publisher_name'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
<div align="center">
		<form action="" method="POST">
			<input value="<?php echo $row['publisher_name']?>" type="text" name="publisher_name" placeholder="PUBLISHER_NAME"><br><br>
			<input value="<?php echo $row['address']?>" type="text" name="address" placeholder="ADDRESS"><br><br>
			<input value="<?php echo $row['phone_no']?>" type="number" name="phone_no" placeholder="phone_no"><br><br>
			<input type="submit" name="update_btn" value="Update">
			<button><a href="view.php">Back</button>
		</form>
</div>
<?php
if(isset($_POST['update_btn']))
{
	$publishername=$_POST['publisher_name'];
	$address=$_POST['address'];
	$ph_no=$_POST['phone_no'];

$update="UPDATE publisher SET publisher_name='$publishername',address='$address',phone_no='$ph_no' WHERE publisher_name='$publisher_name'";

$data=mysqli_query($con,$update);
if($data){
?>
<script type="text/javascript">
	alert("Data Updated Successfully");
	window.open("http://localhost/Library1/view.php","_self");
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