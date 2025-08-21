<?php //include 'disp.php'; ?>

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

<!DOCTYPE html>
<html lang="en">
<head>

<title>Ultra Luxury 3BHK Apartments in Varthur | Ecolife Eon Akash</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content=" Buy a high-end 3 BHK apartments in Varthur, Bangalore, close to Marathahalli, Tech parks, and situated in a prime location. Prices start at 1.36 Crore.">
<meta name="keywords" content="3bhk apartments in varthur, ecolife 3bhk apartment, 3bhk apartments for sale near me, 3 bhk flats in varthur for sale, luxury 3bhk apartment in varthur, ecolife eon akash, ecolife developers, 3 bhk flats for sale in varthur bangalore, 3 bhk flats for sale in panathur bangalore, flats for sale in Panathur, apartments near Varthur, apartments in Varthur Bangalore, new apartments in Varthur, flats near varthur, flats in varthur bangalore">
<meta name="author" content="Ecolife builders and developers">
<meta name="robots" content="index, follow">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- Social media sharing meta tags -->
<meta property="og:title" content="Ultra Luxury 3BHK Apartments in Varthur | Ecolife Eon Akash">
<meta property="og:description" content=" Buy a high-end 3 BHK apartments in Varthur, Bangalore, close to Marathahalli, Tech parks, and situated in a prime location. Prices start at 1.36 Crore.">
<meta name="og-keywords" content="3bhk apartments in varthur, ecolife 3bhk apartment, 3bhk apartments for sale near me, 3 bhk flats in varthur for sale, luxury 3bhk apartment in varthur, ecolife eon akash, ecolife developers, 3 bhk flats for sale in varthur bangalore, 3 bhk flats for sale in panathur bangalore, flats for sale in Panathur, apartments near Varthur, apartments in Varthur Bangalore, new apartments in Varthur, flats near varthur, flats in varthur bangalore">
<meta property="og:image" content="https://www.ecolifedevelopers.com/EON-Akash-Block-B-C/assets/images/logo-1.webp">
<meta property="og:url" content="https://www.ecolifedevelopers.com/EON-Akash-Block-B-C/">
<meta property="og:url" content="https://www.ecolifedevelopers.com/EON-Akash-Block-B-C/">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="https://www.ecolifedevelopers.com/EON-Akash-Block-B-C/">
<meta name="twitter:description" content="Buy a high-end 3 BHK apartments in Varthur, Bangalore, close to Marathahalli, Tech parks, and situated in a prime location. Prices start at 1.36 Crore.">

<meta name="twitter:image" content="https://www.ecolifedevelopers.com/EON-Akash-Block-B-C/assets/images/logo-1.webp">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- font awesome link  -->
<link rel="shortcut icon" href="assets/images/logo-1.webp" type="image/x-icon">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">-->
<!-- iadded -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- Google Fonts -->
<link  href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
<!-- Site All Style Sheet Css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css"  rel="stylesheet">
<link rel="stylesheet" href="assets/css/index.css">


<link rel="stylesheet" href="css/bootstrap.min.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="css/style.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="css/responsive.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="css/font-awesome.min.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="css/index.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/jquery.fancybox.min.css" media="print" onload="this.media='all'">
<noscript>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/index.css">
</noscript>
<!-- newly added -->

<link rel="stylesheet" href="css/bootstrap.min.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="css/style.min.css" media="print" onload="this.media='all'">

<link rel="preload" href="/images/icons/logo.webp" as="image">
<link rel="preload" as="image" href="assets/images/banner-eco-life-R1.webp" fetchpriority="high">
<link rel="stylesheet" href="style.css" media="print" onload="this.media='all'">

<!-- Fonts -->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;500;600;700;800&display=swap" as="style">
<link rel="preload" as="font" href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;500;600;700;800&display=swap" type="font/woff2" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;500;600;700;800&display=swap">

<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://cdn.jsdelivr.net">
<link rel="preconnect" href="https://unpkg.com"> -->

<noscript>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.min.css">
</noscript>

<link rel="preload" href="css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="css/bootstrap.min.css"></noscript>

<link rel="preload" href="css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="css/font-awesome.min.css"></noscript>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P42F62S');</script>
<!-- End Google Tag Manager -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EJ5300CG5M"></script>

<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-EJ5300CG5M');
</script>


<link rel="preload" 
as="image" 
href="assets/images/banner-eco-life-R1.webp" 
type="image/webp" 
fetchpriority="high">



</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P42F62S"
height="0" width="0" style="display:none;visibility:hidden">
</iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include 'header.php'; ?>



