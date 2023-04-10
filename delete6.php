<?php include 'Connection.php';
$card_no=$_GET['card_no'];
$delete="DELETE FROM card WHERE card_no='$card_no'";
$data=mysqli_query($con,$delete);
if($data){
	?>
<script type="text/javascript">
	alert("Data Deleted Successfully")
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
?>