<?php
session_start();

if(!isset($_SESSION['userId']))
{
  header('location:login.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Hiring Poster Maker</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.3/html2canvas.js"></script>
   <script type="module" src="https://unpkg.com/@microsoft/fast-components"></script>

   <!-- Google font Roboto -->

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<?php require "assets/autoloader.php" ?>

	<style type="text/css" id="#some2">
	<?php include 'css/myStyle.css'; ?>		
	

.cover{padding: 10px;}

.cvBody{border:1px solid black; min-height: 444px;}

.cv-head{background:#00a327; height: 150px; padding: 0px}

.photo{background: #00a327; height:222px;}

.cv-content{ background: #FAF2EF; padding:30px 10px 10px 20px;}

.center{text-align: center; padding: 5px 160px 0px 0px; }

.flex{display: inline-flex;}

.about-tab{background:#025c17; padding: 11px}

.about-head{ color: #C40900; /* #3e2762 */ font-size: 15pt; font-variant: small-caps; margin: 5px 2px; font-family: 'Roboto', sans-serif; font-weight: bold; line-height: 18px;}


/* Right side */

.body-item{ padding-left: 390px; color: #000000; /* #fbd1c1 */ }

.body-head{font-size: 17pt; font-family: 'Roboto', sans-serif;}

.body-details{padding:0 0 0 44px; }

.detail-item,.info-item{margin-top: 11px; line-height: 26px; }

.detail-item-head{font-size: 15pt; font-family: 'Roboto', sans-serif; line-height: 14.8PX}

.info-item-head{ font-size: 12pt; float: left;}
.info-item-body{ font-size: 12pt; float: right}
.detail-item-text{font-size: 12pt;}

.detail-item-body{font-size: 16px; }

#cvname{font-size: 14pt}
.circle{border-radius: 50%}
#dialogCover{position: absolute; height: 150%;background: black;top: 0;opacity: .8}








/*new CSS*/

 body {
	font-family: 'Roboto', sans-serif;

	/* font-family: 'Kalpurush', sans-serif; */
	
	font-family: 'AdorshoLipi', sans-serif;
}


.photo, .about-tab, .cv-content {
  position: absolute;
}
 
.photo {

  background: #C7C9C7;
  color: black;
  width: ;
  height: 380px;

  top: 10px;
  left: 10px;
  z-index: 10;
  
}

 
.about-tab {
  /* background: #fae8e8; */ /* #fbd1c1 */

  /* background-color: red; */
  background-image: linear-gradient(to right, #f5bcbc, #f4f0f7);

  border-radius: 25px;
  color: black;
  padding: 9px;

  width: 375px;
  height: 650px;
  outline: 2px solid #000000;
  top: 375px;
  left: 45px;
  z-index: 100;
}


.cv-content {
  background: #a0e5f8; /* #2c7e70 */
  width: 765px;
  height: 650px;
  padding: 10px;

  top: 450px;
  left: 10px;
  z-index: 50;

}

/* BG and Top */


.one, .BGimg{
	position: absolute;

}

.BGimg {
  top: 0px;
  left: 0px;
  z-index: 10;
}






/*Top Part*/

.one, .two, .three, .four, .five {
  position: absolute;
}


/* Top */
.one {
  background: #fffaf9; /* #a7c4ac */
  width: 765px;
  height: 500px;
  top: 6px;
  left: 10px;
  z-index: 50;

}

.a { padding-left: 80px;
}

.two {
  top: 10px;
  left: 10px;
  z-index: 100;
}


 /*Poster Title */
.five {

  top: 45px;
  left: 255px;
  z-index: 50;
}

/* poster Title */
#cvExp1name{
	font-size: 30px;
	color: black;
	line-height: 34px;
}


/*Job Title*/
.four {
  top: 120px;
  left: 110px;
  right: 10px; 
  z-index: 50;
}

/* Job Title */

#cvExp2name{
	font-size: 38px;
	color: black;
	line-height: 35px;

}


/*Job Role*/

.three {
  top: 260px;
  left: 45px;
  right: 65px;
  z-index: 100;
}


/* Job Role */
#cvExp3name{

	font-size: 24px;
	color: black;
	line-height: 28px;


}

/* left small latter */

.about-details li{font-size: 20px; margin: 5px; 	/* font-weight: bold; */}

.about-details{
	color: #102c72;
	padding:5px; 
	font-family: 'Roboto', sans-serif;

}



/* right small latter */

#cvEdu1name, #cvEdu2name, #cvEdu3name, #cvEdu4name, #cvEdu5name, #cvEdu6name{
	font-size: 18px;
	
}

#cvEdu5name{
	line-height: 20PX;
}

 cvEdu4name{

	font-family: 'Roboto', sans-serif;

	/* font-weight: bold; */

	font-size: 20px;
	color: #000000;


}



/*image download*/

  #example{
      background: lightblue;
      display: flex;
      align-items: center;
      justify-content: center;

      width: 766px;
      height: 1091px;
    }

    .XYZ{
    	font-size: 16px;
    	line-height: 20px;
    	text-align: justify;
    	padding-right: 15px;
    	
    }


/* RESPONSIBILITIES */

    #cvphone-1, #cvphone-2, #cvphone-3, #cvphone-4{
    	line-height: 22px;

    }

/* REQUIREMENT */

    #cvskill-1, #cvskill-2, #cvskill-3, #cvskill-4, #cvskill-5{
    	line-height: 22px;

    }



</style>

</head>


<!-- Logo Uplode script -->

<script>

$(document).ready(function (e) {

	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		e.preventDefault();
		
		$.ajax({
					url: "uploadImg.php", // Url to which the request is send
					type: "POST",             // Type of request to be send, called as method
					data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false,       // The content type used when sending data to the server.
					cache: false,             // To unable request pages to be cached
					processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
					
						$("#picSpan").html(data);
					}
				});
	}));


	// LOGO Function to preview image after validation
	$(function() 
	{
		$("#file").change(function() 
		{
			$("#uploadForm").submit();
		});
	});

	$("#width").change(function(){$('#image_preview').attr('width', ''+$(this).val()+'px');});
	$("#height").change(function(){$('#image_preview').attr('height', ''+$(this).val()+'px');});
	$("#radius").click(function()
	{
		$('#image_preview').addClass('circle');
		$(this).hide();
		$("#resetRadius").fadeIn();
	});
	$("#resetRadius").click(function()
		{
			$('#image_preview').removeClass('circle');
			$(this).hide();
			$("#radius").fadeIn();
		});

});

</script>





<!-- Background image Uplode script -->

