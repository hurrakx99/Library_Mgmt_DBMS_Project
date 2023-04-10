<?php include 'Connection.php'; ?>
<a href="index2.php">Home</a>
<table border="1px" cellpadding="10px" cellspacing="0" align="center">
	<tr>
		<th>Branch Id</th>
		<th>Branch Name</th>
		<th>Branch Address</th>
		<th colspan="2">Actions</th>
	</tr>
	<?php
	$query1="SELECT * FROM lib_branch";
	$data1=mysqli_query($con,$query1);
	$result1=mysqli_num_rows($data1);
	if($result1)
	{
		while ($row=mysqli_fetch_array($data1))
		 {
			?>
			<tr>
				<td><?php echo $row['branch_id'];?>					
				</td>
				<td><?php echo $row['branch_name'];?>					
				</td>
				<td><?php echo $row['branch_address'];?>					
				</td>
				<td><a href="update2.php? branch_id=<?php echo $row['branch_id'];?>">Edit</a>				
				</td>
				<td><a href="delete2.php? branch_id=<?php echo $row['branch_id'];?>">Delete</a></td>
			</tr>
			<?php
		}
	}
	else
	{
		?>
		<tr>
			<td>No Record Found</td>
		</tr>
		<?php
	}
	?>
</table>