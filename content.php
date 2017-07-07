<?php
	$id = $_GET['id'];
	$page_load = 0;
	$page_success;
	
	
    $access_token = $_SESSION['access_token'];
    $instance_url = $_SESSION['instance_url'];

    if (!isset($access_token) || $access_token == "") {
        die("Error - access token missing from session!");
    }

    if (!isset($instance_url) || $instance_url == "") {
        die("Error - instance URL missing from session!");
    }
	

	$page_success = $_GET['submit'];
	if(isset($page_success)){
	
		if( $page_success == 1 ){
			
			$contact_array = array();
			$opportunity_array = array();

			$firstName = $_POST['firstname'];
			$contact_array['firstName'] = $firstName;

			$lastName = $_POST['lastname'];
			$contact_array['lastName'] = $lastName;

			$email = $_POST['email'];
			$contact_array['email'] = $email;

			$mobilePhone = $_POST['mobilephone'];
			$contact_array['mobilePhone'] = $mobilePhone;

			$countryYesOrNo = $_POST['country'];
			$contact_array['countryYesOrNo'] = $countryYesOrNo;

			$address = $_POST['address'];
			$contact_array['address'] = $address;

			$city = $_POST['city'];
			$contact_array['city'] = $city;

			$state = $_POST['state'];
			$contact_array['state'] = $state;

			$zipcode = $_POST['zipcode'];
			$contact_array['zipcode'] = $zipcode;

			$outsideCountry = $_POST['outsidecountry'];
			$contact_array['outsideCountry'] = $outsideCountry;

			$hispanicYesOrNo = $_POST['hispanicYesOrNo'];
			$contact_array['hispanicYesOrNo'] = $hispanicYesOrNo;

			if(!empty($_POST['race'])){
				foreach($_POST['race'] as $race_check){
					if($race_check == 'americanIndian')
					{
						$contact_array['americanIndian'] = true;
						// theContact.ethnic_American_Indian__c = true;
					}
					if($race_check == 'asian')
					{
						$contact_array['asian'] = true;
						// theContact.ethnic_Asian__c = true;
					}
					if($race_check == 'africanAmerican')
					{
						$contact_array['africanAmerican'] = true;
						// theContact.ethnic_African_American__c = true;
					}
					if($race_check == 'nativeHawaiian')
					{
						$contact_array['nativeHawaiian'] = true;
						// theContact.ethnic_Hawaiian__c = true;
					}
					if($race_check == 'white')
					{
						$contact_array['white'] = true;
						// theContact.ethnic_White__c = true;
					}
				}
			}
			$studentStatus = $_POST['studentstatus'];
			$opportunity_array['studentStatus'] = $studentStatus;

			$highSchool = $_POST['highSchool'];
			$opportunity_array['highSchool'] = $highSchool;
			
			$startDate = $_POST['startDate'];
			
			$startYear = $_POST['startYear'];

			$termCode = $_POST['termIDHidden'];
			$opportunity_array['termCode'] = $termCode;
			
			$proposedMajor = $_POST['majorList'];
			$opportunity_array['proposedMajor'] = $proposedMajor;
			
			$acadPlan = $_POST['acadPlanHidden'];
			$opportunity_array['acadPlan'] = $acadPlan;
			
			$specialNeeds = $_POST['specialNeeds'];
			$opportunity_array['specialNeeds'] = $specialNeeds;
			
			$eventID = $_POST['eventIDHidden'];
			$opportunity_array['eventID'] = $eventID;
			
			$numberOfGuests = $_POST['numberOfGuests'];
			$opportunity_array['numberOfGuests'] = $numberOfGuests;
			
			
			//print_r( "First Name: " . $firstName . " <br />Last Name: " . $lastName . " <br />Email: " . $email . " <br />Mobile Phone: " . $mobilePhone . " <br />Live in US? " . $countryYesOrNo . " <br />Address: " . $address . " <br />City: " . $city . " <br />State: " . $state . " <br />Zip: " . $zipcode . " <br />Country Name: " . $outsideCountry . " <br />You Hispanic? " . $hispanicYesOrNo . " <br />Student Status? " . $studentStatus . " <br />High School: " . $highSchool . " <br />Start Date: " . $startDate . " <br />Start Year: " . $startYear . " <br />Term Code: " . $termCode . " <br />Proposed Major " . $proposedMajor . " <br />AcadPlan " . $acadPlan . " <br />Special Needs " . $specialNeeds . " <br />Event ID: " . $eventID . " <br />Guests: " . $numberOfGuests );
			
			$page_load = 1;

			/***** 
				Get Contact amount
			*****/
			$contacts = find_account( $firstName, $lastName, $email, $access_token);
			$contacts = json_decode( $contacts, true );

			if( $contacts['totalSize'] > 0 ){

				// $contacts['Id'];

				// create a new opportunity for the returned id of the contact
				// place contact into campaign
			}else{
				// create a new contact
				// create a new opportunity for the returned id of the contact
				// place contact into campaign
			}

		}
		
	}

    // get all child accounts of parent $id - then loop through it below like before (will need to delete events)
    if($page_load == 0){
    	$campaign_children = show_campaigns($instance_url, $_SESSION['parentID'], $access_token);
    	$campaign_children = json_decode( $campaign_children, true );
    }

  


    // Look for record based on first last and email

    	// If return result is greater than 0 - add to campaign; create opportunity

    	// If return result is 0, create Contact, create opportunity, add to campaign

    	//-> FUZZYNESS WILL BE A BIT CONFUSING




    // show_accounts($instance_url, $access_token);

    // $id = create_account("My New Org", $instance_url, $access_token);

    // show_account($id, $instance_url, $access_token);

    // show_accounts($instance_url, $access_token);

    // update_account($id, "My New Org, Inc", "San Francisco",
    //         $instance_url, $access_token);

    // show_account($id, $instance_url, $access_token);

    // show_accounts($instance_url, $access_token);

    // delete_account($id, $instance_url, $access_token);

    // show_accounts($instance_url, $access_token);
            
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
    	<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<script src="./js/Jquery.js" type="text/javascript"></script>
		<script src="./js/jquery-ui.min.js" type="text/javascript"></script>

		<link class="user" href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link class="user" href="./css/IU_form_branding.css" rel="stylesheet" type="text/css" />
		<link class="user" href="./css/iu-framework.min.css" rel="stylesheet" type="text/css" />
		<link class="user" href="./css/IU_frameworks_CSS_Forms.css" rel="stylesheet" type="text/css" />
		<link class="user" href="./css/jquery-ui.css" rel="stylesheet" type="text/css" />

		<link class="user" href="./css/calender_FA_001.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.iu.edu/style.css?family=BentonSans:regular,bold%7CBentonSansCond:regular%7CGeorgiaPro:regular" rel="stylesheet" />

		<style type="text/css">
				a {
				background-color: transparent;
				text-decoration: none;
				cursor: pointer;
				}
				a:hover {
				text-decoration: none;
				cursor: pointer;
				}
				.site-header .title {
				font-family: BentonSansBold,Arial,sans-serif;
				font-weight: 400;
				color: #4A3C31;
				float: left;
				margin-top: 26px;
				margin-bottom: 5px;
				font-size: 2.75rem;
				}
					.site-header .title span {
					vertical-align: initial;
					}
				#content_container {
				margin: 0px auto 0px auto;
				padding-top: 40px;
				}
				
			table {
				border: none;
			}

				#errorMessage {
					position: relative;
					display: block;
					width: 100%;
					margin: 0 0 80px;
					padding: 20px 0 20px 80px;
					background: #F1BE48;
					color: #000;
					font-size: .725rem;
				}
				#errorMessage.hiddenClass {
					display: none;
				}
				#event_selected {
					list-style-type: none;
				}
					#event_selected_default {
						color: #ff0000;
					}
					
				.hiddenClass {
					display: none;
				}
				
				.errorField {
					border-color: rgba(229, 103, 23, 0.8) !important;
				box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075) inset, 0 0 8px rgba(229, 103, 23, 0.6) !important;
				outline: 0 none !important;
				}
				
				[id*=specialNeeds] {
					min-height: 100px;
				}
				
				.two-column > div {
					display: inline-block;
					position: relative;
					width: 45%;
				}
					.two-column > div:nth-child(even) {
						margin-left: 20px;
					}
					
					
				#event_selected {
					display: none;
				}
				
				[id*='select-date-time'] {
					display: none;
				}
				
				#us_yes_no, #hispanicYesNo  {
					max-width: 400px;
				}
				
				input[type=submit]{
				
				border-width: 2px;
				font-family: BentonSansBold,Helvetica,Arial,sans-serif;
				font-weight: 400;
				transition: background-color .2s ease-out,color .2s ease-out,border-color .18s ease-out;
				display: inline-block;
				cursor: pointer;
				-webkit-appearance: none;
				border: 1px solid transparent;
				border-radius: 20px;
				padding: .5625em 1em;
				margin: 20px 0 1rem;
				font-size: 1rem;
				background-color: #900;
				color: #fff;
				
				
				}
				
				input[type=submit]:hover{
				background: 0 0;
				color: #900;
				border-color: #900;
				}
				
				table[id*="race"] {
				
				}
				table[id*="race"] tr {
					display:block;
					width: 75%;
				}
				table[id*="race"] tr td {
					display: inline-block;
					position: relative;
					width: 49%;
				}
				table[id*="race"] tr td input {
					vertical-align: initial;
				}
				
				.desktopHidden {
					display: none;
				}
				
				@media only screen and (min-width: 768px){
					#content_container {
					margin: 0px auto 0px auto;
					padding-top: 80px;
					max-width: 1400px;
					}
					
				}
			@media only screen and (max-width: 800px) {
			

				.ui-datepicker {
					width: 90%; /*what ever width you want*/
					margin:0 auto;
				}
				.ribbon-trident img {
					width: 46px !important;
				}
				
				.site-header .title {
				font-size: 1.75rem;
				margin: 26px auto 25px auto;
				width: 70%;
				}
				
				.two-column > div {
					display: block;
					width: 75%;
					margin: 0 auto;
				}
					.two-column > div:nth-child(even) {
						margin: 0 auto;
					}

				#errorMessage {
					padding: 20px 0 20px 0px;
					text-align: center;
				}
				
				#banner img {
				width: auto !important;
				max-width: none;
				}
				
					
				#mobileMenuButton {
					position:absolute;
					top: 7px;
					right: 10px;
					width: auto;
				}
				
				
				.desktopHidden {
					display: initial;
				}
				
				nav {
				position: relative !important;
				top: 0;
				right: 0;
				padding: 0px !important;
				margin: 0px !important;
				z-index: 8;
				}
				
					nav ul.openMobileMenu {
					position: fixed !important;
					top: 60px !important;
					right: -10px !important;
					width: 100vw !important;
					}
				
					nav ul {
						position: fixed !important;
						top: 60px !important;
						right: -100% !important;
					list-style: none !important;
					width: 100% !important;
					text-transform: uppercase !important;
					font-size: 1rem !important;
					
					transition:1s;
					-webkit-transition:1s;
					-moz-transition:1s;
					right:calc(100% - 100px);
					}
					
					nav.openNav > div{
					
					}
					
						nav.openNav button {
							
						}
					
						nav ul li {
						display: block !important;
						height: 100%;
						padding: 20px 10px !important;
						background: white;
						}
					
				
				
			}
				
		</style>
	</head>