<script>
$(document).ready(function (e) {

	$("#uploadFormBG").on('submit',(function(e) {
		e.preventDefault();
		e.preventDefault();
		
		$.ajax({
					url: "uploadImg_BG.php", // Url to which the request is send
					type: "POST",             // Type of request to be send, called as method
					data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false,       // The content type used when sending data to the server.
					cache: false,             // To unable request pages to be cached
					processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
					
						$("#picSpanBG").html(data);
					}
				});
	}));

	// Function to preview image after validation
	$(function() 
	{
		$("#fileBG").change(function() 
		{
			$("#uploadFormBG").submit();
		});
	});

	$("#widthBG").change(function(){$('#image_previewBG').attr('width', ''+$(this).val()+'px');});
	$("#heightBG").change(function(){$('#image_previewBG').attr('height', ''+$(this).val()+'px');});
	$("#radiusBG").click(function()
	{
		$('#image_previewBG').addClass('circle');
		$(this).hide();
		$("#resetRadiusBG").fadeIn();
	});
	$("#resetRadiusBG").click(function()
		{
			$('#image_previewBG').removeClass('circle');
			$(this).hide();
			$("#radiusBG").fadeIn();
		});

});


</script>

<!-- END Background image Uplode script -->







<!-- QR Uplode script -->


<script>
$(document).ready(function (e) {

	$("#uploadFormQR").on('submit',(function(e) {
		e.preventDefault();
		e.preventDefault();
		
		$.ajax({
					url: "uploadImg_QR.php", // Url to which the request is send
					type: "POST",             // Type of request to be send, called as method
					data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false,       // The content type used when sending data to the server.
					cache: false,             // To unable request pages to be cached
					processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
					
						$("#picSpanQR").html(data);
					}
				});
	}));

	// Function to preview image after validation
	$(function() 
	{
		$("#fileQR").change(function() 
		{
			$("#uploadFormQR").submit();
		});
	});

	$("#widthQR").change(function(){$('#image_previewQR').attr('width', ''+$(this).val()+'px');});
	$("#heightQR").change(function(){$('#image_previewQR').attr('height', ''+$(this).val()+'px');});
	$("#radiusQR").click(function()
	{
		$('#image_previewQR').addClass('circle');
		$(this).hide();
		$("#resetRadiusQR").fadeIn();
	});
	$("#resetRadiusQR").click(function()
		{
			$('#image_previewQR').removeClass('circle');
			$(this).hide();
			$("#radiusQR").fadeIn();
		});

});


</script>

<!-- END QR Uplode script -->











