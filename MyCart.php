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

    <script type="text/javascript">
        function Enroll(clicked_id) {
            window.location.href = "/platform/user/StudentLoginFromCart.php";
        }

        function ShowAllCourses() {
            var all = document.getElementsByClassName("col-12 col-md-6 card-container extra");
            var str = document.getElementById("viewAllCourses");

            if (all[0].style.display == "block") {
                for (var i = 0; i < all.length; i++) {
                    all[i].style.display = "none";
                }
                str.innerText = "Show All Courses";
            } else {
                for (var i = 0; i < all.length; i++) {
                    all[i].style.display = "block";
                }
                str.innerText = "Hide Courses";
            }

        }

        function removeFromCart(clicked_id){
            $.ajax({
                type: "POST",
                url: 'ajax.php',
                data: {
                    action: 'remove_from_cart',
                    course_id: clicked_id
                },
                success: function(html) {
                    location.reload();
                }

            });

        }
    </script>
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

                </div>

                <div class="navigation-wrapper">
                    <nav class="primary-nav">
                        <ul id="menu-main-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22 nav-item"><a title="About Recovery College" href="about.php" class="nav-link">About Recovery College</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-23 nav-item">

                                <!-- <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-23" role="menu">
									<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item"><a title="All Courses" href="Courses.html" class="dropdown-item">All Courses</a></li>
									<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1994" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1994 nav-item"><a title="Online Classes" href="COURSESONLINEPLACEHOLDER" class="dropdown-item">Online Classes</a></li>
									<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25 nav-item"><a title="Calendar" href="CALENDARPAGEPLACEHOLDER" class="dropdown-item">Calendar</a></li>
									<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2175" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2175 nav-item"><a title="Private Courses" href="private-courses.html" class="dropdown-item">Private Courses</a></li>
								</ul> -->
                            </li>
                        </ul>
                    </nav>



                    <nav class="utility-nav">

                        <ul id="menu-utility-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Contact" href="about.php" class="nav-link">About Us</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Contact" href="contact.php" class="nav-link">Contact</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Register" href="AddNewStudentNew.php" class="nav-link">Register</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Login" href="user/StudentLogin.php" class="nav-link">Login</a></li>
                            <!-- <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"> -->

                            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
								<ul class="dropdown-menu"> -->
                            <!-- <li><a href="admin/AdminLogin.php">Admin Login</a></li>
									<li><a href="subAdmin/SubAdminLogin.php">Sub Admin Login</a></li> -->
                            <!-- <li><a href="user/StudentLogin.php">Student Login</a></li> -->
                            <!-- </ul> -->
                            <!-- </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="skip-anchor" tabindex="-1"></div>
            <div class="header header-hero">

                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h1 style="color:FFFFFF">My Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
            
            <section class="intro" id="intro-frontpage">
                <div class="brush-stroke brush-stroke-top" style="background-image: url(images/svg/white-top.svg);"></div>
                <div class="brush-stroke brush-stroke-bottom" style="background-image: url(images/svg/white-top.svg);"></div>
            </section>



            <section class="upcoming-courses">

                <div class="container">
                    <div class="row">


                        <?php

                        $string = exec('getmac');
                        $mac = substr($string, 0, 17);

                        $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
                        $sql = pg_query(sprintf("SELECT * FROM public.cart where emailaddress='" . $mac . "';"));

                        while ($row = pg_fetch_assoc($sql)) {
                            $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.courses where course_id='".$row['course_id']."'")));

                            echo "
													<div class='col-12 col-md-6 card-container extra' id='display_functionality'>
														<div id='tribe-event-content--5068' class='card tribe-events-single events-single-card' data-filter-container=''>
															<div class='location-meta' data-location='online'></div>
															<div class='tags' data-filter-target='' data-tags='online'></div>
															<div class='card__header'>
																<div class='card__title title-4 tribe-events-single-event-title'>" . htmlspecialchars($sql2['course_name']) . "</div>	
																</div>

															<div class='card__body small'>
															

																<table class='details'>
																	<tbody>
																		<tr>
																			<th>Start</th>
																			<td>" . htmlspecialchars($sql2['start_date']) . "</td>
																		</tr>
																		<tr>
																			<th>End</th>
																			<td>" . htmlspecialchars($sql2['end_date']) . "</td>
																		</tr>
                                                                        <tr>
																			<th>Discription</th>
																			<td>" . htmlspecialchars($sql2['description']) . "</td>
																		</tr>
																	</tbody>
																</table>
															</div>

															<div class='card__footer'>";



                            echo "<button class='add-to-cart button--plus button--online' id='" . $sql2['course_id'] . "' onclick='Enroll(this.id)'>Enroll</button>";
                            echo "									<button class='button button--secondary' id='" . $sql2['course_id'] . "' onclick='removeFromCart(this.id)'>Remove from cart</button>
															</div>
														</div><!-- #tribe-events-content -->
													</div>";
                        }

                        ?>

                    </div>
                </div>

            </section>

           

        </div><!-- #content -->

        <footer id="site-footer" class="footer" role="contentinfo">
            <div class="container footer-container">

                <div class="row">

                    <div class="footer-newsletter col-12 col-md-4">


                    </div>

                    <div class="footer-nav col-6 d-none d-md-block">

                        <ul id="menu-footer-menu" class="menu">
                            <!-- <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-27 nav-item">

								<ul role="menu">
									<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28 nav-item"><a title="All Courses" href="Courses.html" class="dropdown-item">All Courses</a></li>

								</ul>
							</li> -->
                            <!-- <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-31 nav-item">
								<a title="Get Help" href="#" class="nav-link">Get Help</a>
								<ul role="menu">
									<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32 nav-item"><a title="News &amp; Updates" href="news.html" class="dropdown-item">News &amp; Updates</a></li>
									<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33 nav-item"><a title="FAQs" href="FAQPLACEHOLDER" class="dropdown-item">FAQs</a></li>
								</ul>
							</li> -->
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-402 nav-item"><a title="Contact Us" href="contact.php" class="nav-link">Contact Us</a>
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
                            <!--

							<span class="footer-meta-item"><a href="Privacy.html">Privacy Page</a></span>
						
							<span class="footer-meta-sep">|</span>

							<span class="footer-meta-item"><a href="Terms.html">Terms of Use</a></span>
				
							<span class="footer-meta-sep">|</span>

							<span class="footer-meta-item"><a href="copyright-permissions.html">Copyright &amp; Permissions</a></span>
							

						-->
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
    <!-- <script type="text/javascript" src="js/ajax_script.js?ver=1.7" id="ajax_scripts-js"></script> -->


</body>

</html>