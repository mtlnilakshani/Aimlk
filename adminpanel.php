<?php
session_start();

if (!isset($_SESSION['username'])) {
    // If the user is not logged in, redirect to the login page
    header("Location: adminlog.php");
    exit;
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
<style>
body
	{
		background-color: #9AECDB;
	}
.main
	{
		width: 100%;
		margin:0px;
		padding:0px;
	}
.top
	{
		width: 100%;
		background-color: #54a0ff;
		text-align: center;
		padding-top: 2px;
		padding-bottom: 2px;
		margin-bottom: 0px;
		
	}
h1
	{
		font-size: 80px;
		color: white;
		font-family:Cambria;
		letter-spacing: 5px;
	}
	
.middle
	{
		width: 100%;
		
		margin-top: 0px;
		background-color: #9AECDB;
	}
.m1
	{
		margin: 0 auto;
		width: 80%;
		text-align: left;
		margin-top: 0px;
	}
.m1 tr
	{
		height: 140px;
	}
.btnstyle{
  background-color: #111827;
  border: 1px solid transparent;
  border-radius: .75rem;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  flex: 0 0 auto;
  font-family: "Inter var",ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: 1.125rem;
  font-weight: 600;
  line-height: 1.5rem;
  padding: .75rem 1.2rem;
  text-align: center;
  text-decoration: none #6B7280 solid;
  text-decoration-thickness: auto;
  transition-duration: .2s;
  transition-property: background-color,border-color,color,fill,stroke;
  transition-timing-function: cubic-bezier(.4, 0, 0.2, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: auto;
}

.btnstyle:hover {
  background-color:#eb4d4b ;
	color: #111827;
}

.btnstyle:focus {
  box-shadow: none;
  outline: 2px solid transparent;
  outline-offset: 2px;
}

@media (min-width: 768px) {
  .btnstyle {
    padding: .75rem 1.5rem;
  }
}
.footer
	{
		width: 100%;
		position: relative;
		left: 0;
		bottom: 0;
		
	}
.logo
	{
		width: 30%;
		float: left;
		background-color: #778ca3;
		text-align: center;
		height: 100px;
		
	}
.intro
	{
		width: 70%;
		float: left;
		background-color: #778ca3;
		height: 100px;
		
	}
img
	{
		margin: auto;
		display: block;
		width: 25%;
		margin-bottom: 30px;
		margin-top: 10px;
		
	}
.notice
	{
		margin-top: 30px;
		margin-left: 30px;
		margin-right: 30px;
		font-size: 16px;
		font-family: Century Gothic;
		font-style: italic;
	}
	.home {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0px;
			margin:0px;
			height:45px;
            
        }

        .left, .right {
            width: 50%;
        }

        .right {
            text-align: right;
        }

        .homeimg { 
            max-width: 5%;
            height: auto;
			float:left;
			margin-top:15px;
        }

        /* Style for the logout link */
        .right p {
            margin: 0;
			margin-right:10px;
        }

        .right a {
            margin-left: 10px;
            color: white;
            text-decoration: none;
            font-weight: bold;
			background-color:black;
			padding:3px;
			border-radius:6px;
        }
</style>	
</head>

<body>
<div>
		
</div>

	<div class="home">
		<div class="left"> 
			
		</div>
		<div class="right">
			<p><?php echo $_SESSION['username']; ?><a href="../logout1.php">Logout</a></p>
		</div>
	</div>
	
	<div class="main">
		<div class="top">
		

			<h1>ADMIN PANEL</h1>
		</div>
		
		<div class="middle">
			<table class="m1" >
				<tr>
					<td><button class="btnstyle" onclick="loadPage('service-edit/teleedit.php')">Telecommunication Product and Servicers Promotions</button></td>
					<td><button class="btnstyle" onclick="loadPage('service-edit/streetproedit.php')">street-promotion</button></td>
				</tr>
				<tr>
					<td><button class="btnstyle" onclick="loadPage('service-edit/sgroundedit.php')">Special and Ground Events</button></td>
					<td><button class="btnstyle" onclick="loadPage('service-edit/moderntraedit.php')">modern-Trade-Promotion</button></td>
				</tr>	
				<tr>
					<td><button class="btnstyle" onclick="loadPage('service-edit/merchanedit.php')">merchandising-campaign</button></td>
					<td><button class="btnstyle" onclick="loadPage('service-edit/generaltraedit.php')">general-trade-promotion</button></td>
				</tr>
				<tr>
					<td><button class="btnstyle" onclick="loadPage('service-edit/exhibitionedit.php')">Exhibition Stands</button></td>
					<td><button class="btnstyle" onclick="loadPage('service-edit/doortoedit.php')">door-to-Door-Promotions</button></td>
					
				</tr>
				<tr>
					<td><button class="btnstyle" onclick="loadPage('service-edit/brandbuildedit.php')">brand-building-promotions</button></td>
					<td><button class="btnstyle" onclick="loadPage('service-edit/bpoedit.php')">bpo-centers</button></td>
				</tr>
				<tr>
					
					<td><button class="btnstyle" onclick="loadPage('service-edit/eventedit.php')">Event Add</button></td>
				</tr>
			</table>
			
			<script>
    			function loadPage(url) 
				{
				  window.location.href = url;
				}
  			</script>
			
		</div>
		
		<div class="footer">
			<div class="logo">
				<img src="../images/logo-default-234x84.png" alt="keels">
				<p>©All Rights Reserved.</p>
			</div>
			<div class="intro">
				<p class="notice">This website is operated and maintained by AIM. The content on this site, including images, text, and other media, is the property of AIM and is protected by applicable copyright laws.</p>
			</div>
		</div>
	
	</div>
	
	
	
</body>
</html>