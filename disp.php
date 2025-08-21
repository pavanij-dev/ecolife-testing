<?php

session_start();
if (isset($_SERVER['HTTP_REFERER'])) {
    $_SESSION["inreferrer"] = $_SERVER['HTTP_REFERER'];
$_SESSION["dbsrrc"] = "Google Organic";
//echo ("<!--".$_SESSION['dbsrrc']."-->");
}else{
     $_SESSION["inreferrer"] ="undefined";
$_SESSION["dbsrrc"] = "Direct";
//echo ("<!--".$_SESSION['dbsrrc']."-->");
}
if ($_GET['gclid'] != "" || $_GET['wbraid'] != "" )
{
$_SESSION["dbsrrc"] = "GoogleAdwords";
//echo ("<!--".$_SESSION['dbsrrc']."-->");
if (isset($_GET['gclid']))
    {
        $_SESSION["gcid"] = $_GET["gclid"];
    }
    else
    {
        $_SESSION["gcid"] = $_GET["wbraid"];
    }
    
$_SESSION["gcid"] = $_GET["gclid"];
$_SESSION["utm_source"] = $_GET['utm_source'];
$_SESSION["utm_medium"] = $_GET['utm_medium'];
$_SESSION["utm_campaign"] = $_GET['utm_campaign'];
$_SESSION["utm_term"] = $_GET['utm_term'];
$_SESSION["matchtype"] = $_GET['matchtype'];
$_SESSION["device"] = $_GET['device'];
$_SESSION["iip"] = $_SERVER['REMOTE_ADDR'];
$_SESSION["uurl"] = $_SERVER['REQUEST_URI'];
date_default_timezone_set("asia/kolkata");
$_SESSION["tstamp"] = date("Y-m-d h:i:s");
$_SESSION["dbsrrc"] = "GoogleAdwords";
}
else{
$_SESSION["gcid"] =" ";
$_SESSION["utm_source"] = " ";
$_SESSION["utm_medium"] = " ";
$_SESSION["utm_campaign"] = " ";
$_SESSION["utm_term"] = " ";//keyword
$_SESSION["matchtype"] = " ";
$_SESSION["device"] = " ";
$_SESSION["iip"] = $_SERVER['REMOTE_ADDR'];
$_SESSION["uurl"] = $_SERVER['REQUEST_URI'];
date_default_timezone_set("asia/kolkata");
$_SESSION["tstamp"] = date("Y-m-d h:i:s");
}

?>





<?php 

if (isset($_GET['utm_source'])) { $utm_source = $_GET['utm_source'];}
else { $utm_source = ''; }

if (isset($_GET['utm_medium'])) { $utm_medium = $_GET['utm_medium']; }
else { $utm_medium = ''; }

if (isset($_GET['utm_campaign'])) { $utm_campaign = $_GET['utm_campaign']; }
else { $utm_campaign = ''; }

if (isset($_GET['utm_term'])) { $utm_term = $_GET['utm_term']; }
else { $utm_term = ''; }

if (isset($_GET['keyword'])) { $keyword = $_GET['keyword']; }
else { $keyword = ''; }

if (isset($_GET['matchtype'])) { $matchtype = $_GET['matchtype']; }
else { $matchtype = ''; }

if (isset($_GET['device'])) { $device = $_GET['device']; }
else { $device = ''; }


$fullurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>









