<html>
 <head>
  <title>PHP Action</title>
 </head>
 <body>
 	<?php echo '<p>Action</p>'; ?> 
 <?php
echo $_POST['contactname'];
?>
 <?php
    $name = $_POST['contactname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Bill Dunnett Portfolio'; 
    $to = 'info@typhina.co.uk'; 
    $subject = $_POST['subject'];
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Subject\n $subject Message:\n $message";
				
    if ($_POST['submit'] && $human == '42') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, please go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '42') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>	

<p>Return to <a href="contact.html" title="link to my contact details">Contact Us</a></p>

 </body>
</html>