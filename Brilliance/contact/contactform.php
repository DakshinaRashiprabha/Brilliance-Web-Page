<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" constant="TE-edge">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<script src="https://kit.fontawesome.com/f42084fe17.js" crossorigin="anonymous"></script>
</head>
<body>

    <section class="menubar">
        <ul id="menu">
            <a href="Home.html" >
                <li  class="active" id="home">Home</li>
            </a>
            <a href="/About Us/About_Us.html" >
                <li id="aboutus">About Us</li>
            </a>
            <a href="/Album/Album.html">
                <li id="album">Albums</li>
            </a>
            <a href="/Vedios/Videos.html" >
            <li id="videos">Videos</li>
            </a>
            <a href="/Contact us/index.html" >
            <li id="contactus">Contact Us</li>
            </a>
        </ul>
    </section>

<div class="container">
		<div class="contact-box">
			<div class="left">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6658439881794!2d79.91790711003377!3d6.810438419735092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24fff488845eb%3A0xa120c796c87442f!2sJaliyagoda!5e0!3m2!1sen!2slk!4v1692031719599!5m2!1sen!2slk" 
                width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
                
			<div class="right">
            <form action="conn.php" method="post">
				<input type="text" class="field" placeholder="First Name" name="firstname">
				<input type="text" class="field" placeholder="Last Name" name="lastname">
                <input type="text" class="field" placeholder="NIC number" name="nicnumber">
				<input type="text" class="field" placeholder="Phone Number" name="phone">
                <input type="text" class="field" placeholder="Email Address" name="email">
				<textarea placeholder="Message" class="field" name="mesage"></textarea>
				<button class="btn" type="submit" name="submit">Send</button>
                <div class="link">
            <a href="http://localhost/Brilliance/contact/Dashboard/next1/next1/display_images.php">
                <h3>Package</h3><br>
            <a href="http://localhost/Brilliance/contact/Dashboard/Login%20Page.html">
                <h3>Only For Admin</h3>
            </a>
            </div>
            
                
            
            </div>
           
         
                
            </form> 
            <?php 
    if(isset($_POST['submit'])){
        include_once 'connect.php';
        $obj=new Contact();
        $res=$obj->contact_us($_POST);
        if($res==true) {
            echo "<p>alert('Query successfully submitted.Thank You')</p>";
        }else{
            echo "<p>Data stored successfully</p>";
        }
    }
    
    
    ?>

  
                </div>
        
    </form>
    
		</div>
	</div>

    <div class="logo">
		<section>
		   <img src="LOGO small.png"> 
		</section>  
	</div>

   <div class="copyrights">
	   <p>
		   Copyright &copy; 2022 Brilliance Studio All rights reserved. 
	   </p>

   </div>
	
   <div id="followus">
	   <h3>Follow Us</h3>
   </div>

   <div id="fb">
	   <a href="https://www.facebook.com/studiobrilliance"><i class="fa-brands fa-facebook fa-beat-fade fa-lg" style="color: #ffffff;"></i></a>
   </div>

   <div id="ins">
	   <a href="#"><i class="fa-brands fa-instagram fa-beat-fade fa-lg" style="color: #ffffff;"></i></a>
   </div>

   <div id="tik">
	  <a href="https://www.tiktok.com/@brilliancephotography"><i class="fa-brands fa-tiktok fa-beat-fade fa-lg" style="color: #ffffff;"></i></a>
   </div>
   
</body>
</html>