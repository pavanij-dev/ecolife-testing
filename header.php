<!-- Start Header Navbar Area -->
<!-- Start Header Navbar Area -->
<div class="cta-btns" data-target="#staticBackdrop">
<!-- <a href = "#contactus">Contact Us</a> -->
<a class="btn" data-toggle="modal" data-target="#staticBackdrop">
Contact Us
</a>
</div>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="staticBackdropLabel">Contact Us</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form id="eformp" class="p-3" name="eform" method="post" action="contact-mail.php">
<input type="hidden" class="formsource" name="formsource" value="popup_form"> 
<div class="form-group position-relative">
<label>Name <span class="text-danger">*</span>
</label>
<i data-feather="user" class="fea icon-sm icons"></i>
<input type="text" name="name" id="csname" class="form-control pl-2" pattern="[a-zA-Z ]+"
minlength="3" placeholder="Your name" required>
</div>
<div class="form-group position-relative">
<label>Mobile no <span class="text-danger">*</span>
</label>
<input type="tel" onkeypress='return restrictAlphabets(event)'  pattern="[7-9]{1}[0-9]{9}"  minlength="10" maxlength="13" name="phone" id="csphone" class="form-control pl-2" placeholder="Your mobile"
required>

</div>
<div class="form-group position-relative">
<label>Email ID <span class="text-danger">*</span>
</label>
<i data-feather="mail" class="fea icon-sm icons"></i>
<input name="email" id="csemail"  type="email" class="form-control pl-2" placeholder="Your email"
required>
</div>

<div class="form-group position-relative">
<label>Preference<span class="text-danger">*</span>
</label>
<select class="form-control pl-2"  id="exampleFormControlSelect7" name="intrestedin" required>
<option value="">Select Your Preference</option>
<option value="3 BHK - ₹ 1.36 Cr Onwards"> 3 BHK
</option>
</select>
</div>

<div class="button-container text-center">
<button type="submit" class="enquire ">Contact Us</button>
</div>

<input type="hidden" id="token" name="token">

<input type="hidden" name="utm_source" value="<?php echo $utm_source ?>">
<input type="hidden" name="utm_medium" value="<?php echo $utm_medium ?>">
<input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign ?>">
<input type="hidden" name="utm_term" value="<?php echo $utm_term ?>">
<input type="hidden" name="keyword" value="<?php echo $keyword ?>">
<input type="hidden" name="matchtype" value="<?php echo $matchtype ?>">
<input type="hidden" name="device" value="<?php echo $device ?>">
<input type="hidden" name="fullurl" value="<?php echo $fullurl ?>">

<!--<a href="your_link_here" download="your_filename_here" style="display: none" id="hiddenLink"></a>-->

</form>
</div>
</div>
</div>
</div>
<div class="top-nav fw">
<marquee class="blinking">BBMP | RERA Approved PRM/KA/RERA/1251/446/PR/300323/005832</marquee>
</div> 

<!-- <div class="top-nav fw">
  <div class="scrolling-text blinking">
    BBMP | RERA Approved PRM/KA/RERA/1251/446/PR/300323/005832
  </div>
</div> -->

<header class="header-navber-area">
<nav class="navbar navbar-b navbar-trans navbar-expand-lg" id="mainNav">

<div class="container">
<a class="navbar-brand js-scroll" href="index.php">
<img src="assets/images/logo.svg" class="white-logo" alt="logo" width="120" height="40">
<div class="d-flex">
<img src="assets/images/logo.svg"  class="black-logo" alt="logo">
</div>
</a>
<button class="navbar-toggler collapsed" 
type="button" 
data-toggle="collapse" 
data-target="#navbardefault" 
aria-controls="navbardefault" 
aria-expanded="false" 
aria-label="Toggle navigation">

<!-- <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbardefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"></button> -->
<span></span>
<span></span>
<span></span>
</button>

<div class="navbar-collapse collapse justify-content-center mnu-hdr" id="navbardefault">

<ul class="navbar-nav" >
<li class="nav-item">
<a class="nav-link js-scroll active" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link js-scroll " href="index.php#about">About</a>
</li>

<li class="nav-item">
<a class="nav-link js-scroll" href="index.php#amenities">Amenities</a>
</li>

<li class="nav-item">
<a class="nav-link js-scroll" href="index.php#floorplans"> Floor Plans</a>
</li>

<li class="nav-item">
<a class="nav-link js-scroll" href="index.php#gallery"> Gallery</a>
</li>

<li class="nav-item">
<a class="nav-link js-scroll" href="index.php#spec">Specification</a>
</li>

<li class="nav-item">
<a class="nav-link js-scroll" href="index.php#contactus"> Contact Us</a>
</li>
</ul>

</div>
</div>
</nav>
</header>

