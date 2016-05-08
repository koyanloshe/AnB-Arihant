<?php include_once 'functions.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Marq | Assetz Properties</title>

        <?php include_once 'head.php'; ?>
		
		
		<!--<script type='text/javascript' src="js/jquery-1.3.2.min.js"></script>-->
<!--		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/common.js"></script>
                <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6015555112059&amp;cd[value]=0.00&amp;cd[currency]=INR&amp;noscript=1" /></noscript>-->
        
        <!-- For Banner -->
        <link rel="stylesheet" href="sliders/revolution-slider/css/revslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="sliders/revolution-slider/css/responsive.css" type="text/css" media="screen" />
        <script type="text/javascript" src="sliders/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="sliders/revolution-slider/js/jquery.themepunch.plugins.min.js"></script><!--  swipe gestures  -->
        <script type="text/javascript">
            $(document).ready(function() {
                if ($.fn.cssOriginal != undefined)
                    $.fn.css = $.fn.cssOriginal;
                
                $('.fullwidthbanner').revolution({
                    delay: 8000,
                    startwidth: 1000,
                    startheight: $('html').height() - 130,
                    onHoverStop: "off",
                    thumbWidth: 00,
                    thumbHeight: 0,
                    thumbAmount: 0,
                    hideThumbs: 0,
                    navigationType: "none",
                    navigationArrows: "verticalcentered",
                    navigationStyle: "round",
                    touchenabled: "on",
                    navOffsetHorizontal: 10,
                    navOffsetVertical: 20,
                    stopAtSlide: -1,
                    stopAfterLoops: -1,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    hideSliderAtLimit: 0,
                    fullWidth: "on",
                    shadow: 0
                });
            });
        </script>
        <!-- For Banner end -->
        
        <!-- jScroll -->
        <script type="text/javascript" src="jscroll/jquery.jscroll.js"></script>
        <script type="text/javascript">
            $(document).ready( function () {
                $('#scroll').jscroll({
                    loadingHtml: '',
                    nextSelector: '.next-page-trigger>a'
                });
            });
        </script>
        <!-- jScroll end -->
        
        <!-- Scroll down prompt -->
        <script type="text/javascript">
            idleTimer = null;
            idleState = false;
            idleWait = 0;

            $(document).ready(function () {

                $('*').bind('mousemove keydown scroll', function () {

                    clearTimeout(idleTimer);

                    idleState = false;

                    idleTimer = setTimeout(function () {

                        // Idle Event
                                        if($(document).scrollTop() == 0 && $('#logo-black').css("display") != "none"){
                                                $('#scroll_down_prompt').fadeIn();
                                        }

                        idleState = true; }, idleWait);
                });
                
                $("body").trigger("mousemove");
                $('#scroll_down_prompt').click( function () {
                    $('html, body').animate({
                        scrollTop: $("#marq_content").offset().top-130
                    }, 1000, function () {
                        $('#scroll_down_prompt').fadeOut();
                        $('#logo>.big').hide();
                        $('#logo>.small').show();
                        $('#menu').addClass('small-menu');
                    });
                });
            });
        </script>
        <!-- Scroll down prompt end -->
		
		<!-- Plumb5 - Analytics -->

			<script type='text/javascript' > 
			(function () { 
			var p5 = document.createElement('script'); p5.type = 'text/javascript'; 
			p5.src = ('https:' == document.location.protocol ? 'https://' : 'http://')+ 's.plumb5.com/Script1/assetzproperty_com_1214.js'; 
			var p5s = document.getElementsByTagName('script')[0]; p5s.parentNode.insertBefore(p5, p5s); 
			})(); 
			</script> 

			<!-- Plumb5 - Capture Form -->

			<script type="text/javascript">
			(function () { 
			var p5cap = document.createElement("script"); p5cap.type = "text/javascript"; p5cap.src = ("https:" == document.location.protocol ? "https://" : "http://") + "s.plumb5.com/Script/Domain03122014104635-1214.js"; 
			var p5scap = document.getElementsByTagName("script")[0]; p5scap.parentNode.insertBefore(p5cap, p5scap); 
			})();
			</script>

			<script type='text/javascript' > 
				(function () { 
				var p5cap = document.createElement('script'); p5cap.type = 'text/javascript'; 
				p5cap.src = ('https:' == document.location.protocol ? 'https://www.' : 'http://www.') + 'plumb5.com/ChatScript/Chat03122014104743-1214.js'; 
				var p5scap = document.getElementsByTagName('script')[0]; p5scap.parentNode.insertBefore(p5cap, p5scap); 
				})(); 
				</script>

			<!-- Plumb5 - END -->
    </head>

    <body>
