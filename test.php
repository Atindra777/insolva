<!doctype html>
<html>
	<head></head>
	<body>
	<form action="" method="post" enctype="multipart/form-data">
	Enter Patient-Id: <input type="text" name="patient_id">
	<br><br>
	Upload File: <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    <input type="submit" value="Upload File" name="submit_pdf">
	</form>
	
	<?php
	if(isset($_POST["submit"])) {
	if(!empty($_FILES['fileToUpload']['name'])) {
		
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
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo '<p align="center"><font color="red"><b>Sorry, only JPG, JPEG, PNG files are allowed.</b></font></p>';
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0){
    echo '<p align="center"><font color="red"><b>Sorry, your file was not uploaded.</b></font></p>';
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
        $q1 = "insert into images (image , email) values ('".basename($_FILES["fileToUpload"]["name"])."' , '".$_SESSION['email']."')";
		$r1 = mysqli_query($conn , $q1);
		if($r1){
		echo '<font color="green"><b>**The file has been uploaded.</font></b>';
		}
    } else {
        echo '<font color="red"><b>**Sorry, there was an error uploading your file.</b></font>';
    }
}
}else{echo '<font color="red"><b>**Field can not be empty.</b></font>';}
}

	?>
	
	</body>
</html>	
	