<?php include 'Connection.php';
$card_no=$_GET['card_no'];
$select="SELECT * FROM card WHERE card_no='$card_no'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
<div align="center">
		<form action="" method="POST">
			<input value="<?php echo $row['card_no']?>" type="number" name="card_no" placeholder="Card Number"><br><br>
			<input value="<?php echo $row['card_name']?>" type="text" name="card_name" placeholder="Card Name"><br><br>					
			<input type="submit" name="update_btn" value="Update">
			<button><a href="view6.php">Back</button>
		</form>
</div>
<?php
if(isset($_POST['update_btn']))
{
	$card_no=$_POST['card_no'];
	$card_name=$_POST['card_name'];
	

$update="UPDATE card SET card_no='$card_no',card_name='$card_name' WHERE card_no='$card_no'";

$data=mysqli_query($con,$update);
if($data){
?>
<script type="text/javascript">
	alert("Data Updated Successfully");
	window.open("http://localhost/Library1/view6.php","_self");
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