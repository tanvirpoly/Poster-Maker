<?php
session_start();
$cvData = $_REQUEST['data'];
$cvName = $_REQUEST['name'];
$cvStyle="<head><style>

/*Convert in PDF*/

.cover{padding: 10px;}

.cvBody{border:1px solid black; min-height: 100%; max-height:100%; background: black}

.photo{background:#00a327; height:222px}

.cv-content{background:#FAF2EF; width: 50%; padding:30px 10px 10px 20px; float:right}

.cv-head{background:#00a327; width: 100%; padding: 0px; float:left}

.center{text-align: center;}

#cvname{font-size:12pt}

.circle{border-radius: 50%}

.flex{display: inline-flex;}

.about-tab{background:#025c17; padding: 11px}

.about-head{ color: white; font-size: 11pt; font-variant: small-caps;margin: 5px 2px;}

.about-details{color: white;padding:4px; font-family: calibri light;font-size:8pt;}

.about-details li{font-size: 8pt;margin: 5px}
.body-item{}
.body-head{font-size: 12pt;font-family: algerian;font-weight:bold}
.body-details{padding:0 0 0 22px; }
.detail-item,.info-item{margin-top: 3px}
.detail-item-head{font-size: 8pt;font-family: calibri light;font-weight: bold}
.detail-item-body{font-size:8pt}
.info-item-head{width: 144px;font-size: 10pt;float: left;}

.info-item-body{width: 200px;font-size: 10pt;float: right;}

.detail-item-text{font-size: 10pt;}

</style></head>";

$cv = $cvStyle.$cvData;
$time4name = time();
$fileName= $time4name."-".$_SESSION['userId'];
$file  = "allcv/".$fileName;
$handle = fopen($file, 'w') or die('Cannot open file:  '.$file);
fwrite($handle, $cv);
fclose($handle);

include 'assets/database.php';
if ($cvName == "") {$cvName = "No Name";}
$con->query("insert into allcv (cvName,cvFileName,userId)values('$cvName','$fileName','$_SESSION[userId]')");



 ?>