<?php //    <body id="scroll"> ?>
	
	<?php
//        <div class="ppc-box">
//			<div class="ppc-contact">
//				<form id="ajaxcontactform" name="ajaxcontactform" method="post" enctype="multipart/form-data" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8">
//					<input type="hidden" id="00Nd0000004yoqO" name="00Nd0000004yoqO" title="Mode of Enquiry" value="Web">
//					<input type="hidden" id="00Nd0000004ysOc" name="00Nd0000004ysOc" title="Sub Source" value="Website">
//					<input type="hidden" name="00Nd0000004zGaQ" id="00Nd0000004zGaQ" value="">
//					<input type="hidden" name="ga_val" id="ga_val" value="">
//					
//					<input type="hidden" name="lead_source" id="lead_source">
//					
//					<input type="hidden" id="00Nd0000004ysOc" name="00Nd0000004ysOc" title="Sub Source" value="">
//					<input type="hidden" name="oid" value="00Dd0000000dSVV">
//					<input type="hidden" name="retURL" value="http://assetzproperty.com/marq/">
//					
//					<h1>Make an Enquiry</h1>
//					<div class="inner">
//						<table cellpadding="0" cellspacing="0" border="0">
//							<tbody><tr>
//								<td width="80px">Name <span class="star">*</span></td>
//								<td><input name="last_name" id="last_name" type="text" class="tbox-ppc required"></td>
//								<input class="tbox1 dis_none" id="address" name="address" type="text" maxlength="50">
//								<input class="tbox1 dis_none" id="city" name="city" type="text" maxlength="20">
//								<input class="tbox1 dis_none" id="state" name="state" type="text" maxlength="20">
//								<select name="country" id="country" class="dd1 dis_none">
//									<option value=""></option>
//									<option value="Afganistan">Afghanistan</option><option value="Albania">Albania</option>
//									<option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option>
//									<option value="Andorra">Andorra</option><option value="Angola">Angola</option>
//									<option value="Anguilla">Anguilla</option><option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
//									<option value="Argentina">Argentina</option><option value="Armenia">Armenia</option>
//									<option value="Aruba">Aruba</option><option value="Australia">Australia</option>
//									<option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option>
//									<option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option>
//									<option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option>
//									<option value="Belarus">Belarus</option><option value="Belgium">Belgium</option>
//									<option value="Belize">Belize</option><option value="Benin">Benin</option>
//									<option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option>
//									<option value="Bolivia">Bolivia</option><option value="Bonaire">Bonaire</option>
//									<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
//									<option value="Botswana">Botswana</option><option value="Brazil">Brazil</option>
//									<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
//									<option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option>
//									<option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option>
//									<option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option>
//									<option value="Canada">Canada</option><option value="Canary Islands">Canary Islands</option>
//									<option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option>
//									<option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option>
//									<option value="Channel Islands">Channel Islands</option><option value="Chile">Chile</option>
//									<option value="China">China</option><option value="Christmas Island">Christmas Island</option>
//									<option value="Cocos Island">Cocos Island</option><option value="Colombia">Colombia</option>
//									<option value="Comoros">Comoros</option><option value="Congo">Congo</option>
//									<option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option>
//									<option value="Cote DIvoire">Cote D'Ivoire</option><option value="Croatia">Croatia</option>
//									<option value="Cuba">Cuba</option><option value="Curaco">Curacao</option><option value="Cyprus">Cyprus</option>
//									<option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option>
//									<option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option>
//									<option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option>
//									<option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option>
//									<option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option>
//									<option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option>
//									<option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option>
//									<option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option>
//									<option value="Finland">Finland</option><option value="France">France</option>
//									<option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option>
//									<option value="French Southern Ter">French Southern Ter</option><option value="Gabon">Gabon</option>
//									<option value="Gambia">Gambia</option><option value="Georgia">Georgia</option>
//									<option value="Germany">Germany</option><option value="Ghana">Ghana</option>
//									<option value="Gibraltar">Gibraltar</option><option value="Great Britain">Great Britain</option>
//									<option value="Greece">Greece</option><option value="Greenland">Greenland</option>
//									<option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option>
//									<option value="Guam">Guam</option><option value="Guatemala">Guatemala</option>
//									<option value="Guinea">Guinea</option><option value="Guyana">Guyana</option>
//									<option value="Haiti">Haiti</option><option value="Hawaii">Hawaii</option>
//									<option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option>
//									<option value="Hungary">Hungary</option><option value="Iceland">Iceland</option>
//									<option value="India">India</option><option value="Indonesia">Indonesia</option>
//									<option value="Iran">Iran</option><option value="Iraq">Iraq</option>
//									<option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option>
//									<option value="Israel">Israel</option><option value="Italy">Italy</option>
//									<option value="Jamaica">Jamaica</option><option value="Japan">Japan</option>
//									<option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option>
//									<option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option>
//									<option value="Korea North">Korea North</option><option value="Korea Sout">Korea South</option>
//									<option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option>
//									<option value="Laos">Laos</option><option value="Latvia">Latvia</option>
//									<option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option>
//									<option value="Liberia">Liberia</option><option value="Libya">Libya</option>
//									<option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option>
//									<option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option>
//									<option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option>
//									<option value="Malaysia">Malaysia</option><option value="Malawi">Malawi</option>
//									<option value="Maldives">Maldives</option><option value="Mali">Mali</option>
//									<option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option>
//									<option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option>
//									<option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option>
//									<option value="Mexico">Mexico</option><option value="Midway Islands">Midway Islands</option>
//									<option value="Moldova">Moldova</option><option value="Monaco">Monaco</option>
//									<option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option>
//									<option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option>
//									<option value="Myanmar">Myanmar</option><option value="Nambia">Nambia</option>
//									<option value="Nauru">Nauru</option><option value="Nepal">Nepal</option>
//									<option value="Netherlands Antilles">Netherlands Antilles</option><option value="Netherlands">Netherlands (Holland, Europe)</option>
//									<option value="Nevis">Nevis</option><option value="New Caledonia">New Caledonia</option>
//									<option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option>
//									<option value="Niger">Niger</option><option value="Nigeria">Nigeria</option>
//									<option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option>
//									<option value="Norway">Norway</option><option value="Oman">Oman</option>
//									<option value="Pakistan">Pakistan</option><option value="Palau Island">Palau Island</option>
//									<option value="Palestine">Palestine</option><option value="Panama">Panama</option>
//									<option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option>
//									<option value="Peru">Peru</option><option value="Phillipines">Philippines</option>
//									<option value="Pitcairn Island">Pitcairn Island</option><option value="Poland">Poland</option>
//									<option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option>
//									<option value="Qatar">Qatar</option><option value="Republic of Montenegro">Republic of Montenegro</option>
//									<option value="Republic of Serbia">Republic of Serbia</option><option value="Reunion">Reunion</option>
//									<option value="Romania">Romania</option><option value="Russia">Russia</option>
//									<option value="Rwanda">Rwanda</option><option value="St Barthelemy">St Barthelemy</option>
//									<option value="St Eustatius">St Eustatius</option><option value="St Helena">St Helena</option>
//									<option value="St Kitts-Nevis">St Kitts-Nevis</option><option value="St Lucia">St Lucia</option>
//									<option value="St Maarten">St Maarten</option><option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
//									<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option><option value="Saipan">Saipan</option>
//									<option value="Samoa">Samoa</option><option value="Samoa American">Samoa American</option>
//									<option value="San Marino">San Marino</option><option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
//									<option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option>
//									<option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option>
//									<option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option>
//									<option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option>
//									<option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option>
//									<option value="South Africa">South Africa</option><option value="Spain">Spain</option>
//									<option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option>
//									<option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option>
//									<option value="Switzerland">Switzerland</option><option value="Syria">Syria</option>
//									<option value="Tahiti">Tahiti</option><option value="Taiwan">Taiwan</option>
//									<option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option>
//									<option value="Thailand">Thailand</option><option value="Togo">Togo</option>
//									<option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option>
//									<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option><option value="Tunisia">Tunisia</option>
//									<option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option>
//									<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
//									<option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option>
//									<option value="United Arab Erimates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option>
//									<option value="United States of America">United States of America</option>
//									<option value="Uraguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option>
//									<option value="Vatican City State">Vatican City State</option><option value="Venezuela">Venezuela</option>
//									<option value="Vietnam">Vietnam</option><option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
//									<option value="Virgin Islands (USA)">Virgin Islands (USA)</option><option value="Wake Island">Wake Island</option>
//									<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option><option value="Yemen">Yemen</option><option value="Zaire">Zaire</option>
//									<option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
//								</select>
//
//							</tr>
//							<tr>
//								<td>Mobile <span class="star">*</span></td>
//								<td><input name="mobile" id="mobile" type="text" class="tbox-ppc required number" maxlength="10"></td>
//							</tr>
//							<tr>
//								
//								<td>Email Id <span class="star">*</span></td>
//								<td><input type="text" id="email" name="email" class="tbox-ppc  required email" maxlength="30"></td>
//								<select class="dd1 dis_none" name="00Nd0000004yrKK" id="00Nd0000004yrKK">
//									<option value=""></option>
//									<option value="Clover Greens">Clover Greens</option>
//									<option value="East Point">East Point</option>
//									<option value="Daintree">Daintree</option>
//									<option value="27 Park Avenue">27 Park Avenue</option>
//									<option value="Lumos">Lumos</option>
//									<option value="Marq" selected>Lumos</option>
//								</select>
//								<textarea id="lea17" name="description" class="tarea1 fhBox_right dis_none" rows="5" cols="25"></textarea>
//
//							</tr>
//							
//							<tr>
//								<td></td>
//								<td>
//									<button class="btn-submit btn-ppc" type="submit" name="submit" id="submit">Submit</button>
//									<span class="success_msg" style="">Thank you for the enquiry.</span>
//								</td>
//							</tr>
//						</tbody></table>
//					</div>
//				</form>
//			</div>
//			
//		</div>
		?>
		
		
		
		
		
	
	
	
	
        <?php include_once 'header.php'; ?>
		
		
		
        
        <div id="banner">
            <div id="slider-home">
                <div class="fullwidthbanner-container">
                    <div class="fullwidthbanner">
                        <ul class="no-bullet m0 p0">
                            <!-- slide diwali -->
                            <!--<li data-transition="slideleft" data-slotamount="7" data-masterspeed="300">-->
                                <!-- main image -->
