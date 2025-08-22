<html><head></head><body><?php
// Start the session
session_start();
//ini_set('error_reporting', 0);
//echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];  
if ($_SESSION["gcid"] != "")
{
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
   
    $sql = "INSERT INTO `googledatakenyt` (`gid`, `gclid`, `timestamp`, `gip`, `utm_source`, `utm_medium`, `utm_campaign`, `utm_term`, `matchtype`, `device`,`gurl`) VALUES (NULL,'".$_SESSION['gcid']."',current_timestamp(),'".$_SERVER['REMOTE_ADDR']."','".$_SESSION['utm_source']."','".$_SESSION['utm_medium']."','".$_SESSION['utm_campaign']."','".$_SESSION['utm_term']."','".$_SESSION['matchtype']."','".$_SESSION['device']."','".$_SESSION["uurl"]."')";
  //  echo $sql;   
  if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
} else {
 // echo "Error: " . $sql . "<br>" . $conn->error;
}
    $conn->close();
}


  

?></body></html>