<?php
   session_start();

    include 'config.php';
    include 'functions.php';

    

   if(isset($_POST['name'])){
   		
   		insertEnquiryDetails($_POST);	

	    if(SEND_CONTACT_MAIL==1)fnSendMail($_POST);
	   
 		
	 	 // send mail---------
	 
	  
	  
	 header('location:http://campaign.asl.net.in/ArihantAnshula/Thank-you.php');


   }else{

   		 header('location:http://campaign.asl.net.in/ArihantAnshula/index.php');

   }
	  
	
	


?>