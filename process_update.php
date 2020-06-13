<?php

$conn=mysqli_connect('localhost','admin','raspberry','mysql');
if(mysqli_connect_errno()){
	echo "Failed to conndec to mysql";
}

$sql="
	UPDATE Wikipedia set
	Description = '{$_POST['description']}',
	WrittenTime = NOW()
	WHERE Title = '{$_POST['title']}'
";

$result=mysqli_query($conn,$sql);

if($result === false){
	echo 'Fail to update data Please message to administrator';
} else{
	echo 'Success to Update. <a href="main.html">Return?</a>';
}
?>