<script>
	$(document).ready(function()
	{
		//yaha cv header handle krne k waste
		$("#name").keyup(function(){$("#cvname").text($(this).val());});
		$("#aboutme").keyup(function(){$("#cvaboutme").text($(this).val());});

		$("#langText").keyup(function(){$("#cvphone-1").text($(this).val());});
		$("#langText-2").keyup(function(){$("#cvphone-2").text($(this).val());});
		$("#langText-3").keyup(function(){$("#cvphone-3").text($(this).val());});
		$("#langText-4").keyup(function(){$("#cvphone-4").text($(this).val());});

		

		$("#address").keyup(function(){$("#cvaddress").text($(this).val());});

		/*REQUIREMENT type text*/

		$("#skill-1").keyup(function(){$("#cvskill-1").text($(this).val());});
		$("#skill-2").keyup(function(){$("#cvskill-2").fadeIn().text($(this).val());});
		$("#skill-3").keyup(function(){$("#cvskill-3").fadeIn().text($(this).val());});
		$("#skill-4").keyup(function(){$("#cvskill-4").fadeIn().text($(this).val());});
		$("#skill-5").keyup(function(){$("#cvskill-5").fadeIn().text($(this).val());});

		//exp ko hide wala btn
		$("#hideExpBtn").click(function(){$("#expMenu").slideToggle()});
		$("#hidePersonalBtn").click(function(){$("#personalMenu").slideToggle()});
		$("#hideLangBtn").click(function(){$("#cvphone-1").slideToggle()});
		$("#hideLangBtn-2").click(function(){$("#cvphone-2").slideToggle()});
		$("#hideLangBtn-3").click(function(){$("#cvphone-3").slideToggle()});
		$("#hideLangBtn-4").click(function(){$("#cvphone-4").slideToggle()});


		/*REQUIREMENT hide*/

		$("#hideLangBtn-5").click(function(){$("#cvskill-1").slideToggle()});
		$("#hideLangBtn-6").click(function(){$("#cvskill-2").slideToggle()});
		$("#hideLangBtn-7").click(function(){$("#cvskill-3").slideToggle()});
		$("#hideLangBtn-8").click(function(){$("#cvskill-4").slideToggle()});
		$("#hideLangBtn-9").click(function(){$("#cvskill-5").slideToggle()});




		$("#hideCustomBtn").click(function(){$("#customMenu").slideToggle()});
		$("#hideCustomBtn2").click(function(){$("#customMenu2").slideToggle()});
		//cv content handelr

		//pehle just tab click show edu content
		$("#eduTab2").click(function(){$("#cvEdu2").fadeIn();});
		$("#eduTab3").click(function(){$("#cvEdu3").fadeIn();});
		$("#eduTab4").click(function(){$("#cvEdu4").fadeIn();});
		$("#eduTab5").click(function(){$("#cvEdu5").fadeIn();});
		$("#eduTab6").click(function(){$("#cvEdu6").fadeIn();});
		
		//ab just tab click for show expernc content
		$("#expTab2").click(function(){$("#cvExp2").fadeIn();});
		$("#expTab3").click(function(){$("#cvExp3").fadeIn();});
		$("#expTab4").click(function(){$("#cvExp4").fadeIn();});
		$("#expTab5").click(function(){$("#cvExp5").fadeIn();});
		$("#expTab6").click(function(){$("#cvExp6").fadeIn();});
		
		//ab agr woh edu tab hide ni krna chahta
		$("#eduBtn1").click(function(){$("#cvEdu1").slideToggle();});


		$("#eduBtn2").click(function(){$("#cvEdu2").slideToggle();});
		$("#eduBtn3").click(function(){$("#cvEdu3").slideToggle();});
		$("#eduBtn4").click(function(){$("#cvEdu4").slideToggle();});
		$("#eduBtn5").click(function(){$("#cvEdu5").slideToggle();});
		$("#eduBtn6").click(function(){$("#cvEdu6").slideToggle();});
		
		//This is the tab hidden part 
		$("#expBtn2").click(function(){$("#cvExp2").slideToggle();});
		$("#expBtn3").click(function(){$("#cvExp3").slideToggle();});
		$("#expBtn4").click(function(){$("#cvExp4").slideToggle();});
		$("#expBtn5").click(function(){$("#cvExp5").slideToggle();});
		$("#expBtn6").click(function(){$("#cvExp6").slideToggle();});




		//ab jb woh likhe ga tb cv me bhi auto likha jaye is ky lye hota hai keyup
		$("#edu1name").keyup(function(){$("#cvEdu1name").text($(this).val());});

		$("#edu2name").keyup(function(){$("#cvEdu2name").text($(this).val());});
		$("#edu3name").keyup(function(){$("#cvEdu3name").text($(this).val());});
		$("#edu4name").keyup(function(){$("#cvEdu4name").text($(this).val());});
		$("#edu5name").keyup(function(){$("#cvEdu5name").text($(this).val());});
		$("#edu6name").keyup(function(){$("#cvEdu6name").text($(this).val());});
		
		//this is for passing year education tab
		$("#edu1py").keyup(function(){$("#cvEdu1py").text($(this).val());});
		$("#edu2py").keyup(function(){$("#cvEdu2py").text($(this).val());});
		$("#edu3py").keyup(function(){$("#cvEdu3py").text($(this).val());});
		$("#edu4py").keyup(function(){$("#cvEdu4py").text($(this).val());});
		$("#edu5py").keyup(function(){$("#cvEdu5py").text($(this).val());});
		$("#edu6py").keyup(function(){$("#cvEdu6py").text($(this).val());});
		
		//this is for insititution 
		$("#edu1insiti").keyup(function(){$("#cvEdu1insiti").text($(this).val());});
		$("#edu2insiti").keyup(function(){$("#cvEdu2insiti").text($(this).val());});
		$("#edu3insiti").keyup(function(){$("#cvEdu3insiti").text($(this).val());});
		$("#edu4insiti").keyup(function(){$("#cvEdu4insiti").text($(this).val());});
		$("#edu5insiti").keyup(function(){$("#cvEdu5insiti").text($(this).val());});
		$("#edu6insiti").keyup(function(){$("#cvEdu6insiti").text($(this).val());});
		
		// ab yeh rha marks k lye
		$("#edu1marks").keyup(function(){$("#cvEdu1marks").text($(this).val());});
		$("#edu2marks").keyup(function(){$("#cvEdu2marks").text($(this).val());});
		$("#edu3marks").keyup(function(){$("#cvEdu3marks").text($(this).val());});
		$("#edu4marks").keyup(function(){$("#cvEdu4marks").text($(this).val());});
		$("#edu5marks").keyup(function(){$("#cvEdu5marks").text($(this).val());});
		$("#edu6marks").keyup(function(){$("#cvEdu6marks").text($(this).val());});

		//ab jb woh likhe ga tb cv me bhi auto likha jaye is ky lye hota hai keyup
		$("#exp1start").keyup(function(){$("#cvExp1start").text($(this).val());});
		$("#exp2start").keyup(function(){$("#cvExp2start").text($(this).val());});
		$("#exp3start").keyup(function(){$("#cvExp3start").text($(this).val());});
		$("#exp4start").keyup(function(){$("#cvExp4start").text($(this).val());});
		$("#exp5start").keyup(function(){$("#cvExp5start").text($(this).val());});
		$("#exp6start").keyup(function(){$("#cvExp6start").text($(this).val());});
		
		//this is for passing year education tab
		$("#exp1leave").keyup(function(){$("#cvExp1leave").text($(this).val());});
		$("#exp2leave").keyup(function(){$("#cvExp2leave").text($(this).val());});
		$("#exp3leave").keyup(function(){$("#cvExp3leave").text($(this).val());});
		$("#exp4leave").keyup(function(){$("#cvExp4leave").text($(this).val());});
		$("#exp5leave").keyup(function(){$("#cvExp5leave").text($(this).val());});
		$("#exp6leave").keyup(function(){$("#cvExp6leave").text($(this).val());});
		
		//this is for insititution 
		$("#exp1insiti").keyup(function(){$("#cvExp1insiti").text($(this).val());});
		$("#exp2insiti").keyup(function(){$("#cvExp2insiti").text($(this).val());});
		$("#exp3insiti").keyup(function(){$("#cvExp3insiti").text($(this).val());});
		$("#exp4insiti").keyup(function(){$("#cvExp4insiti").text($(this).val());});
		$("#exp5insiti").keyup(function(){$("#cvExp5insiti").text($(this).val());});
		$("#exp6insiti").keyup(function(){$("#cvExp6insiti").text($(this).val());});
		
		// ab yeh rha marks k lye
		$("#exp1name").keyup(function(){$("#cvExp1name").text($(this).val());});
		$("#exp2name").keyup(function(){$("#cvExp2name").text($(this).val());});
		$("#exp3name").keyup(function(){$("#cvExp3name").text($(this).val());});
		$("#exp4name").keyup(function(){$("#cvExp4name").text($(this).val());});
		$("#exp5name").keyup(function(){$("#cvExp5name").text($(this).val());});
		$("#exp6name").keyup(function(){$("#cvExp6name").text($(this).val());});

		//ab personal information k lye
		$("#key1").keyup(function(){$("#cvKey1").text($(this).val());});
		$("#key2").keyup(function(){$("#pInfo2").fadeIn();$("#cvKey2").text($(this).val());});
		$("#key3").keyup(function(){$("#pInfo3").fadeIn();$("#cvKey3").text($(this).val());});
		$("#key4").keyup(function(){$("#pInfo4").fadeIn();$("#cvKey4").text($(this).val());});
		$("#key5").keyup(function(){$("#pInfo5").fadeIn();$("#cvKey5").text($(this).val());});
		$("#key6").keyup(function(){$("#pInfo6").fadeIn();$("#cvKey6").text($(this).val());});
		$("#key7").keyup(function(){$("#pInfo7").fadeIn();$("#cvKey7").text($(this).val());});
		$("#key8").keyup(function(){$("#pInfo8").fadeIn();$("#cvKey8").text($(this).val());});
		$("#key9").keyup(function(){$("#pInfo9").fadeIn();$("#cvKey9").text($(this).val());});
		$("#key10").keyup(function(){$("#pInfo10").fadeIn();$("#cvKey10").text($(this).val());});

		$("#value1").keyup(function(){$("#cvValue1").text($(this).val());});
		$("#value2").keyup(function(){$("#pInfo2").fadeIn();$("#cvValue2").text($(this).val());});
		$("#value3").keyup(function(){$("#pInfo3").fadeIn();$("#cvValue3").text($(this).val());});
		$("#value4").keyup(function(){$("#pInfo4").fadeIn();$("#cvValue4").text($(this).val());});
		$("#value5").keyup(function(){$("#pInfo5").fadeIn();$("#cvValue5").text($(this).val());});
		$("#value6").keyup(function(){$("#pInfo6").fadeIn();$("#cvValue6").text($(this).val());});
		$("#value7").keyup(function(){$("#pInfo7").fadeIn();$("#cvValue7").text($(this).val());});
		$("#value8").keyup(function(){$("#pInfo8").fadeIn();$("#cvValue8").text($(this).val());});
		$("#value9").keyup(function(){$("#pInfo9").fadeIn();$("#cvValue9").text($(this).val());});
		$("#value10").keyup(function(){$("#pInfo10").fadeIn();$("#cvValue10").text($(this).val());});

		$("#pInfoBtn2").click(function(){$("#pInfo2").fadeToggle();});
		$("#pInfoBtn3").click(function(){$("#pInfo3").fadeToggle();});
		$("#pInfoBtn4").click(function(){$("#pInfo4").fadeToggle();});
		$("#pInfoBtn5").click(function(){$("#pInfo5").fadeToggle();});
		$("#pInfoBtn6").click(function(){$("#pInfo6").fadeToggle();});
		$("#pInfoBtn7").click(function(){$("#pInfo7").fadeToggle();});
		$("#pInfoBtn8").click(function(){$("#pInfo8").fadeToggle();});
		$("#pInfoBtn9").click(function(){$("#pInfo9").fadeToggle();});
		$("#pInfoBtn10").click(function(){$("#pInfo10").fadeToggle();});
		
		//languages ki bari
	/*	$("#langText").keyup(function(){$("#cvLangText").text($(this).val());});*/

		
		//now for custom tab
		$("#customHead").keyup(function(){$("#cvCustomHead").text($(this).val());});
		$("#customHead2").keyup(function(){$("#cvCustomHead2").text($(this).val());});
		$("#customText").keyup(function(){$("#cvCustomText").text($(this).val());});
		$("#customText2").keyup(function(){$("#cvCustomText2").text($(this).val());});

		//ab designing ki bari
		$("#headerBg").change(function(){$(".cv-head").css('background',''+$(this).val()+'');});
		$("#photoBg").change(function(){$(".photo").css('background',''+$(this).val()+'');});
		$("#nameColor").change(function(){$("#cvname").css('color',''+$(this).val()+'');});
		$("#coverBg").change(function(){$(".about-tab").css('background',''+$(this).val()+'');});
		$("#detailCvr").change(function(){$(".about-details").css('color',''+$(this).val()+'');});
		$("#headCvr").change(function(){$(".about-head").css('color',''+$(this).val()+'');});
		$("#cvBodyBg").change(function(){$(".cv-content").css('background',''+$(this).val()+'');});
		$("#cvBodyColor").change(function(){$(".cv-content").css('color',''+$(this).val()+'');});

	});