<!--                                <img alt="" src="sliders/revolution-slider/img/assetz-marq-diwali-activity.jpg" style="cursor: pointer;" onclick="window.location='<?php echo $site_url; ?>diwaliactivities.php';" />
                            </li>-->
                            
                            <!-- slide 1 -->
                            <li data-transition="slideleft" data-slotamount="7" data-masterspeed="300">
                                <!-- main image -->
                                <img alt="" src="sliders/revolution-slider/img/assetz-marq-1.jpg" />

                                <!-- description -->
                                <div class="tp-caption sfr"
                                        data-x="0"
                                        data-y="375"
                                        data-speed="1000" 
                                        data-start="1000" 
                                        data-easing="easeOutBack">
                                    Assetz Marq is a mixed use development - where a residential realm is supported by vibrant retail, entertainment and service zones.
                                </div>
                            </li>

                            <!-- slide 2 -->
                            <li data-transition="slideleft" data-slotamount="7" data-masterspeed="300">
                                <!-- main image -->
                                <img alt="" src="sliders/revolution-slider/img/assetz-marq-2.jpg" />

                                <!-- description -->
                                <div class="tp-caption sfr"
                                        data-x="0"
                                        data-y="375"
                                        data-speed="1000" 
                                        data-start="1000" 
                                        data-easing="easeOutBack">
                                    Homes at Marq are thoroughly thought through. Keeping privacy in mind, each floor is restricted to just 4 apartments.
                                </div>
                            </li>

                            <!-- slide 3 -->
                            <li data-transition="slideleft" data-slotamount="7" data-masterspeed="300">
                                <!-- main image -->
                                <img alt="" src="sliders/revolution-slider/img/assetz-marq-3.jpg" />
                                
                                <!-- description -->
                                <div class="tp-caption sfr"
                                        data-x="0"
                                        data-y="375"
                                        data-speed="1000" 
                                        data-start="1000" 
                                        data-easing="easeOutBack">
                                    Marq is planned around YOUR Kid. Schools, Creche and playschools are all part of the project. Even our buildings are lifted off the ground, maximising open space so your children can run free.
                                </div>
                            </li>

                            <!-- slide 4 -->
                            <li data-transition="slideleft" data-slotamount="7" data-masterspeed="300">
                                <!-- main image -->
                                <img alt="" src="sliders/revolution-slider/img/assetz-marq-4.jpg" />

                                <!-- description -->
                                <div class="tp-caption sfr"
                                        data-x="0"
                                        data-y="375"
                                        data-speed="1000" 
                                        data-start="1000" 
                                        data-easing="easeOutBack">
                                    Marq will include shops & conveniences, office spaces, a food street, serviced apartments, a neighbourhood school, plenty of outdoor leisure spaces and a fabulous clubhouse.
                                </div>
                            </li>
                        </ul>		
                    </div>
                </div>
            </div>
        </div>
        <div id="scroll_down_prompt"><img src="img/scroll-down.png" /></div>
        
