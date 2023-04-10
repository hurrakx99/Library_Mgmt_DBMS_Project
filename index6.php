<?php include 'Connection.php'; ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div align="center">
		<form action="" method="POST">
			<input type="number" name="card_no" placeholder="Card Number"><br><br>
			<input type="text" name="card_name" placeholder="Card Name"><br><br>

			<input type="submit" name="save_btn" value="Save">
			<button><a href="view6.php">View</button>
		</form>
	</div>
<?php
if(isset($_POST['save_btn']))
{
	$card_no=$_POST['card_no'];
	$card_name=$_POST['card_name'];
	

$query="INSERT INTO card(card_no,card_name) VALUES('$card_no','$card_name')";

$data=mysqli_query($con,$query);
if($data){
?>
<script type="text/javascript">
	alert("Data Saved Successfully");
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
}	
?>
</body>
</html>