</script>

<body>


<!-- Cover Start -->

<div class="cover" >

<!-- get Start -->

	<div class="" id="get">

<!-- 		<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div> -->





		<div class="cvBody pull-left" id="example">

				<div class="photo center one">


					<!-- Background image -->

					<span id="picSpanBG" class="BGimg">

					<img id="image_previewBG" src="photo/Background.jpg" width="765px" height="500px" style="opacity: 0.4;">

					</span>


					<!-- Logo -->

					<span id="picSpan" class="two">
						<img id="image_preview" src="photo/HR_Logo.png" width="160px" style="margin: auto; padding-top: 2px">
					</span>

					<br>



				   <!-- Poster Title -->

			<!-- 	 <div class="center five">
					<span style="color: white;" id="cvExp1name  cvname">Poster Title</span>
				 </div> -->



				 	  <div class="detail-item center five">

							<div class="detail-item-head" id="cvExp1">
								<br>
								<span id="cvExp1name">WE'RE HIRING</span>
 
							</div>
							  
						</div>



              <!-- Job Title -->

			<!-- 	 <div class="center four">
					<span style="color: white;" id="cvname">Job Title: Assistant Manager</span>
				 </div>
 -->

				  	<div class="detail-item center four" id="cvExp2">

							<div class="detail-item-head">
								<span id="cvExp2name">Assistant Manager</span> 
							
							</div>

						</div>


								<!-- Job Role -->

				<!-- 	<div class="three">
					<span style="color: white;" id="cvname">Job Role</span>
					</div> -->



							<div class="detail-item three" id="cvExp3">

							<div class="detail-item-head">
								<span id="cvExp3name">He/She needs to have good work experiencein Treasury-Bank maintanence & Accounting in any group of companies.</span> 
								
							</div>
						
						</div>


				</div>


			<div style="display: flex; ">

<!-- cv-head Start -->

<!-- Start left Part -->




			<div>
				
				<!-- <div class="about-tab fontTreb">
					<div class="about-head"><i class="fa fa-user-circle-o fa-fw"></i> About Me</div>
					<div class="about-details" id="cvaboutme">Write About yourself it may be objective or it may be about your future point of view.</div>
				</div> -->


				<div class="about-tab fontTreb">

					<div class="about-head"><i class="fa fa-address-book-o fa-fw"></i>RESPONSIBILITIES:</div>

					<div class="about-details">

						<ul>
							<li id="cvphone-1">Handle the cash flow & supervise the financial transactions.</li>

							<li id="cvphone-2">Establish an excellent process of revenue, expenditure, and departmental budget plan. </li>
							<li id="cvphone-3">Maintain & liason with Bank, Insurance, and TAX Authorities.</li>
							<li id="cvphone-4" style="display: none;">Handle petty cash, cash books, Ledger, and all accounts.</li>
						</ul>

					</div>



						
					<div class="about-head"><i class="fa fa-tags fa-fw"></i>REQUIREMENT:</div>

					<div class="about-details" >
						<ul>
							<li id="cvskill-1">BBA/MBA in Accounting from reputed Universities.</li>
							<li id="cvskill-2">Preferred Professional Certification CA (CC)</li>
							<li id="cvskill-3">Excellent Communication Skills in MS word, excel PowerPoint</li>
							<li id="cvskill-4">Software Development</li>
							<li id="cvskill-5" style="display: none;">Software Development</li>
						</ul>
					</div>
				

				</div>
				
			</div>


			<!-- cv-head End -->

			<!-- End left Part -->



			<!-- Start Right Part -->


			<div class="cv-content">
				<div class="body-item">

					<!-- <div class="body-head"><i class="fa fa-graduation-cap fa-fw"></i>Experience:</div> -->

					<div class="body-details fontTreb">



							<div class="detail-item" id="cvEdu5" style="display: ;">
							<div class="detail-item-head">
								<span id="cvEdu5name">SPECIAL REQUIREMENT: Female Canditate</span>
								<!-- <span id="cvEdu5py">2017</span> -->
							</div>
							
							<!-- <div class="detail-item-body">Securing <span id="cvEdu5marks"> CGPA 3.77</span> <strong>From </strong> <span id="cvEdu5insiti">Insititution Name</span></div> -->
						</div>


						
						<div class="detail-item" id="cvEdu1">
							<div class="detail-item-head">


								<span id="cvEdu1name">EXPERIENCE: 5-6 Years</span>
								<!-- <span id="cvEdu1py">2017</span> -->
							</div>
							
							<!-- <div class="detail-item-body">Securing <span id="cvEdu1marks"> CGPA 3.77</span> <strong> From </strong> <span id="cvEdu1insiti">Insititution Name</span></div> -->
						</div>



					 	<div class="detail-item" id="cvEdu2" style="display: ;">
							<div class="detail-item-head">
								<span id="cvEdu2name">SALARY: 50k-60k</span>
								<!-- <span id="cvEdu2py">2017</span> -->
							</div>
							
							<!-- <div class="detail-item-body">Securing <span id="cvEdu2marks"> CGPA 3.77</span> <strong>From </strong> <span id="cvEdu2insiti">Insititution Name</span></div> -->
						</div>



						<div class="detail-item" id="cvEdu3">
							<div class="detail-item-head">
								<span id="cvEdu3name">JOB LOCATION: Dhaka</span>
								<!-- <span id="cvEdu3py">2017</span> -->
							</div>
							
							<!-- <div class="detail-item-body">Securing <span id="cvEdu3marks"> CGPA 3.77</span> <strong>From </strong> <span id="cvEdu3insiti">Insititution Name</span> </div> -->
						</div>


						<div class="detail-item" id="cvEdu6" style="display: none;">
							<div class="detail-item-head">
								<span id="cvEdu6name">Typing</span>
								<!-- <span id="cvEdu6py">2017</span>-->
						</div>
							
						<!-- 	<div class="detail-item-body">Securing <span id="cvEdu6marks"> CGPA 3.77</span> <strong>From </strong> <span id="cvEdu6insiti">Insititution Name</span></div> -->
						</div>


						<div class="detail-item" id="cvEdu4" style="display: none;">
							<div class="detail-item-head">
								<span id="cvEdu4name">Typing</span>
								
							</div>
							
						</div>

						<br>


						<div class="detail-item" id="customMenu">

							<div class="detail-item-head XYZ">
								<span id="cvCustomHead">Interested candidate(s) are requested to send your updated detailed CV with a recent photograph to the given email address in MS Word format. <br> Please don't forget to mention the current & expected salary along with the position name in the email subject line.</span>
						</div> <br>
							
					 	<div class="detail-item-body"> <img src="photo/email.png" alt="Avatar" class="image"> <span id="cvCustomText"> career@hroutsources.com</span>
					 	</div>


					 	<div class="detail-item-body">
								<img src="photo/telephone.png" alt="Avatar" class="image"> <span id="cvCustomHead2">
									 01810-023010</span>
						</div>
							
					 	<div class="detail-item-body"> <img src="photo/web.png" alt="Avatar" class="image"> <span id="cvCustomText2">www.myjobs.com.bd</span></div>

						</div>
			

					</div>
				</div>



			<div class="body-item" id="expMenu">

					<!-- <div class="body-head"><i class="fa fa-edit fa-fw"></i> Experience</div>  -->

		<div class="body-details fontTreb" id="cvExp1">


	<br>

	<!-- QR Code -->

					<span id="picSpanQR">
						<img id="image_previewQR" src="photo/HR_Outsources.png" width="120px" style="margin: auto; padding-top: 2px">
					</span>

					</div>
				</div>
			
			</div>


		</div>

			</div>

			<!-- End Right Part -->


	</div>

	</div>

	<!-- get End -->





