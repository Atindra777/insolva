<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  
   #side {
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

#side:hover{
	background-color: #2471A3;
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
      background-color: #f1f1f1;
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
	
	#search input[type=text] {
  //float: right;
  padding: 6px;
  width: 35%;
  margin-top: 8px;
  margin-right: 16px;
  border: 2px solid #ccc;
  font-size: 17px;
}

#search button {
  //float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 6px;
  background: #fec4c4;
  font-size: 17px;
  border: none;
  cursor: pointer;
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
      <?php /*<a class="navbar-brand" href="#">Logo</a>*/ ?>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <?php
		/*<li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>*/
		?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php /*<li><a href=""><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/?>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
	<p><button id="side">Clock</button><br><span id='ct'></span></p>
      <p><a href="information.php"><button id="side">ADD PATIENT</button></a></p>
      <p><a href="search.php"><button id="side">SEARCH PATIENT</button></a></p>
      <?php
	  /*
	  <p><a href="#">Link</a></p>
    */
	?>
	</div>
    <div class="col-sm-8 text-left"> 
      <h2>Search Patient</h2>
      <p><div id="search"><input type="text" name="" placeholder="Search by Name or Id"> <input type="text" name="" placeholder="Department"> <button>SEARCH</button></div></p>
      <hr>
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

<footer class="container-fluid text-center">
  <p>Powered By <a href="https://www.insolvasolutions.xyz">Insolva Solutions Inc.</a> | Email-Id: ceo@insolvasolutions.xyz</p>
</footer>

</body>
</html>
