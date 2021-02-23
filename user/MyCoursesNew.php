<?php include 'userinfo_user.php'; ?>
<!DOCTYPE html>
<html lang="en-CA" class="no-js">

<head>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='../css/studentStyle.css' rel='stylesheet' type="text/css" />
  <!--<link href='../css/admin_table.css' rel='stylesheet' type="text/css" />-->
    <link rel="stylesheet" id="bootstrap-css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css?ver=67c90ffd8417a442ac33ffaa4a4ee97a" type="text/css" media="all">
  <link rel="stylesheet" id="site_styles-css" href="../css/main_styles.css?ver=1.7" type="text/css" media="all">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <svg style="display:none;">
  </svg>
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
            $sql = pg_query(sprintf("SELECT * FROM public.courses limit 3 "));

            while ($row = pg_fetch_assoc($sql)) {

            echo "
                          <div class='col-12 col-md-6 card-container'>
                            <div id='tribe-event-content--5068' class='card tribe-events-single events-single-card' data-filter-container=''>
                              <div class='location-meta' data-location='online'></div>
                              <div class='tags' data-filter-target='' data-tags='online'></div>
                              <div class='card__header'>
                                <div class='card__title title-4 tribe-events-single-event-title'>". htmlspecialchars($row['course_name']) . "</div> 
                                </div>

                              <div class='card__body small'>
                              

                                <table class='details'>
                                  <tbody>
                                    <tr>
                                      <th>Start</th>
                                      <td>". htmlspecialchars($row['start_date'])."</td>
                                    </tr>
                                    <tr>
                                      <th>End</th>
                                      <td>". htmlspecialchars($row['end_date'])."</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>

                              <div class='card__footer'>
                                <button class='add-to-cart button--plus button--online' data-download-id='5069' data-event-id='5068' data-title='Stress Management: Online' data-schedule='[{&quot;start&quot;:&quot;2020-12-10T10:00:00-0700&quot;,&quot;end&quot;:&quot;2020-12-10T11:00:00-0700&quot;}]' data-tag='online' data-nice-date='December 10 2020, 10:00 am - 11:00 am MDT' data-sessions='1'>Add to Cart</button>
                                <a href='#' class='button button--secondary'>Learn More</a>
                              </div>
                            </div><!-- #tribe-events-content -->
                          </div>";

                                  }

            ?>

            <div class="col-12 col-md-6 card-container">
              <div class="card card-view-all">
                <div class="card-view-all__body">
                  <h3>View all Courses</h3>
                  <a class="button" title="View All Courses" href="courses.php">Courses</a>
                </div>
              </div>
            </div>

            

          </div>
        </div>

      </section>


      


    </div><!-- #content -->
    
    
    
  </div><!-- #page -->
  </div>>
  </div>
  
  
</body>
<footer class="page-footer">
</footer>