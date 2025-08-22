<html><head></head><body><?php
session_start();
include 'PHPMailerAutoload.php';
if($_POST['name']!=NULL){ $name=$_POST['name']; }
if($_POST['email']!=NULL){ $email=$_POST['email']; }
if($_POST['phone']!=NULL){ $phone=$_POST['phone']; }
if($_POST['intrestedin']!=NULL){ $interestedin=$_POST['intrestedin']; }

$utm_source = $_POST['utm_source']." ";
$utm_medium = $_POST['utm_medium']." ";
$utm_campaign = $_POST['utm_campaign']." ";
$utm_term = $_POST['utm_term']." ";
$keyword = $_POST['keyword']." ";
$fullurl = $_POST['fullurl']." ";

if($_POST['downl']!=NULL){
$downloade=$_POST['downl']; 

}
else
{
$downloade=2;
}

if($email != NULL || $email != '' || $phone != NULL || $phone != '')
{
date_default_timezone_set("Asia/Kolkata");

$subject = 'Enquiry for Ecolife Developers';

$message = "<!DOCTYPE HTML>
<html xmlns='http://www.w3.org/1999/xhtml'>

<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">

<meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;'>
<title>Email Template</title>
<style type='text/css'>
body {
width: 100%;
background-color: #EFEFEF;
margin: 0;
padding: 0;
-webkit-font-smoothing: antialiased;
}
html {
width: 100%;
}
table {
font-size: 14px;
border: 0;
}
@media only screen and (max-width: 640px) {
.header-bg {
width: 440px !important;
height: 10px !important;
}
.main-header {
line-height: 28px !important;
}
.main-subheader {
line-height: 28px !important;
}
.container {
width: 440px !important;
}
.container-middle {
width: 420px !important;
}
.mainContent {
width: 400px !important;
}
.main-image {
width: 400px !important;
height: auto !important;
}
.banner {
width: 400px !important;
height: auto !important;
}
.section-item {
width: 400px !important;
}
.section-img {
width: 400px !important;
height: auto !important;
}
.prefooter-header {
padding: 0 10px !important;
line-height: 24px !important;
}
.prefooter-subheader {
padding: 0 10px !important;
line-height: 24px !important;
}
.top-bottom-bg {
width: 420px !important;
height: auto !important;
}
}

@media only screen and (max-width: 479px) {

.header-bg {
width: 280px !important;
height: 10px !important;
}
.top-header-left {
width: 260px !important;
text-align: center !important;
}
.top-header-right {
width: 260px !important;
}
.main-header {
line-height: 28px !important;
text-align: center !important;
}
.main-subheader {
line-height: 28px !important;
text-align: center !important;
}

.logo {
width: 260px !important;
}
.nav {
width: 260px !important;
}
.container {
width: 280px !important;
}
.container-middle {
width: 260px !important;
}
.mainContent {
width: 240px !important;
}
.main-image {
width: 240px !important;
height: auto !important;
}
.banner {
width: 240px !important;
height: auto !important;
}

.section-item {
width: 240px !important;
}
.section-img {
width: 240px !important;
height: auto !important;
}

.prefooter-header {
padding: 0 10px !important;
line-height: 28px !important;
}
.prefooter-subheader {
padding: 0 10px !important;
line-height: 28px !important;
}

.top-bottom-bg {
width: 260px !important;
height: auto !important;
}
}

</style>
</head>

<body leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
<table border='0' width='100%' cellpadding='0' cellspacing='0'>
<tr>
<td height='20'></td>
</tr>
<tr>
<td>
<table border='0' width='560' align='center' cellpadding='0' cellspacing='0' class='container-middle'>
<tr>
<td>
<table border='0' align='left' cellpadding='0' cellspacing='0' class='top-header-left'>
<tr>
<td align='center'>
<table border='0' cellpadding='0' cellspacing='0' class='date'>
<tr>
<td>
<img editable='true' mc:edit='icon1' style='display: block;' src='http://www.mrcreativedemo.com/verified_enquiry/img/grank-logo.png' alt='icon 1' />
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border='0' align='right' cellpadding='0' cellspacing='0' class='top-header-right'>
<tr>
<td align='center'>
<table border='0' cellpadding='0' cellspacing='0' align='center' class='tel'>
<tr>
<td>
&nbsp;
</td>
<td>&nbsp;&nbsp;</td>
<td mc:edit='tel' style='color: #fefefe; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<singleline>
<img editable='true' mc:edit='icon1' style='display: block;' src='http://www.mrcreativedemo.com/verified_enquiry/img/google-partner-logo.jpg' alt='icon 1' />
</singleline>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height='10'></td>
</tr>
<tr>
<td width='100%' align='center' valign='top'>
<table border='0' width='600' cellpadding='0' cellspacing='0' align='center' class='container' bgcolor='ffffff'>
<tr>
<td><img style='display: block;' src='http://www.mrcreativedemo.com/verified_enquiry/img/top-header-bg.png' alt='' class='header-bg' /></td>
</tr>
<tr bgcolor='2780cb'>
<td height='5'></td>
</tr>
<tr bgcolor='2780cb'>
<td align='center'>
<table border='0' width='560' align='center' cellpadding='0' cellspacing='0' class='container-middle'>
<tr>
<td>
<table border='0' align='left' cellpadding='0' cellspacing='0' class='top-header-left'>
<tr>
<td align='center'>
<table border='0' cellpadding='0' cellspacing='0' class='date'>
<tr>
<td>
<img editable='true' mc:edit='icon1' width='13' style='display: block;' src='http://www.mrcreativedemo.com/verified_enquiry/img/icon-cal.png' alt='icon 1' />
</td>
<td>&nbsp;&nbsp;</td>
<td mc:edit='date' style='color: #fefefe; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<singleline>
".date('d l')."
</singleline>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border='0' align='right' cellpadding='0' cellspacing='0' class='top-header-right'>
<tr>
<td align='center'>
<table border='0' cellpadding='0' cellspacing='0' align='center' class='tel'>
<tr>
<td>
&nbsp;
</td>
<td>&nbsp;&nbsp;</td>
<td mc:edit='tel' style='color: #fefefe; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<singleline>
".date('F Y')."
</singleline>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr bgcolor='2780cb'>
<td height='10'></td>
</tr>
</table>

<table width='600' border='0' cellpadding='0' cellspacing='0' align='center' class='container' bgcolor='ffffff'>
<tr bgcolor='ffffff'>
<td height='40'></td>
</tr>

</table>
</td>
</tr>
<tr bgcolor='ffffff'>
<td height='40' style='text-align:center;'> Enquiry for Ecolife Developers </td>
</tr>
<tr>
<td>
<table border='0' width='560' align='center' cellpadding='0' cellspacing='0' class='container-middle'>
<tr>
<td align='center'><img style='display: block;' width='560' height='auto' src='http://www.mrcreativedemo.com/verified_enquiry//img/top-rounded-bg.png' alt='' class='top-bottom-bg' /></td>
</tr>
<tr bgcolor='ffffff'>
<td height='7'></td>
</tr>
<tr bgcolor='ffffff'>
<td height='20'></td>
</tr>
<tr bgcolor='ffffff'>
<td>
<table width='528' border='0' align='center' cellpadding='0' cellspacing='0' class='mainContent'>

<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>Name : ".$name."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>
<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>Email: ".$email."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>
<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>Phone: ".$phone."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>
<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>Preference : ".$interestedin."</i>
</multiline>
</td>
</tr>


<tr>
<td height='20'></td>
</tr>

<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>UTM Campaign: ".$utm_campaign."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>

<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>UTM Source: ".$utm_source."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>

<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>UTM Medium: ".$utm_medium."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>

<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>UTM Term: ".$utm_term."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>

<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>Keyword: ".$keyword."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>

<tr>
<td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
<i>Full URL: ".$fullurl."</i>
</multiline>
</td>
</tr>

<tr>
<td height='20'></td>
</tr>


</table>
</td>
</tr>
<tr bgcolor='ffffff'>
<td height='25'></td>
</tr>
<tr>
<td align='center'><img style='display: block;' width='560' height='auto' src='http://www.mrcreativedemo.com/verified_enquiry/img/bottom-rounded-bg.png' alt='' class='top-bottom-bg' /></td>
</tr>
<tr bgcolor='2780cb'>
<td height='14'></td>
</tr>
<tr bgcolor='2780cb'>
<td mc:edit='copy3' align='center' style='color: #eee; font-size: 10px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
<multiline>
Copyright ".date('Y')." . All Rights Reserved 
</multiline>
</td>
</tr>
<tr>
<td><img style='display: block;' src='http://www.mrcreativedemo.com/verified_enquiry/img/bottom-footer-bg.png' alt='' class='header-bg' /></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height='30'></td>
</tr>
</table>

</body>
</html>";


$response = $_POST["token"];
$ch = curl_init();

curl_setopt_array($ch, [
CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => [
'secret' => '6LeLFBwqAAAAAOVAuRzYvhWtjXV2FpPq4NfI1be0',
'response' => $_POST["token"],
'remoteip' => $_SERVER['REMOTE_ADDR']
],
CURLOPT_RETURNTRANSFER => true
]);

$output = curl_exec($ch);
curl_close($ch);

$json = json_decode($output);

if ($json->success==false) {
echo "Captcha Verification Failed";
} else if ($json->success==true) {


$mail = new PHPMailer();		
$mail->From      = 'ecolifedeveloper@atlas.herosite.pro';		
$mail->FromName  = "TD-G Rank-Enquiry";		
$mail->Subject   = $subject;		
$mail->Body      = $message;		
$mail->SetFrom("ecolifedeveloper@atlas.herosite.pro", 'TD-G Rank-Enquiry');


// $mail->AddAddress('tilakprabhu@grank.co.in', 'Ecolife Developers');

$mail->AddAddress('santoshswain@ecolifedevelopers.com', 'Ecolife Developers');
$mail->AddCC("sandip@grank.co.in", "Ecolife Developers");
$mail->AddBCC('leadtest@grank.co.in', 'Ecolife Developers');
$mail->AddBCC('gaganatummala@grank.co.in', 'Ecolife Developers');




$mail->IsHTML(true);


if($mail->send())
{

$accessKey = 'u$ra60d318edcfd2c3f750e83fd62ce98ed';
$secretKey = '1b528235093484a37fbba7216c6aa08d33b6084a';

$api_url_base = 'https://api-in21.leadsquared.com/v2/LeadManagement.svc';
$url = $api_url_base . '/Lead.Create?accessKey=' . $accessKey . '&secretKey=' . $secretKey;	

//echo $url;


/* Lead values that you would save in LeadSquared*/
$data_string = '[       
{"Attribute":"FirstName", "Value": "'.$name.'"},
{"Attribute":"EmailAddress", "Value": "'.$email.'"},
{"Attribute":"Phone", "Value": "'.$phone.'"},
{"Attribute":"Source","Value":"G-Rank"}

]';

try
{
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
'Content-Type:application/json',
'Content-Length:'.strlen($data_string)
));

//$json_response = curl_exec($curl);

$response = curl_exec($curl);
$err = curl_error($curl);

/*echo $data_string;
echo "<br/>";
echo $response;*/

//curl_close($curl);
} 

catch (Exception $ex) { 
curl_close($curl);
}

if ($err) {
echo "cURL Error #:" . $err;
} 

else {

//echo $curl;
header("Location: thankyou-enquire.php?email=$email&download=1");

}

}
else
{
echo "Email Not Sent!!. Please try again";
}

}

}

else
{
echo "Email or Phone Number is empty";
}


?>
</body></html>