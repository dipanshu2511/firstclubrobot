<?php
function cleanmyname($nametoclean)
{
$ntcstepone = strip_tags(html_entity_decode($nametoclean));
$ntcsteptwo = substr($ntcstepone,0,20);
return ucwords($ntcsteptwo);
}

function cleanmystring($stringtoclean)
{
return preg_replace('/[^a-zA-Z0-9]/', '', strip_tags(html_entity_decode($stringtoclean)));
}

$uname = cleanmyname($_POST['name']);
$uemail = strip_tags($_POST['email']);
$uphone = cleanmystring($_POST['phone']);
$umessage = strip_tags($_POST['message']);


if($uname == '' || $uemail == '' || $uphone == '' || $umessage == '')
  {
  header("Location: https://clubfirst.in/?sent=failed");
  exit;
}


$to = 'info@clubfirst.in';
$from = 'noreply@clubfirst.in'; 
$fromname = 'Clubfirst.in';
 
$subject = "New enquiry from $uname"; 
 
$htmlContent = ' 
    <html> 
    <head> 
        <title>New enquiry from '.$uname.'</title> 
    </head> 
    <body> 
        <h1>New enquiry from '.$uname.'</h1> 
        <div style="border-bottom: 1px dashed #CCCCCC;width: 100%;padding:10px"> 
        Name: '.$uname.'</div> 
            </tr> 
            <div style="border-bottom: 1px dashed #CCCCCC; width: 100%;padding:10px">Email: '.$uemail.'</div> 
            <div style="width: 100%;padding:10px">Phone: '.$uphone.'</div> 
            <div style="border-top: 1px dashed #CCCCCC; width: 100%;padding:10px">Message: '.$umessage.'</div> 
    </body> 
    </html>'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers .= 'Cc: info@clubfirst.in' . "\r\n"; 
$headers .= 'Bcc: info@clubfirst.in' . "\r\n"; 
 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
    header("Location: https://clubfirst.in/?sent=true");
  	exit;
}else{ 
   header("Location: https://clubfirst.in/?sent=failed");
   exit;
}

?>