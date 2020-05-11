<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>
<script type="text/javascript">

$(document).ready(function(){
$("button").click(function(){
$("span").toggle();
});
});

function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var strcount
var x = new Date()
document.getElementById('ct').innerHTML = x;
tt=display_c();
}

</script>
  <style>
  
  button {
  font-family: Comic Sans MS, cursive, sans-serif;
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
  border-radius: 5px
}

button:hover{
	background-color: #2471A3;
}

  #edit {
  font-family: Comic Sans MS, cursive, sans-serif;
  outline: 0;
  background: #A569BD;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  border-radius: 25px
}

#edit:hover{
	background: #EBDEF0;
}

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 15px;
	  background-color: #008080;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #ffffff;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
		background-color: #002966;
      color: white;
      padding: 15px;
	  border-radius: 15px
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	
	table {
  font-family: "Comic Sans MS", cursive, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border-radius: 25px
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

td, th {
  border: 1px solid #dddddd;
  border-radius: 25px
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #EAFAF1;
}

  </style>
</head>
<body style="font-family: Comic Sans MS, cursive, sans-serif;" onload=display_ct();>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <?php /* <a class="navbar-brand" href="#">Logo</a>*/ ?>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <?php
		/*
		<li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
		*/
		?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="log_out.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
	  <p style="font-family: Comic Sans MS, cursive, sans-serif;"><button>Clock</button><br><span id='ct'></span></p>
      <p><a href="information.php"><button>ADD PATIENT</button></a></p>
	  <p><a href="search.php"><button>SEARCH PATIENT</button></a></p>
     <?php
/*
   	 <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
	  */?>
	  
    </div>
    <div class="col-sm-8 text-left"> 
	<?php
	
	date_default_timezone_set('Asia/Kolkata');
	
	session_start();
	
	if(!isset($_SESSION['user']) && empty($_SESSION['user']))
	{
	header("Location:index.php");
	ob_end_flush();
	}
	
	?>
	
      <h3>User-Id: <?php echo $_SESSION['user'];?> | <b>STATUS:</b><font color="green"><b> Active</b></font></h3>
      <hr>
      <h3>Patient Details on <?php echo date("d-m-Y");?> </h3><hr>
	  <?php
	  
	  $conn = mysqli_connect('localhost' , 'root' , '' , 'insolva');
	  
	  $q1 = "select * from patient where date = '".date("d-m-Y")."' order by time desc";
	  $r1 = mysqli_query($conn, $q1);
	  
	  if(mysqli_num_rows($r1) > 0)
	  {
		  echo '
		  <table>
			<tr>
				<th><font style="color: #008080"><u>Id</u></font></th>
				<th><font style="color: #008080"><u>Name</u></font></th>
				<th><font style="color: #008080"><u>Age</u></font></th>
				<th><font style="color: #008080"><u>Address</u></font></th>
				<th><font style="color: #008080"><u>Phone No.</u></font></th>
				<th><font style="color: #008080"><u>Aadhar (If Any)</u></font></th>
				<th><font style="color: #008080"><u>Department</u></font></th>
				<th><font style="color: #008080"><u>Doctor Assigned</u></font></th>
				<th><font style="color: #008080"><u>Past Records (If Any)</u></font></th>
				<th><font style="color: #008080"><u>Time</u></font></th>
				<th><font style="color: #008080"><u>Date</u></font></th>
			</tr>';
			
		  while($record = mysqli_fetch_assoc($r1))
		  {
			  echo '<tr>
						<th>'.$record['id'].'</th>
						<th>'.$record['name'].'</th>
						<th>'.$record['age'].'</th>
						<th>'.$record['address'].'</th>
                        <th>'.$record['phone'].'</th>
						<th>'.$record['aadhar'].'</th>
						<th>'.$record['department'].'</th>
						<th>'.$record['doctor_assigned'].'</th>
						<th>'.$record['past_records'].'</th>
						<th>'.$record['time'].'</th>
						<th>'.$record['date'].'</th>
						<th><button id="edit"><a href="#">Edit</a></button></th>
					</tr>';
		  }
		  echo '</table>';
	  }
	  else{
		  echo 'You have no data added today.';
	  }
	  
	  ?>
      <p></p>
    </div>
	<?php
	/*
    <div class="col-sm-2 sidenav">
      
	  <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
	  
    </div>
	*/
	?>
  </div>
</div>
<br><br><hr><br>

<footer class="container-fluid text-center">
  <p>Powered By <a href="https://www.insolvasolutions.xyz">Insolva Solutions Inc.</a> | Email-Id: ceo@insolvasolutions.xyz</p>
</footer>

</body>
</html>