<?php //        <div class="next-page-trigger"><a href="lazy-home/marq-descripition.php">next</a></div> ?>
        
<div class="marq-description" id="marq_content">
    <div class="container">
        <div class="row" style="margin-bottom: 50px;">
            <div class="col-sm-12">
                <p class="desc"><span>Marq - a mixed-use development project</span> located in Bangalore's most sought-after suburb, Whitefield with residential towers, a neighbourhood school, a retail towncenter designed to make the community smarter.</p>
                <p style="text-align: center; padding: 0px 0px;">
                    <img src="img/marq-description.jpg" style="float: none;" />
                    <?php
//                    <img src="img/marq-description-big.jpg" />
//                    <img src="img/marq-description-small1.jpg" />
//                    <img src="img/marq-description-small2.jpg" />
                    ?>
                    <span class="clear"></span>
                </p>
            </div>
        </div>
        
        <div class="row" style="margin-bottom: 70px;">
            <div class="col-sm-12">
                <div class="page-heading">The Idea Behind Marq</div>
                <p class="text">At Marq, every aspect of this 28-acre enclave has been thoroughly thought through and through. With this much planning invested into your home, it's amazing the options that open up to you. Like, being far from the noise but still close to the city's buzz. Like, being able to pay monthly bills or reserve a table for dinner, without even getting off the couch. Like, having convenience, retail, stationery, sporting centres and more, all close to home. Farfetched? Not if you live at Marq.</p>
            </div>
        </div>
    </div>
