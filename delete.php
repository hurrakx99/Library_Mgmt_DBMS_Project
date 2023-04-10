<?php include 'Connection.php';
$publisher_name=$_GET['publisher_name'];
$delete="DELETE FROM publisher WHERE publisher_name='$publisher_name'";
$data=mysqli_query($con,$delete);
if($data){
	?>
<script type="text/javascript">
	alert("Data Deleted Successfully")
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
?>