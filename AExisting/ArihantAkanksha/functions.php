<?php

function insertEnquiryDetails($post){


	$name           =isset($post['name'])?addslashes($post['name']):'';
	$phone          =isset($post['mobile'])?addslashes($post['mobile']):'';
	$Email          =isset($post['email'])?addslashes($post['email']):'';
	
	$comment        =isset($post['comment'])?addslashes($post['comment']):'';	
	
	$ip=get_client_ip();

	$Source	  =isset($post['utm_source'])?addslashes($post['utm_source']):'';
	$Medium   =isset($post['utm_medium'])?addslashes($post['utm_medium']):'';
	$Term     =isset($post['utm_term'])?addslashes($post['utm_term']):'';
	$Campaign =isset($post['utm_campaign'])?addslashes($post['utm_campaign']):'';
	$Content  =isset($post['utm_content'])?addslashes($post['utm_content']):'';
	$Gclid    =isset($post['utm_gclid'])?addslashes($post['utm_gclid']):'';


	$sql="INSERT INTO Leads (name, email, phone,ipcity, source, medium, landing, campaign, keyword,comment,gclid,Term,Content)
VALUES
('$name','$Email','$phone','$ip','$Source','$Medium','landing10','$Campaign','','$comment','$Gclid','$Term','$Content')";

 $result=mysql_query($sql);

}

function fnSendMail($post){

   	$headers = "From:Arihant Leads <onlinecampaign@asl.net.in>"."\r\n";
	$headers .='Content-type: text/html; charset=iso-8859-1; format=flowed\n';
	$headers .="MIME-Version: 1.0\n";
	$headers .="Content-Transfer-Encoding: 8bit\n";
	$headers .="X-Mailer: PHP\n";	
	$headers .= 'Cc: '.CONTACT_CC.'' . " \r\n";
	$headers .= 'Bcc: ' .CONTACT_BCC.''." \r\n";

	// Mail it
    $message='<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	  <title>'.CONTACT_SUBJECT.'</title>
	</head>
	<body>
		<p>Hi,<br/>
		Please find below lead details for Arihant</p>
		<table>';
	 if(isset($post['name'])){
	  	 $message .='<tr>
	      	<td>Name</td><td>:</td><td>'.$post['name'].'</td>
	    </tr>';
	  }  	
	   if(isset($post['mobile'])){
	  	 $message .='<tr>
	      	<td>Phone No.</td><td>:</td><td>'.$post['mobile'].'</td>
	    </tr>';
	  }  

	  if(isset($post['email'])){
	  	 $message .='<tr>
	      	<td>Email</td><td>:</td><td>'.$post['email'].'</td>
	    </tr>';
	  }  

	   if(isset($post['comment'])){
	  	 $message .='<tr>
	      	<td>Comment</td><td>:</td><td>'.$post['comment'].'</td>
	    </tr>';
	  }  

	   $message .='<tr>
	      	<td>Date Time</td><td>:</td><td>'.date('d/m/20y h:i:s').'</td>
	    </tr>';

	  if(isset($post['pageUrl'])){
		 $message .='<tr>
		      	<td>Url</td><td>:</td><td>'.$post['pageUrl'].'</td>
		  </tr>';
	 }          
	    
	$message .='</table></body>
	</html>
	';
	//echo CONTACT_TO.$message;exit;
	mail(CONTACT_TO,CONTACT_SUBJECT,$message, $headers);



}

// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';	
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


?>
