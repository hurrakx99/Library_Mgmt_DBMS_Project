<?php include 'Connection.php';
$no_of_copies=$_GET['no_of_copies'];
$delete="DELETE FROM book_copies WHERE no_of_copies='$no_of_copies'";
$data=mysqli_query($con,$delete);
if($data){
	?>
<script type="text/javascript">
	alert("Data Deleted Successfully")
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
?>