<?php  
$dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres"); 
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
      $sql = "insert into public.admin(first_name,last_name,email,password,mobile_no)values('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['email']."','".md5($_POST['password'])."','".$_POST['mobile_no']."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        
            echo "Data saved Successfully";
            header('Location: AdminLogin.php');

    }else{
        
            echo "Something Went Wrong";
    }
}
pg_close($dbconn);
?>



 
<!DOCTYPE html>
<html lang="en-CA" class="no-js">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
        

    <!-- Style Sheets -->
<link rel='stylesheet' id='tribe-common-skeleton-style-css'  href='../css/common-skeleton.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-tooltip-css'  href='../css/tooltip.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='../css/style.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='edd-styles-css'  href='../css/edd.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='../css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='site_styles-css'  href='../css/main_styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='ie11_styles-css'  href='../css/ie11.css' type='text/css' media='all' />
<!-- unique to the php pages -->
<link rel='stylesheet' id='booststrap'  href='../css/bootstrap.css' type='text/css' media='all' />
<link rel='stylesheet' id='login-css'  href='../css/Login.css' type='text/css' media='all' />
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


<!-- DNS pre fetch, not sure if we need it. Can speed up the page if we use the below content. removed WP content -->
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<link rel='dns-prefetch' href='//maps.googleapis.com' />



<!-- JS stuff. the jquery file enables the cart to be animated
The content from cdnjs.cloudflare.com is all open source -->
<script type='text/javascript' src='../js/jquery-3.6.0.min.js' id='jquery-js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js?ver=67c90ffd8417a442ac33ffaa4a4ee97a' id='popper-js-js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js?ver=67c90ffd8417a442ac33ffaa4a4ee97a' id='bootstrap-js-js'></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


<!-- head images -->
<link rel="icon" href="../images/png/cropped-RecoveryCollege_Favicon-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="../images/png/cropped-RecoveryCollege_Favicon-180x180.png" />
<meta name="msapplication-TileImage" content="../images/png/cropped-RecoveryCollege_Favicon-270x270.png" />
</head>
    </head>


<body class="news-template-default single single-news postid-1930 has-sitewide-banner tribe-no-js">

    <a class="sr-only sr-only-focusable skip-link" href="#skip-anchor">Skip to content</a>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLHBZ39"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="page" class="site">
        <div id="content" class="site-content">
<div id="site-menu" class="main-nav">

    
    <div class="sitewide-banner" data-modified="1588200144">
        <div class="sitewide-banner-container">
            <h4>CMHA Recovery College classes are now being offered online.</h4><a href="COURSESONLINEPLACEHOLDER" class="button">Register here.</a>        </div>

        <i class="icon ion-md-close hide-banner"></i>
    </div>

    <div class="d-md-none">
        <div class="nav-trigger d-lg-none">
            <button class="menu-toggle button--primary" id="main-nav-toggle" aria-haspopup="true" aria-expanded="false"><span class="text">Menu</span> <span class="hamburger-bars"><span class="bar-helper"></span></span></button>
        </div>
        <div class="brand brand--mobile">
                            <a href="../HomePage.html" title="Recovery College Edmonton" aria-label="Recovery College Edmonton" tabindex="0">
                    <img src="../images/svg/RC_Edmonton_Logo.svg" alt="Recovery College Edmonton">
                </a>
                    </div>
    </div>

    <div class="navigation-wrapper">
        <nav class="primary-nav">
            <ul id="menu-main-menu" class="menu"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22 nav-item"><a title="About Recovery College" href="../about.html" class="nav-link">About Recovery College</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-23 nav-item"><a title="Find a Course" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-23">Find a Course</a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-23" role="menu">
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item"><a title="All Courses" href="../Courses.html" class="dropdown-item">All Courses</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1994" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1994 nav-item"><a title="Online Classes" href="COURSESONLINEPLACEHOLDER" class="dropdown-item">Online Classes</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25 nav-item"><a title="Calendar" href="CALENDARPAGEPLACEHOLDER" class="dropdown-item">Calendar</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2175" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2175 nav-item"><a title="Private Courses" href="../private-courses.html" class="dropdown-item">Private Courses</a></li>
</ul>
</li>
</ul>       </nav>

        <div class="brand brand--desktop d-none d-md-block">
                            <a href="../HomePage.html" title="Recovery College Edmonton" aria-label="Recovery College Edmonton" tabindex="0">
                    <img src="../images/svg/RC_Edmonton_Logo.svg" alt="Recovery College Edmonton">
                </a>
                    </div>

        <nav class="utility-nav">
            <div class="searchform-wrapper">
                <form class="searchform" method="get" action="../HomePage.html">
    <input type="text" name="s" aria-label="Site search" placeholder="What are you looking for?" />
    <button aria-labelledby="searchform--5fbf0e6edf4e3__label"><i class="ion ion-md-search"></i><span class="text" id="searchform--5fbf0e6edf4e3__label">Search</span></button>