<div id="sidemenu" class="sidenav">
<a class="cta" href="tel:+918880804949" id="cta" aria-label="Call us at +91 88808 04949">
<svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
<style>svg{fill:#ffffff}</style>
<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
</svg>
</a>
</div>

<!-- <section class="banner-section fw">
<div class="banner-slider">
<div class="banner-bg  position-relative">
<img alt="" class="img-fluid desktop-in w-100" src="assets/images/banner-eco-life-R1.webp">
<img alt="" class="mobile-in w-100" src="assets/images/mobilr-banner.webp"> 
</div>

<div class="banner-bg  position-relative">
<img alt="" class="img-fluid desktop-in w-100" src="assets/images/banner-eco-life3.webp">
<img alt="" class="mobile-in w-100" src="assets/images/mobile-banner3.webp">
</div>

</div>
</section> -->

<section class="banner-section fw">
<div class="banner-slider">

<div class="banner-bg position-relative">
<picture>
<img src="assets/images/banner-eco-life-R1.webp" 
alt="eco life" 
class="img-fluid desktop-in w-100"
width="1920" height="600"
decoding="async" fetchpriority="high">

<img src="assets/images/mobilr-banner.webp" alt="Eco Life Banner R1" class="mobile-in w-100" decoding="async" fetchpriority="high" height="500">
</picture>
</div>

<div class="banner-bg position-relative">
<picture>
<img src="assets/images/banner-eco-life3.webp" alt="Eco Life Banner" class="img-fluid desktop-in w-100" height="500">
<img src="assets/images/mobile-banner3.webp" alt="Eco Life Banner 3" class="mobile-in w-100" decoding="async" loading="lazy" height="500">
</picture>
</div>

</div>
</section> 

<!-- <section class="banner-section fw">
<div class="banner-slider">

<div class="banner-bg position-relative">
<picture>
<img src="assets/images/banner-eco-life-R1.webp" class="img-fluid desktop-in w-100" decoding="async" fetchpriority="high" height="500">
<img src="assets/images/mobilr-banner.webp" alt="Eco Life Banner R1" class="mobile-in w-100" decoding="async" fetchpriority="high" height="500">
</picture>
</div>

<div class="banner-bg position-relative">
<picture>
<img src="assets/images/banner-eco-life3.webp" class="img-fluid desktop-in w-100" height="500">
<img src="assets/images/mobile-banner3.webp" alt="Eco Life Banner 3" class="mobile-in w-100" decoding="async" loading="lazy" height="500">
</picture>
</div>

</div>
</section> -->


<section class="ser-icn fw hight-ph">
<div class="container">
<!--<h2>Project <span>Pricebreak</span></h2>-->
<div class="scr-icn-bxes fw1">
<div class="scr-icn-bx1">
<div class="ph-img">
<img loading="lazy" alt="" src="assets/images/icon/ph1.webp" class="scr-hvr-off" width="48" height="48">
</div>
<h5>321 Luxurious <br> Flats</h5>
</div>
<div class="scr-icn-bx1">
<div class="ph-img">
<img loading="lazy" alt="" src="assets/images/icon/ph2.webp" width="48" height="48">
</div>
<h5>3BHK from <br> 1415 - 1737 Sqft</h5>
</div>
<div class="scr-icn-bx1">
<div class="ph-img">
<img loading="lazy" alt="" src="assets/images/icon/ph3.webp" width="48" height="48">
</div>
<h5>Spread Across <br> 4.25 Acres</h5>
</div>
<div class="scr-icn-bx1">
<div class="ph-img">
<img loading="lazy" alt="" src="assets/images/icon/ph4.webp" width="48" height="48">
</div>
<h5>Over 75% Open <br> Space</h5>
</div>
<div class="scr-icn-bx1">
<div class="ph-img">
<img loading="lazy" alt="" src="assets/images/icon/ph5.webp"  width="48" height="48">
</div>
<h5>Bigger <br> Balconies</h5>
</div>
</div>
</div>
</section>

<section class="overview about-section fw">
<div class="fw" id="about"></div>
<div class="container">
<div class="row abou_sec">
<div class="col-md-8 col-12">
<h2>About <span>Us</span></h2>
<div class="sscrl-txt divScroll">
<p >The idea of Ecolife EON Akash is revolutionary in itself. A home nestled in greenery, away from chaos and clutter is perhaps the ultimate requirement for any home. Our architects have taken inspiration from Bangalore to create a small piece of heaven for the ones in the look-out for beautiful 3 BHK homes in Varthur and Panathur Area.</p>
<p>As Ecolife Developers, we take a different approach to residential housing. While embracing nature, we utilize the latest technologies to build our smartly designed apartments in the east corridors of Bengaluru.</p>
<p>Strategically located on the Panathur-Varthur Main Road, EON Akash’s apartments in Varthur and Panathur is positioned at the heart of Bengaluru's IT quadrilateral. This prime location isn't just about a prestigious address; it's about the advantage of effortless connectivity. Your daily commutes to work, schools, hospitals, malls, and more become a breeze, ensuring you reclaim precious moments for what truly matters.</p>
<p>Surrounded by lush green spaces, EON Akash is more than just a residence, it's an oasis in the midst of urban hustle. The overall ambience exudes quiet sophistication, creating a haven where every moment is a celebration of fine living. While redefining luxury in our 3 BHK flats in Varthur and Panathur, also be blown away with mindfully interspersed landscapes and wide range of amenities, creating vast open areas that are both inviting and invigorating.</p>
<p><b>BBMP | RERA Approved
PRM/KA/RERA/1251/446/
PR/300323/005832</b>

</p>
</div>
</div>
<div class="col-md-4 mobile-none">

<div class="shadow sticky-bar blcon-img">
<form id="eformp1" class="p-3" name="eform" method="post" action="enquire-mail.php">
<input type="hidden" class="formsource" name="formsource" value="popup_form"> 
<div class="form-group position-relative">
<label>Name <span class="text-danger">*</span>
</label>
<i data-feather="user" class="fea icon-sm icons"></i>
<input type="text" name="name" id="ename" class="form-control pl-2" pattern="[a-zA-Z ]+"
minlength="3" placeholder="Your name" required>
</div>
<div class="form-group position-relative">
<label>Mobile no <span class="text-danger">*</span>
</label>
<input type="tel" onkeypress='return restrictAlphabets(event)'  pattern="[6-9]{1}[0-9]{9}"  minlength="10" maxlength="13" name="phone" id="ephone" class="form-control pl-2" placeholder="Your mobile"
required>

</div>
<div class="form-group position-relative hl">
<label>Email ID <span class="text-danger">*</span>
</label>
<i data-feather="mail" class="fea icon-sm icons"></i>
<input name="email" id="eemail"  type="email" class="form-control pl-2" placeholder="Your email"
required>
</div>

<div class="form-group position-relative">
<label>Preference<span class="text-danger">*</span>
</label>
<!-- <select class="form-control pl-2" id="exampleFormControlSelect4" name="intrestedin" required>
<option value="">Select Your Preference</option>
<option value="3 BHK - ₹ 1.36 Cr Onwards"> 3 BHK</option>
</select> -->
<select class="form-control pl-2" id="exampleFormControlSelect4" name="intrestedin" aria-label="Select Your Preference 3 BHK" required>
<option value="your like">Select Your Preference</option>
<option value="3 BHK - ₹ 1.36 Cr Onwards">3 BHK</option>
</select>
</div>

<div class="button-container text-center">
<button type="submit" class="enquire ">Enquire Now</button>
</div>

<input type="hidden" id="token2" name="token">

<input type="hidden" name="utm_source" value="<?php echo $utm_source ?>">
<input type="hidden" name="utm_medium" value="<?php echo $utm_medium ?>">
<input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign ?>">
<input type="hidden" name="utm_term" value="<?php echo $utm_term ?>">
<input type="hidden" name="keyword" value="<?php echo $keyword ?>">
<input type="hidden" name="matchtype" value="<?php echo $matchtype ?>">
<input type="hidden" name="device" value="<?php echo $device ?>">
<input type="hidden" name="fullurl" value="<?php echo $fullurl ?>">
<a href="your_link_here" download="your_filename_here" style="display: none" id="hiddenLink"></a>
</form>
</div>
</div>
</div>
</div>

</section>

<!-- balcony start -->

<section class="amenities-section property-section section-title fw">
<div class="fw" id="amenities"></div>
<div class="container">
<h2>Amenities</h2>
<div class="property-tabs fw">
<div class="tabs-box">
<!--Tab Btns-->
<div class="now-wrap">
<div class="overflow">
<ul class="tab-btns tab-buttons clearfix">
<li data-tab="#tab31" class="tab-btn">BLOCK LEVEL AMENITIES</li>
<li data-tab="#tab32" class="tab-btn active-btn">SITE LEVEL AMENITIES</li>
<li data-tab="#tab34" class="tab-btn ">BASEMENT LEVEL AMENITIES</li>
</ul>
</div>
</div>
<div class="tabs-content">
<div class="tab " id="tab31">
<div class="prop-tabs">
<div class="prop-tab-bx">
<div class="b-1">
<img loading="lazy" alt="" src="assets/img/slider.webp">
<h3 class="ml-2">Kids play Zone</h3>
</div>
</div>
<div class="prop-tab-bx">
<div class="b-1">
<img loading="lazy" alt="" src="assets/img/swimming-pool.webp">
<h3>Swimming Pool</h3>
</div>
</div>

<div class="prop-tab-bx">
<div class="b-1">
<img loading="lazy" alt="img" src="assets/img/Party-Hall.webp">
<h3 class="ml-2">Party Hall</h3>
</div>
</div>

<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/entrance.webp">
<h3 class="ml-2">Entrance</h3>
</div>
<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/seat-out.webp">
<h3 class="ml-2">Elder Resting Areas</h3>
</div>
<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/Kids-Games.webp">
<h3 class="ml-2">Kids Games</h3>
</div>
<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/chess.webp">
<h3 class="ml-2">Indoor Games</h3>
</div>
</div>
</div>

<div class="tab active-tab" id="tab32">
<div class="prop-tabs">
<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/Lounge.webp">
<h3 class="ml-2">Lounge</h3>
</div>
<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/Kids-Soft-Toy-Room.webp">
<h3 class="ml-2">Kids Soft Toy room</h3>
</div>
<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/Aerobics.webp">
<h3 class="ml-2">Aerobics</h3>
</div>
<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/cycling.webp">
<h3 class="ml-2">Outdoor Gym(Bicycling)</h3>
</div>
<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/slider.webp">
<h3 class="ml-2">Children's Play Area</h3>
</div>
<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/informal-sitting-area.webp">
<h3 class="ml-2">Informal Seating Area</h3>
</div>
<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/amphi2.webp">
<h3 class="ml-2">Amphitheatre</h3>
</div>
<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/basket-ball.webp">
<h3 class="ml-2">Basket Ball</h3>
</div>
<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/outdoor-gym.webp">
<h3 class="ml-2">Outdoor Gym</h3>
</div>

<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/Yoga-Center.webp">
<h3 class="ml-2">Yoga Center</h3>
</div>

<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/Educative-Wall.webp">
<h3 class="ml-2">Educative Wall</h3>
</div>

</div>
</div>
<!--Tab -->
<div class="tab " id="tab34">
<div class="prop-tabs">
<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/charging-point.webp">
<h3 class="ml-2">Power Backup</h3>
</div>

<div class="prop-tab-bx">
<img loading="lazy" alt="img" src="assets/img/Water-Wate-Managment.webp">
<h3 class="ml-2">Water Waste Management</h3>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

</section>
<section class="property-section section-title flr-plns fw" id="floorplans">
<div class="container">
<h2>Floor <span>Plans</span></h2>
<div class="property-tabs">
<div class="tabs-box">
<!--Tab Btns-->

<ul class="tab-btns tab-buttons clearfix custom-tabs">
<li data-tab="#tab00" class="tab-btn">Master Plan</li>
<li data-tab="#tab11" class="tab-btn active-btn">FLOOR PLAN</li>
<li data-tab="#tab22" class="tab-btn ">UNIT PLAN</li>
</ul>

<div class="tabs-content">
<div class="tab" id="tab00">
<div class="row">
<div class="col-md-12 plan-box">
<div class="image-box">
<a href="assets/images/mp1.webp" data-fancybox="group1" data-caption="Master Plan">
<img loading="lazy" src="assets/images/mp1.webp" alt="Master Plan" class="responsive w-h-img" data-lazy="" data-processed="true">
</a>
</div>
</div>
</div>
</div>
<div class="tab active-tab" id="tab11">
<div class="row">
<a href="assets/images/fp1.webp" data-fancybox="group3" data-caption="FLOOR PLAN">
<img loading="lazy" src="assets/images/fp1.webp" alt="Plan">
</a>
</div>
</div>
<!--Tab -->
<div class="tab " id="tab22">
<div class="my-4">
<div class="row">
<div class="col-md-4">
<div class="image-box">
<!-- <a href="assets/images/unit1.webp" data-fancybox="group4" data-caption="3 BHK"> -->
<img loading="lazy" src="assets/images/unit1-1.webp" alt="Plan">
</a>
</div>
</div>

<div class="col-md-4">
<div class="image-box">
<!-- <a href="assets/images/unit2.webp" data-fancybox="group4" data-caption="3 BHK"> -->
<img loading="lazy" src="assets/images/unit2-1.webp" alt="Plan">
</a>
</div>
</div>

<div class="col-md-4">
<div class="image-box">
<!-- <a href="assets/images/unit3.jpg" data-fancybox="group4" data-caption="3 BHK"> -->
<img loading="lazy" src="assets/images/unit3-1.webp" alt="Plan">
</a>
</div>
</div>

<div class="col-md-4">
<div class="image-box">
<!-- <a href="assets/images/unit4.jpg" data-fancybox="group4" data-caption="3 BHK"> -->
<img loading="lazy" src="assets/images/unit4-1.webp" alt="Plan">
</a>
</div>
</div>

<div class="col-md-4">
<div class="image-box">
<!-- <a href="assets/images/unit5.jpg" data-fancybox="group4" data-caption="3 BHK"> -->
<img loading="lazy" src="assets/images/unit5-1.webp" alt="Plan">
</a>
</div>
</div>

<div class="col-md-4">
<div class="image-box">
<!-- <a href="assets/images/unit6.jpg" data-fancybox="group4" data-caption="3 BHK"> -->
<img loading="lazy" src="assets/images/unit6-1.webp" alt="Plan">
</a>
</div>
</div>

<div class="col-md-4">
<div class="image-box">
<!-- <a href="assets/images/unit7.jpg" data-fancybox="group4" data-caption="3 BHK"> -->
<img loading="lazy" src="assets/images/unit7-1.webp" alt="Plan">
</a>
</div>
</div>

</div>
</div>
</div>

</div>
</div>
</div>
</div>
</section>

<section class="price-sheet fw">
<div class="container">
<h2>Ecolife <span>Pricebreak</span></h2>
<div class="row">
<div class="col-12 col-md-1 col-lg-2"></div>
<div class="col-12 col-md-10 col-lg-8">
<div>
<table class="table table-responsive table-border" id="pricingtable">

<thead>

<tr>
<th>Type</th>
<th>Area</th>
<th>Price</th>
</tr>
</thead>  

<tbody>
<tr>
<td>3 BHK</td>
<td>1415 - 1737</td>
<td><a class="unlock" data-toggle="modal" data-target="#staticBackdrop"> Unlock Price </a></td>
</tr>


</tbody>

</table>
</div>
</div>
<div class="col-12 col-md-1 col-lg-2"></div>
</div>
</div>
</section>

<section class="room-slider section-title bg-white pb-50 pt-60 proj-gal fw" id="gallery">
<div class="container"> 
<h2>Project <span>Gallery</span></h2>

</div>
<div class="row rooms-slider-two justify-content-center fw">
<div class="">
<div class="single-rooms-box">
<div class="room-img">
<div class="img">
<img loading="lazy"  alt="img" src="assets/images/gal13.webp"
class="responsive" data-lazy>
</div>
</div>

</div>
</div>
<div class="">
<div class="single-rooms-box">
<div class="room-img">
<div class="img">
<img loading="lazy"  alt="img" src="assets/images/gal14.webp" data-src="assets/images/gal14.webp"
class="responsive" data-lazy>
</div>
</div>

</div>
</div>
<div class="">
<div class="single-rooms-box">
<div class="room-img">
<div class="img">
<img loading="lazy"  alt="img" src="assets/images/gal15.webp" data-src="assets/images/gal15.webp"
class="responsive" data-lazy>
</div>
</div>

</div>
</div>
<div class="">
<div class="single-rooms-box">
<div class="room-img">
<div class="img">
<img loading="lazy"  alt="img" src="assets/images/gal16.webp"  data-src="assets/images/gal16.webp"
class="responsive" data-lazy>
</div>
</div>

</div>
</div> 
<div class="">
<div class="single-rooms-box">
<div class="room-img">
<div class="img">
<img loading="lazy"  alt="img" src="assets/images/gal17.webp"  data-src="assets/images/gal17.webp"
class="responsive" data-lazy>
</div>
</div>

</div>
</div>
<div class="">
<div class="single-rooms-box">
<div class="room-img">
<div class="img">
<img loading="lazy"  alt="img" src="assets/images/gal18.webp"  data-src="assets/images/gal18.webp"
class="responsive" data-lazy>
</div>
</div>

</div>
</div>
<div class="">
<div class="single-rooms-box">
<div class="room-img">
<div class="img">
<img loading="lazy"  alt="img" src="assets/images/gal6.webp"  data-src="assets/images/gal6.webp"
class="responsive" data-lazy>
</div>
</div>

</div>
</div>
<div class="">
<div class="single-rooms-box">
<div class="room-img">
<div class="img">
<img loading="lazy"  alt="img" src="assets/images/gal7.webp"  data-src="assets/images/gal7.webp"
class="responsive" data-lazy>
</div>
</div>

</div>
</div>
<div class="">
<div class="single-rooms-box">
<div class="room-img">
<div class="img">
<img loading="lazy"  alt="img" src="assets/images/gal8.webp"  data-src="assets/images/gal8.webp"
class="responsive" data-lazy>
</div>
</div>

</div>
</div>
<div class="">
<div class="single-rooms-box">
<div class="room-img">
<div class="img">
<img loading="lazy"  alt="img" src="assets/images/gal9.webp"  data-src="assets/images/gal9.webp"
class="responsive" data-lazy>
</div>
</div>

</div>
</div>
<div class="">
<div class="single-rooms-box">
<div class="room-img">
<div class="img">
<img loading="lazy"  alt="img" src="assets/images/gal10.webp"  data-src="assets/images/gal10.webp"
class="responsive" data-lazy>
</div>
</div>

</div>
</div>
<div class="">
<div class="single-rooms-box">
<div class="room-img">
<div class="img">
<img loading="lazy"  alt="img" src="assets/images/gal11.webp"  data-src="assets/images/gal11.webp"
class="responsive" data-lazy>
</div>
</div>

</div>
</div>
<div class="">
<div class="single-rooms-box">
<div class="room-img">
<div class="img">
<img loading="lazy"  alt="img" src="assets/images/gal12.webp"  data-src="assets/images/gal12.webp"
class="responsive" data-lazy>
</div>
</div>

</div>
</div>

</div>
</section>

<section class="loc-high-light fw">
<div class="container">
<h4>Location <span>Highlights</span></h4>
<div class="loc-block fw" >
<div class="loc-blk one">
<div class="loc-icn">
<img loading="lazy" src="assets/images/icon/workplace.webp" alt="img">
<h2>Work</h2>
</div>
<div class="loc-cnt">	
<ul>
<li>ITPL - 9Km</li>
<li>Sigma Tech Park, Whitefield - 5Km</li>
<li>Prestige Tech Park - 5Km</li>
<li>JP Morgan - Platina Tech Park 3 - 5.1Km</li>
<li>Ecospace Business Park - 6 Km</li>  
<li>Vaishnavi Tech Park Sarjapur - 8.9 Km</li>
</ul>
</div>		
</div>
<!-- <div class="loc-pt"> -->
<div class="loc-blk two">
<div class="loc-icn">
<img loading="lazy" src="assets/images/icon/school.webp" alt="img">
<h2>Schools</h2>
</div>
<div class="loc-cnt">
<ul>
<li>VIBGYOR High School Marathahalli - 3 Km</li>
<li>New Horizon Gurukul - 4.4 Km</li>
<li>Greenwood High International School - 5.8Km</li>
<li>Chrysalis High Varthur - 2.9 Km</li>
<li>Ryan International School - 6 Km</li>
<li>The International School Bangalore - 7.8 Km
</li>
</ul>
</div>	
<!-- </div> -->
</div>
<!-- <div class="loc-pt"> -->
<div class="loc-blk three">
<div class="loc-icn">
<img loading="lazy" src="assets/images/icon/autonomous-car.webp" alt="img">
<h2>Connectivity</h2>
</div>
<div class="loc-cnt">
<ul>
<li> Belandur Road Railway station - 3 Km</li>
<li>Marathahalli - 3.5 Km</li>
<li>Karmelaram Railway Station - 6.5 Km</li>
<li>Kadugodi Metro Station - 7.9 Km</li>
<li>Kadubeesanahalli Junction</li>
<li>The Forum Neighbourhood Mall - 4.6 Km</li>                                      
</ul>
</div>	
</div>
<!-- </div> -->
<!-- <div class="loc-pt"> -->
<div class="loc-blk four">
<div class="loc-icn">
<img loading="lazy" src="assets/images/icon/hospital.webp" alt="img">
<h2>Hospitals</h2>
</div>
<div class="loc-cnt">
<ul>
<li>Manipal Hospital - 4.1 Km</li>
<li>Sankara Eye Hospital - 6.2 Km</li>
<li>Sakra World Hospital - 6.2 Km</li>
</ul>
</div>	
</div>
<!-- </div> -->
</div>
</div>
</section>

<section class="sec1 fw">
<div class="balcony position-relative">
<img loading="lazy" src="assets/images/Image-Gal.webp" alt="">
<p class="balc-description">King Sized Balcony <br>
for Elevated Living & Stunning Views</p>
</div>
</section>

<section class="why-eco fw">
<div class="container">
<div class="row">
<div class="col-12">
<h4>Why Choose Ecolife Eon?</h4>
<p>Ecolife Eon provides prime apartments for sale in Varthur, where luxury and comfort meet seamlessly. You'll enjoy easy access to Gunjur, Panathur, Whitefield, and ITPL, making your daily commute effortless with just a 15-minute drive to IT Parks. Choose from spacious 3BHK apartments featuring king-sized balconies for extra comfort and style. The development boasts top-notch amenities tailored for modern living and is crafted by Ecolife Developers, guaranteeing exceptional quality and connectivity throughout the property.</p>
</div>
</div>
</div>
</section>

<section class="specification d1 position-relative fw specs-sec" id="spec">

<div class="container custom-width4">

<div class="row" >

<div class=" col-md-8 cl speci-hdng">
<h2>Specifications</h2>
<div class="accordion-items">
<div class="br-styles">
<div class="accordion-heading"><b>Structure</b></div>
<div class="accordion-content">
<ul>
<li>RCC framed structure, Structural design complies to meet the requirement of
seismic parameters of this zone. </li>
</ul>

</div>
</div>

<div class="br-styles">
<div class="accordion-heading"><b>Walls</b></div>
<div class="accordion-content">

<ul>
<li>External walls - 6” Solid Bricks with cement plastering.</li>
<li> The internal walls 6" & 4” Solid Bricks.</li>
</ul>

</div>
</div>

<div class="br-styles">

<div class="accordion-heading"><b>Flooring</b></div>
<div class="accordion-content">

<ul>
<li>Living, Dining & Bedrooms – Double charged Vitrified Tiles.</li>
<li>Kitchen – Double charged vitrified tiles.</li>
<li>Toilets – anti-skid ceramic tiles.</li>
<li>Balcony – anti-skid ceramic tiles.</li>
<li>Utility - anti-skid ceramic tiles</li>
</ul>

</div>
</div>

<div class="br-styles">

<div class="accordion-heading"><b>Paint</b></div>
<div class="accordion-content">

<ul>
<li>External –Exterior emulsion paint.</li>
<li>Living, Dining, Bedrooms & Kitchen –Interior emulsion paint.</li>
<li>Toilets – ceramic tiles up to 7feet height.</li>
<li>Ceiling - Emulsion paint.</li>
</ul>

</div>
</div>

<div class="br-styles">
<div class="accordion-heading"><b>Kitchen & Utility</b></div>
<div class="accordion-content">

<ul>
<li>Granite Platform.</li>
<li>Electrical points for Water Purifier, Chimney, Fridge, Washing machine and Oven.</li>
<li>Single Bowl Stainless steel sink.</li>
<li>Dish washer point.</li>
<li>Reticulated Gas piping system.</li>                                       
</ul>

</div>
</div>

<div class="br-styles">

<div class="accordion-heading"><b>Electrical</b></div>
<div class="accordion-content">

<ul>
<li>T.V point in Living & Master bedroom.</li>
<li>Modular electrical switches.</li>
<li>Power socket for A.C. in Master bedrooms.</li>
<li>Provision for A.C. in Living and other bedrooms.</li>
<li>Telephone point & Intercom facility in Living or Dining.</li>                                        
<li>Power loads for each unit.</li>                                        
<li>3 BHK - 4 kW.</li>
</ul>

</div>
</div>

<div class="br-styles">

<div class="accordion-heading"><b>Toilets</b></div>
<div class="accordion-content">

<ul>
<li>Wash basin</li>
<li>Two-in-one mixer for shower area</li>
<li>EWC with health faucets</li>
<li>All sanitary ware,fixtures and fittings shall be of Jaguar make or equivalent.</li>
</ul>

</div>
</div>
</div>
</div>

<div class="col-mb-4 cl-img">
<span class="spec-img">
<img loading="lazy" src="assets/images/icon/logo.webp" alt="img">
</span>
</div>

</div>
</div>

</section>

<section class="contact-us location-section fw" id="contactus">
<div class="container">
<div class="row">
<div class="col-md-5  p-mobile-0">
<div class="loc-sec-hd">
<h2>Contact <span>Us</span></h2>
</div>
<div class="shadow bg-white-form">
<div class="address-mp">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5290689477756!2d77.7317284!3d12.9379611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae126511bb99d9%3A0x22c23f9f69e1d164!2s30%2C%20Balagere%20Rd%2C%20inside%20Ecolife%20Developers%2C%20Devasthanagalu%2C%20Balagere%2C%20Varthur%2C%20Bengaluru%2C%20Karnataka%20560087!5e0!3m2!1sen!2sin!4v1697708077474!5m2!1sen!2sin" 
width="600" 
height="450" 
style="border:0;" 
allowfullscreen="" 
loading="lazy" 
referrerpolicy="no-referrer-when-downgrade"
title="Google Maps location of Eco Life project"
>
</iframe>
</div>
</div>
</div>
<div class="col-md-7  p-mobile-0 enq-form off-addr-frm">
<form id="eform5" class="p-3 shadow br-25" name="eform" method="post" action="footer-cont.php">
<input type="hidden" class="formsource" name="formsource" value="bottom_form">
<div class="row">
<div class="col-md-6">
<div class="form-group position-relative">
<label>Name <span class="text-danger">*</span>
</label>
<i data-feather="user" class="fea icon-sm icons"></i>
<input type="text" name="name" id="cname" class="form-control pl-2" pattern="[a-zA-Z ]+"
minlength="3" placeholder="Your name" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group position-relative">
<label>Mobile no <span class="text-danger">*</span></label>
<input type="tel" onkeypress='return restrictAlphabets(event)' pattern="[7-9]{1}[0-9]{9}"  minlength="10" maxlength="13" name="phone" id="cphone" class="form-control pl-2" placeholder="Your mobile" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group position-relative">
<label>Email ID <span class="text-danger">*</span>
</label>
<i data-feather="mail" class="fea icon-sm icons"></i>
<input name="email" id="cemail"  type="email" class="form-control pl-2" placeholder="Your email"
required>
</div>
</div>
<div class="col-md-6">
<div class="form-group position-relative">
<label for="exampleFormControlSelect6">Preference<span class="text-danger">*</span></label>
<select class="form-control pl-2" id="exampleFormControlSelect6"  name="intrestedin" required>
<option value="">Select Your Preference</option>
<option value="3 BHK - ₹ 1.36 Cr Onwards"> 3 BHK </option>
</select>
</div>
</div>

</div>
<div class="button-container text-center">
<button type="submit" class="enquire ">Enquire Now</button>
</div>

<input type="hidden" id="token3" name="token">

<input type="hidden" name="utm_source" value="<?php echo $utm_source ?>">
<input type="hidden" name="utm_medium" value="<?php echo $utm_medium ?>">
<input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign ?>">
<input type="hidden" name="utm_term" value="<?php echo $utm_term ?>">
<input type="hidden" name="keyword" value="<?php echo $keyword ?>">
<input type="hidden" name="matchtype" value="<?php echo $matchtype ?>">
<input type="hidden" name="device" value="<?php echo $device ?>">
<input type="hidden" name="fullurl" value="<?php echo $fullurl ?>">
<!-- <a href="your_link_here" download="your_filename_here" style="display: none" id="hiddenLink"></a> -->

</form>

</div>
</div>
</div>
</section>


<section class="faqs fw">
<div class="container">
<div class="row">
<div class="col-12">

<h3>Faq'<span>s</span></h3>
<div class="accordion" id="accordionExample">
<div class="card">
<div class="card-header" id="headingOne">
<h2 class="mb-0">
<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
1. What is Ecolife Eon Akash?
</button>
</h2>
</div>

<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
<div class="card-body">
Ecolife Eon Akash is a premium residential project offering luxurious 3BHK apartments. Located in Varthur, Bangalore, this project combines modern amenities with comfort and style. If you're looking for high-end apartments for sale in this area, Ecolife Eon Akash stands out with its exceptional design and luxury features.
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="headingTwo">
<h2 class="mb-0">
<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
2. Who are Ecolife Developers?
</button>
</h2>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
<div class="card-body">
Ecolife Developers are trusted builders known for their commitment to quality and transparency. They have established a strong reputation in Bangalore, particularly in areas like Varthur and Panathur. Their ongoing projects reflect their dedication to delivering well-constructed and reliable residential spaces.
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="headingThree">
<h2 class="mb-0">
<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
3. Where is Ecolife Eon Located?
</button>
</h2>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
<div class="card-body">
Ecolife Eon is strategically located in Varthur, Bangalore, offering easy access to key areas such as Whitefield, ITPL, Gunjur, and Marathahalli. For those searching for 3BHK flats for sale in Panathur Bangalore, this location provides excellent connectivity and convenience to major IT hubs and local amenities.
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="heading4">
<h2 class="mb-0">
<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
4. Why investing in 3 BHK flats for sale in Varthur and Panathur is a smart choice?
</button>
</h2>
</div>
<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
<div class="card-body">
Choosing 3 BHK flats for sale in Varthur and Panathur offers numerous benefits due to the prime location. This area is well-served by shopping malls, educational institutions, hospitals, and IT parks. With over 20 top-notch amenities and spacious king-sized balconies, Varthur provides an ideal living environment that combines convenience with luxury.
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="heading5">
<h2 class="mb-0">
<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
5. What are the dimensions of 3 BHK flats for sale in Varthur Bangalore?
</button>
</h2>
</div>
<div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
<div class="card-body">
For those interested in flats for sale in Varthur Bangalore, the Ecolife Eon Akash project offers a range of 3 BHK flats. This residential project features units with dimensions ranging from 1415 to 1737 sqft and adheres to 100% Vastu compliance, ensuring a harmonious living space.
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="heading6">
<h2 class="mb-0">
<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
6. What are the key features of Ecolife Eon Akash?
</button>
</h2>
</div>
<div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
<div class="card-body">
Ecolife Eon Akash boasts impressive features, including 75% open space and bigger balconies. Spanning 4.25 acres, the development is designed with 100% Vastu compliance and is just a 15-minute drive to IT parks, making it a highly desirable location for both comfort and convenience.
</div>
</div>
</div>

<div class="card">
<div class="card-header" id="heading7">
<h2 class="mb-0">
<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
7. Is Ecolife Eon approved by regulatory bodies?
</button>
</h2>
</div>
<div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
<div class="card-body">
Yes, Ecolife Eon is fully BBMP and RERA approved, ensuring that the project meets all regulatory standards and offers a secure investment opportunity. This approval underscores the project's adherence to legal and quality benchmarks, providing peace of mind to potential buyers.
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</section>




<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel2">Unlock Price</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form id="eform3" class="p-3" name="eform" method="post" action="mail-download.php">
<input type="hidden" class="formsource" name="formsource" value="unlock_form">
<div class="form-group position-relative">
<label>Name <span class="text-danger">*</span>
</label>
<i data-feather="user" class="fea icon-sm icons"></i>
<input type="text" name="name" id="name" class="form-control pl-2" pattern="[a-zA-Z ]+"
minlength="3" placeholder="Your name" required>
</div>
<div class="form-group position-relative">
<label>Mobile no <span class="text-danger">*</span>
</label>
<input type="tel" onkeypress='return restrictAlphabets(event)' pattern="[7-9]{1}[0-9]{9}"  minlength="10" maxlength="13" name="mobile" id="mobile" class="form-control pl-2" placeholder="Your mobile"
required>

</div>
<div class="form-group position-relative">
<label>Email ID <span class="text-danger">*</span>
</label>
<i data-feather="mail" class="fea icon-sm icons"></i>
<input name="email" id="email"  type="email" class="form-control pl-2" placeholder="Your email"
required>
</div>

<div class="form-group position-relative">
<label for="exampleFormControlSelect5">Preference<span class="text-danger">*</span></label>
<select class="form-control pl-2" id="exampleFormControlSelect5"  name="intrestedin" required>
<option value="">Select Your Preference</option>
<option value="3 BHK - ₹ 1.36 Cr Onwards"> 3 BHK </option>
</select>
</div>

<div class="button-container text-center">
<button type="submit" class="enquire ">Unlock Price</button>
</div>

<input type="hidden" id="token4" name="token">

<input type="hidden" name="utm_source" value="<?php echo $utm_source ?>">
<input type="hidden" name="utm_medium" value="<?php echo $utm_medium ?>">
<input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign ?>">
<input type="hidden" name="utm_term" value="<?php echo $utm_term ?>">
<input type="hidden" name="keyword" value="<?php echo $keyword ?>">
<input type="hidden" name="matchtype" value="<?php echo $matchtype ?>">
<input type="hidden" name="device" value="<?php echo $device ?>">
<input type="hidden" name="fullurl" value="<?php echo $fullurl ?>">
</form>

</div>

</div>
</div>
</div>

<?php include 'footer.php'; ?>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
AOS.init({
disableMutationObserver: true, // Prevents DOM mutations
});

document.body.removeAttribute('data-aos-easing');
document.body.removeAttribute('data-aos-duration');
document.body.removeAttribute('data-aos-delay');
</script>

<script>
var $slickElement = $('.hm-bnr-cars');

$slickElement.slick({
autoplay: true,           // Enable auto-play
autoplaySpeed: 2000,      // Time between slides in milliseconds
pauseOnHover: false,      // Prevent auto-slide from pausing on hover
// Other configuration options
});

$slickElement.on('mouseenter', function () {
$slickElement.slick('slickPause'); // Pause the auto-slide on hover
});

$slickElement.on('mouseleave', function () {
$slickElement.slick('slickPlay'); // Resume auto-slide when not hovering
});
</script>

</body>
</html>