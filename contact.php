<?php  
$dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");  
if(isset($_POST['message_submit'])&&!empty($_POST['message_submit'])){
    
 $sql = "insert into public.messages(name,email,message)values('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."');";
  $ret = pg_query($dbconn, $sql);
  if($ret){
          echo "<script><alert>Data saved Successfully</alert><script>";
          header('Location: contact.php'); 
  }else{
      
          echo "Soething Went Wrong";
  }
}
pg_close($dbconn);
?>



<html lang="en-CA" class="">

<head>

    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="https://recoverycollegeedmonton.ca/xmlrpc.php">


    <!---This site is optimized with the Yoast SEO plugin v15.1.1 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Home - Recovery College Edmonton</title>
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://recoverycollegeedmonton.ca/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Home - Recovery College Edmonton">
    <!--<meta property="og:url" content="https://recoverycollegeedmonton.ca/"> -->
    <meta property="og:site_name" content="Recovery College Edmonton">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@CMHAEdmonton">
    <meta name="twitter:site" content="@CMHAEdmonton">

    <link rel="shortlink" href="https://recoverycollegeedmonton.ca/">
    <!-- / Yoast SEO plugin.-->


    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//maps.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="alternate" type="application/rss+xml" title="Recovery College Edmonton » Feed" href="https://recoverycollegeedmonton.ca/feed/">
    <link rel="alternate" type="application/rss+xml" title="Recovery College Edmonton » Comments Feed" href="https://recoverycollegeedmonton.ca/comments/feed/">
    <link rel="alternate" type="text/calendar" title="Recovery College Edmonton » iCal Feed" href="https://recoverycollegeedmonton.ca/events/?ical=1">


    <!--JavaScript files-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" id="jquery-js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js?ver=67c90ffd8417a442ac33ffaa4a4ee97a" id="popper-js-js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js?ver=67c90ffd8417a442ac33ffaa4a4ee97a" id="bootstrap-js-js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGHX5BwU2iuffzu6Stj9FSs9k_BroiQBc&amp;ver=67c90ffd8417a442ac33ffaa4a4ee97a" id="google_maps_script_js-js"></script>
    <script type="text/javascript" src="js/google_maps_script.js?ver=1.7" id="google_maps-js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/9/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/9/util.js"></script>

    <!-- icons -->
    <link rel="icon" href="images/png/cropped-RecoveryCollege_Favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="images/png/cropped-RecoveryCollege_Favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="images/png/cropped-RecoveryCollege_Favicon-180x180.png">
    <meta name="msapplication-TileImage" content="images/png/cropped-RecoveryCollege_Favicon-270x270.png">
    <link rel="cart" href="images/svg/cart.svg" sizes="192x192" />
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>




    <!--Style Sheets-->
    <link rel="stylesheet" id="tribe-common-skeleton-style-css" href="css/common-skeleton.min.css?ver=4.12.5" type="text/css" media="all">
    <link rel="stylesheet" id="tribe-tooltip-css" href="css/tooltip.min.css?ver=4.12.5" type="text/css" media="all">
    <link rel="stylesheet" id="wp-block-library-css" href="css/style.min.css?ver=67c90ffd8417a442ac33ffaa4a4ee97a" type="text/css" media="all">
    <link rel="stylesheet" id="edd-styles-css" href="css/edd.min.css?ver=2.9.26" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css?ver=67c90ffd8417a442ac33ffaa4a4ee97a" type="text/css" media="all">
    <link rel="stylesheet" id="site_styles-css" href="css/main_styles.css?ver=1.7" type="text/css" media="all">
    <link rel="stylesheet" id="ie11_styles-css" href="css/ie11.css?ver=1.7" type="text/css" media="all">
</head>


