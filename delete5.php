<?php include 'Connection.php';
$date_out=$_GET['date_out'];
$delete="DELETE FROM book_lending WHERE date_out='$date_out'";
$data=mysqli_query($con,$delete);
if($data){
	?>
<script type="text/javascript">
	alert("Data Deleted Successfully")
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
?>