<?php
$str = $_POST['id'];
$conn = mysqli_connect('localhost','admin','raspberry','mysql');
$sql = "DELETE FROM Wikipedia WHERE Title="."'$str'";

if(mysqli_connect_errno()){
	echo "Failed to conndec to mysql";
}

$result = mysqli_query($conn,$sql);
if($result === false){
	echo 'Fail to delete document. Please message to administrator';
} else{
	echo 'Success to delete documen.<a href="main.html">Return?</a>';
}
?>
