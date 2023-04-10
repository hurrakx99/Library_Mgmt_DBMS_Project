<?php include 'Connection.php';
$author_name=$_GET['author_name'];
$delete="DELETE FROM author WHERE author_name='$author_name'";
$data=mysqli_query($con,$delete);
if($data){
	?>
<script type="text/javascript">
	alert("Data Deleted Successfully")
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
?>