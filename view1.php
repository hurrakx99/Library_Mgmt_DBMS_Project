<?php include 'Connection.php'; ?>
<a href="index1.php">Home</a>
<table border="1px" cellpadding="10px" cellspacing="0" align="center">
	<tr>
		<th>Book_Id</th>
		<th>Title</th>
		<th>Publisher Name</th>
		<th>Publish Year</th>
		<th colspan="2">Actions</th>
	</tr>
	<?php
	$query1="SELECT * FROM book";
	$data1=mysqli_query($con,$query1);
	$result1=mysqli_num_rows($data1);
	if($result1)
	{
		while ($row=mysqli_fetch_array($data1))
		 {
			?>
			<tr>
				<td><?php echo $row['book_id'];?>					
				</td>
				<td><?php echo $row['title'];?>					
				</td>
				<td><?php echo $row['publisher_name'];?>					
				</td>
				<td><?php echo $row['publisher_year'];?>					
				</td>
				<td><a href="update1.php? book_id=<?php echo $row['book_id'];?>">Edit</a>				
				</td>
				<td><a href="delete1.php? book_id=<?php echo $row['book_id'];?>">Delete</a></td>
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