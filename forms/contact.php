form action="forms/myform.php" method="post" class="php-email-form">

Below is a full documentation of each line of the forms/contact.php and how you can customize them for your needs. First, below is the full content of the contact.php. Scroll down for detailed explanation.

<?php
/**
* Requires the "PHP Email Form" library
* The "PHP Email Form" library is available only in the pro version of the template
* The library should be uploaded to: vendor/php-email-form/php-email-form.php
* For more info and help: https://bootstrapmade.com/php-email-form/
*/

// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'avneetchaudhary8273@gmail.com.com';

if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
include( $php_email_form );
} else {
die( 'Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
/*
$contact->smtp = array(
'host' => 'example.com',
'username' => 'example',
'password' => 'pass',
'port' => '587'
);
*/

$contact->add_message( $_POST['name'], 'From');
$contact->add_message( $_POST['email'], 'Email');
$contact->add_message( $_POST['message'], 'Message', 10);

echo $contact->send();
?>
