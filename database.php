<html><head></head><body><?php
$mysqli = new mysqli("localhost","ramkyonekarnival_odsy_uger","@#SXsad#$%Ws4d","ramkyonekarnival_odsy_gtracker");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if ($result = $mysqli -> query("SELECT * FROM googledata")) {
  echo "Returned rows are: " . $result -> num_rows;
  // Free result set
 
 	if ($result) {     
    
	while ($row = mysqli_fetch_array($result)) {         
		echo 'ID: ' . $row['gid'] . '<br>';         
		echo 'utm_campaign: ' . $row['utm_campaign'] . '<br>';        
		echo 'utm_keyword: ' . $row['utm_keyword'] . '<br>';         
		echo 'utm_network: ' . $row['utm_network'] . '<br>';         
		echo 'utm_source: ' . $row['utm_source'] . '<br>';         
		echo 'gclid: ' . $row['gclid'] . '<br>';         
		echo 'timestamp: ' . $row['timestamp'] . '<br><br>';     
	} 
} 
}

$mysqli -> close();
?>

</body></html>