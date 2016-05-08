<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>arihant</title>
<script src="js/mainjs.js"></script>
<style>
body{
margin:0px;
background-color:#FFFFFF;
}
#main{margin:auto; background-color:#CCCCCC;}
#main2{ background-color:#FFFFFF; width:944px; margin:auto; height:1537px;}
#header{height:9px; background-color: grey;  }
#logo{ float:left;padding-top: 1px; padding-left: 13px;}
#logo2{ float:right; padding-right: 21px;padding-top: 7px;}
#line{ width:946px;height:1px; clear:both; background:#000000;}

#footer{height:29px;clear:both;}

 #part ul{ list-style-type:none;
 }
#checkbox p{color:#FFFFFF;margin-left: 35px;font-size: 12px;  font-family: 'bebasneue_0-webfont';}
ul{ list-style-type:none;
}
ul li input{height:15px;width: 223px;padding: 16px;margin-bottom: 4px;; font-family: 'bebasneue_0-webfont';;font-size: 15px;
}

@font-face {
    font-family: 'bebasneue_0-webfont';
    src: url('fonts/bebasneue_0-webfont.eot');
    src: url('fonnts/bebasneue_0-webfont.eot') format('embedded-opentype'),
         url('fonts/bebasneue_0-webfont.woff') format('woff'),
         url('fonts/bebasneue_0-webfont.ttf') format('truetype'),
         url('fonts/bebasneue_0-webfont.svg#AvenirLT45BookRegular') format('svg');
}
@font-face {
    font-family: 'champagne__limousines-webfont';
    src: url('fonts/champagne__limousines-webfont.eot');
    src: url('fonts/champagne__limousines-webfont.eot') format('embedded-opentype'),
         url('fonts/champagne__limousines-webfont.woff') format('woff'),
         url('fonts/champagne__limousines-webfont.ttf') format('truetype'),
         url('fonts/champagne__limousines-webfont.svg#Caviar Dreams Bold') format('svg');
}
</style>
<script>
 function fnvalidateName(inputtxt){

          var fname =  /^[a-zA-Z ]*$/;  
          if(inputtxt.match(fname))  
                {  
                    return true;  
                }  
              else  
                {  
                    
                    return false;  
                }  
        

      }


  
  function validate()
{
	
	var name=document.getElementById("name").value;
	var comment=document.getElementById("comment").value;
	var mobile=document.getElementById("mobile").value;
	var email=document.getElementById("email").value; 
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	if(name==null || name=="" || name=="Name is Required" || name=="Name")
	{
		
		document.getElementById("name").value="Name";
		document.getElementById("name").style.color="red";
		return false;
	}
	
	
	else if(email==null || email=="" || email=="E-mail is Required" || email=="E-mail ID is not Corect" || email=="Email")
	{
		document.getElementById("email").value="Email";
		document.getElementById("email").style.color="red";
		return false;
	}
	
	else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
   	{
  		document.getElementById("email").value="Email";
		document.getElementById("email").style.color="red";
  		return false;
   	}
	else if(mobile==null || mobile=="" || mobile=="Contact Number is Required" || mobile=="Contact Number is Wrong" || mobile=="Mobile")
	{
		document.getElementById("mobile").value="Mobile";
		document.getElementById("mobile").style.color="red";
		return false;
	}
	else if(isNaN(mobile) || mobile.length!=10)
	{
		document.getElementById("mobile").value="Mobile";
		document.getElementById("mobile").style.color="red";
		return false;
	}
	else if(comment==null || comment=="" || comment=="Comment is Required" || comment=="Comment" || comment=="comment")
	{
		
		document.getElementById("comment").value="Comment";
		document.getElementById("comment").style.color="red";
		return false;
	}
	else
	{
		return true;
	}
}


function changecolor(id)
{
	document.getElementById(id).style.color="black";
}

</script>
</head>

<body>

<div id="main">
			<div id="header">
			</div>

<div id="main2">


  
			<div id="logo">
		<a href="#"><img src="images/logo1.png"></a>
						</div>
				
			<div id="logo2">
		<a href="#"><img src="images/award.png"></a>
						</div>
						
			<div id="line"></div>
			
			
		
<div id="box" style="float: left;
width: 600px;
height: 375px;
border: 1px solid rgb(159, 143, 143);
margin-left: 9px;
margin-top: 9px;
background-color: #FEFEFE;height: 385px;">
			
						<div id="image" style="width: 599px;border-bottom:1px #999999 solid;">
						<img src="images/logo (3).png" style="    padding-left: 36px;
    padding-bottom: 8px;
}">
						</div>
			
			        <div id="inner" style="width:601px;">
			
						<div id="image2">
						<img src="images/elevation.png"  onclick="window.open('images/elevation1.jpg')" style="float: left;
padding-left: 7px;
padding-top: 8px;
padding-bottom: 10px;" />
						</div>
			
						<div id="text" style="float:right; ">
						<img src="images/text.png"  style="padding-top: 47px;
