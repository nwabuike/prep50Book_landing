<?php
$toEmail = $user_email;
$mailHeaders = "From: " . $user_name . "<" . $user_email . ">\r\n";
$mailBody = "User Name: " . $user_name . "\n";
$mailBody .= "User Email: " . $user_email . "\n";
$mailBody .= "Phone: " . $user_phone . "\n";
$mailBody .= "Address: " . $user_state . "\n";
$mailBody .= "Bundle-Waec: " . $user_bundle_w . "\n";
$mailBody .= "Bundle-Jamb: " . $user_bundle_j . "\n";
// $file = "files/codexworld.pdf";

if (mail($toEmail, "Book Order", $mailBody, $mailHeaders)) {
    // $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .', thank you for the message. We will get back to you shortly.'));
    // die($output);
    echo "Thank you";
} else {
    // $output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact '.$toEmail .', Or call 09038356928'));
    // die($output);
    echo "Error: occured";
}
?>