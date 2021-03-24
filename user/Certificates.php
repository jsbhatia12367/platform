<?php include 'userinfo_user.php'; ?>
<!DOCTYPE html>
<html lang="en-CA" class="no-js">

<head>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='../css/studentStyle.css' rel='stylesheet' type="text/css" />
  <link href='../css/admin_table.css' rel='stylesheet' type="text/css" />
    <link rel="stylesheet" id="bootstrap-css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css?ver=67c90ffd8417a442ac33ffaa4a4ee97a" type="text/css" media="all">
  <link rel="stylesheet" id="site_styles-css" href="../css/main_styles.css?ver=1.7" type="text/css" media="all">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <svg style="display:none;"></svg>
</head>

<body>
  <div class="row">
    <div class='col-3'>
    <header class="page-header">
    <?php include 'LeftMenu.php'; ?>

  </header>
</div>
<div class='col-9'>
  <div id="page" class="site">
    <div id="content" class="site-content">
      

      

      
      
      <div id="skip-anchor" tabindex="-1"></div>
      
    



      <section class="upcoming-courses">

        <div class="container">
          <div class="row">

            

            <?php

            $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
            $sql = pg_query(sprintf("SELECT * FROM public.enroll where completed=true AND certificate_generated=true AND emailaddress ='" . pg_escape_string($_SESSION['EmailStudent']) . "';"));
            $count = 0;

            while ($row = pg_fetch_assoc($sql)) {
              $count = $count + 1;
              $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT course_name FROM public.courses where course_id='".$row['course_id']."' ;")));
            echo "
                          <div class='col-12 col-md-3 card-container'>
                            <div id='tribe-event-content--5068' class='card tribe-events-single events-single-card' data-filter-container=''>
                              <div class='location-meta' data-location='online'></div>
                              <div class='tags' data-filter-target='' data-tags='online'></div>
                              <div class='card__header'>
                                <div class='card__title title-4 tribe-events-single-event-title'>". htmlspecialchars($sql2['course_name']) . "</div> 
                              </div>
                              <div class='card__footer'>
                                <a href='../admin/certificates/".$row['certificate']."' class='btn btn-primary' id='".$row['course_id']."'>Download</a>
                              </div>
                            </div><!-- #tribe-events-content -->
                          </div>";

                                  }
                echo "</div><br><br>";                  
                if($count == 0){
                  echo "<center><p>There is no certificate to show, If you have completed the course wait till admin generates your certificate</p></center>";
                }

            ?>

        </div>

      </section>


      


    </div><!-- #content -->
    
    
    
  </div><!-- #page -->
  </div>>
  </div>
  
  
</body>
<footer class="page-footer">
</footer>