<!-- Start typing Part -->

<br>


	<div class="well well-sm" style="width: 40%; margin-left:8px; float: right;" >
		<ul class="nav nav-tabs">
		  <li ><a data-toggle="tab" href="#cvHeader">Left Part</a></li>
		  <li class="active"><a data-toggle="tab" href="#menu-cvContent">Right Part</a></li>
		 <!--  <li><a data-toggle="tab" href="#menu-pInfo">Personal Info</a></li> -->
		  <li><a data-toggle="tab" href="#menu-cvDesign">Poster Redesign Design</a></li>
		</ul>


		<div class="tab-content">
		  <div id="cvHeader" class="tab-pane fade  ">
		  	<div class="well well-sm">
		   
		    
		    <table class="table table-hover table-striped">

		   <!--  	<thread>
		    	<tr>
		    		<td colspan="4">
					  	<input type="text" id="name" name="name" class="input-sm form-control" placeholder="Type Job Role">
		    		</td>
		    	</tr>
		    	</thread> -->

		    	<thread>
		    	<tr>
		    	<form id="uploadForm" id="POST" method="POST" action="">
		    		<td>Upload Logo</td>
		    		<td colspan="3">
					  	<input type="file" name="file" id="file" class="input-sm form-control" required>
		    		</td>
		    	</form>
		    	</tr>
		    	</thread>

		    	<thread>
		    	<tr>
		    		<td>Logo Size Setting</td>
		    		<td><input type="number" class="form-control input-sm" maxlength="3" id="width" placeholder="Width"></td>
		    		<td><input type="number" class="form-control input-sm" maxlength="3" id="height" placeholder="height"></td>
		    		<td><button class="btn-primary btn btn-sm" id="radius">Cut Radius</button>
		    			<button class="btn-primary btn btn-sm" id="resetRadius" style="display: none;">Reset Radius</button></td>
		    	</tr>
		    	</thread>

	<!-- 	     	<thread>
		    		<tr>
		    			<th colspan="4" class="center">About Me</th>
		    		</tr>
		    	</thread> 

		    	<thread>
		    		<tr>
		    			<td colspan="4" class="center">
		    				<textarea id="aboutme" class="form-control" style="resize: none;" placeholder="Write About Yourself/Objective etc"></textarea>
		    			</td>
		    		</tr>
		    	</thread> -->



		    	<!-- Responsibilities -->



		    	 	<thread>
			    		<tr>
			    			<th colspan="4" class="center">Responsibilities <span class="pull-right btn btn-danger btn-sm" id="hideLangBtn">Hide/Show</span></th>
			    		</tr>
			    	</thread>

			    	<thread>
			    		<tr>
			    			<td colspan="4">
			    				<textarea class="form-control" placeholder="Responsibilities-1" id="langText"></textarea>
			    			</td>
			    		</tr>
			    	</thread>



			    	<thread>
			    		<tr>
			    			<th colspan="4" class="center"> <span class="pull-right btn btn-danger btn-sm" id="hideLangBtn-2">Hide/Show</span>


			    			</th>
			    		</tr>
			    	</thread>

			    	<thread>
			    		<tr>
			    			<td colspan="4">
			    				<textarea class="form-control" placeholder="Responsibilities-2" id="langText-2"></textarea>
			    			</td>
			    		</tr>
			    	</thread>


			    		 	<thread>
			    		<tr>
			    			<th colspan="4" class="center"> <span class="pull-right btn btn-danger btn-sm" id="hideLangBtn-3">Hide/Show</span></th>
			    		</tr>
			    	</thread>

			    	<thread>
			    		<tr>
			    			<td colspan="4">
			    				<textarea class="form-control" placeholder="Responsibilities-3" id="langText-3"></textarea>
			    			</td>
			    		</tr>
			    	</thread>



			    		 	<thread>
			    		<tr>
			    			<th colspan="4" class="center"> <span class="pull-right btn btn-danger btn-sm" id="hideLangBtn-4">Hide/Show</span></th>
			    		</tr>
			    	</thread>

			    	<thread>
			    		<tr>
			    			<td colspan="4">
			    				<textarea class="form-control" placeholder="Responsibilities-4" id="langText-4"></textarea>
			    			</td>
			    		</tr>
			    	</thread>









	<!-- 	    	

		    	<thread>
		    		<tr>
		    			<td colspan="4">

		    				<textarea id="phone2" class="form-control" style="resize: none;" placeholder="Responsibilities-2"></textarea>
		    			</td>
		    			
		    		</tr>
		    	</thread>

		    	<thread>
		    		<tr>
		    			<td colspan="4">
		    				<textarea id="address" class="form-control" style="resize: none;" placeholder="Responsibilities-3"></textarea>
		    			</td>
		    			
		    		</tr>
		    	</thread>


		    	 	<thread>
		    		<tr>
		    			<td colspan="4" class="center">
		    				<textarea id="aboutme" class="form-control" style="resize: none;" placeholder="Responsibilities-4"></textarea>
		    			</td>
		    		</tr>
		    	</thread> 


		    	<thread>
		    		<tr>
		    			<th colspan="4" class="center">Responsibilities</th>
		    		</tr>
		    	</thread>


		    	<thread>
		    		<tr>
		    			<td colspan="4">

					 	<button class="pull-right btn btn-sm btn-danger" id="respons1">Hide/Show</button> 

		    				<textarea id="phone1" class="form-control" style="resize: none;" placeholder="Responsibilities-1"></textarea>
		    			</td>
		    			
		    		</tr>
		    	</thread>




 -->

		    	<!-- REQUIREMENT -->

		    	
		    	<thread>
		    		<tr>
		    			<th class="center" colspan="4">REQUIREMENT</th>
		    		</tr>
		    	</thread>


		    	<thread>
		    		<tr>
		    			<td colspan="4">

		    				<button class="pull-right btn btn-sm btn-danger" id="hideLangBtn-5">Hide/Show</button>

		    				<input type="text" id="skill-1" name="skill1" class="form-control input-sm" placeholder="REQUIREMENT-1">
		    			</td>
		    		</tr>
		    	</thread>


		    	<thread>
		    		<tr>
		    			<td colspan="4">

		    				<button class="pull-right btn btn-sm btn-danger" id="hideLangBtn-6">Hide/Show</button> 

		    				<input type="text" id="skill-2" class="form-control input-sm" placeholder="REQUIREMENT-2">
		    			</td>
		    		</tr>
		    	</thread>

		    	<thread>
		    		<tr>
		    			<td colspan="4">

		    				<button class="pull-right btn btn-sm btn-danger" id="hideLangBtn-7">Hide/Show</button> 


		    				<input type="text" id="skill-3" class="form-control input-sm" placeholder="REQUIREMENT-3">
		    			</td>
		    		</tr>
		    	</thread>
		    	
		    	<thread>
		    		<tr>
		    			<td colspan="4">

		    				<button class="pull-right btn btn-sm btn-danger" id="hideLangBtn-8">Hide/Show</button> 

		    				<input type="text" id="skill-4" class="form-control input-sm" placeholder="REQUIREMENT-4">
		    			</td>
		    		</tr>
		    	</thread>

		    	<thread>
		    		<tr>
		    			<td colspan="4">

		    				<button class="pull-right btn btn-sm btn-danger" id="hideLangBtn-9">Hide/Show</button> 


		    				<input type="text" id="skill-5" class="form-control input-sm" placeholder="REQUIREMENT-5">
		    			</td>
		    		</tr>
		    	</thread>
		    	
		    </table>

		  	</div>
		  </div>





