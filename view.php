<?php include 'Connection.php'; ?>
<a href="index.php">Home</a>
<table border="1px" cellpadding="10px" cellspacing="0" align="center">
	<tr>
		<th>Publisher Name</th>
		<th>Address</th>
		<th>Phone_No</th>
		<th colspan="2">Actions</th>
	</tr>
	<?php
	$query="SELECT * FROM publisher";
	$data=mysqli_query($con,$query);
	$result=mysqli_num_rows($data);
	if($result)
	{
		while ($row=mysqli_fetch_array($data))
		 {
			?>
			<tr>
				<td><?php echo $row['publisher_name'];?>					
				</td>
				<td><?php echo $row['address'];?>					
				</td>
				<td><?php echo $row['phone_no'];?>					
				</td>
				<td><a href="update.php? publisher_name=<?php echo $row['publisher_name'];?>">Edit</a>				
				</td>
				<td><a href="delete.php? publisher_name=<?php echo $row['publisher_name'];?>">Delete</a></td>
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
