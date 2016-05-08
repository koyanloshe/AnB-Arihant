<?php

function insertEnquiryDetails($post){


	$name           =isset($post['name'])?addslashes($post['name']):'';
	$phone          =isset($post['mobile'])?addslashes($post['mobile']):'';
	$Email          =isset($post['email'])?addslashes($post['email']):'';
	
	$comment        =isset($post['comment'])?addslashes($post['comment']):'';	
	
	$tempip=getIP();//get_client_ip();
	$ip=$tempip."-".geoCheckIP($tempip);

	$Source	  =isset($post['utm_source'])?addslashes($post['utm_source']):'';
	$Medium   =isset($post['utm_medium'])?addslashes($post['utm_medium']):'';
	$Term     =isset($post['utm_term'])?addslashes($post['utm_term']):'';
	$Campaign =isset($post['utm_campaign'])?addslashes($post['utm_campaign']):'';
	$Content  =isset($post['utm_content'])?addslashes($post['utm_content']):'';
	$Gclid    =isset($post['utm_gclid'])?addslashes($post['utm_gclid']):'';


	$sql="INSERT INTO Leads (name, email, phone,ipcity, source, medium, landing, campaign, keyword,comment,gclid,Term,Content)
VALUES
('$name','$Email','$phone','$ip','$Source','$Medium','ArihantAnshula','$Campaign','','$comment','$Gclid','$Term','$Content')";

 $result=mysql_query($sql);

}

function fnSendMail($post){

	$tempip=getIP();//get_client_ip();
	$ip=$tempip."-".geoCheckIP($tempip);

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
		Please find below lead details for Arihant Anshula</p>
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

	  
	  $message .='<tr>
	      	<td>ip-city</td><td>:</td><td>'.$ip.'</td>
	    </tr>';
	

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





function geoCheckIP($ip)
 
{
 
//check, if the provided ip is valid
 
if(!filter_var($ip, FILTER_VALIDATE_IP))
 
{
 
throw new InvalidArgumentException("IP is not valid");
 
}
 
//contact ip-server
 
$response=@file_get_contents('http://www.netip.de/search?query='.$ip);
 
if (empty($response))
 
{
 
throw new InvalidArgumentException("Error contacting Geo-IP-Server");
 
}
 
//Array containing all regex-patterns necessary to extract ip-geoinfo from page
 
$patterns=array();
 
$patterns["domain"] = '#Domain: (.*?)&nbsp;#i';
 
$patterns["country"] = '#Country: (.*?)&nbsp;#i';
 
$patterns["state"] = '#State/Region: (.*?)<br#i';
 
$patterns["town"] = '#City: (.*?)<br#i';
 
//Array where results will be stored
 
$ipInfo=array();
 

 
//check response from ipserver for above patterns
 
foreach ($patterns as $key => $pattern)
 
{
 
//store the result in array
 
$ipInfo[$key] = preg_match($pattern,$response,$value) && !empty($value[1]) ? $value[1] : 'not found';
 
}
/*I've included the substr function for Country to exclude the abbreviation (UK, US, etc..)
To use the country abbreviation, simply modify the substr statement to:
substr($ipInfo["country"], 0, 3)
*/
$ipdata = $ipInfo["town"];
 
return $ipdata;
 
}


function getIP(){

			if ( isset($_SERVER["REMOTE_ADDR"]) )    { 
				return $_SERVER["REMOTE_ADDR"] ; 
			} else if ( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) )    { 
				return $_SERVER["HTTP_X_FORWARDED_FOR"]; 
			} else if ( isset($_SERVER["HTTP_CLIENT_IP"]) )    { 
				return $_SERVER["HTTP_CLIENT_IP"]; 
			} 
}
	



?>
