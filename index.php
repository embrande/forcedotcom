<?php
	$id = $_GET['id'];
	$page_load = 0;
	$page_success;

    $access_token = $_SESSION['access_token'];
    $instance_url = $_SESSION['instance_url'];

    // if (!isset($access_token) || $access_token == "") {
    //     die("Error - access token missing from session!");
    // }

    // if (!isset($instance_url) || $instance_url == "") {
    //     die("Error - instance URL missing from session!");
    // }

    // get all child accounts of parent $id - then loop through it below like before (will need to delete events)
    // if($page_load = 0){
    	// $campaign_children = show_campaigns($id);
    // }


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




	$('[id="mobileMenuButton"]').on('click', function(e){

	e.preventDefault(e);
	var nav = $('nav'),
	navMenu = $('nav ul');

	if( navMenu.hasClass("openMobileMenu") ){
	nav.removeClass("openNav");
	navMenu.removeClass("openMobileMenu");
	}else{
	nav.addClass("openNav");
	navMenu.addClass("openMobileMenu");
	}

	});



	$('[id*="startdate"]').change(function(e){

	var startdate = $(this).val(),
	startyear = $('[id*="startyear"]').val();

	if( startyear != ''){

	var termvalue = "4" + startyear.slice(-2) + startdate;
	$('[id*="termIDHidden"]').val(termvalue);
	}
	});
	$('[id*="startyear"]').change(function(e){

	var startdate = $('[id*="startdate"]').val(),
	startyear = $('[id*="startyear"]').val();

	if( startyear != ''){

	var termvalue = "4" + startyear.slice(-2) + startdate;

	$('[id*="termIDHidden"]').val(termvalue);
	}
	});


	$('[id*=us_yes_no] input').change(function(e){
	$('.countryChild').addClass('hiddenClass');
	if($(this).val() == "YES"){
	$('#countryYes').removeClass('hiddenClass');
	$('#countryNo').find("input").val("");
	}else{
	$('#countryNo').removeClass('hiddenClass');
	$('#countryYes').find("input").val("");
	$('#countryYes').find("select").val("");
	}
	});

	$('select[id*="majorList"]').change(function(e){

	var major = $('select[id*="majorList"] option:selected').html();

	$('[id*="acadPlanHidden"] option').filter(function() {
	return $(this).text() === major
	}).attr('selected', true);


	});

	$('select[id*="acadPlanHidden"]').change(function(e){

	var major = $('select[id*="acadPlanHidden"] option:selected').html();

	$('[id*="majorList"] option').filter(function() {
	return $(this).text() === major
	}).attr('selected', true);


	});



	$('select[id*="studentstatus"]').change(function(e){
	if($(this).val() == "FYU"){
	$('#highschoolcontain').removeClass('hiddenClass');
	}else{
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





	function validate_form(){
	$('.errorField').removeClass('errorField');
	$("#errorMessage").html("");

	error_message = "<div style=\"font-size:.89rem;font-weight:700;margin-left:-20px;\">Please correct the following:</div> <br />";


	/*
	FIRST NAME
	*/
	var firstname = $('[id*=firstname]'),
	firstnameval = firstname.val();
	if( firstnameval == "" ){
	firstname.addClass('errorField');
	error_number++;
	error_message += "First Name field is empty <br />";
	}else if( firstnameval.length < 2 ){
	firstname.addClass('errorField');
	error_number++;
	error_message += "First Name field needs a full name <br />";
	}

	/*
	LAST NAME
	*/
	var lastname = $('[id*=lastname]'),
	lastnameval = lastname.val();
	if( lastnameval == "" ){
	lastname.addClass('errorField');
	error_number++;
	error_message += "Last Name field is empty <br />";
	}else if( lastnameval.length < 2 ){
	lastname.addClass('errorField');
	error_number++;
	error_message += "Last Name field needs a full name <br />";
	}

	/*
	EMAIL
	*/
	var email = $('[id*=email]'),
	emailval = email.val();
	if( emailval == "" ){
	email.addClass('errorField');
	error_number++;
	error_message += "Email field is empty <br />";
	}else if( !emailval.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) ){
	email.addClass('errorField');
	error_number++;
	error_message += "Email field is not a valid email <br />";
	}

	/*
	PHONE NUMBER
	*/
	var mobilenumber = $('[id*=mobilephone]'),
	mobilenumberval = mobilenumber.val(),
	mobilenumberparsed = parseInt( mobilenumberval ),
	isnotanumber = isNaN( mobilenumberval.charAt(0) )
	afterIndex = mobilenumberval.substr(1);

	if( mobilenumberval.charAt(0) == "1" || mobilenumberval.charAt(0) == "+" ){
	var full = mobilenumberval.charAt(0) + afterIndex.replace(/[^\d.-]/g, '');

	mobilenumber.val( full );

	}else if( (mobilenumberval == "") || (isnotanumber) ){
	mobilenumber.val( mobilenumberval.replace(/[^\d.-]/g, '') );
	mobilenumber.addClass('errorField');
	error_number++;
	error_message += "Mobile Number field is either empty or needs a foreign/domestic number <br />";
	}else{
	mobilenumber.val( mobilenumberval.replace(/[^\d.-]/g, '') );
	}


	/*
	COUNTRY YES OR NO
	*/
	var country = $('input[id*="country"]'),
	countryischecked = country.is(':checked'),
	countryval = $('input[id*="country"]:checked').val();
	if( countryval == undefined ){
	country.addClass('errorField');
	error_number++;
	error_message += "The US resident field is not selected <br />";
	}else if( countryval == "YES" ){

	var address = $('[id*=address]'),
	addressval = address.val(),
	city = $('[id*=city]'),
	cityval = city.val(),
	state = $('[id*=state]'),
	stateval = state.val(),
	zipcode = $('[id*=zipcode]'),
	zipcodeval = zipcode.val();

	if(addressval == ""){
	address.addClass('errorField');
	error_number++;
	error_message += "Address field is empty <br />";
	}
	if(cityval == ""){
	city.addClass('errorField');
	error_number++;
	error_message += "City field is empty <br />";
	}
	if(stateval == ""){
	state.addClass('errorField');
	error_number++;
	error_message += "Address field is empty <br />";
	}
	if(zipcodeval == ""){
	zipcode.addClass('errorField');
	error_number++;
	error_message += "Address field is empty <br />";
	}

	}else if( countryval == "NO" ){
	var outsidecountry = $('[id*=outsidecountry]'),
	outsidecountryval = outsidecountry.val();

	if(outsidecountryval == ""){
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
	if( hispanicYesOrNoval == undefined ){
	hispanicYesOrNo.addClass('errorField');
	error_number++;
	error_message += "The hispanic yes/no field is not selected <br />";
	}else if(hispanicYesOrNoval == "YES"){



	}else if(hispanicYesOrNoval == "NO"){

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
	if( studentstatusval == "" ){
	studentstatus.addClass('errorField');
	error_number++;
	error_message += "Student Status field is empty <br />";
	}else if( studentstatusval == "FYU" ){
	var highschool = $('input[id*="highSchool"]')
	highschoolval = highschool.val();
	if( highschoolval == "" ){
	highschool.addClass('errorField');
	error_number++;
	error_message += "High School field is empty <br />";
	}
	}

	/*
	START DATE
	*/
	var startdate = $('[id*=startdate]'),
	startdateval = startdate.val();
	if( startdateval == "" ){
	startdate.addClass('errorField');
	error_number++;
	error_message += "Start Date field is empty <br />";
	}

	/*
	START YEAR
	*/
	var startyear = $('[id*=startyear]'),
	startyearval = startyear.val();
	if( startyearval == "" ){
	startyear.addClass('errorField');
	error_number++;
	error_message += "Start Year field is empty <br />";

	}

	/*
	MAJOR LIST
	*/
	var majorList = $('[id*=majorList]'),
	majorListval = majorList.val();
	if( majorListval == "" ){
	majorList.addClass('errorField');
	error_number++;
	error_message += "Proposed Major field is empty <br />";
	}

	/*
	EVENTS


	*/
	var availableEvents = $("#date-selected"),
	availableEventsval = availableEvents.val();
	if( availableEventsval == "" ){
	$('#date-selected').addClass('errorField');
	error_number++;
	error_message += "No Event Selected <br />";
	}else{

	var timeSelected = $('[id*=select-date-time]'),
	timeSelectedval = timeSelected.val(),
	numberOfGuests = $('[id*="numberOfGuests"]'),
	numberOfGuestsval = numberOfGuests.val();

	if(timeSelectedval == ""){

	console.log(numberOfGuestsval);
	timeSelected.addClass('errorField');
	error_number++;
	error_message += "No time selected <br />";

	}

	if(numberOfGuestsval == ""){

	numberOfGuests.addClass('errorField');
	error_number++;
	error_message += "No number of guests selected <br />";

	}
	}




	if(error_number > 0){
	$("#errorMessage").removeClass("hiddenClass").html(error_message);
	}


	}

	}


	</script>


	<section class="top">
		<div id="ribbon">
			<div id="ribbon-container">
				<div class="ribbon-trident">
					<img alt="Fall Fest at IUPUI" src="/campustouriupui/resource/1497695418000/IU_Form_branded/IU_Form_branded/iu_tab_web.png" width="800" />
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
	<form id="EventRegistrationCampusTour:campusVisitForm" name="EventRegistrationCampusTour:campusVisitForm" method="post" action="oauth.php" class="iu_form" enctype="application/x-www-form-urlencoded">
	<input type="hidden" name="EventRegistrationCampusTour:campusVisitForm" value="EventRegistrationCampusTour:campusVisitForm" />
	<script> if(!window.sfdcPage) { window.sfdcPage = new ApexPage(); }UserContext.initialize({"ampm":["AM","PM"],"isAccessibleMode":false,"uiSkin":"Theme3","salesforceURL":"http://iupuitour-indiana.cs64.force.com","dateFormat":"M/d/yyyy","language":"en_US","locale":"en_US","userName":"eventregistrationcampustouriupui@iupuitour-indiana.cs64.force.com","userId":"0050q000000Rm1h","isCurrentlySysAdminSU":false,"renderMode":"RETRO","startOfWeek":"1","vfDomainPattern":"indianauniversity--IUPUItour--(?:[^.]+).cs64.visual.force.com","auraDomain":"indianauniversity--IUPUItour.lightning.force.com","dateTimeFormat":"M/d/yyyy h:mm a","orgPreferences":[{"index":257,"name":"TabOrganizer","value":true},{"index":113,"name":"GroupTasks","value":true}],"siteUrlPrefix":"/campustouriupui","isDefaultNetwork":true,"labelLastModified":"1498688260000","today":"7/2/2017 10:04 PM","timeFormat":"h:mm a","userPreferences":[{"index":112,"name":"HideInlineEditSplash","value":false},{"index":114,"name":"OverrideTaskSendNotification","value":false},{"index":115,"name":"DefaultTaskSendNotification","value":false},{"index":119,"name":"HideUserLayoutStdFieldInfo","value":false},{"index":116,"name":"HideRPPWarning","value":false},{"index":87,"name":"HideInlineSchedulingSplash","value":false},{"index":88,"name":"HideCRUCNotification","value":false},{"index":89,"name":"HideNewPLESplash","value":false},{"index":90,"name":"HideNewPLEWarnIE6","value":false},{"index":122,"name":"HideOverrideSharingMessage","value":false},{"index":91,"name":"HideProfileILEWarn","value":false},{"index":93,"name":"HideProfileElvVideo","value":false},{"index":97,"name":"ShowPicklistEditSplash","value":false},{"index":92,"name":"HideDataCategorySplash","value":false},{"index":128,"name":"ShowDealView","value":false},{"index":129,"name":"HideDealViewGuidedTour","value":false},{"index":132,"name":"HideKnowledgeFirstTimeSetupMsg","value":false},{"index":104,"name":"DefaultOffEntityPermsMsg","value":false},{"index":135,"name":"HideNewCsnSplash","value":false},{"index":101,"name":"HideBrowserWarning","value":false},{"index":139,"name":"HideDashboardBuilderGuidedTour","value":false},{"index":140,"name":"HideSchedulingGuidedTour","value":false},{"index":180,"name":"HideReportBuilderGuidedTour","value":false},{"index":183,"name":"HideAssociationQueueCallout","value":false},{"index":194,"name":"HideQTEBanner","value":false},{"index":193,"name":"HideChatterOnboardingSplash","value":false},{"index":195,"name":"HideSecondChatterOnboardingSplash","value":false},{"index":270,"name":"HideIDEGuidedTour","value":false},{"index":282,"name":"HideQueryToolGuidedTour","value":false},{"index":196,"name":"HideCSIGuidedTour","value":false},{"index":271,"name":"HideFewmetGuidedTour","value":false},{"index":272,"name":"HideEditorGuidedTour","value":false},{"index":205,"name":"HideApexTestGuidedTour","value":false},{"index":206,"name":"HideSetupProfileHeaderTour","value":false},{"index":207,"name":"HideSetupProfileObjectsAndTabsTour","value":false},{"index":213,"name":"DefaultOffArticleTypeEntityPermMsg","value":false},{"index":214,"name":"HideSelfInfluenceGetStarted","value":false},{"index":215,"name":"HideOtherInfluenceGetStarted","value":false},{"index":216,"name":"HideFeedToggleGuidedTour","value":false},{"index":268,"name":"ShowChatterTab178GuidedTour","value":false},{"index":275,"name":"HidePeopleTabDeprecationMsg","value":false},{"index":276,"name":"HideGroupTabDeprecationMsg","value":false},{"index":224,"name":"HideUnifiedSearchGuidedTour","value":false},{"index":226,"name":"ShowDevContextMenu","value":false},{"index":227,"name":"HideWhatRecommenderForActivityQueues","value":false},{"index":228,"name":"HideLiveAgentFirstTimeSetupMsg","value":false},{"index":232,"name":"HideGroupAllowsGuestsMsgOnMemberWidget","value":false},{"index":233,"name":"HideGroupAllowsGuestsMsg","value":false},{"index":234,"name":"HideWhatAreGuestsMsg","value":false},{"index":235,"name":"HideNowAllowGuestsMsg","value":false},{"index":236,"name":"HideSocialAccountsAndContactsGuidedTour","value":false},{"index":237,"name":"HideAnalyticsHomeGuidedTour","value":false},{"index":238,"name":"ShowQuickCreateGuidedTour","value":false},{"index":245,"name":"HideFilePageGuidedTour","value":false},{"index":250,"name":"HideForecastingGuidedTour","value":false},{"index":251,"name":"HideBucketFieldGuide","value":false},{"index":263,"name":"HideSmartSearchCallOut","value":false},{"index":265,"name":"HideSocialProfilesKloutSplashScreen","value":false},{"index":273,"name":"ShowForecastingQuotaAttainment","value":false},{"index":280,"name":"HideForecastingQuotaColumn","value":false},{"index":301,"name":"HideManyWhoGuidedTour","value":false},{"index":298,"name":"HideFileSyncBannerMsg","value":false},{"index":299,"name":"HideTestConsoleGuidedTour","value":false},{"index":302,"name":"HideManyWhoInlineEditTip","value":false},{"index":303,"name":"HideSetupV2WelcomeMessage","value":false},{"index":312,"name":"ForecastingShowQuantity","value":false},{"index":313,"name":"HideDataImporterIntroMsg","value":false},{"index":314,"name":"HideEnvironmentHubLightbox","value":false},{"index":316,"name":"HideSetupV2GuidedTour","value":false},{"index":317,"name":"HideFileSyncMobileDownloadDialog","value":false},{"index":322,"name":"HideEnhancedProfileHelpBubble","value":false},{"index":328,"name":"ForecastingHideZeroRows","value":false},{"index":330,"name":"HideEmbeddedComponentsFeatureCallout","value":false},{"index":341,"name":"HideDedupeMatchResultCallout","value":false},{"index":340,"name":"HideS1BrowserUI","value":false},{"index":346,"name":"HideS1Banner","value":false},{"index":358,"name":"HideEmailVerificationAlert","value":false},{"index":354,"name":"HideLearningPathModal","value":false},{"index":359,"name":"HideAtMentionsHelpBubble","value":false},{"index":368,"name":"LightningExperiencePreferred","value":false}],"networkId":""});
	</script><div class="apexp"><div id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock" class="bPageBlock brandSecondaryBrd bDetailBlock secondaryPalette"><div class="pbBody">

	<div class="hiddenClass" id="errorMessage"></div>
	<div class="two-column-container">
	<div class=" two-column" id="panelSection" title="Personal Information">
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:firstname">
	First Name <span class="required" title="required field">*</span></label><input id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:firstname" type="text" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:firstname" class="focus" alt="first name input" title="first name" />
	</div>
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:lastname">
	Last Name <span class="required" title="required field">*</span></label><input id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:lastname" type="text" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:lastname" alt="last name input" title="last name" />
	</div>
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:email" style="line-height:.5;">
	Email <span class="required" title="required field">*</span></label>
	<span style="font-size:11px;font-weight:800;">USE AN EMAIL UNIQUE TO YOU; AVOID ADDRESSES SHARED BY YOUR FAMILY.</span><input id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:email" type="text" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:email" alt="password input" title="email" />
	</div>
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:mobilephone" style="line-height:.5;">
	Mobile Phone</label>
	<span style="font-size:11px;font-weight:800;">NUMERIC VALUES ONLY UNLESS A NON-DOMESTIC NUMBER</span><input id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:mobilephone" type="text" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:mobilephone" alt="mobile phone number" title="phone number" />
	</div>
	</div>
	<div id="us_yes_no"><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:country">
	Do you reside in the US? <span class="required" title="required field">*</span></label><fieldset style="border: none;"><legend>Select yes or no</legend><table role="presentation" id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:country" class="country">
	<tr>
	<td>
	<input type="radio" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:country" id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:country:0" value="YES" /><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:country:0"> yes</label></td>
	<td>
	<input type="radio" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:country" id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:country:1" value="NO" /><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:country:1"> no</label></td>
	</tr>
	</table></fieldset>
	</div>
	</div>
	<div class="countryChild hiddenClass" id="countryYes">
	<div class="two-column-container">
	<div class=" two-column">
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:address">
	Address</label><input id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:address" type="text" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:address" alt="us address" title="address" />
	</div>
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:city">
	City</label><input id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:city" type="text" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:city" class="countryYes" alt="city input" title="city" />
	</div>
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:state">
	State or Territory</label><select id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:state" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:state" class="stateList" size="1">	<option value=""></option>
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
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:zipcode">
	Zipcode</label><input id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:zipcode" type="text" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:zipcode" alt="zipcode input" title="zipcode" />
	</div>
	</div>
	</div>
	</div>
	<div class="countryChild hiddenClass" id="countryNo"><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:outsidecountry">
	Country</label><input id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:outsidecountry" type="text" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:outsidecountry" class="countryNo" alt="country if outside us input" title="outside us country" />
	</div>
	<div>
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:hispanicYesOrNo">
	Are you Hispanic or Latino?<span class="required" title="required field">*</span></label>
	</div>
	</div>
	<div id="hispanicYesNo">
	<div><fieldset style="border: none;"><legend>Select yes or no</legend><table role="presentation" id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:hispanicYesOrNo" class="hispanicYesOrNo">
	<tr>
	<td>
	<input type="radio" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:hispanicYesOrNo" id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:hispanicYesOrNo:0" value="YES" /><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:hispanicYesOrNo:0"> yes</label></td>
	<td>
	<input type="radio" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:hispanicYesOrNo" id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:hispanicYesOrNo:1" value="NO" /><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:hispanicYesOrNo:1"> no</label></td>
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
	<div><fieldset style="border: none;"><legend>Select all that apply</legend><table role="presentation" id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race">
	<tr>
	<td>
	<input name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race" id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race:0" value="americanIndian" type="checkbox" /><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race:0"> American Indian/Alaskan Native</label></td>
	<td>
	<input name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race" id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race:1" value="asian" type="checkbox" /><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race:1"> Asian</label></td>
	<td>
	<input name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race" id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race:2" value="africanAmerican" type="checkbox" /><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race:2"> Black / African American</label></td>
	<td>
	<input name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race" id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race:3" value="nativeHawaiian" type="checkbox" /><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race:3"> Native Hawaiian/Pacific Islander</label></td>
	<td>
	<input name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race" id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race:4" value="white" type="checkbox" /><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:race:4"> White</label></td>
	</tr>
	</table></fieldset>
	</div>
	</div>
	</div>
	<div>
	<div id="studenttype"><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:studentstatus">
	What best describes your status as a student? <span class="required" title="required field">*</span></label><select id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:studentstatus" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:studentstatus" size="1">	<option value=""></option>
	<option value="FYU">High School Student</option>
	<option value="TRU">Transfer Student</option>
	<option value="RTU">Returning IUPUI Student</option>
	<option value="ICU">IU Intercampus Transfer Student</option>
	</select>
	</div>
	<div class="hiddenClass" id="highschoolcontain"><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:highSchool">
	High School<span class="required" title="required field">*</span></label><input id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:highSchool" type="text" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:highSchool" class="countryNo" alt="input your high school if from the US" title="high school" />
	</div>
	</div>
	<div>
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:startdate">
	Intended Start Term? <span class="required" title="required field">*</span></label><select id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:startdate" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:startdate" size="1">	<option value=""></option>
	<option value="8">Fall (August)</option>
	<option value="2">Spring (January)</option>
	<option value="5">Summer Session I (May)</option>
	<option value="5">Summer Session II (June)</option>
	</select>
	</div>
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:startyear">
	Intended Start Year?<span class="required" title="required field">*</span></label><select id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:startyear" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:startyear" size="1">	<option value=""></option>
	<option value="2018">2018</option>
	<option value="2019">2019</option>
	<option value="2020">2020</option>
	</select>
	</div><input id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:termIDHidden" type="hidden" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:termIDHidden" />
	</div>
	<div>
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:majorList">
	Proposed Major <span class="required" title="required field">*</span></label><select id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:majorList" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:majorList" class="majorList" size="1">	<option value=""></option>
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
	</select><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:acadPlanHidden" class="hiddenClass">
	Proposed Major Hidden Field</label><select id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:acadPlanHidden" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:acadPlanHidden" class="hiddenClass" size="1">	<option value=""></option>
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
	<option value="F&amp;ISBSPUPR">Forensic &amp; Investigative Sciences</option>
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
	<div><label for="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:specialNeeds">
	Special Needs</label><textarea id="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:specialNeeds" name="EventRegistrationCampusTour:campusVisitForm:camputVisitPageBlock:specialNeeds" title="special needs"></textarea>
	</div>
	</div></div><div class="pbFooter secondaryPalette"><div class="bg"></div></div></div></div>

	<br />
	<br />

	<H2>Select Available Events <span class="required" title="required field">*</span></H2>
	<div class="noID"></div>
	<ul id="event_selected">
	<li id="event_selected_default"><input name="availableEvents" type="radio" />Please select a value</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:0:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Tue Jun 20 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000j7eAAA" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="3" data-status="Registration Open" data-time="10:00 AM" name="availableEvents" type="radio" VALUE="7010q0000000j7eAAA" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 3  <br />
	<span style="font-weight: 800;">Start Date:</span> Tue Jun 20 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 10:00 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:1:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Wed Jun 21 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000j7jAAA" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="14" data-status="Registration Open" data-time="10:00 AM" name="availableEvents" type="radio" VALUE="7010q0000000j7jAAA" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 14  <br />
	<span style="font-weight: 800;">Start Date:</span> Wed Jun 21 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 10:00 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:2:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Thu Jun 22 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000j7oAAA" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="17" data-status="Registration Open" data-time="10:00 AM" name="availableEvents" type="radio" VALUE="7010q0000000j7oAAA" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 17  <br />
	<span style="font-weight: 800;">Start Date:</span> Thu Jun 22 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 10:00 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:3:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Mon Jun 26 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000j7pAAA" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="16" data-status="Registration Open" data-time="10:00 AM" name="availableEvents" type="radio" VALUE="7010q0000000j7pAAA" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 16  <br />
	<span style="font-weight: 800;">Start Date:</span> Mon Jun 26 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 10:00 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:4:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Fri Jun 23 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000j7tAAA" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="13" data-status="Registration Open" data-time="10:00 AM" name="availableEvents" type="radio" VALUE="7010q0000000j7tAAA" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 13  <br />
	<span style="font-weight: 800;">Start Date:</span> Fri Jun 23 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 10:00 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:5:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Sat Jun 24 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000j7yAAA" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="15" data-status="Registration Open" data-time="9:30 AM" name="availableEvents" type="radio" VALUE="7010q0000000j7yAAA" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 15  <br />
	<span style="font-weight: 800;">Start Date:</span> Sat Jun 24 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 9:30 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:6:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Tue Jun 27 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000j83AAA" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="20" data-status="Registration Open" data-time="10:00 AM" name="availableEvents" type="radio" VALUE="7010q0000000j83AAA" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 20  <br />
	<span style="font-weight: 800;">Start Date:</span> Tue Jun 27 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 10:00 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:7:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Wed Jun 28 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000j88AAA" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="18" data-status="Registration Open" data-time="10:00 AM" name="availableEvents" type="radio" VALUE="7010q0000000j88AAA" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 18  <br />
	<span style="font-weight: 800;">Start Date:</span> Wed Jun 28 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 10:00 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:8:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Sat Jul 01 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000j8cAAA" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="19" data-status="Registration Open" data-time="9:30 AM" name="availableEvents" type="radio" VALUE="7010q0000000j8cAAA" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 19  <br />
	<span style="font-weight: 800;">Start Date:</span> Sat Jul 01 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 9:30 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:9:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Mon Jul 03 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000j8hAAA" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="13" data-status="Registration Open" data-time="10:00 AM" name="availableEvents" type="radio" VALUE="7010q0000000j8hAAA" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 13  <br />
	<span style="font-weight: 800;">Start Date:</span> Mon Jul 03 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 10:00 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:10:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Tue Jul 04 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000j8mAAA" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="10" data-status="Registration Open" data-time="10:00 AM" name="availableEvents" type="radio" VALUE="7010q0000000j8mAAA" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 10  <br />
	<span style="font-weight: 800;">Start Date:</span> Tue Jul 04 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 10:00 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:11:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Tue Jul 04 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000j8rAAA" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="15" data-status="Registration Open" data-time="10:00 AM" name="availableEvents" type="radio" VALUE="7010q0000000j8rAAA" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 15  <br />
	<span style="font-weight: 800;">Start Date:</span> Tue Jul 04 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 10:00 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:12:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Thu Jun 01 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000k2kAAA" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="2" data-status="Registration Open" data-time="10:00 AM" name="availableEvents" type="radio" VALUE="7010q0000000k2kAAA" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 2  <br />
	<span style="font-weight: 800;">Start Date:</span> Thu Jun 01 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 10:00 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:13:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Fri Jun 23 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000lFIAAY" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="20" data-status="Registration Open" data-time="4:00 AM" name="availableEvents" type="radio" VALUE="7010q0000000lFIAAY" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 20  <br />
	<span style="font-weight: 800;">Start Date:</span> Fri Jun 23 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 4:00 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:14:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Fri Jun 23 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000lFNAAY" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="16" data-status="Registration Open" data-time="9:45 AM" name="availableEvents" type="radio" VALUE="7010q0000000lFNAAY" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 16  <br />
	<span style="font-weight: 800;">Start Date:</span> Fri Jun 23 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 9:45 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:15:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Fri Jun 23 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000lG1AAI" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="20" data-status="Registration Open" data-time="9:00 AM" name="availableEvents" type="radio" VALUE="7010q0000000lG1AAI" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 20  <br />
	<span style="font-weight: 800;">Start Date:</span> Fri Jun 23 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 9:00 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:16:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Mon Jun 26 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000lG6AAI" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="20" data-status="Registration Open" data-time="3:15 PM" name="availableEvents" type="radio" VALUE="7010q0000000lG6AAI" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 20  <br />
	<span style="font-weight: 800;">Start Date:</span> Mon Jun 26 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 3:15 PM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:17:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Mon Jun 26 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000lGBAAY" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="20" data-status="Registration Open" data-time="11:15 AM" name="availableEvents" type="radio" VALUE="7010q0000000lGBAAY" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 20  <br />
	<span style="font-weight: 800;">Start Date:</span> Mon Jun 26 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 11:15 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:18:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Mon Jun 26 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000lGGAAY" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="20" data-status="Registration Open" data-time="12:15 PM" name="availableEvents" type="radio" VALUE="7010q0000000lGGAAY" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 20  <br />
	<span style="font-weight: 800;">Start Date:</span> Mon Jun 26 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 12:15 PM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	<li><label for="EventRegistrationCampusTour:campusVisitForm:j_id84:19:availableEvents" class="availableEvents">
	Available Events Hidden Label</label>
	<input data-capacity="20" data-date="Fri Jun 30 00:00:00 GMT 2017" data-enddate="" data-endtime=":" data-id="7010q0000000lGLAAY" data-name="IUPUI AM Tour" data-registrationstartdate="Fri Jun 16 00:00:00 GMT 2017" data-spacesleft="20" data-status="Registration Open" data-time="10:15 AM" name="availableEvents" type="radio" VALUE="7010q0000000lGLAAY" />
	<span style="font-weight: 800;">Name:</span> IUPUI AM Tour  <br />
	<span style="font-weight: 800;">Registration Start Date:</span> Fri Jun 16 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">Capacity:</span> 20  <br />
	<span style="font-weight: 800;">Spaces Left:</span> 20  <br />
	<span style="font-weight: 800;">Start Date:</span> Fri Jun 30 00:00:00 GMT 2017  <br />
	<span style="font-weight: 800;">End Date:</span>   <br />
	<span style="font-weight: 800;">Start Time:</span> 10:15 AM  <br />
	<span style="font-weight: 800;">End Time:</span> :
	</li>
	</ul><input id="EventRegistrationCampusTour:campusVisitForm:eventIDHidden" type="hidden" name="EventRegistrationCampusTour:campusVisitForm:eventIDHidden" />


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

	<div class="numberOfGuestsContain"><label for="EventRegistrationCampusTour:campusVisitForm:numberOfGuests">
	Number of Guests <span class="required" title="required field">*</span></label><select id="EventRegistrationCampusTour:campusVisitForm:numberOfGuests" name="EventRegistrationCampusTour:campusVisitForm:numberOfGuests" class="numberOfGuests" size="1">	<option value=""></option>
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
	</form><span id="ajax-view-state-page-container" style="display: none"><span id="ajax-view-state" style="display: none"><input type="hidden"  id="com.salesforce.visualforce.ViewState" name="com.salesforce.visualforce.ViewState" value="i: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" /><input type="hidden"  id="com.salesforce.visualforce.ViewStateVersion" name="com.salesforce.visualforce.ViewStateVersion" value="201706282200410518" /><input type="hidden"  id="com.salesforce.visualforce.ViewStateMAC" name="com.salesforce.visualforce.ViewStateMAC" value="AGV5SnViMjVqWlNJNkltNW9NWGhKZEhSUFdqWXhkalZaZEdKUGRVZDZXR1pZV2pWc2MzWnZkV05GT1RaSlJYZHBOMkZUWkRoY2RUQXdNMlFpTENKMGVYQWlPaUpLVjFRaUxDSmhiR2NpT2lKSVV6STFOaUlzSW10cFpDSTZJbnRjSW5SY0lqcGNJakF3UkRCeE1EQXdNREF3TUZORWQxd2lMRndpZGx3aU9sd2lNREF3TURBd01EQXdNREF3TURBd1hDSXNYQ0poWENJNlhDSjJabk5wWjI1cGJtZHJaWGxjSWl4Y0luVmNJanBjSWpBd05UQnhNREF3TURBd1VtMHhhRndpZlNJc0ltTnlhWFFpT2xzaWFXRjBJbDBzSW1saGRDSTZNVFE1T1RBek16QTVOemN5TXl3aVpYaHdJam93ZlE9PS4uN0ZHTGN4X2hzY1NtV2pfZTQwNUJQR29YUU9FcWhLUDFkOGZUc0pkRk1NMD0=" /></span></span>



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
		$(document).on("change", ".select-multiple", function(){
		var id_of_selected = $(this).val();

		$("[name=availableEvents][value='" + id_of_selected + "'").prop('checked', true);
		$('[id*="eventIDHidden"]').val(id_of_selected);
		});

		$( document ).ready(function() {

		$('.select-multiple-paragraph').hide();
		$('.numberOfGuestsContain').hide();
		$('#select-date-time').hide();

		var obj_label_to_replace = $('#calendar_label');

		//$("<div class=\"oneField \"><div class=\"inputWrapper custom-inputWrapper\"><input class=\"date-selected\" placeholder=\"Select your tour date by clicking here\" id=\"date-selected\" placeholder default=\"Select Date\" style=\"display:block;\"></div></div>").insertBefore(obj_label_to_replace);

		//place stuff after the newly created date-selected
		//$("<div class=\"keyMap\"><p>Select a date by clicking the field below</p><div class=\"keyMapSingleContainer\"><div class=\"keyMapSingle keyMapSingleRegularSingle\"></div><span>Single Event</span></div><div class=\"keyMapSingleContainer\"><div class=\"keyMapSingle keyMapSingleRegularMultiple\"></div><span>Multiple Events</span></div><div class=\"keyMapSingleContainer\"><div class=\"keyMapSingle keyMapSingleClosed\"></div><span>Tour Is Full</span></div></div>").insertBefore('.date-selected');



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
		radioGroupByName.each(function(){
		if( $(this).data("id") != undefined ){
		var dateVar = $(this).data("date"),
		dateVar = dateVar.replace(" GMT ", " "),
		dateVarToDate = new Date(dateVar),
		day = dateVarToDate.getDate(),
		month,
		year = dateVarToDate.getFullYear(),
		month_not_found = 0;


		for( var i = 0; i < months.length; i++){
		var indexed = dateVar.indexOf( months[i] );
		if(indexed > -1){
		month_not_found++;
		month = i + 1;
		}
		}

		if(month_not_found == 0){
		console.log("month not valid or not found");
		}

		if (month < 10){
		month = "0" + month.toString();
		}else{
		month = month.toString();
		}
		if(day < 10){
		day = "0" + day.toString();
		}else{
		day = day.toString();
		}
		year = year.toString();


		if($(this).data("spacesleft") > 0 && $(this).data("status") == "Registration Open"){

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

		}else{

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
		if( $(window).innerWidth() > 800 ){
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
		}else{
			$('#date-selected').hide();
			$('#date-selected-container').datepicker({
			    onSelect: function(dateStuff) {

			        var select_ion = [],
			            dateStuffReplaced = dateStuff.replace(/\//g, "-"),
			            indexNumbers = [],
			            i = 0,
			            amount_of_dates = 0;

			        // console.log(dateStuff);
			        $('#date-selected').val( dateStuff );

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
		}//end of less than 800 window width


		});//end window load

	</script>
</body></html>