<?php 
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password']))
{
		header('location: new_session.php');
}
error_reporting(0);
?>
<html>
  
	<head>
		<title>INTER NIT SPORTS MEET 2K14 </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">
		body{background-image: url(bg11.jpg); background-size:cover; background-repeat:no-repeat; height:770px}
			#heading{
				width:600px;
				height:30px;
				padding-left:380px;
				padding-top:4px;
				font-size:20px;
				
			}
			#signup{
				width:300px;
				height:200px;
				padding-top:380px;
				padding-left:510px;
				margin-top:30px;
			}
			#container {
				position:fixed;
    			width: 325px;
    			height: 290px;
    			top: 45%;
    			left: 50%;
    			margin-top: -140px;
    			margin-left: -170px;
				background: rgba(153,153,1534,0.7);
    			border-radius: 60px;
    			
    			box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
			}
			
			form {
    			margin: 0 auto;
    			margin-top: 20px;
			}
			label {
    			color: #000;
    			display: inline-block;
    			margin-left: 18px;
    			padding-top: 10px;
    			font-size: 16px;
			}
			input {
    			font-family: "Helvetica Neue", Helvetica, sans-serif;
    			font-size: 14px;
    			outline: none;
			}
			input[type=text],
			input[type=password] {
    			color: #222;
    			padding-left: 10px;
    			margin: 10px;
    			margin-top: 12px;
    			margin-left: 18px;
    			width: 290px;
    			height: 35px;
			}
			#lower {
    			background: rgba(255,255,255,0);
    			width: 100%;
    			height: 85px;
    			margin-top: 2px;
			}
			#rad{
				padding-top:10px;
				padding-left:10px;
				width:200px;
			}
			input[type=radio]{
				display:inline-block;
				margin-left:10px;
				margin-right:-2px;
				padding-top:5px;
    			background-color: #000;
    			border-color: #ddd;
			}
			input[type=submit] {
    			float: right;
    			margin-right: 32px;
    			margin-top:-40px;
    			width: 80px;
    			height: 30px;
			}

			.footer { float:left;background-color: transparent; height:30px; margin-top:150px}
			.footer p{ padding-top:5px; text-align:center}
		</style>
	</head>

<body>
	
    <div id="heading">
    	<h1 style="color: #08fde9;" >INTERNIT SPORTS MEET 2K14</h1>
    </div>
  <div id="container">       
	<form method="post" action="login_script.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username">
		<label for="password">Password:</label>
		<input type="password" id="password" name="password">
			
	<div id="lower" STYLE="MARGIN-TOP:50PX">
    	
		<input type="submit" value="Log in">
	</div>
	
	</form>
	
  </div>
  <div id="signup">
  	<p style="color: #000;"><strong>Not Yet Registered!!!</strong></p>
    <a href="signup.php" style="font-size: 18px; color: RED;"><strong>Sign Up</strong></a><br>
	<?php echo $_GET['m1'];?>
  </div>

  <div class="footer">
   <p><strong>©</strong> Copyright 2014 -U K VISHNU</p>
  </div>
</body>
</html> 