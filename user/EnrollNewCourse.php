<?php include 'userinfo_user.php'; ?>
<!DOCTYPE html>
<html lang="en-CA" class="no-js">

<head>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='../css/studentStyle.css' rel='stylesheet' type="text/css" />
  <!-- <link href='../css/admin_table.css' rel='stylesheet' type="text/css" /> -->
  <link rel="stylesheet" id="bootstrap-css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css?ver=67c90ffd8417a442ac33ffaa4a4ee97a" type="text/css" media="all">
  <link rel="stylesheet" id="site_styles-css" href="../css/main_styles.css?ver=1.7" type="text/css" media="all">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <script src="../js/jquery-3.6.0.min.js"></script>"></script>
  <svg style="display:none;"></svg>
  <script type="text/javascript">
    function myFunction(clicked_id,data) {
      $.ajax({
        type: "POST",
        url: 'ajax.php',
        data: {
          action: 'enroll_this',
          course_id: clicked_id,
          Email: data
        },
        success: function(html) {
          location.reload();
        }

      });
    }
    function myFunction2(clicked_id,data) {
      $.ajax({
        type: "POST",
        url: 'ajax.php',
        data: {
          action: 'add_to_cart',
          course_id: clicked_id,
          Email: data
        },
        success: function(html) {
          location.reload();
        }

      });
    }
  </script>
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
                $sql = pg_query(sprintf("SELECT * FROM public.courses where course_id NOT IN (select course_id From public.enroll where emailaddress='".$_SESSION['Email']."');"));
               

                while ($row = pg_fetch_assoc($sql)) {
                  echo "
                          <div class='col-12 col-md-6 card-container'>
                            <div id='tribe-event-content--5068' class='card tribe-events-single events-single-card' data-filter-container=''>
                              <div class='location-meta' data-location='online'></div>
                              <div class='tags' data-filter-target='' data-tags='online'></div>
                              <div class='card__header'>
                                <div class='card__title title-4 tribe-events-single-event-title'>" . htmlspecialchars($row['course_name']) . "</div> 
                                </div>

                              <div class='card__body small'>
                                <table class='details'>
                                  <tbody>
                                    <tr>
                                      <th>Start</th>
                                      <td>" . htmlspecialchars($row['start_date']) . "</td>
                                    </tr>
                                    <tr>
                                      <th>End</th>
                                      <td>" . htmlspecialchars($row['end_date']) . "</td>
                                    </tr>
                                    <tr>
                                      <th>Description</th>
                                      <td>" . htmlspecialchars($row['description']) . "</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>

                              <div class='card__footer'>";

                              // Sql Query to find 
                              $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.cart where course_id='".$row['course_id']."' and emailaddress='".$_SESSION['Email']."';")));

                              if($row['capacity']>$row['currently_enrolled'] && empty($sql2))
                              {
                              echo "<button class='btn btn-primary' id='" . $row['course_id'] . "' data='".$row['owner_email']."' onclick='myFunction(this.id,this.data)'>Enroll</button><button class='btn btn-primary' id='" . $row['course_id'] . "' data='".$row['owner_email']."' onclick='myFunction2(this.id,this.data)'>Add to Cart</button>";
                              }
                              // cart data 
                              else if (!empty($sql2))
                              {
                                echo "<button class='btn btn-primary' id='" . $row['course_id'] . "' data='".$row['owner_email']."' onclick='myFunction(this.id,this.data)' disabled>Added to cart</button>";
                              }
                              else
                              {
                                echo "<button class='btn btn-primary' id='class_full' disabled>Class Full</button>";
                              }
                              echo "</div>
                            </div><!-- #tribe-events-content -->
                          </div>";
                }

                ?>



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