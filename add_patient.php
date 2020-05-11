<!doctype html>
<html>
	<head></head>
	<body>
	<b>CMRI HOSPITAL CARDIOLOGY DEPARTMENT</b><br><br>
		<form action="" method="post">
		<input type="text" name="name" placeholder="Patient's Name"><br><br>
		<input type="text" name="age" placeholder="Patient's Age"> years<br><br>
		<textarea type="text" name="address" placeholder="Patient's Address"></textarea><br><br>
		<input type="text" name="phone" placeholder="Patient's Phone No."><br><br>
		<input type="submit" name="submit" value="ENTER">
		</form>
		
		<?php
		
		if(isset($_POST['submit']))
		{
			if(isset($_POST['userid']) && isset($_POST['password']))
			{
				if(!empty($_POST['userid']) && !empty($_POST['password']))
				{
					$userid = $_POST['userid'];
					$password = $_POST['password'];
					
					echo $userid.' '.$password;
				}
				else
				{
					echo '<font color="red">Enter Both User-Id & Password</font>';
				}
			}
		}
		
		?>
		
	</body>
	
	<hr>
	
	<p align="center">POWERED BY INSOLVA SOLUTIONS LLP</p>
</html>	