<?php 
	include "include/dbc.php"; 
	?>
	
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
                <h2>New User Registration</h2>
				
				<h4 style="font-size:20px;margin-left:85px;">Personal Details</h4>
            </div> 
			
            <div class="row contact-wrap"> 
               <form name="contact-form" method="post" >
				
           <div class="col-sm-5 col-sm-offset-1">
                  <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                    </div>
						
			 <div class="form-group">
                            <label>Address *</label>
                              <textarea name="address" class="form-control" rows="5" cols="20" required="required"></textarea>
                      </div>
						
						   <div class="form-group">
                            <label>City*</label>
                            <input type="text" name="city" class="form-control" required="required">
                           </div>
                        <br>
		<h4 style="margin-left:450px;width:180px;font-size:20px;">Proof Details</h4>
						      <br>
           <div class="form-group">
                            <label>Ration Card Id *</label>
                            <input type="text" name="ration" class="form-control" required="required">
             </div>	
					   
					   
         <div class="form-group">
                            <label>Email-Id *</label>
                            <input type="text" name="email" class="form-control" required="required">
           </div>
						   <br>
						   <h4 style="margin-left:430px;width:300px;font-size:20px;">Qualification & Fees Structure</h4>
						      <br>
             <div class="form-group">
                  <label>Course-Name *</label>
                   <input type="text" name="course" class="form-control" required="required">
              </div>
                             
          <div class="form-group">
               <label>Income-Certificate *</label>
                   <input type="text" name="income" class="form-control" required="required">
           </div>	
            
			
			<div class="form-group">
                            <label>Loan Amount *</label>
                            <input type="text" name="loan" class="form-control" required="required">
                           </div>
		   
	</div>
					
					
       <div class="col-sm-5 col-sm-offset-1">
		  <div class="form-group">
                            <label>Date of Birth*</label>
                            <input type="text" name="dob" class="form-control" required="required">
                   </div>
						
						    <div class="form-group">
                            <label>Age*</label>
                            <input type="text" name="age" class="form-control" required="required">
                           </div>
						
						   <div class="form-group">
                            <label>State*</label>
                            <input type="text" name="state" class="form-control" required="required">
                           </div>
						
						  <div class="form-group">
                            <label>Pin Code*</label>
                            <input type="text" name="pcode" class="form-control" required="required">
                           </div> 
                          <br><br><br><br>
						  <div class="form-group">
                            <label>Adhar Card Id *</label>
                            <input type="text" name="adhar" class="form-control" required="required">
                           </div>
						    <div class="form-group">
                            <label>Pan-card Id *</label>
                            <input type="text" name="pan" class="form-control" required="required">
                           </div>
						   <br><br><br><br>
						   
						   <div class="form-group">
                            <label>School/college Name *</label>
                            <input type="text" name="school" class="form-control" required="required">
                           </div>
						   
						    <div class="form-group">
                            <label>Course Duration *</label>
                            <input type="text" name="duration" class="form-control" required="required">
                           </div>
						   
						    
						   
						   
						   
						    <div class="form-group">
                              <div class="form-group">
                            <button type="submit" name="s1" class="btn btn-primary btn-lg">Submit Message</button>
                        </div>
                        </div>
				</div>
		</form>

        <?php
					if(isset($_POST['s1']))
					{
						extract($_POST);
						$status=0;	
	$qry=mysql_query("insert into personal(name,address,city,ration,
email,course,income,dob,age,state,pcode,adhar,pan,school,duration,loan,status
	)values('$name','$address','$city','$ration',
	'$email','$course','$income','$dob','$age','$state',
	'$pcode','$adhar','$pan','$school','$duration','$loan','$status')");
						  if($qry)
							{
								echo "<script>alert(' Add succesfully');</script>";
							}
							else
							{
								echo "<script>alert('Sorry Add Again');</script>";
							}	
					}  
					
					
					
					
				  ?>
									
		
		
		
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
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
                        <li><a href="contact-us.php">Post Add</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>