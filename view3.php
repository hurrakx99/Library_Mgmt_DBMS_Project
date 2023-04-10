<?php include 'Connection.php'; ?>
<a href="index3.php">Home</a>
<table border="1px" cellpadding="10px" cellspacing="0" align="center">
	<tr>
		<th>Author Name</th>
		<th>Book Id</th>
		<th colspan="2">Actions</th>
	</tr>
	<?php
	$query1="SELECT * FROM author";
	$data1=mysqli_query($con,$query1);
	$result1=mysqli_num_rows($data1);
	if($result1)
	{
		while ($row=mysqli_fetch_array($data1))
		 {
			?>
			<tr>
				<td><?php echo $row['author_name'];?>					
				</td>
				<td><?php echo $row['book_id'];?>					
				</td>
				<td><a href="update3.php? author_name=<?php echo $row['author_name'];?>">Edit</a>				
				</td>
				<td><a href="delete3.php? author_name=<?php echo $row['author_name'];?>">Delete</a></td>
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