</form>
                <button class="searchform-toggle" aria-label="Search the site"><i class="ion ion-md-search"></i></button>
            </div>
            <ul id="menu-utility-menu" class="menu"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19 nav-item"><a title="News &amp; Updates" href="../news.html" class="nav-link">News &#038; Updates</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20 nav-item"><a title="Donate" target="_blank" href="DONATEPLACEHOLDER" class="nav-link">Donate</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21 nav-item"><a title="FAQs" href="FAQPLACEHOLDER" class="nav-link">FAQs</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Contact" href="../contact.html" class="nav-link">Contact</a></li>
</ul>       </nav>
    </div>
</div>








<!-- Login form -->
        
<div class="header header-simple">
<div class="login">
        <h2>Register</h2>
        <p>Please fill in your credentials to register.</p>
        <form method="post">
  
    <div class="form-group">
      <label for="first_name">First Name:</label>
      <input type="text" class="form-control" id="first_name" placeholder="Enter First name" name="first_name" required>
    </div>

    <div class="form-group">
      <label for="last_name">Last Name:</label>
      <input type="text" class="form-control" id="last_name" placeholder="Enter Last name" name="last_name" required>
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
    <div class="form-group">
      <label for="mobile_no">Mobile No:</label>
      <input type="text" class="form-control" maxlength="10" id="mobile_no" placeholder="Enter Mobile Number" name="mobile_no">
    </div>
    
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
    <p>Have an account? <a href="AdminLogin.php">Login now</a>.</p>
  </form>
    </div>  
</div>








</div><!-- #content -->
    <!-- Sitewide Pop-up -->
                    <footer id="site-footer" class="footer" role="contentinfo">
        <div class="container footer-container">
            <div class="row">
                <div class="footer-newsletter col-12 col-md-4"> 
                </div>
                <div class="footer-nav col-6 d-none d-md-block">
                    <ul id="menu-footer-menu" class="menu"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-27 nav-item"><a title="Find a Course" href="#" class="nav-link">Find a Course</a>
