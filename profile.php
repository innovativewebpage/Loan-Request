<?php ob_start(); 
	include "include/dbc.php"; ?>
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Online Loan Recovery System</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Online Loan Recovery System</a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
		<li><a href="profile.php">Profile</a></li>  
       <li><a href="personaldetails.php">Loan Request</a></li>
        <li><a href="logout.php">Logout</a></li>        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
	
	<section id="contact-page">
        <div class="container">
            <div class="center">  
                  <br>			
                <h2>User Registration Details</h2>
				
				<br><br>
				<form name="form1" method="post" action="#">
	
	    <?php
				session_start();
			    $sid=$_SESSION['sid'];
				$qry=mysql_query("select * from register where sid='$sid'");
				$row=mysql_fetch_array($qry);
			?>

	<form name="form1" method="post" action="#">		
<table border="1" align="center" cellpadding="10" cellspacing="0">
											
		<tr>
			<td>Name </td>
		<td><?php echo $row['name']; ?></td>
	</tr>
						
	<tr>
		<td>Email </td>
			<td><?php echo $row['email']; ?></td>
	</tr>
	    
						
	<tr>
		<td>Mobile </td>
	<td><?php echo $row['cno']; ?></td>
						</tr>
						
	<tr>
		<td>User Name </td>
		<td><?php echo $row['uname']; ?></td>
   </tr>						
						
</table>
</form>
	
		
		
		
	<br/><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br>
		</div><!--/.container-->
    </section><!--/about-us-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
		
            </div>
        </div>
		
    </footer><!--/#footer-->
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
	
	
	
	
	
	
	

