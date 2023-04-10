<?php include 'Connection.php'; ?>
<a href="index6.php">Home</a>
<table border="1px" cellpadding="10px" cellspacing="0" align="center">
	<tr>
		<th>Card Number</th>
		<th>Card Name</th>
		<th colspan="2">Actions</th>
	</tr>
	<?php
	$query1="SELECT * FROM card";
	$data1=mysqli_query($con,$query1);
	$result1=mysqli_num_rows($data1);
	if($result1)
	{
		while ($row=mysqli_fetch_array($data1))
		 {
			?>
			<tr>
				<td><?php echo $row['card_no'];?>					
				</td>
				<td><?php echo $row['card_name'];?>					
				</td>
				<td><a href="update6.php? card_no=<?php echo $row['card_no'];?>">Edit</a>				
				</td>
				<td><a href="delete6.php? card_no=<?php echo $row['card_no'];?>">Delete</a></td>
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