<?php
session_start();

if(!isset($_SESSION['userId']))
{
  header('location:login.php');
}
 ?>

<?php 
if (isset($_POST['update']))
{
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	include 'assets/database.php';
	$array = $con->query("update users set username ='$username',password = '$password', name ='$name' where id='$_SESSION[userId]'");
	echo $con->error;
	if ($array)
	{
	  echo "<script>alert('Updated successfully')</script>";   	
	 } 
	 else
	  echo "<script>alert('Not updated some error')</script>";   	

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
.logo{padding:11px 5px 11px 22px;color: white}
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
		<a href="index.php"><li><i class="fa fa-home fa-fw"></i> Home</li></a>
		<a href="newCv.php"><li><i class="fa fa-edit fa-fw"></i> Build New Poster</li></a>

	<!-- 	<a href="savedCv.php"><li ><i class="fa fa-user-circle fa-fw"></i>Saved Hiring Poster</li></a>
		<a href="contactUs.php" ><li ><i class="fa fa-phone fa-fw"></i> Contact Us</li></a>
    <a href="setting.php"><li style="background:#739099"><i class="fa fa-gear fa-fw"></i>Account Setting</li></a> -->
    
		<a href="logout.php"><li><i class="fa fa-sign-out fa-fw"></i> Logout</li></a>

	</ul>

</div>

<div class="well well-sm" style="margin-left: 18%;padding-top: 122px;background-color: rgba(0, 0, 0, 0.4);  opacity: inherit;">
  <div class="panel panel-primary" style="width: 77%;margin:auto">
  		<div class="panel-heading center"><h3>Change Account Setting</h3></div>
  		<div class="panel-body center">
  			<form method="POST">
          <label>Name</label> 
          <input type="text" name="name" value="<?php echo userName(); ?>" class='form-control' style='width: 55%;margin:auto' required>
          <label>Username</label> 
          <input type="text" name="username" value="<?php echo user(); ?>" class='form-control' style='width: 55%;margin:auto' required>
          <label>Password</label>
          <input type="text" name="password" value="<?php echo pass(); ?>" class='form-control' style='width: 55%;margin:auto' required>  
          <button class="btn btn-primary btn-block" style="width: 55%;margin: auto;margin-top:4px;" type="submit" name="update">Update</button>
        </form><br>
  		</div>

  </div>
 
   
</div>

</body>
</html>