<!-- Right typing Part -->


		   <div id="menu-cvContent" class="tab-pane fade in active">

		    <div class="Well well-sm">


   <!-- Background Image Code Input part -->

			   <table class="table table-hover table-striped">
		 
		    	<thread>
		    	<tr>
		    	<form id="uploadFormBG" id="POST" method="POST" action="">
		    		<td>BG Imput</td>
		    		<td colspan="3">
					  	<input type="file" name="file" id="fileBG" class="input-sm form-control" required>
		    		</td>
		    	</form>
		    	</tr>
		    	</thread>

		    	<thread>
		    	<tr>
		    		<td>BG Size Setting</td>
		    		<td><input type="number" class="form-control input-sm" maxlength="3" id="widthBG" placeholder="Width"></td>
		    		<td><input type="number" class="form-control input-sm" maxlength="3" id="heightBG" placeholder="height"></td>
		    		<td><button class="btn-primary btn btn-sm" id="radiusBG">Cut Radius</button>
		    			<button class="btn-primary btn btn-sm" id="resetRadiusBG" style="display: none;">Reset Radius</button></td>
		    	</tr>
		    	</thread>
		    	
		    </table>

		    <br>


				<ul class="nav nav-tabs">
				  <li class="active"><a data-toggle="tab" href="#Exp1">Poster Title</a></li>
				  
				  <li><a data-toggle="tab" href="#Exp2" id="expTab2">Job Title</a></li>

				  <li><a data-toggle="tab" href="#Exp3" id="expTab3">Job Role</a></li>
			<!-- 	  <li><a data-toggle="tab" href="#Exp4" id="expTab4">Exp 4</a></li>
				  <li><a data-toggle="tab" href="#Exp5" id="expTab5">Exp 5</a></li>
				  <li><a data-toggle="tab" href="#Exp6" id="expTab6">Exp 6</a></li> -->
				</ul>









				<div class="tab-content">

				  <div id="Exp1" class="tab-pane fade in active">

					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Poster Title Type</th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Type Your Poster Name" id="exp1name"></td>
			    		<!-- 	<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp1start"></td> -->
			    		</tr>
			    		</thread>

			    <!-- 		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp1insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp1leave"></td>
			    		</tr>
			    		</thread> -->

			    		</table>

			    		<!-- <button class="btn btn-primary btn-sm btn-block" id="hideExpBtn">Hide/Show Experience in Cv</button> -->
				  </div>

				  <div id="Exp2" class="tab-pane fade">
					    <table class="table table-striped table-hover">

			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Job Title Type<button class="pull-right btn btn-sm btn-danger" id="expBtn2">Hide/Show</button></th>		
			    		</tr>
			    		</thread>

			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Type Your Job Name" id="exp2name"></td>
			    			<!-- <td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp2start"></td> -->
			    		</tr>
			    		</thread>

			    	<!-- 	<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp2insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp2leave"></td>
			    		</tr>
			    		</thread> -->

			    		</table>
				  </div>


				  <div id="Exp3" class="tab-pane fade">
					    <table class="table table-striped table-hover">

			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Job Role Type<button class="pull-right btn btn-sm btn-danger" id="expBtn3">Hide/Show</button></th>		
			    		</tr>
			    		</thread>

			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Type Your Job Role" id="exp3name"></td>
			    			<!-- <td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp3start"></td> -->
			    		</tr>
			    		</thread>

			    	<!-- 	<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp3insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp3leave"></td>
			    		</tr>
			    		</thread>
 -->
			    		</table>
				  </div>