<body class="home page-template-default page page-id-13 tribe-js">

    <a class="sr-only sr-only-focusable skip-link" href="#skip-anchor">Skip to content</a>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLHBZ39" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="page" class="site">
        <div id="content" class="site-content">
            <div class="sitewide-banner" data-modified="1588200144">
                <div class="sitewide-banner-container">
                    <h4>CMHA Recovery College classes are now being online.</h4><a href="AddNewStudentNew.php" class="button">Register here.</a>
                </div>

                <i class="icon ion-md-close hide-banner"></i>
            </div>

            <div class="cart-button-outer">
                <div class="cart-button-quantity" style="opacity: 1;">2</div>
                <button id="cart-toggle" class="button-cart" aria-label="Hide / Show Cart"><img src="images/svg/cart.svg" alt="Cart"></button>
            </div>

            <div id="cart">

                <div class="cart-header">
                    <h4>Your Course Cart</h4>
                </div>

                <div class="cart-inner">

                    <div class="cart-items-outer">
                        <span><b>Added Courses</b></span>
                        <hr>
                        <ul class="cart-items">
                            <li class="cart-item" data-title="Stress Management: Online" data-download-id="5067">
                                <div class="cart-item-inner">
                                    <div class="cart-title">
                                        <p><b>Stress Management: Online<span class="muted"> (1 sessions)</span></b></p>
                                    </div>
                                    <div class="cart-meta">
                                        <div class="tag-circle-container">
                                            <span class="tag-circle tag-circle--online"></span>
                                        </div>
                                        <p class="small"><b>November 25 2020, 10:00 am - 11:00 am MDT</b></p>
                                    </div>
                                </div>
                                <i class="ion ion-md-close-circle remove-from-cart"></i>
                            </li>
                            <li class="cart-item" data-title="Developing Self Compassion: Online" data-download-id="5065">
                                <div class="cart-item-inner">
                                    <div class="cart-title">
                                        <p><b>Developing Self Compassion: Online<span class="muted"> (1 sessions)</span></b></p>
                                    </div>
                                    <div class="cart-meta">
                                        <div class="tag-circle-container">
                                            <span class="tag-circle tag-circle--online"></span>
                                        </div>
                                        <p class="small"><b>December 1 2020, 1:00 pm - 2:00 pm MDT</b></p>
                                    </div>
                                </div>
                                <i class="ion ion-md-close-circle remove-from-cart"></i>
                            </li>
                        </ul>
                    </div>

                    <div class="cart-actions">
                        <button id="finalize-registration">Finalize Registration</button>
                        <a class="d-none" href="REGISTRATIONPAGEPLACEHOLDER" id="navigate-finalize-registration"></a>

                        <button id="dismiss-cart" class="button button--secondary">Keep Browsing</button>
                    </div>
                </div>

            </div>

            <div id="site-menu" class="main-nav">
                <div class="sitewide-banner" data-modified="1588200144">
                    <div class="sitewide-banner-container">
                        <h4>CMHA Recovery College classes are now being offered online.</h4><a href="AddNewStudentNew.php" class="button">Register here.</a>
                    </div>

                    <i class="icon ion-md-close hide-banner"><span class="iconify" data-icon="gridicons:cross-small" data-inline="false"></span></i>
                </div>


                <div class="d-md-none">
                    <div class="nav-trigger d-lg-none">
                        <button class="menu-toggle button--primary" id="main-nav-toggle" aria-haspopup="true" aria-expanded="false"><span class="text">Menu</span> <span class="hamburger-bars"><span class="bar-helper"></span></span></button>
                    </div>
                    <div class="brand brand--mobile">
                        <a href="home.php" title="Recovery College Edmonton" aria-label="Recovery College Edmonton" tabindex="0">
                            <!--https://recoverycollegeedmonton.ca-->
                            <img src="images/svg/RC_Edmonton_Logo.svg" alt="Recovery College Edmonton">
                        </a>
                    </div>
                </div>

                <div class="navigation-wrapper">
                    <nav class="primary-nav">
                        <ul id="menu-main-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22 nav-item"><a title="About Recovery College" href="about.html" class="nav-link">About Recovery College</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-23 nav-item">
                                <a title="Find a Course" href="Courses.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-23">Find a Course</a>
                                <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-23" role="menu">
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item"><a title="All Courses" href="Courses.html" class="dropdown-item">All Courses</a></li>
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1994" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1994 nav-item"><a title="Online Classes" href="COURSESONLINEPLACEHOLDER" class="dropdown-item">Online Classes</a></li>
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25 nav-item"><a title="Calendar" href="CALENDARPAGEPLACEHOLDER" class="dropdown-item">Calendar</a></li>
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2175" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2175 nav-item"><a title="Private Courses" href="private-courses.html" class="dropdown-item">Private Courses</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>

                    <div class="brand brand--desktop d-none d-md-block">
                        <a href="home.php" title="Recovery College Edmonton" aria-label="Recovery College Edmonton" tabindex="0">
                            <!--https://recoverycollegeedmonton.ca-->
                            <img src="images/svg/RC_Edmonton_Logo.svg" alt="Recovery College Edmonton">
                        </a>
                    </div>

                    <nav class="utility-nav">
                        <div class="searchform-wrapper">
                            <form class="searchform" method="get" action="#">
                                <!--https://recoverycollegeedmonton.ca/-->
                                <input type="text" name="s" aria-label="Site search" placeholder="What are you looking for?">
                                <button aria-labelledby="searchform--5f9870a909a7a__label"><span class="iconify" data-icon="bx:bx-search" data-inline="false"></span><span class="text" id="searchform--5f9870a909a7a__label">Search</span></button>
                            </form>
                            <button class="searchform-toggle" aria-label="Search the site"><span class="iconify" data-icon="bx:bx-search" data-inline="false"></span></button>
                        </div>
                        <ul id="menu-utility-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19 nav-item"><a title="News &amp; Updates" href="news.html" class="nav-link">News &amp; Updates</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20 nav-item"><a title="Donate" target="_blank" href="DONATEPLACEHOLDER" class="nav-link">Donate</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21 nav-item"><a title="FAQs" href="FAQPLACEHOLDER" class="nav-link">FAQs</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Contact" href="contact.html" class="nav-link">Contact</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Register" href="AddNewStudentNew.php" class="nav-link">Register</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="admin/AdminLogin.php">Admin Login</a></li>
                                    <li><a href="subAdmin/SubAdminLogin.php">Sub Admin Login</a></li>
                                    <li><a href="user/StudentLogin.php">Student Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="skip-anchor" tabindex="-1"></div>
            <div class="header header-simple">

                <div class="container">
                    <div class="row">

                        <div class="col-12 ">
                            <h1>Contact</h1>
                        </div>


                        <!-- <div class="d-none d-md-block col-12 col-md-6 hero-image">
							<div class="hero-image-container">
								<div class="hero-image hero-image-active" style="background-image: url(images/svg/RecoveryCollege-FreeMentalHealthCourses-HeaderGraphic1.svg );"></div>
								<div class="hero-image hero-image-fade" style="background-image: url(images/svg/RecoveryCollege-FreeMentalHealthCourses-HeaderGraphic2.svg );"></div>
								<div class="hero-image hero-image-fade" style="background-image: url(images/svg/RecoveryCollege-FreeMentalHealthCourses-HeaderGraphic3.svg );"></div>
							</div>
						</div> -->

                    </div>
                </div>

            </div>
            <section class="intro" id="intro-frontpage">

                <div class="brush-stroke brush-stroke-top" style="background-image: url(images/svg/white-top.svg);"></div>

                <div class="container intro-container">
                    <div class="row">

                        <div class="col-12 col-md-6">
                            <h2>Get in touch with us</h2>

                            <div class="intro-icons">
                                <div class="intro-icon" data-relationship="individuals">
                                    <img src="images/svg/CMHA_Anybody.svg" alt="">
                                </div>
                                <div class="intro-icon" data-relationship="young-adults">
                                    <img src="images/svg/CMHA_Students.svg" alt="">
                                </div>
                                <div class="intro-icon" data-relationship="">
                                    <img src="images/svg/CMHA_OlderAdults.svg" alt="">
                                </div>
                                <div class="intro-icon" data-relationship="family-friends">
                                    <img src="images/svg/CMHA_Families.svg" alt="">
                                </div>
                                <div class="intro-icon" data-relationship="">
                                    <img src="images/svg/CMHA_NativeAmericans.svg" alt="">
                                </div>
                            </div>
                        </div>



                        <div class="col-12 col-md-6">
                            <p>
                                <strong>Phone</strong> 780-414-6333 <br>
                                <strong>Address</strong> 300, 10010-105 St NW, Edmonton, AB CA T5J 1C4<br>
                                <strong>Email</strong> <a href="mailto:recoverycollege@cmha-edmonton.ab.ca">recoverycollege@cmha-edmonton.ab.ca</a>
                            </p>
                        </div>

                    </div>
                </div>

                <div class="brush-stroke brush-stroke-bottom" style="background-image: url(images/svg/white-top.svg);"></div>

            </section>



            <section class="" id="contact-form-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="">Send Us a Message</h2>
                        </div>
                        <div class="contact-form col-12">

                            <div class="gf_browser_gecko gform_wrapper" id="gform_wrapper_2">
                                <form method="post" enctype="multipart/form-data" id="gform_2">
                                    <div class="gform_body">
                                        <ul id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below">
                                            <li id="field_2_1" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_2_1">Name</label>
                                                <div class="ginput_container ginput_container_text"><input name="name" id="input_2_1" type="text" value="" class="large" placeholder="First and last name" aria-invalid="false"></div>
                                            </li>
                                            <li id="field_2_2" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_2_2">Email</label>
                                                <div class="ginput_container ginput_container_email">
                                                    <input name="email" id="input_2_2" type="text" value="" class="large" placeholder="name@email.com" aria-invalid="false">
                                                </div>
                                            </li>
                                            <li id="field_2_3" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_2_3">Message<span class="gfield_required">*</span></label>
                                                <div class="ginput_container ginput_container_textarea"><textarea name="message" id="input_2_3" class="textarea medium" placeholder="What do you have questions about?" aria-required="true" aria-invalid="false" rows="10" cols="50"></textarea></div>
                                            </li>
                                            <li id="field_2_4" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_4"></label>
                                                <div id="input_2_4" class="ginput_container ginput_recaptcha" data-sitekey="6LeAl7wUAAAAALVQpY_PsXKlRqf3wJ45MH5pPiZN" data-theme="light" data-tabindex="-1" data-size="invisible" data-badge="bottomright" style="">
                                                    <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                                        <div class="grecaptcha-logo"><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeAl7wUAAAAALVQpY_PsXKlRqf3wJ45MH5pPiZN&amp;co=aHR0cHM6Ly9yZWNvdmVyeWNvbGxlZ2VlZG1vbnRvbi5jYTo0NDM.&amp;hl=en&amp;v=pRiAUlKgZOMcFLsfzZTeGtOA&amp;theme=light&amp;size=invisible&amp;badge=bottomright&amp;cb=nomjpxlndigf" role="presentation" name="a-ky27wnnpfmiz" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" tabindex="-1" width="256" height="60" frameborder="0"></iframe></div>
                                                        <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                    </div><iframe style="display: none;"></iframe>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gform_footer top_label"> 
                                            <input class="button gform_button" name="message_submit" id="gform_submit_button_2" type="submit" value="Submit">
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        <footer id="site-footer" class="footer" role="contentinfo">
            <div class="container footer-container">

                <div class="row">

                    <div class="footer-newsletter col-12 col-md-4">


                    </div>

                    <div class="footer-nav col-6 d-none d-md-block">

                        <ul id="menu-footer-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-27 nav-item">
                                <a title="Find a Course" href="Courses.html" class="nav-link">Find a Course</a>
                                <ul role="menu">
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28 nav-item"><a title="All Courses" href="Courses.html" class="dropdown-item">All Courses</a></li>
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29 nav-item"><a title="Calendar" href="CALENDARPAGEPLACEHOLDER" class="dropdown-item">Calendar</a></li>
                                </ul>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-31 nav-item">
                                <a title="Get Help" href="#" class="nav-link">Get Help</a>
                                <ul role="menu">
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32 nav-item"><a title="News &amp; Updates" href="news.html" class="dropdown-item">News &amp; Updates</a></li>
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33 nav-item"><a title="FAQs" href="FAQPLACEHOLDER" class="dropdown-item">FAQs</a></li>
                                </ul>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-402 nav-item"><a title="Contact Us" href="contact.html" class="nav-link">Contact Us</a>
                                <ul role="menu" aria-role="menu">
                                    <li class="nav-item" aria-role="menuitem">300, 10010-105 St NW<br>Edmonton, AB T5J 1C4</li>
                                    <li class="nav-item" aria-role="menuitem">780-414-6300</li>
                                </ul>
                            </li>
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

                        <a href="#" target="_blank">
                            <!--https://edmonton.cmha.ca/-->
                            <img class="" srcset="images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w" src="https://images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg" alt="">
                        </a>
                    </div>

                    <div class="col-12 col-md-8 footer-social">
                        <span class="title-5">Find Us</span>
                        <ul class="footer-social-icons">

                            <li>
                                <a href="https://www.facebook.com/CMHAEdmonton/" target="_blank" rel="noopener" aria-label="Facebook">
                                    <span class="iconify" data-icon="ant-design:facebook-filled" data-inline="false" style="margin-top: -8px;"></span>
                                </a>
                            </li>

                            <li>
                                <a href="https://twitter.com/CMHAEdmonton" target="_blank" rel="noopener" aria-label="Twitter">
                                    <span class="iconify" data-icon="ion-logo-twitter" data-inline="false" style="margin-top: -8px;"></span>

                                </a>
                            </li>



                        </ul>
                    </div>
                </div>

                <div class="footer-meta">
                    <div class="row">

                        <div class="col-12 col-sm-4 col-md-6">

                            <span class="footer-meta-item"><a href="Privacy.html">Privacy Page</a></span>
                            <!--https://recoverycollegeedmonton.ca/privacy-policy/-->
                            <span class="footer-meta-sep">|</span>

                            <span class="footer-meta-item"><a href="Terms.html">Terms of Use</a></span>
                            <!--https://recoverycollegeedmonton.ca/terms-conditions/-->
                            <span class="footer-meta-sep">|</span>

                            <span class="footer-meta-item"><a href="copyright-permissions.html">Copyright &amp; Permissions</a></span>
                            <!--https://recoverycollegeedmonton.ca/copyright-permissions/-->

                        </div>

                        <div class="col-12 col-sm-8 col-md-6">
                            <span class="copy-registration"><span class="footer-meta-item">© Recovery College Edmonton 2020, All Rights Reserved</span><span class="footer-meta-item">Registered Charity Number: 118834316RR</span></span>
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
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <p>This course is full. Add yourself to the waitlist you’ll be contacted when a spot opens up.</p>

                        <form>
                            <label for="waitlist__name">Name</label>
                            <input type="text" name="name" id="waitlist__name" placeholder="John Doe" required="">

                            <p>What is your preferred method of contact?</p>
                            <div class="radio-group">
                                <field-group>
                                    <input type="radio" name="contact-preference" id="waitlist-contact-preference-email" data-conditional-control="true" value="email" checked="checked">
                                    <label for="waitlist-contact-preference-email">Email</label>
                                </field-group>
                                <field-group>
                                    <input type="radio" name="contact-preference" id="waitlist-contact-preference-phone" data-conditional-control="true" value="phone">
                                    <label for="waitlist-contact-preference-phone">Text Message</label>
                                </field-group>
                            </div>

                            <label for="waitlist__email" data-conditional-switch="contact-preference" data-conditional-value="email" style="">Email</label>
                            <input type="email" name="email" id="waitlist__email" placeholder="john.smith@example.com" data-conditional-switch="contact-preference" data-conditional-value="email" style="">

                            <label for="waitlist__phone" data-conditional-switch="contact-preference" data-conditional-value="phone" style="display: none;">Mobile (eg. 780-111-2222)</label>
                            <input type="tel" name="phone" id="waitlist__phone" placeholder="780-111-2222 ( 10 digits )" data-conditional-switch="contact-preference" data-conditional-value="phone" minlength="10" style="display: none;">

                            <field-group>
                                <input type="checkbox" id="waitlist-consent-checkbox" name="consent" required="">
                                <label for="waitlist-consent-checkbox">I agree with and accept the <a class="link" href="Privacy.html" target="_blank">Privacy Policy</a>.</label>
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
    </div><!-- #page -->

    <script>
        (function(body) {
            'use strict';
            body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
        })(document.body);
    </script>
    <script type="text/javascript" id="site_scripts-js-extra">
        /* <![CDATA[ */
        var plglobals = {
            "session": ""
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/base_script.js?ver=1.7" id="site_scripts-js"></script>
    <script type="text/javascript" id="ajax_scripts-js-extra">
        /* <![CDATA[ */
        var ajaxscript = {
            "ajax_url": "https:\/\/recoverycollegeedmonton.ca\/wp-admin\/admin-ajax.php",
            "home_url": "https:\/\/recoverycollegeedmonton.ca",
            "theme_url": "https:\/\/recoverycollegeedmonton.ca\/wp-content\/themes\/cmha",
            "checkout_url": "https:\/\/recoverycollegeedmonton.ca\/registration\/",
            "nonce": "ac3450dab4"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/ajax_script.js?ver=1.7" id="ajax_scripts-js"></script>


</body>

</html>