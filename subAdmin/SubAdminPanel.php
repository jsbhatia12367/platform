<?php
include("userinfo_sub_admin.php");
?>
<link href='../css/studentStyle.css' rel='stylesheet' type="text/css"/>
<link href='../css/admin_table.css' rel='stylesheet' type="text/css"/>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<svg style="display:none;">

  
</svg>

<header class="page-header">
  <?php include 'LeftMenu.php';?>
</header>
<section class="page-content">
  <section class="grid">
    <article>
      <div class="main__container">
        <div class="main__title">
            <div class="main__greeting">
              <?php 
              $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
              $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.sub_admin where email='".$EmailSubAdmin."' ;")));
              echo"<h1>Welcome ".$sql2['first_name']. " </h1>"
              ?>
              <!-- <p>Welcome to your CMHA admin dashboard</p> -->
            </div>
            </div>
     <?php 
        /*  include_once("../php/config.php");
          include_once("../php/sql.php");*/
     ?>
    </article>
  
    <div class="main__cards">
      <div class="card">
        
        <div class="card_inner">
          <p class="text-primary-p">Students Enrolled</p>
            <?php
              $sr_no = 1;
              $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
              $sql1 = pg_fetch_assoc(pg_query(sprintf("SELECT count(*) as total FROM public.cmhauser;")));
              $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT count(*) as total FROM public.courses;")));
              $sql3 = pg_fetch_assoc(pg_query(sprintf("SELECT count(*) as total FROM public.enroll;")));
              $sql4 = pg_fetch_assoc(pg_query(sprintf("SELECT count(*) as total FROM public.enroll WHERE certificate_generated ='true';")));
          echo"<span class='font-bold text-title'>&nbsp;&nbsp;".$sql1['total']."</span>
        </div>
      </div>

      

      <div class='card'>
        
        <div class='card_inner'>
          <p class='text-primary-p'>Courses Available</p>
          <span class='font-bold text-title'>&nbsp;&nbsp;".$sql2['total']."</span>
        </div>
      </div>

      <div class='card'>
        
        <div class='card_inner'>
          <p class='text-primary-p'>Total enrollment</p>
          <span class='font-bold text-title'>&nbsp;&nbsp;".$sql3['total']."</span>
        </div>
      </div>
      <div class='card'>
        
        <div class='card_inner'>
          <p class='text-primary-p'>Certificate Generated</p>
          <span class='font-bold text-title'>&nbsp;&nbsp;".$sql4['total']."</span>
        </div>
      </div>
      "

     

        
          ?>
        
     
    </div>
    <article>
      <div id="piechart"></div>
      <!--
      <div class="charts">
            <div class="charts__left">
              <div class="charts__left__title">
                <div>
                  <h1>Daily Reports</h1>
                  <p>CMHA, Edmonton, CA</p>
                </div>
                <i class="fa fa-usd" aria-hidden="true"></i>
              </div>
              <div id="apex1"></div>
            </div> -->
            <!-- CHARTS ENDS HERE -->
        </div>
    </article>
    <article></article>
  </section>
  <footer class="page-footer">
  </footer>
</section>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Courses', 'Hours per Day'],
  ['Courses Enrolled', <?php echo $coursenumber; ?>],
  ['Courses in progress', 2],
  ['Courses Completed', 4]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'CMHA Courses', 'width':550, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