<!-- 
				  <div id="Exp4" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 4 <button class="pull-right btn btn-sm btn-danger" id="expBtn4">Hide/Show</button></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp4name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp4start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp4insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp4leave"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>

				  <div id="Exp5" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 5 <button class="pull-right btn btn-sm btn-danger" id="expBtn5">Hide/Show</button></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp5name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp5start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp5insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp5leave"></td>
			    		</tr>
			    		</thread>

			    		</table>
				  </div>

				  <div id="Exp6" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Entry 6 <button class="pull-right btn btn-sm btn-danger" id="expBtn6">Hide/Show</button></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Experience Practice Text" id="exp6name"></td>
			    			<td style="width:33%"><input type="text" class="form-control input-sm" placeholder="Starting Year" id="exp6start"></td>
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="exp6insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Leaving Year" id="exp6leave"></td>
			    		</tr>
			    		</thread>
			    		</table>
				  </div> -->


			    </div>




			  <ul class="nav nav-tabs">

			    <li class="active"><a data-toggle="tab" id="eduTab5" href="#edu1">Special Re.</a></li>
				  <li><a data-toggle="tab" href="#edu2">Experience</a></li>
				  <li><a data-toggle="tab" id="eduTab2" href="#edu3">Salary</a></li>
				  <li><a data-toggle="tab" id="eduTab3" href="#edu4">Location</a></li>
				 
				  <li><a data-toggle="tab" id="eduTab6" href="#edu5">Type</a></li>

				   <li><a data-toggle="tab" id="eduTab4" href="#edu6">Type</a></li>
				</ul>

				<div class="tab-content">




					  <div id="edu1" class="tab-pane fade in active">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Special Requirments<span class='btn btn-sm btn-danger small pull-right' id="eduBtn5">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Write Your Special Requirments" id="edu5name"></td>
			    			<!-- <td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu5py"></td> -->
			    		</tr>
			    		</thread>
		
			    		</table>
				  </div>




				  <div id="edu2" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Experience Type <span class='btn btn-sm btn-danger small pull-right' id="eduBtn1">Hide/Show</span></th>		
			    		</tr>
			    		</thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Type Your Experience" id="edu1name"></td>
			    			<!-- <td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu1py"></td> -->
			    		</tr>
			    		</thread>



			    	<!-- 	<thread>
			    	  	<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu1insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu1marks"></td>
			    		</tr>
			    		</thread> -->

			    		</table>
				  </div>

				  <div id="edu3" class="tab-pane fade">
					    <table class="table table-striped table-hover">


			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Salary Type <span class='btn btn-sm btn-danger small pull-right' id="eduBtn2">Hide/Show</span></th>		
			    		</tr>

			    		</thread>

			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Type Your Salary" id="edu2name"></td>

			    			<!-- <td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu2py"></td> -->
			    		</tr>
			    		</thread>


			    	<!-- 	<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu2insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu2marks"></td>
			    		</tr>
			    		</thread> -->

			    		</table>
				  </div>

				  <div id="edu4" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Location<span class='btn btn-sm btn-danger small pull-right' id="eduBtn3">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Type Your Location" id="edu3name"></td>
			    			<!-- <td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu3py"></td> -->
			    		</tr>
			    		</thread>

			    	<!-- 	<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu3insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu3marks"></td>
			    		</tr>
			    		</thread> -->

			    		</table>
				  </div>






				  <div id="edu5" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Entry 5 <span class='btn btn-sm btn-danger small pull-right' id="eduBtn6">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Write Your Text" id="edu6name"></td>
			    			<!-- <td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu6py"></td> -->
			    		</tr>
			    		</thread>
			    	<!-- 	<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu6insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu6marks"></td>
			    		</tr>
			    		</thread> -->

			    		</table>
				  </div>


        
				  	  <div id="edu6" class="tab-pane fade">
					    <table class="table table-striped table-hover">
			    		<thread>
			    		<tr>
			    			<th colspan="2" class="center">Entry 6 <span class='btn btn-sm btn-danger small pull-right' id="eduBtn4">Hide/Show</span></th>		
			    		</tr>
			    		<thread>
			    		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Write Your Text" id="edu4name"></td>
			    			<!-- <td><input type="text" class="form-control input-sm" placeholder="Passing Year" id="edu4py"></td> -->
			    		</tr>
			    		</thread>

			    <!-- 		<thread>
			    		<tr>
			    			<td><input type="text" class="form-control input-sm" placeholder="Insititution Name" id="edu4insiti"></td>
			    			<td><input type="text" class="form-control input-sm" placeholder="Marks Details" id="edu4marks"></td>
			    		</tr>
			    		</thread> -->


			    		</table>
				  </div>

				</div>

<br>


    
			    <table class="table table-striped table-hover">

			    	<thread>
			    		<tr>
			    			<th class="center">Please send us your CV<span class="pull-right btn btn-danger btn-sm" id="hideCustomBtn">Hide/Show</span> </th>
			    		</tr>
			    	</thread>

			    	<thread>
			    		<tr>
			    			<td>
			    				<input type="text" name="" class="form-control" placeholder="Write Custom Heading" id="customHead">
			    			</td>
			    		</tr>
			    	</thread>

			    	<thread>
			    		<tr>
			    			<td>
			    				<textarea class="form-control" style="resize: none;" placeholder="Write custom Detail" id="customText"></textarea>
			    			</td>
			    		</tr>
			    	</thread>

			    	<thread>
			    		<tr>
			    			<td>
			    				<input type="text" name="" class="form-control" placeholder="Write Custom Heading" id="customHead2">
			    			</td>
			    		</tr>
			    	</thread>

			    	<thread>
			    		<tr>
			    			<td>
			    				<textarea class="form-control" style="resize: none;" placeholder="Write custom Detail" id="customText2"></textarea>
			    			</td>
			    		</tr>
			    	</thread>


			    </table> 

			    <br>
			   

