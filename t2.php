<?php include 'Connection.php';?>
<?php
require_once ('Library1/index1.php');
$sql = "SELECT * FROM `book` WHERE 1";

//echo "$sql";
$result = mysqli_query($con, $sql);
if(isset($_POST['update']))
{

	$book_id = mysqli_real_escape_string($con, $_POST['book_id']);
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$publisher_name = mysqli_real_escape_string($con, $_POST['publisher_name']);
	$publisher_year = mysqli_real_escape_string($con, $_POST['publisher_year']);
	





	// $result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`password`='$email',`gender`='$gender',`contact`='$contact',`nid`='$nid',`salary`='$salary',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");


$result = mysqli_query($con, "UPDATE `book` SET `book_id`='$book_id',`title`='$title',`publisher_name`='$publisher_name',`publisher_year`='$publisher_year' WHERE book_id=$book_id");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='view1.php';
    </SCRIPT>");


	
}
?>




<?php
	$book_id = (isset($_GET['book_id']) ? $_GET['book_id'] : '');
	$sql = "SELECT * from `book` WHERE book_id=$book_id";
	$result = mysqli_query($con, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$book_id = $res['book_id'];
	$title = $res['title'];
	$publisher_name = $res['publisher_name'];
	$publisher_year = $res['publisher_year'];
	
}
}

?>