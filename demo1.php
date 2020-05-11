<!doctype html>
<html>
<head>
<title></title>
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
	background: #B0E06A;
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
  background: #DDF7B7;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #000000;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  border-radius: 10px;
}
.form button:hover,.form button:active,.form button:focus {
  background: #4C6C1E;
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
<button type="submit" name="submit"><b>ENTER</b></button>
<br><br><p align="center">[ <a style="text-decoration: none;" href="home.php">Go Back Home</a> ]</p>
</form>
</div>
</div>
</div>
</body>
</html>