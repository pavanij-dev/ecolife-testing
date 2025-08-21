<?php


if{
    
$_SESSION["gcid"] = $_GET["gclid"];

$_SESSION["camp"] = $_GET['campaign'];

$_SESSION["tstamp"] = CURRENT_TIMESTAMP;

}

else

{

$_SESSION["gcid"] = "0";

$_SESSION["camp"] = "0";

$_SESSION["tstamp"] = "0";

}