padding-right: 16px;"/>
						</div>
			</div>
							
			<div id="text2" style="font-size: 11px;text-align: center;">
			
					<h1 style="border-bottom: 1px;border-bottom-color: black;border-bottom-style: solid;text-align: center;clear: both;border-top: 1px;border-top-style: solid;border-top-color: black;font-size: 14px; font-family: font-family:Arial, Helvetica, sans-serif;padding-bottom: 2px;
padding-top: 5px;"> AT THE OUTSKIRTS OF INTERNATIONAL AIRPORT & WITHIN RESIDENTIAL HUB </h1>
					
					</div>
					
					<div>
					
					<div style=" list-style-image:url(images/point.png); float:left;font-size: 13px;line-height: 30px;text-align: left; padding-top:0px; width:49%;margin-top: -20px; width:50%;  font-family: font-family:Arial, Helvetica, sans-serif;color: grey;"> 
					<ul>
				    <li>Just minutes away from Palaspe Phata (Junction of NH4, NH17, NH4B)</li>
   <li> 4 kms from Panvel Railway station </li>
   <li> 6 kms from proposed International airport  </li>
   <li> On Mumbai – Goa Highway Touch (NH – 17)  </li>
  
	</ul>
			</div>
			
			
			<div style=" list-style-image:url(images/point.png); float:right;font-size: 13px;line-height: 30px;text-align: left; padding-top:0px; width:49%;margin-top: -20px; width:50%;  font-family: font-family:Arial, Helvetica, sans-serif;color: grey;">
					<ul>
					 <li> Solar power for common area lighting </li>
    <li>Thoughtfully planned 2/3/4 BHK Apartments </li>
    <li>30000 sq.ft. Club House  </li>
    <li>Close proximity to educational Institutes, Hospitals, Market & Recreation Area </li>
			</div>
			</div>
			
			
						
			</div>
			 <div id="part" style="float:right; width:34%;margin-top: 5px;">
				<form action="http://www.odigma.com/arihant/landing10/submit-contact.php" method="post" onSubmit="return validate();"  >

					<input type="hidden" name="pageUrl" id="pageUrl" value="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
														
					<?php

						$Source	  =isset($_GET['utm_source'])?addslashes($_GET['utm_source']):'';
						$Medium   =isset($_GET['utm_medium'])?addslashes($_GET['utm_medium']):'';
						$Term     =isset($_GET['utm_term'])?addslashes($_GET['utm_term']):'';
						$Campaign =isset($_GET['utm_campaign'])?addslashes($_GET['utm_campaign']):'';
						$Content  =isset($_GET['utm_content'])?addslashes($_GET['utm_content']):'';
						$Gclid    =isset($_GET['gclid'])?addslashes($_GET['gclid']):'';

					?>

					<input type="hidden" name="utm_source"   id="utm_source" value="<?php echo $Source; ?>">
					<input type="hidden" name="utm_medium"   id="utm_medium" value="<?php echo $Medium; ?>">
					<input type="hidden" name="utm_term"     id="utm_term" value="<?php echo $Term; ?>">
					<input type="hidden" name="utm_campaign" id="utm_campaign" value="<?php echo $Campaign; ?>">
					<input type="hidden" name="utm_content"  id="utm_content" value="<?php echo $Content; ?>">
					<input type="hidden" name="utm_gclid"    id="utm_gclid"  value="<?php echo $Gclid; ?>">		




					
				<ul style="background-repeat:no-repeat; background-image:url(images/form.png); float:right;padding-top: 84px;padding-right: 29px;padding-left: 32px;padding-bottom: 46px; margin-top: 2px;height: 261px;">
				
				<li><input type="text" name="name" id="name" value="Name"  onfocus="if (this.value=='Name') { this.value=''; }" onblur="if (this.value == '') 
				{ this.value = 'Name'; }"   onkeypress="changecolor(this.id)"/></li>
				<li><input type="text" name="email" id="email" value="Email"  onfocus="if (this.value=='Email') { this.value=''; }" onblur="if (this.value == '') { this.value = 'Email'; }"  onkeypress="changecolor(this.id)" /></li>
				<li><input type="text" name="mobile" id="mobile" value="Mobile"  onfocus="if (this.value=='Mobile') { this.value=''; }" onblur="if (this.value == '') { this.value = 'Mobile'; }" onkeypress="changecolor(this.id)" /></li>
				<li><input type="text" name="comment" id="comment" value="Comment"  onfocus="if (this.value=='comment') { this.value=''; }" onblur="if (this.value == '') { this.value = 'comment'; }" onkeypress="changecolor(this.id)" style="height: 47px;" /></li>
										
			<li><div><input type="submit" value="" style="border: none;background-image:url(images/button.png); width: 153px;height: 35px; margin-left: 53px;cursor:pointer; "   /></div></li>
				</ul>

				</form>
			</div>
			

			
			 
		
					
					<div style="border: 1px solid #808080;