</div>

<?php //        <div class="next-page-trigger"><a href="lazy-home/kids-centric.php">next</a></div> ?>

<div class="kids-centric" style="padding: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6" style="margin: 50px 0px 60px;">
                <img src="img/kids-centric.jpg" />
            </div>
            <div class="col-sm-6" style="margin: 80px 0px 60px;">
                <div class="page-heading left">Kids Centric</div>
                <p class="text">Every parent wants to give their children the very best. Marq makes that possible.</p>
                <p class="text">The in-campus school removes long commutes from your child's life. The abundance of parks, play areas and sporting facilities ensure they have many leisure activities to choose from. And the closeness of it all ensures there's plenty of time to spend just being a kid.</p>
                <p class="text">Education reaches a new high with our Fibre-To-The-Home technology. Undisturbed high-speed internet and world-class educational programs for your child to take advantage of. All from the comfort of home. Thankfully, no more running between tuitions.</p>
                <p class="text">Marq's enclave is fully monitored - from the parking lot to the clubhouses and every space in between. Our traffic management systems create zero-traffic zones all around the campus.</p>
                <p class="text">Why?</p>
                <p class="text">So your children can play freely.</p>
                <p class="text">And more importantly, safely.</p>
                <?php
//                <p class="text">The project is planned around YOUR Kid. Schools, Creche and playschools are all part of the project. Even our buildings are lifted off the ground, maximising open space so your children can run free. The neighbourhood school will include a sports academy and the FTTH system will enable online tutoring. The residents of Marq will benefit from preferential admission, after-school sports coaching and tutoring, besides spending next to no time in the commute to school.</p>
//                <a href="" class="button">Know More</a>
                ?>
            </div>
        </div>
    </div>