<body>

	<script type="text/javascript">
	<!-- insert javascript here >

	$( window ).ready(function() {
	var screenSize = $(window).width();
	if( screenSize < 800 ){

	// alert("It looks like you're using a mobile device. Please come back to this form on a desktop browser");
	// window.location.replace("https://admitin.webtest.iu.edu/visit/tour/daily-tours.html");

	}
	pageload();
	});


	function pageload(){

	var proposedMajor = [],
    inArrays;

	$('[class*=focus]').focus();




	/*
	$.ajax({
	dataType: "json",
	url:"https://degrees.communications.iu.edu/app/api/json/degrees?institution=IUINA&undergrad=true",
	success: function( data ){
	$.each( data, function( key, value ) {
	inArrays = $.inArray( value['IU_PUB_DESCR'], proposedMajor );
	if( inArrays == -1 ){
	proposedMajor.push( value['IU_PUB_DESCR'] );
	}
	});
	$.each( proposedMajor, function( index, value ){
	$('.majorList').append("<option value='" + value + "'>" + value + "</option>");
	});

	}
	});
	*/




	$('[id="mobileMenuButton"]').on('click', function(e) {

	    e.preventDefault(e);
	    var nav = $('nav'),
	        navMenu = $('nav ul');

	    if (navMenu.hasClass("openMobileMenu")) {
	        nav.removeClass("openNav");
	        navMenu.removeClass("openMobileMenu");
	    } else {
	        nav.addClass("openNav");
	        navMenu.addClass("openMobileMenu");
	    }

	});



	$('[id*="startDate"]').change(function(e) {
	    var startdate = $(this).val(),
	        startyear = $('[id*="startYear"]').val();

	    if (startyear != '') {

	        var termvalue = "4" + startyear.slice(-2) + startdate;

	        $('[id*="termIDHidden"]').val(termvalue);
	    }
	});
	$('[id*="startYear"]').change(function(e) {
	    var startdate = $('[id*="startDate"]').val(),
	        startyear = $('[id*="startYear"]').val();

	    if (startyear != '') {

	        var termvalue = "4" + startyear.slice(-2) + startdate;

	        $('[id*="termIDHidden"]').val(termvalue);
	    }
	});


	$('[id*=us_yes_no] input').change(function(e) {
	    $('.countryChild').addClass('hiddenClass');
	    if ($(this).val() == "YES") {
	        $('#countryYes').removeClass('hiddenClass');
	        $('#countryNo').find("input").val("");
	    } else {
	        $('#countryNo').removeClass('hiddenClass');
	        $('#countryYes').find("input").val("");
	        $('#countryYes').find("select").val("");
	    }
	});

	$('select[id*="majorList"]').change(function(e) {

	    var major = $('select[id*="majorList"] option:selected').html();

	    $('[id*="acadPlanHidden"] option').filter(function() {
	        return $(this).text() === major
	    }).attr('selected', true);


	});

	$('select[id*="acadPlanHidden"]').change(function(e) {

	    var major = $('select[id*="acadPlanHidden"] option:selected').html();

	    $('[id*="majorList"] option').filter(function() {
	        return $(this).text() === major
	    }).attr('selected', true);


	});



	$('select[id*="studentstatus"]').change(function(e) {
	    if ($(this).val() == "FYU") {
	        $('#highschoolcontain').removeClass('hiddenClass');
	    } else {
	        $('#highschoolcontain').addClass('hiddenClass');
	        $('#highschoolcontain input').val("");
	    }
	});

	/*
	FORM VALIDATE
	*/
	var first_validate = 0,
	error_number,
	error_message;

	$('[id*=campusVisitForm]').submit(function(e){

	// REMOVE AFTER TESTING
	// e.preventDefault();

	error_number = 0;

	$('[id*=firstname]').val($.trim($('[id*=firstname]').val()));
	$('[id*=lastname]').val($.trim($('[id*=lastname]').val()));
	$('[id*=email]').val($.trim($('[id*=email]').val()));
	validate_form();

	$(this).on('input', function(){
	validate_form();
	});
	$(this).find('input:radio').change(function(){
	validate_form();
	});


	if(error_number > 0){
	$("#errorMessage").removeClass("hiddenClass").html(error_message);
	$('body').animate({
	scrollTop:$("#errorMessage").offset().top
	}, 1000);
	e.preventDefault();
	//return false;

	}else{
	$("#errorMessage").addClass("hiddenClass");
	/* 
	alert("First Name is: " + " " + $('[id*=firstname]').val() + "   " +
	"Last Name is: " + " " + $('[id*=lastname]').val() + "    " +
	"Email is: " + " " + $('[id*=email]').val() + "    " +
	"Mobile Phone is: " + " " + $('[id*=mobilephone]').val() + "    " +
	"Outside Country?: " + " " +
	$('[id*=country]:checked').val() + "    " +
	"Address: " + " " + $('[id*=address]').val() + "    " +
	"City: " + " " + $('[id*=city]').val() + "    " +
	"State: " + " " + $('[id*=state]').val() + "    " +
	"Zipcode: " + " " + $('[id*=zipcode]').val() + "    " +
	"country: " + " " + $('[id*=outsidecountry]').val() + "        " +
	"Hispanic?: " + " " + $('[id*=hispanicYesOrNo] input:checked').val() + "    " +
	"Race?: " + " " + $('[id*="race"] input:checked').val() + "    " +
	"Student Status: " + " " + $('[id*=studentstatus]').val() + "    " +
	"High School: " + " " + $('[id*=highSchool]').val() + "    " +
	"Term: " + " " + $('[id*=termIDHidden]').val() + "    " +
	"Proposed Major: " + " " + $('select[id*="majorList"]').val() + "    " +
	"Academic Plan: " + " " + $('select[id*="acadPlanHidden"]').val() + "    " +
	"Event: " + " " + $("#date-selected").val() + " " +
	"Event: " + " " + $('[id*=select-date-time]').val() + " " +
	"Event: " + " " + $('[id*="numberOfGuests"]').val()
	);

	return false;
	*/
	

	}
	});





	function validate_form() {
	    $('.errorField').removeClass('errorField');
	    $("#errorMessage").html("");

	    error_message = "<div style=\"font-size:.89rem;font-weight:700;margin-left:-20px;\">Please correct the following:</div> <br />";


	    /*
	    FIRST NAME
	    */
	    var firstname = $('[id*=firstname]'),
	        firstnameval = firstname.val();
	    if (firstnameval == "") {
	        firstname.addClass('errorField');
	        error_number++;
	        error_message += "First Name field is empty <br />";
	    } else if (firstnameval.length < 2) {
	        firstname.addClass('errorField');
	        error_number++;
	        error_message += "First Name field needs a full name <br />";
	    }

	    /*
	    LAST NAME
	    */
	    var lastname = $('[id*=lastname]'),
	        lastnameval = lastname.val();
	    if (lastnameval == "") {
	        lastname.addClass('errorField');
	        error_number++;
	        error_message += "Last Name field is empty <br />";
	    } else if (lastnameval.length < 2) {
	        lastname.addClass('errorField');
	        error_number++;
	        error_message += "Last Name field needs a full name <br />";
	    }

	    /*
	    EMAIL
	    */
	    var email = $('[id*=email]'),
	        emailval = email.val();
	    if (emailval == "") {
	        email.addClass('errorField');
	        error_number++;
	        error_message += "Email field is empty <br />";
	    } else if (!emailval.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
	        email.addClass('errorField');
	        error_number++;
	        error_message += "Email field is not a valid email <br />";
	    }

	    /*
	    PHONE NUMBER
	    */
	    var mobilenumber = $('[id*=mobilephone]'),
	        mobilenumberval = mobilenumber.val(),
	        mobilenumberparsed = parseInt(mobilenumberval),
	        isnotanumber = isNaN(mobilenumberval.charAt(0))
	    afterIndex = mobilenumberval.substr(1);

	    if (mobilenumberval.charAt(0) == "1" || mobilenumberval.charAt(0) == "+") {
	        var full = mobilenumberval.charAt(0) + afterIndex.replace(/[^\d.-]/g, '');

	        mobilenumber.val(full);

	    } else if ((mobilenumberval == "") || (isnotanumber)) {
	        mobilenumber.val(mobilenumberval.replace(/[^\d.-]/g, ''));
	        mobilenumber.addClass('errorField');
	        error_number++;
	        error_message += "Mobile Number field is either empty or needs a foreign/domestic number <br />";
	    } else {
	        mobilenumber.val(mobilenumberval.replace(/[^\d.-]/g, ''));
	    }


	    /*
	    COUNTRY YES OR NO
	    */
	    var country = $('input[id*="country"]'),
	        countryischecked = country.is(':checked'),
	        countryval = $('input[id*="country"]:checked').val();
	    if (countryval == undefined) {
	        country.addClass('errorField');
	        error_number++;
	        error_message += "The US resident field is not selected <br />";
	    } else if (countryval == "YES") {

	        var address = $('[id*=address]'),
	            addressval = address.val(),
	            city = $('[id*=city]'),
	            cityval = city.val(),
	            state = $('[id*=state]'),
	            stateval = state.val(),
	            zipcode = $('[id*=zipcode]'),
	            zipcodeval = zipcode.val();

	        if (addressval == "") {
	            address.addClass('errorField');
	            error_number++;
	            error_message += "Address field is empty <br />";
	        }
	        if (cityval == "") {
	            city.addClass('errorField');
	            error_number++;
	            error_message += "City field is empty <br />";
	        }
	        if (stateval == "") {
	            state.addClass('errorField');
	            error_number++;
	            error_message += "Address field is empty <br />";
	        }
	        if (zipcodeval == "") {
	            zipcode.addClass('errorField');
	            error_number++;
	            error_message += "Address field is empty <br />";
	        }

	    } else if (countryval == "NO") {
	        var outsidecountry = $('[id*=outsidecountry]'),
	            outsidecountryval = outsidecountry.val();

	        if (outsidecountryval == "") {
	            outsidecountry.addClass('errorField');
	            error_number++;
	            error_message += "Country is empty <br />";
	        }

	    }


	    /*
	    HISPANIC YES OR NO
	    */

	    var hispanicYesOrNo = $('input[id*="hispanicYesOrNo"]'),
	        hispanicYesOrNoischecked = hispanicYesOrNo.is(':checked'),
	        hispanicYesOrNoval = $('input[id*="hispanicYesOrNo"]:checked').val();
	    if (hispanicYesOrNoval == undefined) {
	        hispanicYesOrNo.addClass('errorField');
	        error_number++;
	        error_message += "The hispanic yes/no field is not selected <br />";
	    } else if (hispanicYesOrNoval == "YES") {



	    } else if (hispanicYesOrNoval == "NO") {

	        /*
	        var race = $('[id*="race"] input'),
	        raceischecked = race.is(':checked'),
	        raceval = $('[id*="race"] input:checked').val();
	        console.log(raceval);
	        if( raceval == undefined ){
	        race.addClass('errorField');
	        error_number++;
	        error_message += "The race field is not selected <br />";
	        }
	        */

	    }


	    /*
	    STUDENT STATUS
	    */
	    var studentstatus = $('[id*=studentstatus]'),
	        studentstatusval = studentstatus.val();
	    if (studentstatusval == "") {
	        studentstatus.addClass('errorField');
	        error_number++;
	        error_message += "Student Status field is empty <br />";
	    } else if (studentstatusval == "FYU") {
	        var highschool = $('input[id*="highSchool"]')
	        highschoolval = highschool.val();
	        if (highschoolval == "") {
	            highschool.addClass('errorField');
	            error_number++;
	            error_message += "High School field is empty <br />";
	        }
	    }

	    /*
	    START DATE
	    */
	    var startdate = $('[id*=startDate]'),
	        startdateval = startdate.val();
	    if (startdateval == "") {
	        startdate.addClass('errorField');
	        error_number++;
	        error_message += "Start Date field is empty <br />";
	    }

	    /*
	    START YEAR
	    */
	    var startyear = $('[id*=startYear]'),
	        startyearval = startyear.val();
	    if (startyearval == "") {
	        startyear.addClass('errorField');
	        error_number++;
	        error_message += "Start Year field is empty <br />";

	    }

	    /*
	    MAJOR LIST
	    */
	    var majorList = $('[id*=majorList]'),
	        majorListval = majorList.val();
	    if (majorListval == "") {
	        majorList.addClass('errorField');
	        error_number++;
	        error_message += "Proposed Major field is empty <br />";
	    }

	    /*
	    EVENTS


	    */
	    var availableEvents = $("#date-selected"),
	        availableEventsval = availableEvents.val();
	    if (availableEventsval == "") {
	        $('#date-selected').addClass('errorField');
	        error_number++;
	        error_message += "No Event Selected <br />";
	    } else {

	        var timeSelected = $('[id*=select-date-time]'),
	            timeSelectedval = timeSelected.val(),
	            numberOfGuests = $('[id*="numberOfGuests"]'),
	            numberOfGuestsval = numberOfGuests.val();

	        if (timeSelectedval == "") {

	            console.log(numberOfGuestsval);
	            timeSelected.addClass('errorField');
	            error_number++;
	            error_message += "No time selected <br />";

	        }

	        if (numberOfGuestsval == "") {

	            numberOfGuests.addClass('errorField');
	            error_number++;
	            error_message += "No number of guests selected <br />";

	        }
	    }




	    if (error_number > 0) {
	        $("#errorMessage").removeClass("hiddenClass").html(error_message);
	    }


	}

	}


	</script>


	<section class="top">
		<div id="ribbon">
			<div id="ribbon-container">
				<div class="ribbon-trident">
					<img alt="Fall Fest at IUPUI" src="img/iu_tab_web.png" width="800" />
				</div>
				<span class="hide-on-desktop">
					Indiana University-Purdue University Indianapolis
				</span>
				<span class="hide-on-tablet">
					IUPUI
				</span>
				
				<button aria-controls="offCanvas" aria-expanded="false" class="button desktopHidden" data-toggle="offCanvas" id="mobileMenuButton">Menu</button>
			</div>
		</div>
		<header class="site-header" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity" role="banner">
			<div class="row pad">
				<h1><a class="title" href="https://admissions.iupui.edu/index.html" itemprop="department"><span>Office of</span> Undergraduate Admissions</a></h1>
			</div>
		</header>
		<nav aria-label="Main navigation" class="main dropdown " id="nav-main" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
			<ul class="row pad">
				<li class="show-on-sticky home"><a>
					
				Home</a>
			</li>
			<li class="first"><a href="https://www.iupui.edu/academics/" itemprop="url"><span itemprop="name">Academics</span></a>
			<ul class="children">
				<li><a href="https://admissions.iupui.edu/academics/degrees-majors/index.html" itemprop="url"><span itemprop="name">Degrees &amp; Majors</span></a>
			</li>
			<li><a href="https://admissions.iupui.edu/academics/schools.html" itemprop="url"><span itemprop="name">Schools</span></a>
		</li>
		<li><a href="https://admissions.iupui.edu/academics/career-prep.html" itemprop="url"><span itemprop="name">Career Preparation</span></a>
	</li>
	</ul>
	</li>
	<li><a href="https://www.iupui.edu/jaguar-life/index.html" itemprop="url"><span itemprop="name">Jaguar Life</span></a>
	<ul class="children">
	<li><a href="https://admissions.iupui.edu/jaguar-life/housing.html" itemprop="url"><span itemprop="name">Housing</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/jaguar-life/campus.html" itemprop="url"><span itemprop="name">The Campus</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/jaguar-life/indianapolis.html" itemprop="url"><span itemprop="name">The City</span></a>
	</li>
	</ul>
	</li>
	<li><a href="https://www.iupui.edu/admissions/cost-finances.html" itemprop="url"><span itemprop="name">Costs &amp; Financial Aid</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/visit/index.html" itemprop="url"><span itemprop="name">Visit IUPUI</span></a>
	<ul class="children">
	<li><a href="https://admissions.iupui.edu/visit/tour/index.html" itemprop="url"><span itemprop="name">Schedule a Tour</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/visit/events/index.html" itemprop="url"><span itemprop="name">Events</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/visit/ambassadors/index.html" itemprop="url"><span itemprop="name">Meet Our Ambassadors</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/visit/request-visit/index.html" itemprop="url"><span itemprop="name">Bring IUPUI to Your School or Organization</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/visit/stay.html" itemprop="url"><span itemprop="name">Where to Stay &amp; Things to Do</span></a>
	</li>
	</ul>
	</li>
	<li><a href="http://enroll.iupui.edu" itemprop="url"><span itemprop="name">How to Apply</span></a>
	<ul class="children">
	<li><a href="https://admissions.iupui.edu/apply/preparing-for-college/index.html" itemprop="url"><span itemprop="name">Preparing for College</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/apply/freshman/index.html" itemprop="url"><span itemprop="name">Freshman Applicants</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/apply/transfer/index.html" itemprop="url"><span itemprop="name">Transfer Applicants</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/apply/intercampus/index.html" itemprop="url"><span itemprop="name">Intercampus Transfer Applicants</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/apply/passport.html" itemprop="url"><span itemprop="name">Passport Applicants (Ivy Tech Central Indiana)</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/apply/returning-adults.html" itemprop="url"><span itemprop="name">Returning Adult Applicants</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/apply/military.html" itemprop="url"><span itemprop="name">Military &amp; Veteran Applicants</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/apply/second-degree-and-visiting.html" itemprop="url"><span itemprop="name">Second Degree &amp; Visiting Applicants</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/apply/international.html" itemprop="url"><span itemprop="name">International Applicants</span></a>
	</li>
	<li><a href="https://admissions.iupui.edu/apply/graduate.html" itemprop="url"><span itemprop="name">Graduate Applicants</span></a>
	</li>
	</ul>
	</li>
	<li><a href="http://enroll.iupui.edu/admissions/admitted.html" itemprop="url"><span itemprop="name">After Admission</span></a>
	</li>
	<li class="last"><a href="http://enroll.iupui.edu/admissions/contact.html" itemprop="url"><span itemprop="name">Contact Us</span></a>
	<ul class="children">
	<li><a href="https://admissions.iupui.edu/contact/meet-counselor/index.html" itemprop="url"><span itemprop="name">Meet Your Admissions Counselor</span></a>
	</li>
	</ul>
	</li>
	</ul>
	</nav>
	</section>


	<section aria-label="body content">

	<div class="wide" id="content_container">

	<H1>Daily IUPUI Campus Tours</H1>
    
	<form id="EventRegistrationCampusTour:campusVisitForm" name="EventRegistrationCampusTour:campusVisitForm" method="post" action="?submit=1" class="iu_form" enctype="application/x-www-form-urlencoded">
	<input type="hidden" name="EventRegistrationCampusTour:campusVisitForm" value="EventRegistrationCampusTour:campusVisitForm" />
	
    <div class="apexp"><div id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock" class="bPageBlock brandSecondaryBrd bDetailBlock secondaryPalette"><div class="pbBody">

	<div class="hiddenClass" id="errorMessage"></div>
	<div class="two-column-container">
	<div class=" two-column" id="panelSection" title="Personal Information">
	<div><label for="firstname">
	First Name <span class="required" title="required field">*</span></label><input id="firstname" type="text" name="firstname" class="focus" alt="first name input" title="first name" />
	</div>
	<div><label for="lastname">
	Last Name <span class="required" title="required field">*</span></label><input id="lastname" type="text" name="lastname" alt="last name input" title="last name" />
	</div>
	<div><label for="email" style="line-height:.5;">
	Email <span class="required" title="required field">*</span></label>
	<span style="font-size:11px;font-weight:800;">USE AN EMAIL UNIQUE TO YOU; AVOID ADDRESSES SHARED BY YOUR FAMILY.</span><input id="email" type="text" name="email" alt="password input" title="email" />
	</div>
	<div><label for="mobilephone" style="line-height:.5;">
	Mobile Phone</label>
	<span style="font-size:11px;font-weight:800;">NUMERIC VALUES ONLY UNLESS A NON-DOMESTIC NUMBER</span><input id="mobilephone" type="text" name="mobilephone" alt="mobile phone number" title="phone number" />
	</div>
	</div>
	<div id="us_yes_no"><label for="country">
	Do you reside in the US? <span class="required" title="required field">*</span></label><fieldset style="border: none;"><legend>Select yes or no</legend><table role="presentation" id="country" class="country">
	<tr>
	<td>
	<input type="radio" name="country" id="country:0" value="YES" /><label for="country:0"> yes</label></td>
	<td>
	<input type="radio" name="country" id="country:1" value="NO" /><label for="country:1"> no</label></td>
	</tr>
	</table></fieldset>
	</div>
	</div>
	<div class="countryChild hiddenClass" id="countryYes">
	<div class="two-column-container">
	<div class=" two-column">
	<div><label for="address">
	Address</label><input id="address" type="text" name="address" alt="us address" title="address" />
	</div>
	<div><label for="city">
	City</label><input id="city" type="text" name="city" class="countryYes" alt="city input" title="city" />
	</div>
	<div><label for="state">
	State or Territory</label><select id="state" name="state" class="stateList" size="1">	<option value=""></option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusettes</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
	<option value="PR">Puerto Rico</option>
	<option value="DC">District of Columbia</option>
	</select>

	</div>
	<div><label for="zipcode">
	Zipcode</label><input id="zipcode" type="text" name="zipcode" alt="zipcode input" title="zipcode" />
	</div>
	</div>
	</div>
	</div>
	<div class="countryChild hiddenClass" id="countryNo"><label for="outsidecountry">
	Country</label><input id="outsidecountry" type="text" name="outsidecountry" class="countryNo" alt="country if outside us input" title="outside us country" />
	</div>
	<div>
	<div><label for="hispanicYesOrNo">
	Are you Hispanic or Latino?<span class="required" title="required field">*</span></label>
	</div>
	</div>
	<div id="hispanicYesNo">
	<div><fieldset style="border: none;"><legend>Select yes or no</legend><table role="presentation" id="hispanicYesOrNo" class="hispanicYesOrNo">
	<tr>
	<td>
	<input type="radio" name="hispanicYesOrNo" id="hispanicYesOrNo:0" value="YES" /><label for="hispanicYesOrNo:0"> yes</label></td>
	<td>
	<input type="radio" name="hispanicYesOrNo" id="hispanicYesOrNo:1" value="NO" /><label for="hispanicYesOrNo:1"> no</label></td>
	</tr>
	</table></fieldset>

	</div>
	</div>
	<div id="hispanicNo">
	<div>
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race">
	What is your race?</label>
	</div>
	</div>
	<div id="race">
	<div><fieldset style="border: none;"><legend>Select all that apply</legend><table role="presentation" id="race">
	<tr>
	<td>
	<input name="race[]" id="race:0" value="americanIndian" type="checkbox" /><label for="race:0"> American Indian/Alaskan Native</label></td>
	<td>
	<input name="race[]" id="race:1" value="asian" type="checkbox" /><label for="race:1"> Asian</label></td>
	<td>
	<input name="race[]" id="race:2" value="africanAmerican" type="checkbox" /><label for="race:2"> Black / African American</label></td>
	<td>
	<input name="race[]" id="race:3" value="nativeHawaiian" type="checkbox" /><label for="race:3"> Native Hawaiian/Pacific Islander</label></td>
	<td>
	<input name="race[]" id="race:4" value="white" type="checkbox" /><label for="race:4"> White</label></td>
	</tr>
	</table></fieldset>
	</div>
	</div>
	</div>
	<div>
    
    
    
	<div id="studenttype"><label for="studentstatus">
	What best describes your status as a student? <span class="required" title="required field">*</span></label><select id="studentstatus" name="studentstatus" size="1">	<option value=""></option>
	<option value="FYU">High School Student</option>
	<option value="TRU">Transfer Student</option>
	<option value="RTU">Returning IUPUI Student</option>
	<option value="ICU">IU Intercampus Transfer Student</option>
	</select>
	</div>
	<div class="hiddenClass" id="highschoolcontain"><label for="highSchool">
	High School<span class="required" title="required field">*</span></label><input id="highSchool" type="text" name="highSchool" class="countryNo" alt="input your high school if from the US" title="high school" />
	</div>
	</div>
	<div>
	<div><label for="startDate">
	Intended Start Term? <span class="required" title="required field">*</span></label><select id="startDate" name="startDate" size="1">					
    <option value=""></option>
	<option value="8">Fall (August)</option>
	<option value="2">Spring (January)</option>
	<option value="5">Summer Session I (May)</option>
	<option value="5">Summer Session II (June)</option>
	</select>
	</div>
	<div><label for="startYear">
	Intended Start Year?<span class="required" title="required field">*</span></label><select id="startYear" name="startYear" size="1">	<option value=""></option>
	<option value="2018">2018</option>
	<option value="2019">2019</option>
	<option value="2020">2020</option>
	</select>
	</div>
    <input id="termIDHidden" type="hidden" name="termIDHidden" />
	</div>
	<div>
	<div><label for="majorList">
	Proposed Major <span class="required" title="required field">*</span></label><select id="majorList" name="majorList" class="majorList" size="1">	
    <option value=""></option>
	<option value="UCOL1">Exploratory/Undecided</option>
	<option value="UCBU1">Accounting</option>
	<option value="UCLA1">Africana Studies</option>
	<option value="UCLA1">American Sign Language-English Interpretation</option>
	<option value="UCLA1">Anthropology</option>
	<option value="UCSI1">Applied Computer Science</option>
	<option value="UCHE1">Art Education</option>
	<option value="UCHE1">Art History</option>
	<option value="UCPH1">Bachelor of Science in Health Data Science</option>
	<option value="UCSI1">Biology</option>
	<option value="UCSI1">Biology Teaching</option>
	<option value="UCEG1">Biomedical Engineering</option>
	<option value="UCSI1">Biotechnology</option>
	<option value="UCBU1">Business</option>
	<option value="UCHE1">Ceramics</option>
	<option value="UCSI1">Chemistry</option>
	<option value="UCSP1">Civic Leadership</option>
	<option value="UCMD1">Clinical Laboratory Science</option>
	<option value="UCLA1">Communication Studies</option>
	<option value="UCPH1">Community Health</option>
	<option value="UCTE1">Computer &amp; Information Technology</option>
	<option value="UCEG1">Computer Engineering</option>
	<option value="UCTE1">Computer Engineering Technology</option>
	<option value="UCTE1">Computer Graphics Technology</option>
	<option value="UCSI1">Computer Science</option>
	<option value="UCTE1">Construction Engineering Management Technology</option>
	<option value="UCSP1">Criminal Justice</option>
	<option value="UCMD1">Cytotechnology</option>
	<option value="UCDN1">Dental Hygiene</option>
	<option value="UCHE1">Drawing &amp; Illustration</option>
	<option value="UCLA1">Economics</option>
	<option value="UCLA1">Economics Quantitative</option>
	<option value="UCEG1">Electrical Engineering</option>
	<option value="UCTE1">Electrical Engineering Technology</option>
	<option value="UCED1">Elementary Education</option>
	<option value="UCEG1">Energy Engineering</option>
	<option value="UCLA1">English</option>
	<option value="UCED1">English Teaching</option>
	<option value="UCPH1">Environmental Health Science</option>
	<option value="UCSI1">Environmental Science</option>
	<option value="UCPE1">Exercise Science</option>
	<option value="UCBU1">Finance</option>
	<option value="UCPE1">Fitness Management &amp; Personal Training</option>
	<option value="UCSI1">Forensic &amp; Investigative Sciences</option>
	<option value="UCLA1">French</option>
	<option value="UCHE1">Furniture Design</option>
	<option value="UCLA1">General Studies</option>
	<option value="UCLA1">Geography</option>
	<option value="UCSI1">Geology</option>
	<option value="UCLA1">German</option>
	<option value="UCLA1">Global &amp; International Studies</option>
	<option value="UCIN1">Health Information Management</option>
	<option value="UCHR1">Health Sciences</option>
	<option value="UCPH1">Health Services Management</option>
	<option value="UCTE1">Healthcare Engineering Technology Management</option>
	<option value="UCLA1">History</option>
	<option value="UCBU1">Human Resource Management</option>
	<option value="UCLA1">Individualized Major</option>
	<option value="UCIN1">Informatics</option>
	<option value="UCHE1">Integrative Studio Practice</option>
	<option value="UCEG1">Interdisciplinary Engineering</option>
	<option value="UCSI1">Interdisciplinary Studies</option>
	<option value="UCTE1">Interior Design</option>
	<option value="UCTE1">Interior Design Technology (Associate Degree)</option>
	<option value="UCLA1">Journalism</option>
	<option value="UCLS1">Labor Studies</option>
	<option value="UCLA1">Law in Liberal Arts</option>
	<option value="UCBU1">Management (Business)</option>
	<option value="UCSP1">Management (SPEA)</option>
	<option value="UCBU1">Marketing</option>
	<option value="UCSI1">Mathematics</option>
	<option value="UCSI1">Mathematics Teaching</option>
	<option value="UCEG1">Mechanical Engineering</option>
	<option value="UCTE1">Mechanical Engineering Technology</option>
	<option value="UCEG1">Mechanical Engineering/Motorsports Engineering</option>
	<option value="UCSP1">Media &amp; Public Affairs</option>
	<option value="UCIN1">Media Arts &amp; Science</option>
	<option value="UCLA1">Medical Humanities &amp; Health Studies</option>
	<option value="UCMD1">Medical Imaging Technology</option>
	<option value="UCMD1">Motorsports Engineering</option>
	<option value="UCMT1">Music Technology</option>
	<option value="UCSI1">Neuroscience</option>
	<option value="UCMD1">Nuclear Medicine Technology</option>
	<option value="UCNU1">Nursing</option>
	<option value="UCTE1">Organizational Leadership &amp; Supervision</option>
	<option value="UCHE1">Painting</option>
	<option value="UCMD1">Paramedic Science</option>
	<option value="UCPS1">Philanthropic Studies</option>
	<option value="UCLA1">Philosophy</option>
	<option value="UCHE1">Photography</option>
	<option value="UCPE1">Physical Education &amp; Health Education Teaching</option>
	<option value="UCSI1">Physics</option>
	<option value="UCSI1">Physics Teaching</option>
	<option value="UCSI1">Physics/Electrical Engineering</option>
	<option value="UCSI1">Physics/Electrical Engineering</option>
	<option value="UCSP1">Policy Studies</option>
	<option value="UCLA1">Political Science</option>
	<option value="UCHE1">Printmaking</option>
	<option value="UCSI1">Psychology</option>
	<option value="UCDN1">Public Health Dental Hygiene</option>
	<option value="UCSP1">Public Safety Management</option>
	<option value="UCMD1">Radiation Therapy</option>
	<option value="UCMD1">Radiography</option>
	<option value="UCLA1">Religious Studies</option>
	<option value="UCMD1">Respiratory Therapy</option>
	<option value="UCHE1">Sculpture</option>
	<option value="UCED1">Social Studies</option>
	<option value="UCSW1">Social Work</option>
	<option value="UCLA1">Sociology</option>
	<option value="UCLA1">Spanish</option>
	<option value="UCPE1">Sports Management</option>
	<option value="UCBU1">Supply Chain Management</option>
	<option value="UCSP1">Sustainable Management &amp; Policy</option>
	<option value="UCTE1">Technical Communication</option>
	<option value="UCTM1">Tourism, Conventions, &amp; Events Management</option>
	<option value="UCHE1">Visual Communication Design</option>
	</select>
    
    
    <label for="acadPlanHidden" class="hiddenClass">
	Proposed Major Hidden Field</label><select id="acadPlanHidden" name="acadPlanHidden" class="hiddenClass" size="1">	<option value=""></option>
	<option value="EXPLRPR">Exploratory/Undecided</option>
	<option value="ACTGBSBPR">Accounting</option>
	<option value="AFRSTDBAPR">Africana Studies</option>
	<option value="ASLEIBSPR">American Sign Language-English Interpretation</option>
	<option value="ANTHBAPR">Anthropology</option>
	<option value="ACSBAPRP">Applied Computer Science</option>
	<option value="AREDBAEDP">Art Education</option>
	<option value="HARTBAPR">Art History</option>
	<option value="HLTHDSCIBSP">Bachelor of Science in Health Data Science</option>
	<option value="BIBAPBAPR">Biology</option>
	<option value="BITCBAPUPR">Biology Teaching</option>
	<option value="PBMEBSPU">Biomedical Engineering</option>
	<option value="BITECPRP">Biotechnology</option>
	<option value="BUSBSBP">Business</option>
	<option value="CERPR">Ceramics</option>
	<option value="CHACSBSCHP">Chemistry</option>
	<option value="CVLDRBSPA2">Civic Leadership</option>
	<option value="CLSBSPR">Clinical Laboratory Science</option>
	<option value="COMSTBAPR">Communication Studies</option>
	<option value="COMHTBSPHP">Community Health</option>
	<option value="CITBSPR">Computer &amp; Information Technology</option>
	<option value="COMENBSCEP">Computer Engineering</option>
	<option value="CPETBBSPR">Computer Engineering Technology</option>
	<option value="CGTBSBSPR">Computer Graphics Technology</option>
	<option value="CSCIBSPR">Computer Science</option>
	<option value="CEMTBSPRP">Construction Engineering Management Technology</option>
	<option value="CJUSTBSPR">Criminal Justice</option>
	<option value="CYTTBSPR">Cytotechnology</option>
	<option value="DHYGBSPR">Dental Hygiene</option>
	<option value="DRWILLPR">Drawing &amp; Illustration</option>
	<option value="ECONBAPR">Economics</option>
	<option value="ECONQBAPR">Economics Quantitative</option>
	<option value="EEBSEEPR">Electrical Engineering</option>
	<option value="EETBSBSPR">Electrical Engineering Technology</option>
	<option value="ELEDBSEDP">Elementary Education</option>
	<option value="ENRENGRBSP">Energy Engineering</option>
	<option value="ENGBAPR">English</option>
	<option value="ENGEDBSEDP">English Teaching</option>
	<option value="ENSHBSPR">Environmental Health Science</option>
	<option value="ENVSCIBSPR">Environmental Science</option>
	<option value="PEDESBSKPR">Exercise Science</option>
	<option value="FINBSBPR">Finance</option>
	<option value="FMPTBSKPR">Fitness Management &amp; Personal Training</option>
	<option value="FISBSPUPR">Forensic &amp; Investigative Sciences</option>
	<option value="FRENBAPR">French</option>
	<option value="FNDSGPR">Furniture Design</option>
	<option value="GENSTBGS1P">General Studies</option>
	<option value="GEOGBAPR">Geography</option>
	<option value="GEOLBAPR">Geology</option>
	<option value="GERMBAPR">German</option>
	<option value="INTLBAPR">Global &amp; International Studies</option>
	<option value="HSSCIBSPR">Health Information Management</option>
	<option value="HSSCIBSPR">Health Sciences</option>
	<option value="HSMBSPR">Health Services Management</option>
	<option value="HETMBSPR">Healthcare Engineering Technology Management</option>
	<option value="HISTBAPR">History</option>
	<option value="HRMBSBPR">Human Resource Management</option>
	<option value="INDMJBAPR">Individualized Major</option>
	<option value="INFOBSPR">Informatics</option>
	<option value="ISPBFAPR">Integrative Studio Practice</option>
	<option value="INENBBSEP">Interdisciplinary Engineering</option>
	<option value="INTRSTPUPR">Interdisciplinary Studies</option>
	<option value="PIDTBSPR">Interior Design</option>
	<option value="IDESTBS">Interior Design Technology (Associate Degree)</option>
	<option value="JRNLMBAJP1">Journalism</option>
	<option value="LSTUBPRP">Labor Studies</option>
	<option value="LAWBAPR">Law in Liberal Arts</option>
	<option value="MGMTBBSBP">Management (Business)</option>
	<option value="MGMTSBSPAP">Management (SPEA)</option>
	<option value="MARKBSBPR">Marketing</option>
	<option value="MTHBPBSPR">Mathematics</option>
	<option value="MTCHBBSPR">Mathematics Teaching</option>
	<option value="MEBSMEPR">Mechanical Engineering</option>
	<option value="METBSBSPR">Mechanical Engineering Technology</option>
	<option value="BSMEMSPBSP">Mechanical Engineering/Motorsports Engineering</option>
	<option value="MEDPABSPAP">Media &amp; Public Affairs</option>
	<option value="MASBSBSPR">Media Arts &amp; Science</option>
	<option value="MDHMHLSBAP">Medical Humanities &amp; Health Studies</option>
	<option value="MITBSPR">Medical Imaging Technology</option>
	<option value="MTRSENGRPR">Motorsports Engineering</option>
	<option value="MUSTECHBSP">Music Technology</option>
	<option value="NEURSCBSPR">Neuroscience</option>
	<option value="NMTBSPR">Nuclear Medicine Technology</option>
	<option value="NURBSBSNP">Nursing</option>
	<option value="OLSBSBSPR">Organizational Leadership &amp; Supervision</option>
	<option value="PAINTPR">Painting</option>
	<option value="PARMDASPR">Paramedic Science</option>
	<option value="PHLSTBAPR1">Philanthropic Studies</option>
	<option value="PHILBAPR">Philosophy</option>
	<option value="PHOTOPR">Photography</option>
	<option value="PEDPHBSKPR">Physical Education &amp; Health Education Teaching</option>
	<option value="PHYSBBSPR">Physics</option>
	<option value="PHTCHBSPR">Physics Teaching</option>
	<option value="PHYSEEBSPR">Physics/Electrical Engineering</option>
	<option value="PHYSEEBSPR">Physics/Electrical Engineering</option>
	<option value="PLCYSBSPAP">Policy Studies</option>
	<option value="POLSBAPR">Political Science</option>
	<option value="PRINTPR">Printmaking</option>
	<option value="PSYBABAPR">Psychology</option>
	<option value="PHDHYBSPR">Public Health Dental Hygiene</option>
	<option value="PSMGTBSCJP">Public Safety Management</option>
	<option value="RADTBBSPR">Radiation Therapy</option>
	<option value="RADGRASPR">Radiography</option>
	<option value="RELSTBAPR">Religious Studies</option>
	<option value="RESTBBSPR">Respiratory Therapy</option>
	<option value="SCULPPR">Sculpture</option>
	<option value="SOCSTBSEDP">Social Studies</option>
	<option value="SWKBSWPR">Social Work</option>
	<option value="SOCBAPR">Sociology</option>
	<option value="SPANBAPR">Spanish</option>
	<option value="SPRTMGBSPR">Sports Management</option>
	<option value="SCMBSBPR">Supply Chain Management</option>
	<option value="SMTPCBSPAP">Sustainable Management &amp; Policy</option>
	<option value="TECCOMBSPR">Technical Communication</option>
	<option value="TCEMPR">Tourism, Conventions, &amp; Events Management</option>
	<option value="VISCOPR">Visual Communication Design</option>
	</select>
	</div>
	<div><label for="specialNeeds">
	Special Needs</label><textarea id="specialNeeds" name="specialNeeds" title="special needs"></textarea>
	</div>
	</div></div><div class="pbFooter secondaryPalette"><div class="bg"></div></div></div></div>



	


	<br />
	<br />

	<H2>Select Available Events <span class="required" title="required field">*</span></H2>
	<div class="noID"></div>
	
    
    <?php
	/*
		//code for dates input
		echo "<ul id='event_selected'>" . "<br />\n";
		echo "<li id='event_selected_default'>" . "<br />\n";
		echo "<input name='availableEvents' type='radio' />Please select a value" . "<br />\n";
		echo "</li>" . "<br />\n";
	
		foreach ( $campaign_children as $cc){
			
			echo "<li>" . "<br />\n";
				echo "<label for='" . $cc['Id'] . "' class='availableEvents'> Available Events Hidden Label</label>" . "<br />\n";
				echo "<input id='" . $cc['Id'] . "' data-capacity='" . $cc['Event_Capacity__c'] ."' data-date='" . $cc['StartDate'] ."' data-enddate='" . $cc['EndDate'] ."' data-endtime='" . $cc['End_Time__c'] ."' data-id='" . $cc['Id'] ."' data-name='" . $cc['Name'] ."' data-registrationstartdate='" . $cc['Registration_Start_Date__c'] ."' data-spacesleft='" . $cc['Event_Spaces_Left__c'] ."' data-status='" . $cc['Status'] ."' data-time='" . $cc['Start_Time__c'] ."' name='availableEvents' type='radio' value='" . $cc['Id'] ."' />" . "<br />\n";
			
				echo "<span style='font-weight: 800;'>Name: </span>" . $cc['Name'] . "<br />\n";
				echo "<span style='font-weight: 800;'>Registration: </span>" . $cc['Registration_Start_Date__c'] . "<br />\n";
				echo "<span style='font-weight: 800;'>Capacity: </span>" . $cc['Event_Capacity__c'] . "<br />\n";
				echo "<span style='font-weight: 800;'>Spaces Left: </span>" . $cc['Event_Spaces_Left__c'] . "<br />\n";
				echo "<span style='font-weight: 800;'>Start Date: </span>" . $cc['StartDate'] . "<br />\n";
				echo "<span style='font-weight: 800;'>End Date: </span>" . $cc['EndDate'] . "<br />\n";
				echo "<span style='font-weight: 800;'>Start Time: </span>" . $cc['Start_Time__c'] . "<br />\n";
				echo "<span style='font-weight: 800;'>Status: </span>" . $cc['Status'] . "<br />" . "<br />\n";
				echo "<span style='font-weight: 800;'>End Time: </span>" . $cc['End_Time__c'] . "<br />\n";
			echo "</li>" . "<br />";
	
		}
	
		echo "</ul>" . "<br />\n";
		echo "<input id=\"eventIDHidden\" type=\"hidden\" name=\"eventIDHidden\" />";
	*/
	?>
	<ul id='event_selected'><br />
