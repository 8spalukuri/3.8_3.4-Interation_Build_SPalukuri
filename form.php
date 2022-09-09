<!--the host address for my website form goes here-->

<html>
	
	<head>
		<title>Tawa Bush Reserve</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
		
	<div id="main">
		
		
		<div class="nav">
			<!-- LOGO -->
		<div class="logo">
			<img src="images/logo.png" alt="Tawa Bush Reserve Logo">
		
		</div>
			
          <ul>
              <li><a href="index.html"  style="color:#000;">HOME</a></li>
              
              <li><a href="about.html" style="color:#000;">ABOUT</a>
            <ul>
              <li><a href="gallery.html" style="color:#000;" >GALLERY</a></li>
              <li><a href="form.php"  style="color:#000;">CONTACT</a></li>
            </ul>
              </li>
              <li><a href="form.php" style="color:#000;">CONTACT</a></li>
          </ul>
          <!---<img src="images/gannet logo.png" alt="gannet beach logo" style="margin-left: 1300px;" class="responsive">-->
        </div>
		
		
		<?php
		//get the connection to the database
		require_once("tawa_bush_reserve_mysqli.php");
		?>
		
		
		<div class="header">
         <img src="images/tawaheader.png" alt="Tawa Bush Reserve header" style="width:100%;">
        </div>
		<br><br><br><br>

			
			<h3>Contact</h3>
			<h4>Please feel free to use the form below to contact us if you have any questions!</h4>
		
		
		
		<!--form-->
		<div class="contact_container">
			<form action="connect.php" method="post">
			
			
			<!--name field-->

			<div class="row">
				<div class="column">
					<label for="name">Full Name</label>
				</div>
				<div class="column2">
					<input type="text" id"name" name="name" placeholder="Your full name">
				</div>
			</div>	
				
				
			<!--email field-->
				
			<div class="row">	
				<div class="column">
					<label for="email">Email Adress</label>	
				</div>
				<div class="column2">
					<input type="text" id="email" name="email" placeholder="Your email address">
				</div>
			</div>
					
				
			<!--contact number field-->
			
			<div class="row">
				<div class="column">
					<label for="phone">Contact Number</label>
				</div>
				<div class="column2">
					<input type="text" id="phone" name="phone" placeholder="A contact number">
				</div>
			</div>
					
								
			<!--subject field-->
			<div class="row">
				<div class="column">
					<label for="message">Subject</label>
				</div>
				<div class="column2">
					<textarea id="message" name="message" placeholder="Write something..." style="height:200px"></textarea>
				</div>
			</div>
			
			
			<br>
			<!--submit button-->
			<div class="row">
				<input type="submit" value="Submit">
			</div>
					
					
			</form>
			
		</div>
		
			<!--copyrigth statement--->
			<div id="footer">
				&copy; Gannet Beach Adventures 2022, all rights reserved.
			</div>
		

	</div>	
	</body>
	
</html>
	


