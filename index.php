<?php
ob_start();
?>
<html>
<head>
    <title>Insolva Solutions</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
/* Style the content */

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

body {
	background: #ff6666; 
	font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;    
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  border-radius: 15px;
}

 .login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}

.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 18px;
  border-radius: 10px;
}
.form button {
  font-family: "Comic Sans MS", cursive, sans-serif;
  outline: 0;
  background: #80b3ff;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  border-radius: 10px;
}
.form button:hover,.form button:active,.form button:focus {
  background: #0052cc;
}
#footer {
  border-radius: 15px;
  background-color: #002966;
  padding: 10px;
}
</style>
<body style="font-family: Comic Sans MS, cursive, sans-serif;">
<div class="content">
<div class="login-page">
<div class="form">
<b>PATIENT BOOKING</b> | <b>Log In </b><br> <font color="red">*required fields</font><br><br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<?php //<font color="red">*</font>Profile image (jpg/jpeg within 500kb):<input type="file" name="fileToUpload" id="fileToUpload"><br>?>
<font color="red">*</font>User-Id: <input type="text" name="name"/><br>
<br>
<font color="red">*</font>Password: <input type="password" name="password"/><br>
<br>
<button type="submit" name="submit">ENTER</button>
</form>

<?php

session_start();

if(isset($_SESSION['user']) && !empty($_SESSION['user']))
{
	header("Location:home.php");
	ob_end_flush();
}

$conn = mysqli_connect('localhost' , 'root' , '' , 'insolva');

if(isset($_POST['submit']))
{
	if(isset($_POST['name']) && isset($_POST['password']))
	{
			if(!empty($_POST['name']) && !empty($_POST['password']))
			{
				$name = $_POST['name'];
				$password = $_POST['password'];
				$q1 = "select * from user where user_id = '".$name."'";
				$r1 = mysqli_query($conn,$q1);
				$record = mysqli_fetch_assoc($r1);
				if(($record['user_id'] == $name) && ($record['password'] == $password))	
				{
					$_SESSION['user'] = $name;
					header("Location: home.php");
					ob_end_flush();
				}
				else{
					echo '<font color="red">**Enter Correct Details</font>';
				}
				
			}
			else{
				echo '<font color="red">**Enter All Details</font>';
			}	
			
	}
}

?>

</div></div></div>
<div id="footer">
<p align="center"><font color="white">Powered By <a href="https://www.insolvasolutions.xyz">Insolva Solutions Inc.</a> | Email-Id: ceo@insolvasolutions.xyz</font></p>
</div>
</body>
</html>