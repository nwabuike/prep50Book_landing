<?php 
 
// Recipient 
$to = $user_email; 

 
// Sender 
$from= 'nwabuikeanthony@gmail.com';  
$fromName = $user_name; 
 
// Email subject 
$subject = 'Prep50 Book';  

if(!($user_bundle_j)){

}
 
// Attachment file 
    $file = "files/JAMB Govt 2020.pdf";
 
// Email body content 
$htmlContent = ' 
    <h3>Thank you!</h3> 
    <p>Thank You for patronizing us. Note if your phone or device cannot view dis attachment kindly go online to download pdf reader.</p> 
'; 
 
// Header for sender info 
$headers = "From: $user_name"." <".$user_email.">"; 
 
// Boundary  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
// Headers for attachment  
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// Multipart boundary  
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
 
// Preparing attachment 
if(!empty($file) > 0){ 
    if(is_file($file)){ 
        $message .= "--{$mime_boundary}\n"; 
        $fp =    @fopen($file,"rb"); 
        $data =  @fread($fp,filesize($file)); 
 
        @fclose($fp); 
        $data = chunk_split(base64_encode($data)); 
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
        "Content-Description: ".basename($file)."\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
    } 
} 
$message .= "--{$mime_boundary}--"; 
$returnpath = "-f" . $from; 
 
// Send email 
// $mail = @mail($to, $subject, $message, $headers, $returnpath); 
// Email sending status 
// echo $mail?"<h1>Email Sent Successfully!</h1>":"<h1>Email sending failed.</h1>"; 
if (mail($to, $subject, $message, $headers, $returnpath)) {
    $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .', thank you for the message. We will get back to you shortly.'));
    die($output);
    // echo "Thank you";
} else {
    $output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact '.$toEmail .', Or call 09038356928'));
    die($output);
    // echo "Error: occured";
} 
 

 
?>