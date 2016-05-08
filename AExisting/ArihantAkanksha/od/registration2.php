
<?php

require("phpmailer/class.phpmailer.php");
include 'config.php';
include 'getaddress.php';
if(isset($_REQUEST['name'])){
//=====================Section to send mail======================
$to="ashish@odigma.com,  santhosh@odigma.com";
$cc="";
//$_SESSION['name']="aman";
//function callToCustomer($mobile){
//	$post_data = array(
//		'From' => "0".$mobile,
//		'To' => "01166579043",
//		'CallerId' => "01166579043",
//		'Url' => "http://my.exotel.in/exoml/start/6029",
//		'TimeLimit' => "30",
//		'TimeOut' => "60",
//		'CallType' => "trans",
//		'StatusCallback' => "http://www.odigma.com/iiht/mobile_sms.php?mobile=".$mobile
//	);
//	 
//	$exotel_sid = "odigma"; // Your Exotel SID
//	$exotel_token = "2434761a2441039a22130169ad4f4338dd344da5"; // Your exotel token
//	 
//	$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Calls/connect";
//	 
//	$ch = curl_init();
//	curl_setopt($ch, CURLOPT_VERBOSE, 1);
//	curl_setopt($ch, CURLOPT_URL, $url);
//	curl_setopt($ch, CURLOPT_POST, 1);
//	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//	curl_setopt($ch, CURLOPT_FAILONERROR, 0);
//	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
//	 
//	$http_result = curl_exec($ch);
//	$error = curl_error($ch);
//	$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
//	 
//	curl_close($ch);
//	 
//	return "Response = ".print_r($http_result);
//}
$from = $_POST["email"];
$subject_one ="Lead for Arihant";
$ip= getIP();
$subject_from ="Thank you for registering with us. Our team will get in touch with you.";
//$course="Cloud Expert";
$result=mysql_query("INSERT INTO Leads (name, email, phone, city,ipcity, source, medium, landing, campaign, keyword)
VALUES
('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[city]','".$ip."-". geoCheckIP($ip) ."','$_POST[source]','$_POST[medium]','$_POST[landing]','$_POST[campaign]', '$_POST[keyword]')");
		//--------------------start mail fire-------------------------------------------//
		
		// this is the message to the client received from the contestant
		$message_one = "
<table width='612px' border='0' align='center' cellpadding='0' cellspacing='0' style='font-family:Verdana, Arial, Helvetica, sans-serif;font-size: 14px;background-repeat:no-repeat;color: #000000; border: 1px solid #333333; background-color:#f2f2f2; marging-left:10px;line-height:20px; '>

  <tr>
		<td height='5' align='left' style='padding-bottom:10px; color:#000000;'><BR><BR>
	
		<span style='color:#000000;padding-left:40px;'>Hello, please find the lead generated below : </span>
<BR><BR>	
		    	<span style='color:#000000;padding-left:60px;'>Name:".$_REQUEST['name']."</span><BR>
			<span style='color:#000000;padding-left:60px;'>Email:".$_REQUEST['email']."</span><BR>
			<span style='color:#000000;padding-left:60px;'>Mobile:".$_REQUEST['mobile']."</span><BR>
			<span style='color:#000000;padding-left:60px;'>City:".$_REQUEST['city']."</span><BR>
			<span style='color:#000000;padding-left:60px;'>Campaign:".$_REQUEST['campaign']."</span><BR>
			
			<span style='color:#000000;padding-left:60px;'>Like to Buy:".$_REQUEST['flat']."</span><BR>
			<span style='color:#000000;padding-left:60px;'>Choice of Residence:".$_REQUEST['residence']."</span><BR>
			<span style='color:#000000;padding-left:60px;'>IP :".$ip."-". geoCheckIP($ip) ."</span><BR>
			<BR>
			</td>
			</tr>
</table>
"; // end of message to the client 


// message from the clients server to the contestant

$message_from = "";//end of message to the contestant
if($_REQUEST['page']=='1'){
	$message_from = file_get_contents('http://www.odigma.com/arihant/Landing1/');
}
else if($_REQUEST['page']=='2'){
	$message_from = file_get_contents('http://www.odigma.com/arihant/Landing2/');
}
else if($_REQUEST['page']=='3'){
	$message_from = file_get_contents('http://www.odigma.com/arihant/Landing3/');
}
else if($_REQUEST['page']=='4'){
	$message_from = file_get_contents('http://www.odigma.com/arihant/Landing4/');
} 
else if($_REQUEST['page']=='5'){
	$message_from = file_get_contents('http://www.odigma.com/arihant/Landing5/');
} 



$mail = new PHPMailer();                         
$mail->Host = "localhost";              
$mail->From = "onlinecampaign@asl.net.in";
$mail->FromName  =  "Arihant Leads";

$mail->AddAddress('onlinecampaign@asl.net.in','Arihant');   

$mail->AddCC('ashish@odigma.com','');
$mail->AddCC('mathew@odigma.com','');
$mail->AddCC('melvin.fernando@infibeam.com','');
$mail->AddCC('syed@odigma.com','');
$mail->AddCC('alok@odigma.com','');
$mail->AddCC('santhosh@odigma.com','');
$mail->SMTPAuth = "true";
$mail->Username = "ashish@odigma.com";
$mail->Password =  "ashishodigma";
$mail->Port  =  "25";
$mail->Subject = $subject_one;
$mail->IsHTML(true);
$mail->Body = $message_one;

$mail->WordWrap = 75;

if(!$mail->Send())
{
echo "Sorry! E-mail id is wrong";   
echo '<META HTTP-EQUIV="Refresh" Content="2; URL=instructions.php'; 

   echo 'Mailer error: ' . $mail->ErrorInfo;
}
else
{
    $mail2 = new PHPMailer();                         
    $mail2->Host = "localhost";              
    $mail2->From = "onlinecampaign@asl.net.in";
    $mail2->FromName  =  "Arihant";
    $mail2->AddAddress($from,'');
    $mail2->SMTPAuth = "true";
    $mail2->Username = "ashish@odigma.com";
    $mail2->Password =  "ashishodigma";
    $mail2->Port  =  "25";
    $mail2->Subject = $subject_from ;
    $mail2->IsHTML(true);
    $mail2->Body = $message_from;
    $mail2->WordWrap = 75;
    if(!$mail2->Send())
    {
    echo "Sorry! E-mail id is wrong";   
    echo '<META HTTP-EQUIV="Refresh" Content="2; URL=instructions.php'; 
       echo 'Mailer error: ' . $mail2->ErrorInfo;
    }
    else
    {
        echo '<script>window.location="http://asl.net.in/campaign/landing1/thankyou2.php";</script>';
    }
}
 		


}
?>
