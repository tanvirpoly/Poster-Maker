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
  <?php require 'assets/function.php'; ?>
	<?php require "assets/autoloader.php" ?>


	<style type="text/css">
	<?php include 'css/myStyle.css'; ?>		

.treb{font-family: Trebuchet MS}
.flex{display: flex}
.hub-top {position: fixed;top: 0;z-index: 20;width: 100%;background: #222;height: 111px;}
.logo{;color: white}
.logo i{color: white;font-size: 77pt}
.logoname{color: white;font-size: 22pt;padding: 22px 11px;}
.login{margin: 11px; color:white;}
.m1{margin: 1px}
.dashboard{background: #333333;position: fixed;height: 100%;width: 17%;box-shadow: 2px 2px 22px black;padding-top: 111px;}
.dashboard span{color: black;font-size: 16px;padding: 11px 22px;background: lightblue;display: block;box-shadow: 1px 1px 2px black}
.dashboard ul{list-style: none;padding: 0}
.dashboard ul li{color: white;padding: 6px 22px;display: block;font-size: 14pt;box-shadow: 1px 1px 2px black;;margin-top: 3px}
.dashboard ul li:hover{box-shadow: 1px 1px 2px green;cursor: pointer;background: #ADD8E6;color: black}
.dashboard ul li i{float: right;padding-top: 5px}
.dashboard:hover{box-shadow: 2px 2px 22px green}
.admin-pic{position: relative;top: -88px;left: 33px}
.admin-name{position: relative;top: -166px;left: 166px;font-size: 13pt;}
.admin-pic img{width: 111px ;height: 111px}
.name{}
.center{text-align: center;}
#mydiv:hover{box-shadow: 2px 2px 22px blue}
</style>

</head>
<body style="background: url(photo/bg.jpg) fixed;">


<div class="background-image"></div>
<div class="hub-top">
	<div class="logo flex pull-left">
		<div><i class="glyphicon glyphicon-cloud"></i></div>
		<div class="logoname treb"><span>Online Hiring Poster Maker</span></div>
	</div>


	<div class="login pull-right " style="margin-right: 44px">
		<div><img src="photo/user.png" class="img-responsive" style="width: 55px;margin:auto;"></div>
		<div class="treb" class="name "><span style="text-align: center;"><?php echo userName(); ?></span><br>
		<a href="setting.php"><button class="btn btn-success btn-sm" style="padding: 1px 11px;font-size: 8pt">Setting <i class="fa fa-gear fa-fw"></i></button></a>
		</div>

	</div>

</div>

<div class="dashboard treb " style="background-color: rgba(0, 0, 0, 0.4);  opacity: inherit;">
	<span class="dbname">Dashboad</span>
	<ul>
		<a href="index.php" ><li style="background:#739099"><i class="fa fa-home fa-fw"></i> Home</li></a>
		<a href="newCv.php"><li><i class="fa fa-edit fa-fw"></i> Build New Poster</li></a>

<!-- 		<a href="savedCv.php"><li><i class="fa fa-user-circle fa-fw"></i>Saved Hiring Poster</li></a>
		<a href="contactUs.php"><li><i class="fa fa-phone fa-fw"></i> Contact Us</li></a>
    <a href="setting.php"><li><i class="fa fa-gear fa-fw"></i>Account Setting</li></a> -->
		<a href="logout.php"><li><i class="fa fa-sign-out fa-fw"></i> Logout</li></a> 

	</ul>
</div>

<div style=";margin-left: 18%;padding-top: 122px" class="flex">
	<div class=" well" style="width: 52%; background-color: rgba(0, 0, 0, 0.4);  opacity: inherit;" id="mydiv">
		<img src="photo/spimg.jpg" class="img-responsive img-thumbnail" style="width:550px ;height: 224px;" >
		<div class="admin-pic"><img src="photo/user.png" class="img-circle img-thumbnail"></div>
		<div class="admin-name img-thumbnail treb ">Md. Kamruzzaman</div>
		<div class="well well-sm treb" style="position: relative;top: -122px;">
			<!-- <h4>About of CEO</h4><img src="photo/iamfk.jpg" class="pull-right img-thumbnail " style="width: 133px;margin: 4px;height: 155px"> -->
			<p style="text-align: justify">
			Mr. Md.Kamruzzaman is a renowned HR & OD professional in the country. He has also been flourished as one of the best Trainer of the country. As well as he has got wide working experience in different industry including Pharmaceuticals, Retails, Automobiles & RMG. He has long successful career track in HR & Organization development in many renowned companies in the country.

      Currently Mr. Md. Kamruzzaman has been working as CEO - MyJobs. His immediate past position was Chief Human Resources Office, Asrotex Group. Before that he worked in Windy Group as Director- Human Capital Management, Compliance and Admin. Earlier he was heading one of the largest RMG Factory – Fakir Apparels as GM-HR & Admin. He also headed Corporate HR department of one of the biggest conglomerate namely Dekko group. He headed HR department one of the largest retail – Meena Bazar.

      He has a broad and specialized academic back ground in Human Resources Management - BA(Hons.) MA(Eng.) MBA (HR), LLB, PGD(HRM), Diploma in Social Compliance, Diplom in Computer System Management. He is a registered member of Dhaka Income Tax Bar.

      Mr. Md. Kamruzzaman is an EC & Fellow of BSHRM and has successfully organized the BSHRM 7th & 8th International HR Conference -2018 & 2019 as an Organizing Secretary of the program. He was also successful as the Convener of Event Committee of 6th International HR conference 2017. He is also a member of Society for Human Resources Management. He is the convener of ‘BSHRM Members welfare committee”. </p>

		</div>
	</div>



<!-- 	<div class="well well-sm" id="mydiv" style="width: 44%;margin-left: 33px;background-color: rgba(0, 0, 0, 0.4);  opacity: inherit">
		<div class="well well-sm " style="background-color: rgba(0, 0, 0, 0.4);  opacity: inherit;color: white"><h4 class="center">How It Works</h4></div>
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">1. Select Theme</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body" >
      	<div class="panel panel-primary">
      		
      		<div class="panel-body">Select your sutiable poster theme which you want to build,customise it and get your poster faster and professional</div>
      		<div class="panel-body">Select your sutiable poster theme which you want to build,customise it and get your poster faster and professional</div>
      		<div class="panel-body">Select your sutiable poster theme which you want to build,customise it and get your poster faster and professional</div> 

      	</div>
      	
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
       2.Enter Details</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
      		<div class="panel-body" >
      	<div class="panel panel-primary">
      		
      		<div class="panel-body">Select your sutiable poster theme which you want to build,customise it and get your poster faster and professional</div>
      		<div class="panel-body">Select your sutiable poster theme which you want to build,customise it and get your poster faster and professional</div>
      		<div class="panel-body">Select your sutiable poster theme which you want to build,customise it and get your poster faster and professional</div>
      	</div>
      	
      </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        3.Finish And Download Customised Poster</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
      		<div class="panel-body" >
      	<div class="panel panel-primary">
      		
      		<div class="panel-body">Select your sutiable poster theme which you want to build,customise it and get your poster faster and professional</div>
      		<div class="panel-body">Select your sutiable poster theme which you want to build,customise it and get your poster faster and professional</div>
      		<div class="panel-body">Select your sutiable poster theme which you want to build,customise it and get your poster faster and professional</div>
      	</div>
      	
      </div>
      </div>
    </div>
  </div>
</div>
	</div> -->



</div>

</body>
</html>