<li id='event_selected_default'><br />
<input name='availableEvents' type='radio' />Please select a value<br />
</li><br />
<li><br />
<label for='7010q0000000p0pAAA' class='availableEvents'> Available Events Hidden Label</label><br />
<input id='7010q0000000p0pAAA' data-capacity='20' data-date='2017-09-30' data-enddate='' data-endtime=':' data-id='7010q0000000p0pAAA' data-name='IUPUI AM Tour' data-registrationstartdate='2017-06-16' data-spacesleft='20' data-status='Scheduled' data-time='10:00 AM' name='availableEvents' type='radio' value='7010q0000000p0pAAA' /><br />
<span style='font-weight: 800;'>Name: </span>IUPUI AM Tour<br />
<span style='font-weight: 800;'>Registration: </span>2017-06-16<br />
<span style='font-weight: 800;'>Capacity: </span>20<br />
<span style='font-weight: 800;'>Spaces Left: </span>20<br />
<span style='font-weight: 800;'>Start Date: </span>2017-09-30<br />
<span style='font-weight: 800;'>End Date: </span><br />
<span style='font-weight: 800;'>Start Time: </span>10:00 AM<br />
<span style='font-weight: 800;'>Status: </span>Scheduled<br /><br />
<span style='font-weight: 800;'>End Time: </span>:<br />
</li><br /><li><br />
<label for='7010q0000000okSAAQ' class='availableEvents'> Available Events Hidden Label</label><br />
<input id='7010q0000000okSAAQ' data-capacity='20' data-date='2017-09-13' data-enddate='' data-endtime=':' data-id='7010q0000000okSAAQ' data-name='IUPUI AM Tour' data-registrationstartdate='2017-06-16' data-spacesleft='20' data-status='Registration Closed' data-time='10:00 AM' name='availableEvents' type='radio' value='7010q0000000okSAAQ' /><br />
<span style='font-weight: 800;'>Name: </span>IUPUI AM Tour<br />
<span style='font-weight: 800;'>Registration: </span>2017-06-16<br />
<span style='font-weight: 800;'>Capacity: </span>20<br />
<span style='font-weight: 800;'>Spaces Left: </span>20<br />
<span style='font-weight: 800;'>Start Date: </span>2017-09-13<br />
<span style='font-weight: 800;'>End Date: </span><br />
<span style='font-weight: 800;'>Start Time: </span>10:00 AM<br />
<span style='font-weight: 800;'>Status: </span>Registration Closed<br /><br />
<span style='font-weight: 800;'>End Time: </span>:<br />
</li><br /><li><br />
<label for='7010q0000000p3YAAQ' class='availableEvents'> Available Events Hidden Label</label><br />
<input id='7010q0000000p3YAAQ' data-capacity='20' data-date='2017-09-08' data-enddate='' data-endtime=':' data-id='7010q0000000p3YAAQ' data-name='IUPUI AM Tour' data-registrationstartdate='2017-06-16' data-spacesleft='20' data-status='Registration Open' data-time='10:00 AM' name='availableEvents' type='radio' value='7010q0000000p3YAAQ' /><br />
<span style='font-weight: 800;'>Name: </span>IUPUI AM Tour<br />
<span style='font-weight: 800;'>Registration: </span>2017-06-16<br />
<span style='font-weight: 800;'>Capacity: </span>20<br />
<span style='font-weight: 800;'>Spaces Left: </span>20<br />
<span style='font-weight: 800;'>Start Date: </span>2017-09-08<br />
<span style='font-weight: 800;'>End Date: </span><br />
<span style='font-weight: 800;'>Start Time: </span>10:00 AM<br />
<span style='font-weight: 800;'>Status: </span>Registration Open<br /><br />
<span style='font-weight: 800;'>End Time: </span>:<br />
</li><br /><li><br />
<label for='7010q0000000p0uAAA' class='availableEvents'> Available Events Hidden Label</label><br />
<input id='7010q0000000p0uAAA' data-capacity='20' data-date='2017-09-01' data-enddate='' data-endtime=':' data-id='7010q0000000p0uAAA' data-name='IUPUI AM Tour' data-registrationstartdate='2017-06-16' data-spacesleft='20' data-status='Registration Closed' data-time='10:00 AM' name='availableEvents' type='radio' value='7010q0000000p0uAAA' /><br />
<span style='font-weight: 800;'>Name: </span>IUPUI AM Tour<br />
<span style='font-weight: 800;'>Registration: </span>2017-06-16<br />
<span style='font-weight: 800;'>Capacity: </span>20<br />
<span style='font-weight: 800;'>Spaces Left: </span>20<br />
<span style='font-weight: 800;'>Start Date: </span>2017-09-01<br />
<span style='font-weight: 800;'>End Date: </span><br />
<span style='font-weight: 800;'>Start Time: </span>10:00 AM<br />
<span style='font-weight: 800;'>Status: </span>Registration Closed<br /><br />
<span style='font-weight: 800;'>End Time: </span>:<br />
</li><br /></ul><br />
    
    
    <input id="eventIDHidden" type="hidden" name="eventIDHidden" />


	<div id="calendar_label"></div>
	<div id="calendar">
	</div>

	<div class="oneField ">
	<div class="inputWrapper custom-inputWrapper">
	<div class="keyMap">
	<p>
	Select a date by clicking the field below
	</p>

	<div class="keyMapSingleContainer">

	<div class="keyMapSingle keyMapSingleRegularSingle">
	</div>

	<span title="single event key color">Single Event</span>

	</div>

	<div class="keyMapSingleContainer">

	<div class="keyMapSingle keyMapSingleRegularMultiple">
	</div>

	<span title="multiple event key color">Multiple Events</span>

	</div>
	<div class="keyMapSingleContainer">

	<div class="keyMapSingle keyMapSingleClosed">
	</div>

	<span>Tour Is Full</span>

	</div>

	</div>

	<div id="date-selected-container" style="width:100%;">
	<label class="hiddenClass" for="date-selected">Select a date on the input following</label>
	<input type="text" class="date-selected" id="date-selected" placeholder="Select your tour date by clicking here" style="display:block;" />
	</div>

	<label class="select-multiple-paragraph" for="select-date-time">
	Select a time
	<span class="required" title="required field">*</span>
	</label>

	<select class="select-multiple" id="select-date-time">
	<option></option>
	</select>

	<div class="numberOfGuestsContain"><label for="numberOfGuests">
	Number of Guests <span class="required" title="required field">*</span></label><select id="numberOfGuests" name="numberOfGuests" class="numberOfGuests" size="1">	<option value=""></option>
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	</select>
	</div>

	</div>
	</div>





	<div id="test_field">

	</div><input type="submit" name="EventRegistrationCampusTour:campusVisitForm:j_id95" value="Submit" /><div id="EventRegistrationCampusTour:campusVisitForm:j_id97"></div>
	</form>
    

	</div>

	</section>


	<footer id="footer" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity" role="contentinfo">
	<div class="row pad">

	<p class="tagline">Fulfilling <span>the</span> Promise</p>


	<p class="copyright">
	<a href="https://www.iu.edu/copyright/index.html">Copyright</a> &copy; 2017 <span class="line-break-small">The Trustees of <a href="https://www.iu.edu/" itemprop="url"><span itemprop="name">Indiana University</span>
	</a>
	</span><span class="hide-on-mobile"> | </span><span class="line-break"><a href="/privacy" id="privacy-policy-link">Privacy Notice</a> | <a href="https://accessibility.iu.edu/help" id="accessibility-link" title="Having trouble accessing this web page because of a disability? Visit this page for assistance.">Accessibility Help</a></span>
	</p>
	</div>
	</footer>





	<script type="text/javascript">

		// select-multiple is a dynamic field that is added on calendar selected
		$(document).on("change", ".select-multiple", function() {
    var id_of_selected = $(this).val();

    $("[name=availableEvents][value='" + id_of_selected + "'").prop('checked', true);
    $('[id*="eventIDHidden"]').val(id_of_selected);
});

