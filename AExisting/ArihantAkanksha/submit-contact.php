<?php
   session_start();

    include 'config.php';
    include 'functions.php';

    
	require_once('phpmailer/class.phpmailer.php');
	include("phpmailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded


   if(isset($_POST['name'])){
   		insertEnquiryDetails($_POST);	

	    if(SEND_CONTACT_MAIL==1)fnSendMail($_POST);
	   
 		
	 	 // send mail---------
	 
	  
	  
	 header('location:http://www.asl.net.in/campaign/ArihantAkanksha/Thank-you.php');


   }else{

   		 header('location:http://www.asl.net.in/campaign/ArihantAkanksha/index.php');

   }
	  
	
	


?>