<!-- Upload QR Code Input part -->

			   <table class="table table-hover table-striped">
		 
		    	<thread>
		    	<tr>
		    	<form id="uploadFormQR" id="POST" method="POST" action="">
		    		<td>Upload QR</td>
		    		<td colspan="3">
					  	<input type="file" name="file" id="fileQR" class="input-sm form-control" required>
		    		</td>
		    	</form>
		    	</tr>
		    	</thread>

		    	<thread>
		    	<tr>
		    		<td>QR Size Setting</td>
		    		<td><input type="number" class="form-control input-sm" maxlength="3" id="widthQR" placeholder="Width"></td>
		    		<td><input type="number" class="form-control input-sm" maxlength="3" id="heightQR" placeholder="height"></td>
		    		<td><button class="btn-primary btn btn-sm" id="radiusQR">Cut Radius</button>
		    			<button class="btn-primary btn btn-sm" id="resetRadiusQR" style="display: none;">Reset Radius</button></td>
		    	</tr>
		    	</thread>
		    	
		    </table>






		  </div>

		</div>



	<!-- 	<div id="menu-pInfo" class="tab-pane fade">
			<div class="well well-sm">
				<table class="table table-striped table-hover">
			    	<thread>
			    		<tr>
			    			<th colspan="3" class="center">Personal Information</th>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key1"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value1"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"></td>
			    		</tr>
			    	</thread>

			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key2"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value2"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn2">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key3"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value3"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn3">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key4"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value4"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn4">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key5"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value5"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn5">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key6"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value6"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn6">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key7"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value7"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn7">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key8"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value8"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn8">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key9"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value9"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn9">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Key" id="key10"></td>
			    			<td><input type="text" name="" class="form-control input-sm" placeholder="Value" id="value10"></td>
			    			<td style="width: 55px;padding-left:0;padding-right:0"><button class="btn btn-primary btn-sm" id="pInfoBtn10">Hide/Show</button></td>
			    		</tr>
			    	</thread>
			    	<thread>
			    		<tr>
			    			<td colspan="2">
			    				<button class="btn btn-sm btn-primary btn-block" id="hidePersonalBtn">Hide/Show Personal Information Tab from CV</button>
			    			</td>
			    		</tr>
			    	</thread>
			    </table>
			</div>
		</div> -->


		
		  <div id="menu-cvDesign" class="tab-pane fade">
		    <div class="well well-sm">
		    	<table class="table table-striped table-hover">
		    		<thread>
		    			<tr>
		    				<th class="center" colspan="2">Color Control</th>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Header Background</td>
		    				<td><input type="color" name="" id="headerBg" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Photo Background Color</td>
		    				<td><input type="color" name="" id="photoBg" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Name Text Color</td>
		    				<td><input type="color" name="" id="nameColor" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Header Cover Background</td>
		    				<td><input type="color" name="" id="coverBg" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Cover Heading  Color</td>
		    				<td><input type="color" name="" id="headCvr" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%">Cover Details  Color</td>
		    				<td><input type="color" name="" id="detailCvr" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%"> Body Background</td>
		    				<td><input type="color" name="" id="cvBodyBg" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>
		    		<thread>
		    			<tr>
		    				<td style="width: 50%"> Body Text Color</td>
		    				<td><input type="color" name="" id="cvBodyColor" value="#FFFFFF" class="form-control input-sm"></td>
		    			</tr>
		    		</thread>

		    	</table>
		    </div>
		  </div>
		</div>
	</div>

	<!-- End typing Part -->


</div>

<!-- Cover End -->


<div id="dialog" style="z-index: 2;position: absolute;width: 100%;display: none;">
	<div class="" style="width: 366px;padding: 22px;margin: auto;margin-top: 155px">
		<div class="panel panel-primary" style="box-shadow: 11px 11px 22px black">
			<div class="panel-heading">
				What you want?
			</div>
			<div class="panel-body">
				<button class="btn btn-block btn-success " id="saveCv"><i class="pull-left fa fa-save fa-fw"></i >Save Poster</button>
				<button class="btn btn-block btn-success " id="saved" disabled style="display: none;"><i class="pull-left fa fa-save fa-fw"></i >Saved</button>
				<button class="btn btn-block btn-primary " id="closeDialog"><i class="pull-left fa fa-edit fa-fw"></i >Continue Editing</button><br>
				<a href='index.php' style="text-decoration: none"><button class="btn btn-block btn-danger "><i class="pull-left fa fa-home fa-fw"></i >Goto HOME</button></a>

			</div>
			<div class="panel-footer">
				Goto Home will discard your changes 
			</div>
		</div>
	</div>
</div>
<div id="cvUploadDialog" style="z-index: 1;position: absolute;width: 100%;display: none;">
	<div class="" style="width: 366px;padding: 22px;margin: auto;margin-top: 155px">
		<div class="panel panel-primary" style="box-shadow: 11px 11px 22px black">
			<div class="panel-heading">
				Type poster Name
			</div>
			<div class="panel-body">
				<input type="text" required class="form-control" id="cvNameInput" placeholder="Type Cv Name" style="margin-bottom: 5px">
				<button class="btn btn-block btn-success bt-sm " id="uploadCv"><i class="pull-left fa fa-save fa-fw"></i >Upload </button>
				

			</div>
			<div class="panel-footer">
				Poster will be uploaded to database for later use. 
			</div>
		</div>
	</div>
</div>



<!--  <button class="pull-right btn btn-success" style="position: fixed;right: 22px;bottom: 22px;box-shadow: 2px 2px 11px black" id="download">Finish and Download CV</button> <br> <br> -->


  <button class="pull-right btn btn-success" style="position: fixed;right: 22px;bottom: 22px;box-shadow: 2px 2px 11px black" id="dl-png">Download Poster</button>



<!--  <button id="dl-png"> Download </button> -->



   <script src="html2canvas.min.js"></script>
    <script>
        document.getElementById("dl-png").onclick = function() {
           const screenshotTarget = document.getElementById('example');

           html2canvas(screenshotTarget).then((canvas) => {
               const base64image = canvas.toDataURL("image/png");
               var anchor = document.createElement('a');
               anchor.setAttribute("href", base64image);
               anchor.setAttribute("download", "my-image.png");
               anchor.click();
               anchor.remove();

        });
      };

    </script>




</body>
</html>
<script>
	$(document).ready(function()
	{

//for downloding cv

/*		$("#download").click(function()
		{
			$("#dialog").fadeIn();
			var some = $("#get").html();
			var some2 = $("#some2").html();
			
			$.post({

				url:'buildcv.php',
				data:{data : some , data2 : some2}
			}).done(function(result)
			{
				openExitModel();
			})
		});*/

//for saving cv
	//dialog pr save wale btn pr click k lye bad yeh chalna
	$("#saveCv").click(function()
	{		$("#dialog").hide();
			$("#cvUploadDialog").fadeIn();
	});
	//ab cvNameDialog pr save Wale btn pr click 
	$("#uploadCv").click(function()
	{
		var cvName = $("#cvNameInput").val();
		
		var cvData = $("#get").html();
	
			
			$.post({

				url:'saveCv1.php',
				data:{data : cvData , name : cvName}
			}).done(function(result)
			{
			   
				
				$("#cvUploadDialog").hide();
				$("#dialog").fadeIn();
				$("#saveCv").hide();
				$("#saved").show();
			})

	});

	//closing dialg model
	$("#closeDialog").click(function(){$("#dialog").fadeOut();$("dialogCover").hide();});
	});
	function openExitModel()
	{
		$("#dialog").slideDown();
		$("#saveCv").show();
		$("#saved").hide();

	}
</script>