<?php include 'Connection.php';
$branch_id=$_GET['branch_id'];
$delete="DELETE FROM lib_branch WHERE branch_id='$branch_id'";
$data=mysqli_query($con,$delete);
if($data){
	?>
<script type="text/javascript">
	alert("Data Deleted Successfully")
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
?>