$(document).ready(function() {

    $('.select-multiple-paragraph').hide();
    $('.numberOfGuestsContain').hide();
    $('#select-date-time').hide();

    var obj_label_to_replace = $('#calendar_label');

    //creat variable with the name of the radio button group
    var radioGroupName = "availableEvents",
        radioGroupByName = $("[name*='" + radioGroupName + "']"),
        dataEventArray = [],
        dataDates = [],
        dataEventClosedArray = [],
        dataDatesClosed = [],
        months = [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec"
        ];

    //find radio with field that contains
    radioGroupByName.attr('name', radioGroupName);

    //loop through radioGroupByName and get data-date
    radioGroupByName.each(function() {
        if ($(this).data("id") != undefined) {
            var dateVar = $(this).data("date"),
				dateParsed = parseDate(dateVar),
                dateVar = dateVar.replace(" GMT ", " "),
                dateVarToDate = new Date(dateVar),
                day = dateParsed.getDate(),
                month = dateParsed.getMonth() + 1,
                year = dateParsed.getFullYear(),
                month_not_found = 0;


			function parseDate(input) {
			  var parts = input.match(/(\d+)/g);
			  // new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
			  return new Date(parts[0], parts[1]-1, parts[2]); // months are 0-based
			}
			
            for (var i = 0; i < months.length; i++) {
                var indexed = dateVar.indexOf(months[i]);
                if (indexed > -1) {
                    month_not_found++;
                    month = i + 1;
                }
            }

            if (month_not_found == 0) {
                console.log("month not valid or not found");
            }

            if (month < 10) {
                month = "0" + month.toString();
            } else if( month == 0) {
				console.log
            } else {
                month = month.toString();
            }
            if (day < 10) {
                day = "0" + day.toString();
            } else {
                day = day.toString();
            }
            year = year.toString();


            if ($(this).data("spacesleft") > 0 && $(this).data("status") == "Registration Open") {

                dataDates.push(month + "-" + day + "-" + year);

                dataEventArray.push({
                    id: $(this).data("id"),
                    data: {
                        name: $(this).data("name"),
                        registrationStartDate: $(this).data("registrationstartdate"),
                        capacity: $(this).data("capacity"),
                        spacesLeft: $(this).data("spacesleft"),
                        date: month + "-" + day + "-" + year,
                        endDate: $(this).data("enddate"),
                        time: $(this).data("time"),
                        endTime: $(this).data("endtime")
                    }
                });

            } else {

                dataDatesClosed.push(month.toString() + "-" + day.toString() + "-" + year.toString());

                dataEventClosedArray.push({
                    id: $(this).data("id"),
                    data: {
                        name: $(this).data("name"),
                        registrationStartDate: $(this).data("registrationstartdate"),
                        capacity: $(this).data("capacity"),
                        spacesLeft: $(this).data("spacesleft"),
                        date: month + "-" + day + "-" + year,
                        endDate: $(this).data("enddate"),
                        time: $(this).data("time"),
                        endTime: $(this).data("endtime")
                    }
                });

            }
        }
    });



    //define calendar
    if ($(window).innerWidth() > 800) {
        $('#date-selected').datepicker({
            onSelect: function(dateStuff) {

                var select_ion = [],
                    dateStuffReplaced = dateStuff.replace(/\//g, "-"),
                    indexNumbers = [],
                    i = 0,
                    amount_of_dates = 0;

                amount_of_dates = countInArray(dataDates, dateStuffReplaced);
                // indexNumbers.push( dataDates.indexOf( dateStuffReplaced ) );

                while (i < dataDates.length) {
                    //if the current dataDates is in array - record i (which is the index)
                    if (dataDates[i] == dateStuffReplaced) {
                        indexNumbers.push(i);
                    }
                    i++;
                }


                // i now will have an array of indexes where selected date is

                if (indexNumbers.length > 0) {


                    $('.select-multiple-paragraph').show();
                    $('.numberOfGuestsContain').show();
                    $('[id*="select-date-time"]').show();
                    $('[id*="date-selected"]').show()
                    $('.select-multiple option').remove();
                    // $('.select-multiple-paragraph').remove();
                    // $("<p class=\"select-multiple-paragraph\" name=\"timeSelected\">Select a time</p><select id=\"select-date-time\" class=\"select-multiple\">").insertAfter('.date-selected');

                    $('<option />', {
                        value: "",
                        text: " "
                    }).appendTo('.select-multiple');

                    $.each(indexNumbers, function(index, el) {
                        $('<option />', {
                            value: dataEventArray[el]['id'],
                            text: dataEventArray[el]['data']['time']
                        }).appendTo('.select-multiple');
                    });

                }

                // uses code from above page.



            },
            beforeShowDay: function(date) {
                var string = jQuery.datepicker.formatDate('mm-dd-yy', date),
                    string_slash = string.replace(/-/g, "/"),
                    amount_of_dates = 0;

                // see if there are duplicate values
                amount_of_dates = countInArray(dataDates, string);

                // see if there are closed values
                amount_of_closed_dates = countInArray(dataDatesClosed, string);



                // return a date if there is one - place into calendar
                if (amount_of_dates > 1) {
                    return [dataDates.indexOf(string) > -1, "regularUIDatesMultiple", "Multiple Dates - Select time below"];
                } else if (amount_of_dates == 1) {
                    return [dataDates.indexOf(string) > -1, "regularUIDatesSingle", "Single Date - Select time below"];
                } else {

                    // if date is closed
                    if (amount_of_closed_dates > 0) {
                        return [false, "closedUIDates", "Event Full - No time to select"];
                    } else {
                        return [false];
                    }
                }
            }
        });

        function countInArray(array, what) {
            var count = 0;
            for (var i = 0; i < array.length; i++) {
                if (array[i] === what) {
                    count++;
                }
            }
            return count;
        }
        //end window size greater than 800
    } else {
        $('#date-selected').hide();
        $('#date-selected-container').datepicker({
            onSelect: function(dateStuff) {

                var select_ion = [],
                    dateStuffReplaced = dateStuff.replace(/\//g, "-"),
                    indexNumbers = [],
                    i = 0,
                    amount_of_dates = 0;

                // console.log(dateStuff);
                $('#date-selected').val(dateStuff);

                amount_of_dates = countInArray(dataDates, dateStuffReplaced);
                // indexNumbers.push( dataDates.indexOf( dateStuffReplaced ) );

                while (i < dataDates.length) {
                    //if the current dataDates is in array - record i (which is the index)
                    if (dataDates[i] == dateStuffReplaced) {
                        indexNumbers.push(i);
                    }
                    i++;
                }


                // i now will have an array of indexes where selected date is

                if (indexNumbers.length > 0) {


                    $('.select-multiple-paragraph').show();
                    $('.numberOfGuestsContain').show();
                    $('[id*="select-date-time"]').show();
                    $('[id*="date-selected"]').show()
                    $('.select-multiple option').remove();
                    // $('.select-multiple-paragraph').remove();
                    // $("<p class=\"select-multiple-paragraph\" name=\"timeSelected\">Select a time</p><select id=\"select-date-time\" class=\"select-multiple\">").insertAfter('.date-selected');

                    $('<option />', {
                        value: "",
                        text: " "
                    }).appendTo('.select-multiple');

                    $.each(indexNumbers, function(index, el) {
                        $('<option />', {
                            value: dataEventArray[el]['id'],
                            text: dataEventArray[el]['data']['time']
                        }).appendTo('.select-multiple');
                    });

                }

                // uses code from above page.



            },
            beforeShowDay: function(date) {
                var string = jQuery.datepicker.formatDate('mm-dd-yy', date),
                    string_slash = string.replace(/-/g, "/"),
                    amount_of_dates = 0;

                // see if there are duplicate values
                amount_of_dates = countInArray(dataDates, string);

                // see if there are closed values
                amount_of_closed_dates = countInArray(dataDatesClosed, string);



                // return a date if there is one - place into calendar
                if (amount_of_dates > 1) {
                    return [dataDates.indexOf(string) > -1, "regularUIDatesMultiple", "Multiple Dates - Select time below"];
                } else if (amount_of_dates == 1) {
                    return [dataDates.indexOf(string) > -1, "regularUIDatesSingle", "Single Date - Select time below"];
                } else {

                    // if date is closed
                    if (amount_of_closed_dates > 0) {
                        return [false, "closedUIDates", "Event Full - No time to select"];
                    } else {
                        return [false];
                    }
                }
            }
        });

        function countInArray(array, what) {
            var count = 0;
            for (var i = 0; i < array.length; i++) {
                if (array[i] === what) {
                    count++;
                }
            }
            return count;
        }
    } //end of less than 800 window width


}); //end window load

	</script>
</body></html>