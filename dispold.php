<html><head></head><body><?php
// Start the session
session_start();
//ini_set('error_reporting', 0);
//echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];  
if ($_GET['gclid'] != "")
{
$_SESSION["gcid"] = $_GET["gclid"];
$_SESSION["camp"] = $_GET['campaign'];
$_SESSION["iip"] = $_SERVER['REMOTE_ADDR'];
$_SESSION["uurl"] = $_SERVER['REQUEST_URI'];
date_default_timezone_set("asia/kolkata");
$_SESSION["tstamp"] = date("Y-m-d h:i:s");
$servername = "localhost";
$username = "ramkyonekarnival_odsy_uger";
$password = "@#SXsad#$%Ws4d";
$dbname = "ramkyonekarnival_odsy_gtracker";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
   // echo ("INSERT INTO `googledata` (`gid`, `utm_campaign`, `gclid`, `timestamp`,`gip`) VALUES (NULL, 'EAIaIQobChMI', 'EAIaIQobChMI', CURRENT_TIMESTAMP)");
    $sql = "INSERT INTO `googledata` (`utm_campaign`, `gclid`, `timestamp`,`gip`) VALUES ('".$_GET['campaign']."','".$_GET['gclid']."',current_timestamp(),'".$_SERVER['REMOTE_ADDR']."')";
  //  echo $sql;   
  if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
} else {
 // echo "Error: " . $sql . "<br>" . $conn->error;
}
    $conn->close();
}



if (isset($_SESSION['gcid'])) {
  /// your code here
}
else{
$_SESSION["gcid"] = "NA";
$_SESSION["camp"] = "NA";
$_SESSION["iip"] = $_SERVER['REMOTE_ADDR'];
$_SESSION["uurl"] = $link .= $_SERVER['REQUEST_URI'];
}
  

?></body></html>