</div>

<?php //        <div class="next-page-trigger"><a href="lazy-home/smarter-city-living.php">next</a></div> ?>
        
<div class="smarter-city-living">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-heading left">A Home Ahead of its Time</div>
                <p class="text" style="width: 95%;">For all our hard work and long Mondays, we deserve a little laziness. That's exactly why homes at Marq come fitted with Fibre-To-The-Home Technology.</p>
                <p class="text" style="width: 95%;">Pay bills, reserve dinner tables, network, organize carpools, video conference with doctors and more.</p>
                <p class="text" style="width: 95%;">With Marq's direct-to-home feeds from CCTV cameras you are afforded the added comfort of knowing exactly where your child is. All at the push of a button.</p>
                <p class="text" style="width: 95%;">But best of all, you can do so without leaving your armchair.</p>
                <?php
//                <p class="text" style="width: 100%;"><span class="heading">With Fibre To The Home (FTTH)</span> enjoy a connected community at Marq. The FTTH successfully bundles data, voice and video circuits more efficiently to the home by using a fibre optic cable- than any other medium.</p>
//                <p class="text" style="width: 100%;">Our vision is to develop Assetz | Marq to be the first fully integrated FTTH master planned communities in the silicon city to enable services unmatched in the areas of security and access control, building management, information, community connect, people services, transactions, entertainment, learning, governance and help.</p>
//                <p class="text" style="width: 100%;">The possibilities with FTTH is endless.</p>
                ?>
            </div>
            <div class="col-sm-6">
                <img src="img/smarter-city-living.jpg" />
            </div>
        </div>
    </div>
</div>

<?php //        <div class="next-page-trigger"><a href="lazy-home/comunity-living.php">next</a></div> ?>

<div class="comunity-living" style="padding-bottom: 30px;">
    <div class="container">
        <div class="row" style="margin-bottom: 50px;">
            <div class="col-sm-12" style="text-align: center;">
                <img src="img/comunity-living.jpg" />
            </div>
        </div>
        
        <div class="page-heading big">Social House</div>
        
        <div class="row">
            <div class="col-sm-12">
                <p class="text" style="text-align: center; margin: 0px auto 25px;">Life here is always buzzing. Marq is smartly crafted so you get plenty of time to socialize and plenty more me-time.</p>
                <p class="text" style="text-align: center; margin: 0px auto 25px;">Adding to the social buzz, our buildings have been elevated to create more zones for neighbours to interact. There are landscaped courtyards for kids to play. And for parents to keep an eye on them.</p>
                <p class="text" style="text-align: center; margin: 0px auto 25px;">Take advantage of the many sporting, recreational activities and social hubs across the enclave to meet neighbours who share your interests. Or unwind with friends at the clubhouse after a hectic day at work.</p>
                <p class="text" style="text-align: center; margin: 0px auto 25px;">Marq also has an entire street dedicated to food; perfect for self-indulgent nights. The many green parks and open spaces are ideal for after-dinner walks or quality time alone, with only your favourite book to keep you company.</p>
                <p class="text" style="text-align: center; margin: 0px auto 25px;">Here, you can truly enjoy the perfect blend of both worlds.</p>
            </div>
            <?php
