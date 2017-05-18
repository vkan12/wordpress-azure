<?php
/*
Template Name: About us
*/
?>
<html>
<head>
 <link rel = "stylesheet" type = "text/css" href = "/wp-content/custom/css/footer.css" />
 <link rel = "stylesheet" type = "text/css" href = "/wp-content/custom/css/fish.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
 <style>
	 body{
		 font-family: 'Love Ya Like A Sister', cursive;
	 }
	 
	 p.small {
    line-height: 150%;
}
 </style>	
 
 <script>
	 
	 /*It will clear all the values stored in session storage*/
	 function clearAll() 
      {
      window.localStorage.clear();
      window.sessionStorage.clear();
    }
 </script> 
</head>
<header>
  <ul class="my-list-style">
  <li><a href="http://watertarget.azurewebsites.net/home/">Home</a></li>
  <li><a href="http://watertarget.azurewebsites.net/challenge/">Challenge</a></li>
  <li><a href="http://watertarget.azurewebsites.net/water-calculator#Bathroom" onclick="clearAll()">Water Calculator</a></li>
  <li><a href="http://watertarget.azurewebsites.net/wp-content/themes/shapely/page-templates/contact.php">Contact</a></li>
  <li ><a class="active" href="javascript:window.location.href=window.location.href">About Us</a></li>
  </ul>
  <h2>About us</h2>
</header>
<body>
 <div id="form">
	  
	 <br/>
	 <br/>
	 <br/>
	 &nbsp;&nbsp;&nbsp;<b>Did you know that we should each be using less than 155 litres of water a day? </b><br/>
	 <p class="small">
	  &nbsp;&nbsp;&nbsp; Target 155 is a Victorian government program providing awareness of our water usage and ensuring that we all have enough to share &nbsp;&nbsp;&nbsp; for the future.
     </p>
	 <br/>
	 <br/>
	 <br/>
	
	  &nbsp;&nbsp;&nbsp;<b>Who says learning and environmental issues isn’t fun?</b>
	 <br/>
	 <p class="small">
      &nbsp;&nbsp;&nbsp;&nbsp;We are a team of enthusiastic and motivated students looking to bring awareness of Victoria’s water usage into the homes of families &nbsp;&nbsp;&nbsp; with young teenagers.
	 We care for the future of our environment and want to provide greater education and awareness to the next &nbsp;&nbsp;&nbsp;&nbsp;generation. However, no one likes going to school so we are passionate about bringing the best experience and fun to our product and &nbsp;&nbsp;&nbsp;our users. 
	 </p>
	 <br/>
	 <br/> 
	 

	 
 </div>
 <footer class="footer-distributed">

			<div class="footer-left">

				<img src="/wp-content/uploads/2017/05/logo.png" alt="logo" style="width:100px;"></img>

				<p class="footer-links">
					<a href="http://watertarget.azurewebsites.net/">Home</a>
					·
				  <a href="javascript:window.location.href=window.location.href">About</a>
					·
				  <a href="http://watertarget.azurewebsites.net/wp-content/themes/shapely/page-templates/contact.php">Contact</a>
				</p>

				<p class="footer-company-name">Water Target &copy; 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>900 Dandenong Rd, </span> Caulfield East VIC 3145</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>(03) 9903 2000</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:contact.watertarget@yahoo.com">contact.watertarget@yahoo.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					We are the Blue Can Do's  with a "Together We Can Do attitude"
				</p>
</footer>

</body>
</html>