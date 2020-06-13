<?php
$str = $_POST['id'];
$conn = mysqli_connect('localhost','admin','raspberry','mysql');
$sql = "SELECT * FROM Wikipedia WHERE Title="."'$str'";

if(mysqli_connect_errno()){
	echo "Failed to conndec to mysql";
}

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
	<head>
	 <meta charset="utf-8">
	 <title><?php echo $str?></title>
	</head>

	<body>
	 <h1><?php echo $str?></h1>
	 <ol>
	  <?php echo $row['Description'];?>
	 </ol>
	</body>
</html>