//            <div class="col-sm-6">
//                <div class="row">
//                    <div class="col-sm-2">
//                        <img src="img/food-street.png" />
//                    </div>
//                    <div class="col-sm-10">
//                        <p class="text">
//                            <span class="heading">Food Street</span><br />
//                            A range of F&B options are just a few steps outside your front door in the outdoor food street — perfect for an evening out or a quick takeaway.
//                        </p>
//                    </div>
//                </div>
//                <div class="row">
//                    <div class="col-sm-2">
//                        <img src="img/shops-convenience.png" />
//                    </div>
//                    <div class="col-sm-10">
//                        <p class="text">
//                            <span class="heading">Shops and Convenience</span><br />
//                            Panning 150,000 sq ft, the retail realm is complete with a supermarket, pharmacy, florist, laundry, travel desk, pet store, book shop, clinic, bank and post office.
//                        </p>
//                    </div>
//                </div>
//                <div class="row">
//                    <div class="col-sm-2">
//                        <img src="img/office-space.png" />
//                    </div>
//                    <div class="col-sm-10">
//                        <p class="text">
//                            <span class="heading">Office Space</span><br />
//                            Well thought out office spaces are a good option for entrepreneurs who can set up shop in a busy commercial area, close to home.
//                        </p>
//                    </div>
//                </div>
//            </div>
//            <div class="col-sm-6">
//                <div class="row">
//                    <div class="col-sm-2">
//                        <img src="img/serviced-apartments.png" />
//                    </div>
//                    <div class="col-sm-10">
//                        <p class="text">
//                            <span class="heading">Serviced Apartments</span><br />
//                            A great option for your out of town friends and business associates.
//                        </p>
//                    </div>
//                </div>
//                <div class="row">
//                    <div class="col-sm-2">
//                        <img src="img/club-house.png" />
//                    </div>
//                    <div class="col-sm-10">
//                        <p class="text">
//                            <span class="heading">Clubhouse</span><br />
//                            We understand that a club is a social hub and get-togethers are an important part of it. That's why we have designed a 20,000 sq ft club with a swimming pool, badminton and squash courts, party hall and fitness centre needs a lifestyle programme management team that is trained to please. We take charge of the clubhouse at Marq, so you can truly relax.
//                        </p>
//                    </div>
//                </div>
//            </div>
            ?>
        </div>
    </div>
</div>

<?php //        <div class="next-page-trigger"><a href="lazy-home/unique-design.php">next</a></div> ?>

<div class="unique-design">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-heading left">Unique Design Approach</div>
                <p class="text" style="width: 100%; margin-bottom: 15px;">You'll notice one stark difference at Marq when compared with other projects. It's called forethought.</p>
                <p class="text" style="width: 100%; margin-bottom: 15px;">Marq is so thought through, you'll never have a reason to leave. All 4 neighbourhoods come complete with social and physical infrastructure. This includes dedicated clubhouses, swimming pools, landscaped courtyards and more!</p>
                <p class="text" style="width: 100%; margin-bottom: 15px;">Inside your home too, you'll notice that a lot of thought has been invested. Keeping privacy in mind, each floor is restricted to just 4 apartments. The varying heights of each block allow plenty of sunlight and better views for all. Around your home too we've planned and re-planned so there are no unnecessary corners or wasted space. We've also lifted buildings off the ground, just so your children have more free space to run about.</p>
                <p class="text" style="width: 100%;">We've done a lot of thinking while building Marq, so you don't have to do a lot of thinking when it comes to selecting an apartment here.</p>
                <?php
//                <p class="text">
//                    <span class="heading">Four apartments to a core</span><br />
//                    With only four apartments to a lift core, you have the advantage of a cozy, well-lit lobby instead of long uninspiring corridors leading to your home.
//                </p>
//                <p class="text">
//                    <span class="heading">Optimised Basement Space</span><br />
//                    All buildings adopt a modular grid system that increases basement space efficiency and enhances construction efficiency.
//                </p>
                ?>
                <a href="about.php" class="button">Know More</a>
            </div>
            <div class="col-sm-6" style="text-align: right;">
                <img src="img/unique-design.jpg" />
            </div>
        </div>
    </div>
</div>

<?php //        <div class="next-page-trigger"><a href="footer.php">next</a></div> ?>

        <?php include_once 'footer.php'; ?>
        
	<script src='http://cw1.livserv.in?did=8765&pid=1'></script>
        
    </body>
</html>