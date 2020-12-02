<html>
<head><title>Home Page</title> 
<style>

html,body{
	min-height:100%;
	margin-top:0px;
}  
#image{
	background-image:url('/project/background.jpg');
	background-repeat:no-repeat;
	background-size:100%;
    min-height:140%;
	
}
#center{
		margin-left:350;
}

h1,h2{
	color:black;
	text-align:center;
	}
	footer{
		text-align:center;
		font-family:cursive;
		font-size:10px;
	}
	
.carousel-inner{
	text-align:center;
	
}
p{
	color:blue;
}
</style>
<link rel="stylesheet" type="text/css" href="/project/style/core.css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>
<?php include "header.php"; ?>

	

<div id="image">
<p>	<h1 style=color:black;>Roadside assistance</h1></p>
		<br>
<h2 style=color:black;>Flat tyre, dead battery or immobilized vehicle..whatever may be the<br> problem,we help you get back on the road with just a quick call!
<br><br>
24X7 Service | PAN India Network | Quick Response</h2><br><br><br>
</div>
<h1 style=font-size:45;>Services Offered</h1>
<br>
<br>

<div class="col-sm-6" id="center">
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
   <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
	<div>
	 <h1> Onsite Assitance</h1>
	  </div>
      <img src="/project/onsite1.png" alt="..."  height=500px; width=100%; >
	  <p>Our fully trained representatives are <br>available 24X7< for on-the-spot <br>assistance and repair.</p>
	  
      
    </div>
    <div class="item">
	<div>
	 <h1> Flat Tyre Problem</h1>
	  </div>
      <img src="/project/flat.png" alt="..." height=500px; width=650px;>
	 <p> Our technicians will replace your <br>vehicle'sflat tyre with our spare, <br>in caseyou do not have enough spare <br>tyre(s)</p>.
      
    </div>
	<div class="item active1">
	<div>
	  <h1>Dead Battery</h1>
	  </div>
      

      <img src="/project/deadbattery.png" alt="..." height=500px; width=650px;>
	  <p>Our technicians will jumpstart your <br>vehicle in case of a dead or <br>discharged battery in a need.</p>
	      </div>
	<div class="item active2">
		  <div>
	  <h1>Fuel Empty</h1>
	  </div>
      

      <img src="/project/fuel.png" alt="..."  height=500px; width=650px;>
	 <p> We will remedy incorrect fuelling.<br> Additionally, 5 litres of fuel <br>(chargeable separately) can be<br> delivered.</p>
    </div>
  <div class="item active3">
  	  <div>
	  <h1>Towing Car</h1>
	  </div>

      <img src="/project/towingcar.png" alt="..."  height=500px; width=650px;>
	 <p> In case on-site repair is not possible, <br>we will provide towing facility <br>to the nearest authorized workshop.</p>
      
    </div>
  <div class="item active4">
  	  <div>
	 <h1> Key Lost or locked</h1>
	  </div>

      <img src="/project/key.png" alt="..."  height=500px; width=650px;>
	  <p>Lost your keys? Keys locked in?<br> Our lockout experts will provide<br> on-site help 24X7.</p>
      
    </div>
  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
</div>
<br>

</body>

</html>