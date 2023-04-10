<?php include 'Connection.php'; ?>
<a href="index4.php">Home</a>
<table border="1px" cellpadding="10px" cellspacing="0" align="center">
	<tr>
		<th>Number Of Copies</th>
		<th>Book Id</th>
		<th>Branch Id</th>
		<th colspan="2">Actions</th>
	</tr>
	<?php
	$query1="SELECT * FROM book_copies";
	$data1=mysqli_query($con,$query1);
	$result1=mysqli_num_rows($data1);
	if($result1)
	{
		while ($row=mysqli_fetch_array($data1))
		 {
			?>
			<tr>
				<td><?php echo $row['no_of_copies'];?>					
				</td>
				<td><?php echo $row['book_id'];?>					
				</td>
				<td><?php echo $row['branch_id'];?>					
				</td>
				<td><a href="update4.php? no_of_copies=<?php echo $row['no_of_copies'];?>">Edit</a>				
				</td>
				<td><a href="delete4.php? no_of_copies=<?php echo $row['no_of_copies'];?>">Delete</a></td>
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