height: 536px;
width: 923px;
margin-left: 9px;
clear: both;">
	<div id="text2" style="font-size: 11px;text-align: center;border-bottom: 1px solid grey;">
			
					<h1 style="text-align: center;clear: both; font-family: font-family:Arial, Helvetica, sans-serif;"> AMENITIES </h1>
					
					</div>
					
					<div style="list-style-image:url(images/bullet.png); font-size: 16px;line-height: 23px;text-align: left;width: 50%;height: 130px;float: left; width:50%;  font-family: font-family:Arial, Helvetica, sans-serif; color: #707070;"> 
				  <ul style="padding:0px;padding-left:17px;list-style-image:url(images/point.png);padding-left: 34px;">
				  <h3 style="text-align: center;"><b>Internal Amenities</b></h3>
					    <li>Granite Top Kitchen Platform with full height tiles upto beam level</li>
    <li>Bath Tub with glass Partition
	<ul>
        <li> UPVC sound resistance french Windows</li>
        <li> Video Door Security System with camera </li>
         <li>Vitrified Flooring in all rooms</li>
         <li>Luster or Velvet Touch Paint with POP in all rooms</li>
         <li>Premium Quality C.P. Fittings and Branded Sanitary ware</li>
         <li>Toilets – Fully tiled upto beam level</ul> </li>
    <li>Concealed wiring with ample Electrical Points & Modular Switches</li>
    <li>Dedicated Space for Wash Basin & Washing Machine</li>
    <li>Moulded Panel main door & bedroom doors</li>
    <li>FRP doors for bathroom</li>
					</ul>
			</div>
			
			
			<div style="list-style-image:url(images/bullet.png); float:right;font-size: 16px;line-height: 21px;text-align: left; padding-top:0px; width:50%;width:50%;  font-family: font-family:Arial, Helvetica, sans-serif;">
					<ul style="padding:0px;padding-left:17px;border-left: 1px solid grey;list-style-image:url(images/point.png);padding-left: 34px; color: #707070;">
					<h3 style="text-align: center;"><b>External Amenities</b></h3>
					<li>Mesmerizing Elevation</li>
<li>Stilt + Podium + 32 Storied Towers</li>
<li>Lord Ganesh Temple</li>
<li>2 Acres of Open Lawn area on ground floor </li>
<li>Elegant Entrance Lobby</li>
<li>4 High Speed Lifts in each building</li>
<li>Library with varied collection on encyclopedia</li>
<li>Indoor Games Room for Carom Chess & Billiards</li>
<li>Ultra Modern Gymnasium</li>
<li>Spa (Male & Female separate)</li>
<li>Swimming Pool with Kids Pool & Open Air Jacuzzi</li>
<li>Party Hall</li>
<li>Amphitheatre </li>
<li>Business Lounge</li>
<li>Kids Creche Centre & Play Area</li>
<li>Aerobics & Yoga Room</li>
<li>Jogging Track</li>
<li>Basket Ball Court & Skating Rink</li>
<li>Power Back-up for lifts and common areas</li>
<li>Ample Car Parking</li>
</ul>
			</div>
			</div>
						<div id="text2" style="text-align: center;
color: #666;
border: 1px solid #808080;
clear: both;
padding-top: 6px;
padding-bottom: 6px;
font-size: 19px;
width: 922px;
margin-left: 9px; font-family: font-family:Arial, Helvetica, sans-serif;">A PREMIUM PRODUCT FROM THE HOUSE OF <b>ARIHANT</b> A TRUSTED AND RELIABLE NAME</div>
			<div id="box3" style:" background-color:white; ">
			 <div><img src="images/amodini.jpg" style="float:left;padding-top: 17px;padding-bottom: 14px;padding-left: 10px;padding-right: 9px;" ></div>
			 <div><img src="images/amisha.jpg" style="float:left; padding-top: 0px;padding-right: 10px;padding-top: 17px;" ></div>
			 <div><img src="images/anmol.jpg" style="float:left;padding-top: 17px;"  ></div>
			 </div>
			<div><p style="text-align:center;clear: both; font-family: font-family:Arial, Helvetica, sans-serif; font-size: 17px;
line-height: 28px;padding-left: 17px;
padding-right: 13px;color: #707070;">Arihant Superstructures Ltd. is a real estate developer builder and has under construction building projects having residential property, flat, apartment, bungalow, house on plot and land with all ranging budget from low to high where one can buy in location of Mumbai, Navi Mumbai, Badlapur, Thane, Panvel, Kharghar, Vashi, Khopoli, Karjat, Taloja near airport and also in the city of Umed Bhawan Palace in Jodhpur Rajasthan 300 Kms. from Jaipur on Pal road in under construction and ready possession complex with Studio, 1 BHK, 2 BHK, 3 BHK & 4 BHK flats and shops having good quality home & reputation for sale & investment.
</p></div>


		 <div id="footer">
	 <h1 style="text-align:center;font-size: 18px;padding-top: 4px; background-color:#252525; color:#FFFFFF;padding-bottom: 7px;"> @Copyright 2015,Arihant Superstructures Ltd</h1>
         </div>
		
</div>
	 	
</div>		
</body>
</html>
