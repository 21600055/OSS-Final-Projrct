<?php

$conn=mysqli_connect('localhost','admin','raspberry','mysql');
if(mysqli_connect_errno()){
	echo "Failed to conndec to mysql";
}

$sql="
	INSERT INTO Wikipedia
	 (Title, Description,WrittenTime)
	 VALUES(
		'{$_POST['title']}',
		'{$_POST['description']}',
		NOW()
	)";

$result=mysqli_query($conn,$sql);

if($result === false){
	echo 'Fail to store data Please message to administrator';
} else{
	echo 'Success to store. <a href="main.html">Return?</a>';
}
?>
