<!DOCTYPE html>
<html>
<head>
	<title>Date Function</title>
</head>
<body>

	<form action="date.php" method="post">
		<input type="date" name="date">
		<input type="submit" name="insert">
	</form>

	<?php 



		if(isset($_POST['insert']))
		{
			include("conn.php");


			$sql = "insert into datetable(date) values('".$_POST['date']."')";
			echo $sql;
			if(mysqli_query($con,$sql)){
			echo $_POST['date'];
			}else{
				mysqli_error($con);
			}
		}

	 ?>

</body>
</html>