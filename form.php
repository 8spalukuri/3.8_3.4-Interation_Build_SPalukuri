<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tawa Bush Reserve</title>

    <meta charset="utf-8">
    
    <!--compatible with Microsoft Edge-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!--important code needed for site to be responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--important keywords for search engines-->
    <meta name="Keywords" content="tawa, bush, reserve"/>
    <meta name="Author" content="Sarina Palukuri"/>
    <meta name="Description" content="tawa bush reserve Website"/>


    <!--import the webpage's stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--import the webpage's javascript file-->
    <script src="js/script.js" defer></script>
    
	  
    </head>
    <body>
		


		
		
		<div class="nav">
			<!-- LOGO -->
		<div class="logo">
			<img src="images/logo.png" alt="Tawa Bush Reserve Logo">
		
		</div>
			
          <ul>
              <li><a href="index.html"  style="color:#000;">HOME</a></li>
              
              <li><a href="tour.html" style="color:#000;">TOUR</a>
            <ul>
              <li><a href="tour.html" style="color:#000;" >ABOUT THE TOUR</a></li>
              <li><a href="faq.html" style="color:#000;" >FAQ</a></li>
              <li><a href="gallery.html" style="color:#000;" >GALLERY</a></li>
            </ul>
              </li>
              <li><a href="form.php" style="color:#000;">CONTACT</a></li>
          </ul>
          <!---<img src="images/gannet logo.png" alt="gannet beach logo" style="margin-left: 1300px;" class="responsive">-->
        </div>
          
		
       

      
        <div class="header">HEADER IMAGE
         
        </div>
        
        <div id="container"> 
        
        
        
          <div class="content">
            
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
					<input type="text" id"name" name="name" placeholder="Your full name" style=" box-shadow: 2px 2px 4px #5f615f;">
				</div>
			</div>	
				
				
			<!--email field-->
				
			<div class="row">	
				<div class="column">
					<label for="email">Email Adress</label>	
				</div>
				<div class="column2">
					<input type="text" id="email" name="email" placeholder="Your email address" style=" box-shadow: 2px 2px 4px #5f615f;">
				</div>
			</div>
					
				
			<!--contact number field-->
			
			<div class="row">
				<div class="column">
					<label for="phone">Contact Number</label>
				</div>
				<div class="column2">
					<input type="text" id="phone" name="phone" placeholder="A contact number" style=" box-shadow: 2px 2px 4px #5f615f;">
				</div>
			</div>
					
								
			<!--subject field-->
			<div class="row">
				<div class="column">
					<label for="message">Subject</label>
				</div>
				<div class="column2">
					<textarea id="message" name="message" placeholder="Write something..." style="height:200px; box-shadow: 2px 2px 4px #5f615f;"></textarea>
				</div>
			</div>
			
			
			<br>
			<!--submit button-->
			<div class="row">
				<input type="submit" value="Submit" style=" box-shadow: 2px 2px 4px #3a3b3a;">
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