<ul  role="menu">
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28 nav-item"><a title="All Courses" href="../Courses.html" class="dropdown-item">All Courses</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29 nav-item"><a title="Calendar" href="CALENDARPAGEPLACEHOLDER" class="dropdown-item">Calendar</a></li>
</ul>
</li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-31 nav-item"><a title="Get Help" href="#" class="nav-link">Get Help</a>
<ul  role="menu">
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32 nav-item"><a title="News &amp; Updates" href="../news.html" class="dropdown-item">News &#038; Updates</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33 nav-item"><a title="FAQs" href="FAQPLACEHOLDER" class="dropdown-item">FAQs</a></li>
</ul>
</li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-402 nav-item"><a title="Contact Us" href="../contact.html" class="nav-link">Contact Us</a><ul role="menu" aria-role="menu"><li class="nav-item" aria-role="menuitem">300, 10010-105 St NW<br/>Edmonton, AB T5J 1C4</li><li class="nav-item" aria-role="menuitem">780-414-6300</li></ul></li>
</ul>
                </div>

                <div class="footer-other-blogs col-12 col-md-2">

                    
                        <ul class="menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link link">Other Locations</a>
                                <ul class="cmha-locations-menu" role="menu" aria-role="menu">
                                                                            <li class="menu-item" aria-role="menuitem">
                                            <a href="http://recoverycollegecalgary.ca" title="Recovery College Calgary">Calgary</a>
                                        </li>
                                                                            <li class="menu-item" aria-role="menuitem">
                                            <a href="http://recoverycollegewoodbuffalo.ca" title="Recovery College Wood Buffalo">Wood Buffalo</a>
                                        </li>
                                                                            <li class="menu-item" aria-role="menuitem">
                                            <a href="http://recoverycollegelethbridge.ca" title="Recovery College Lethbridge">Lethbridge</a>
                                        </li>
                                                                            <li class="menu-item" aria-role="menuitem">
                                            <a href="http://recoverycollegecentralalberta.ca" title="Recovery College Central Alberta">Central Alberta</a>
                                        </li>
                                    
                                                                    </ul>
                            </li>
                        </ul>
                                    </div>

            </div>

            <div class="row">

                <div class="col-12 col-md-4 footer-main-site-link">
                                        
                    <a href="https://edmonton.cmha.ca/" target="_blank">
                        <img class="" srcset="../images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, ../images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, ../images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, ../images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w" src="../images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg" alt=""></a>
                </div>

                <div class="col-12 col-md-8 footer-social">
                    <span class="title-5">Find Us</span>
                    <ul class="footer-social-icons">
                        
                                                <li>
                            <a href="https://www.facebook.com/CMHAEdmonton/" target="_blank" rel="noopener" aria-label="Facebook">
                                <span class="iconify" data-icon="ion-logo-facebook" data-inline="false"></span>
                            </a>
                        </li>
                        
                                                <li>
                            <a href="https://twitter.com/CMHAEdmonton" target="_blank" rel="noopener" aria-label="Twitter">
                                <span class="iconify" data-icon="ion-logo-twitter" data-inline="false"></span>
                            </a>
                        </li>
                        
                        
                        
                    </ul>
                </div>
            </div>

            <div class="footer-meta">
                <div class="row">

                    <div class="col-12 col-sm-4 col-md-6">
                        
                                                    <span class="footer-meta-item"><a href="../Privacy.html">Privacy Page</a></span>
                            <span class="footer-meta-sep">|</span>
                        
                                                    <span class="footer-meta-item"><a href="../Terms.html">Terms of Use</a></span>
                            <span class="footer-meta-sep">|</span>
                        
                                                    <span class="footer-meta-item"><a href="../copyright-permissions.html">Copyright &amp; Permissions</a></span>
                        
                    </div>

                    <div class="col-12 col-sm-8 col-md-6">
                        <span class="copy-registration"><span class="footer-meta-item">&copy; Recovery College Edmonton 2020, All Rights Reserved</span><span class="footer-meta-item">Registered Charity Number: 118834316RR</span></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="waitlist-modal" tabindex="-1" role="dialog" aria-labelledby="waitlist-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="waitlist-modal-title">Join Waitlist</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
                <p>This course is full. Add yourself to the waitlist you&#8217;ll be contacted when a spot opens up.</p>
                
                <form>
                    <label for="waitlist__name">Name</label>
                    <input type="text" name="name" id="waitlist__name" placeholder="John Doe" required>

                    <p>What is your preferred method of contact?</p>
                    <div class="radio-group">
                        <field-group>
                            <input type="radio" name="contact-preference" id="waitlist-contact-preference-email" data-conditional-control="true" value="email" checked="checked"/>
                            <label for="waitlist-contact-preference-email">Email</label>
                        </field-group>
                        <field-group>
                            <input type="radio" name="contact-preference" id="waitlist-contact-preference-phone" data-conditional-control="true" value="phone"/>
                            <label for="waitlist-contact-preference-phone">Text Message</label>
                        </field-group>
                    </div>

                    <label for="waitlist__email" data-conditional-switch="contact-preference" data-conditional-value="email">Email</label>
                    <input type="email" name="email" id="waitlist__email" placeholder="john.smith@example.com" data-conditional-switch="contact-preference" data-conditional-value="email">
                    <label for="waitlist__phone" data-conditional-switch="contact-preference" data-conditional-value="phone">Mobile (eg. 780-111-2222)</label>
                    <input type="tel" name="phone" id="waitlist__phone" placeholder="780-111-2222 ( 10 digits )" data-conditional-switch="contact-preference" data-conditional-value="phone" minlength="10">

                    <field-group>
                        <input type="checkbox" id="waitlist-consent-checkbox" name="consent" required>
                        <label for="waitlist-consent-checkbox">I agree with and accept the <a class="link" href="../privacy.html" target="_blank">Privacy Policy</a>.</label>
                    </field-group>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="button button--secondary" data-dismiss="modal">Close</button>
                <button type="button" class="button button--plus" id="waitlist-submit">Join Waitlist</button>
            </div>
        </div>
    </div>
</div>
</div>


