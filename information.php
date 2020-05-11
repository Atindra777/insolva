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
	background: #008080;
	font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;    
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: auto;
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
  font-family: "Roboto", sans-serif;
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
  background-color: #002966;
  padding: 10px;
  border-radius: 15px;
}

</style>
<body style="font-family: Comic Sans MS, cursive, sans-serif;">
<div class="content">
<div class="login-page">
<div class="form">
<b>Patient Info</b><br> <font color="red">*required fields</font><br><br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<?php //<font color="red">*</font>Profile image (jpg/jpeg within 500kb):<input type="file" name="fileToUpload" id="fileToUpload"><br>?>
<font color="red">*</font>Name: <input type="text" name="name"  required /> <font color="red">*</font>Age: <input type="text" name="age" required />
<font color="red">*</font>Address: <input type="text" name="address" required /> <font color="red">*</font>Phone No: <input type="text" name="phone" required />
<font color="red"></font>Aadhar No: <input type="text" name="aadhar"/> <font color="red">*</font>Department: <input type="text" name="department" required />
<font color="red">*</font>Doctor Assigned: <input type="text" name="doctor" required /> <font color="red"></font>Past Records (If Any): <input type="file" name="past"/><br>
<br>
<button type="submit" name="submit">ENTER</button>
<br><br><p align="center">[ <a style="text-decoration: none;" href="home.php">Go Back Home</a> ]</p>
</form>

<?php

$conn = mysqli_connect('localhost' , 'root' , '' , 'insolva');

if(isset($_POST['submit']))
{
	if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['address'])
		&& isset($_POST['phone']) && isset($_POST['aadhar']) && isset($_POST['department'])
	       && isset($_POST['doctor']))
		{
			
				
				/*
				$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo '<p align="center"><font color="red"><b>File is not an image.</b></font></p>';
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo '<p align="center"><font color="red"><b>Sorry, file already exists.</b></font></p>';
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 600000) {
    echo '<p align="center"><font color="red"><b>Sorry, your file is too large.</b></font></p>';
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
    echo '<p align="center"><font color="red"><b>Sorry, only JPG, JPEG, PNG files are allowed.</b></font></p>';
    $uploadOk = 0;
}
	if ($uploadOk == 0){
    echo '<p align="center"><font color="red"><b>Sorry, your file was not uploaded.</b></font></p>';
// if everything is ok, try to upload file
}else{ 
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
				$q1 = "insert into users_interests(profile_pic,email,name) values('".basename($_FILES["fileToUpload"]["name"])."' , '".$_SESSION['email']."','".mysqli_real_escape_string($conn , htmlspecialchars(trim(stripslashes($_POST['name']))))."')";
				$r1 = mysqli_query($conn,$q1);
				
				header('Location:home.php');
				ob_end_flush();
				}
				else {
					echo '<p align="center"><font color="red"><b>Sorry, there was an error uploading your file.</b></font></p>';
				}
				*/
				$name = $_POST['name'];
				$address = $_POST['address'];
				$phone = $_POST['phone'];
				$age = $_POST['age'];
				$department = $_POST['department'];
				$doctor = $_POST['doctor'];
				//$past = $_POST['past'];
				$aadhar = $_POST['aadhar'];
				
				date_default_timezone_set('Asia/Kolkata');
				
				$time = date("H:i:sa");
				$date = date("d-m-Y");
				$q1 = "insert into patient(name, address, phone, age, department, doctor_assigned, aadhar, time , date) values
				('".$name."' , '".$address."' , '".$phone."' , '".$age."' , '".$department."' , '".$doctor."' , '".$aadhar."' , '".$time."' , '".$date."')";
				$r1 = mysqli_query($conn, $q1);
				if($r1){
					echo '<font color="green">Patient Record Added Successfully</font>';
				}
				else{
					echo 'Error';
				}
				
			
        }
	}

?>

</div></div></div>
<div id="footer">
<p align="center"><font color="white">Powered By <a href="https://www.insolvasolutions.xyz">Insolva Solutions Inc.</a> | Email-Id: ceo@insolvasolutions.xyz</font></p>
</div>
</body>