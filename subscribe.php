<?php

if(isset($_POST['email'])) {
	
					
						
			$email = $_POST['email']; 			
		
			
											
			$to = 'yogeshwaranworld@gmail.com,rajesh.td@gmail.com,mailtorenuka92@gmail.com,consult@xvalueinc.com';							
			$subject = 'Xvalue Subscribe Form';
			$rlysubject = 'Xvalue';	
			
			$headers = "";
			$headers .= "From: info@xvalueinc.com\r\n";	
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			$message = "";
			$message .= '<html><body><table width="100%" cellpadding="5" cellspacing="0" border="0" style="font-size:14px;">';																																		
			$message .= '<tr><td>Email</td><td>'.$email.'</td></tr></table></body></html>';
			
			$rlymessage = "";
			$rlymessage .= '<html><body><table width="100%" cellpadding="5" cellspacing="0" border="0" style="font-size:14px;"><tr><td colspan="2" align="center"><a href="http://www.xvalueinc.com/"><img src="http://www.xvalueinc.com/assets/images/logo-light.png" style="width:100px"></a></td></tr>';
			$rlymessage .= '<tr><td>Hi '.$email.' ,</td></tr>';		
			$rlymessage .= '<tr><td>Thank You For subscribing Us ...<br/></td></tr></table></body></html>';
								
			if (mail($to, $subject, $message, $headers))
			 {
				mail($email, $rlysubject, $rlymessage, $headers);
             	header("Location:http://www.xvalueinc.com/"); 				
            } 			
			else {
				echo "There was a problem to send your request";
              
            }
}
else
{
	echo "Error";
}

?>