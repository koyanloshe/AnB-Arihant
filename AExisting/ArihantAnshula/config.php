<?php


DEFINE ('DB_USER', 'arihant');
DEFINE ('DB_PASSWORD','superman');
DEFINE ('DB_HOST', '208.91.198.197:3306');
DEFINE ('DB_NAME', 'arihant');



// Make the connnection and then select the database.
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );

// contact form mail detailas---------

DEFINE ('SEND_CONTACT_MAIL','1'); //SET 1 to  SEND CONTACT mail  

//DEFINE ('CONTACT_TO',"hema@asl.net.in,onlinecampaign@asl.net.in,lalit@odigma.com");

DEFINE ('CONTACT_TO','adeline.lobo@infibeam.net');
  
 //MULTIPLE EMAIL COMMA SEPERATED  
DEFINE ('CONTACT_CC','');         //MULTIPLE EMAIL COMMA SEPERATED
//DEFINE ('CONTACT_BCC','kailas.kharad@infibeam.net');       //MULTIPLE EMAIL COMMA SEPERATED 
DEFINE ('CONTACT_SUBJECT','Lead details for Arihant Anshula');   


DEFINE ('SEND_OTP','0'); //SET 1 to  SEND otp 

?>