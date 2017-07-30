 <?php include "header_rest2.php"; ?>
  <?php
    session_start();
    include "database.php";
?>
  <main style="color:white !important;" class="page--main">
    <section class="block---padded-top">
        <article class="article--narrow">
          <div class="article--content">
            <div class="article--content-item">
                
		<?php
		$mysql = "SELECT * from shopkeeper where shop_name='About'";
		$myquery=mysql_query($mysql) or die (mysql_error());
		$num = mysql_num_rows($myquery);
		if($num>0)
		{
			while($row = mysql_fetch_assoc($myquery))
			{
		
			
		?>	
		      <figure><img src="manager/site_img/header_image/<?php echo $row['header_img']; ?>" alt="" /></figure>
		      
		
		<?php		
				//echo "<script>window.location='index.php'</script>";
			}
		}
		else
		{
			//echo "<span style='color:red; font-weight: bold;'>No Image Found</span>";
		}?> 


<h1>Contact</h1>
<p>Towfiq Chowdhury<br/>
Address: 147, Road 2, Shyamoli,
Dhaka-1207, Bangladesh</p>
<p>Mobile: +880 1772971294<br/>
Mail: towfiqchowdhury.hr@gmail.com<br/>
Website; www.towfiqchowdhury.com<br/>
<div >
  <a href="https://twitter.com/towfiqreportage"><i style=" color: #77DDF6;!important;" id="twitter" class="icon-twitter"><span style=" color: white;!important;"> Follow me on Twitter</span></i></a><br/>
  <a href="https://www.linkedin.com/in/towfiq-chowdhury-564381133/"><i style=" color: #0177B5;;!important;" id="linkedin" class="icon-linkedin-sign"> <span style=" color: white;!important;">Find me on LinkedIn</span></i></a><br/>
  <a href="https://www.facebook.com/towfiqchowdhuryphotography/"><i style=" color: #3b5998;!important;" id="facebook" class="icon-facebook-sign"><span style=" color: white;!important;"> Like me on Facebook</span></i></a><br/>
  <a href="https://www.instagram.com/towfiq_chowdhury/"><i style=" color:  #fbad50;!important;" id="instagram" class="icon-instagram"><span style=" color: white;!important;"> Find me on Instagram</span></i></a><br/>
</div>
</p>
<!-- —<br />
vertreten durch:<br />
VISUM Foto GmbH<br />
Lübecker Straße 91<br />
22087 Hamburg<br />
T. 040.284082-0<br />
F. 040-284082-40</p> -->          
 </div>
 </div>

        
        
<div class="container">
        <div class="row">
        
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact">
            <h1 class="jw-animate-gen noOpacity" data-gen="fadeInDown" data-gen-offset="90%">
            <br/>Get in touch</h1>
            <p class="jw-animate-gen noOpacity" data-gen="fadeInLeft" data-gen-offset="75%">
           If you have any inquiry than feel free to contact with me.</p>
            
            </div>
        </div>
        
        <div class="col-md-6 col-sm-6 col-xs-12">
        	<div class="contact">
            <h1 class="jw-animate-gen noOpacity" data-gen="fadeInDown" data-gen-offset="90%"><br/>
           </h1>
	<?php
		$min_number = 1;
		$max_number = 15;
		$random_number1 = mt_rand($min_number, $max_number);  // generated random number 
		$random_number2 = mt_rand($min_number, $max_number); // generated random number 
		
		if (isset($_REQUEST['submit']))
		 {
			
			$captchaResult = $_POST["captchaResult"];
			$firstNumber = $_POST["firstNumber"];
			$secondNumber = $_POST["secondNumber"];
			$checkTotal = $firstNumber + $secondNumber;
			
			$get_name = $_POST['name'];
			$name = mysql_real_escape_string($get_name);
			$get_e_mail = $_POST['e_mail'];
			$e_mail = mysql_real_escape_string($get_e_mail);
			$get_subject = $_POST['subject']." <From: ".$get_e_mail.">";
			$subject = mysql_real_escape_string($get_subject);
			$get_message = $_POST['message'];
			//echo $get_message;
			$message = mysql_real_escape_string($get_message);

			$to = "towfiqchowdhury.hr@gmail.com";
			 
			 $header = "From: $get_e_mail \r\n";
			 $header .= "MIME-Version: 1.0\r\n";
			 $header .= "Content-type: text/html\r\n";
			 
			 $retval = mail ($to,$get_subject,$_POST['message'],$header);
			 
			 if (($captchaResult == $checkTotal) and ( $retval == true )) {
			   
			   
				echo "<h3 align='center'>Mail send successfully</h3>";
				/*echo $subject;
				echo $message;
				echo $header;
				echo $to;*/
				
			   }
			 else {
				echo "<h6 align='center'> Message could not be sent... OR Wrong Captcha. Try Again</h6>";
			 }
		 }
?>
		<div class="expMessage"></div>
		<form id="" method="POST" action="">
		   <div class="form-group">
			<label for="inputName">Name</label>
			<input type="text" class="form-control" name="name" id="" placeholder="Name" required>
		  </div>
		  <div class="form-group">
			<label for="inputEmail1">Email</label>
			<input type="email" class="form-control" name="e_mail" id="" placeholder="Name@domain.com" required>
		  </div>
		   <div class="form-group">
			<label for="inputEmail1">Subject</label>
			<input type="text" class="form-control" name="subject" placeholder="Subject" required>
		  </div>
		  <div class="form-group">
			<label for="inputMessage">Message</label>
			<textarea rows="3" name="message" required></textarea>
		  </div>
		  
		   <div class="form-group">
			<label for="inputEmail1"><?php echo $random_number1 . ' + ' . $random_number2 . ' = ';?></label>
			<input type="text" name ="captchaResult"  class="form-control"  placeholder="" required>
		  </div>
		  <input name ="firstNumber" type ="hidden" value="<?php echo $random_number1; ?>" />
		  <input name ="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />
		  <button type="submit"  style="background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;" name="submit" value="submit">Submit</button>
		  
		</form>
					
    </div>
</div>

</div> <!--ROW-->
</div> <!--CONTAINER-->        
        
        
        
         </article>
        
</section>
</main>

 <?php include "footer.php"; ?>