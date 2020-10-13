<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<link rel ="stylesheet" href="style.css">
	<title>test</title>
</head>
<body style=" 
	width: 400px;
	height: 300px;
	border-style: solid;
	border-width: thin;
	border-bottom-width: 20px;
	border-color: red;"
}>
	<form action="" enctype = "multipart/form-data">
		<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,'apa');
		$query = "SELECT emp_name,emp_img FROM apabirthday WHERE DAY(dob) = DAY(ADDDATE(CURDATE(), INTERVAL 0 DAY)) AND MONTH(dob) = MONTH(ADDDATE(CURDATE(), INTERVAL 0 DAY))
";
		$query_exec = mysqli_query($connection,$query);
		while($row =mysqli_fetch_array($query_exec))
		{
			?>
			
			
		
			<div style="margin-left: 40px; margin-top: 40px;color: blue">APA WISHES
		
		 <?php echo '<img src="data:emp_img;base64,'.base64_encode($row['emp_img']).'"alt="emp_img" style="width:100px;height: 125px; float: right; margin-right:20px"'; ?> </div>
	

		<div style="margin-top: 40px;color: orange"><?php echo $row['emp_name'] ?></div>
		<div style="margin-top: 40px;color: blue">celebrating his birthday on 
		</div>
		<div><?php echo date('m/d/y') ?></div>
		<div style=" margin-top: 30px;color: blue">A very Happy Birthday!!</div>
		<div style="margin-top: 30px;color: blue">Have a great day & glorious year ahead!!</div>
		<?php	
		}
		?>

		</form>
</body>
</html>


