<?php
 $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
 if (!$db){  
  echo "<center><h1>Doesn't work =(</h1></center>";  
  }else
  {  
  
  }
 if(isset($_POST['save'])&&!empty($_POST['save'])){
  $hashpassword = md5($_POST['password']);
      $RegisterSql = "INSERT INTO cmhauser (firstname, middlename, lastname, emailaddress, phonenumber, dateofbirth, city, province, gender, ethnicity, indigenousidentity, languagespoken, housingstatus, sourceofincome, occupation, username, password) VALUES ('".pg_escape_string($_POST['firstname'])."','".pg_escape_string($_POST['middlename'])."','".pg_escape_string($_POST['lastname'])."','".pg_escape_string($_POST['emailaddress'])."','".pg_escape_string($_POST['phonenumber'])."','".pg_escape_string($_POST['dateofbirth'])."','".pg_escape_string($_POST['city'])."','".pg_escape_string($_POST['province'])."','".pg_escape_string($_POST['gender'])."','".pg_escape_string($_POST['ethnicity'])."','".pg_escape_string($_POST['indigenousidentity'])."','".pg_escape_string($_POST['languagespoken'])."','".pg_escape_string($_POST['housingstatus'])."','".pg_escape_string($_POST['sourceofincome'])."','".pg_escape_string($_POST['occupation'])."','".pg_escape_string($_POST['culturalconsiderations'])."','".pg_escape_string($_POST['livingarrangement'])."','".pg_escape_string($_POST['username'])."','".pg_escape_string($hashpassword)."')";
      $ret = pg_query($db, $RegisterSql);
      if($ret){
          
              echo "Data saved Successfully";
      }else{
          
              echo "Soething Went Wrong";
      }
 }

pg_close($db);
?>


<!DOCTYPE html>
<html lang="en-CA" class="no-js">
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href='../css/studentStyle.css' rel='stylesheet' type="text/css"/>
<link href='../css/admin_table.css' rel='stylesheet' type="text/css"/>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<svg style="display:none;">
</svg>
</head>

<body>
<header class="page-header">
  <?php include 'LeftMenu.php';?>
</header>
<!-- <section class="page-content">
  <section class ="grid">
    <article style="height: 800px">
      <div class="main__container"> -->
        <!-- <div class="main__title"> -->
            <!-- <div class="main__greeting"> -->

              
    <!-- </article> -->
    <!-- </SECTION> -->
  <!-- <footer class="page-footer"> -->
  <!-- </footer> -->
<!-- </section> --> -->
<section class="page-content"
<h1>Add New Student</h1>
              <div class="form-group">
          <form method="post">
              Username:<br>
              <input type="text" name="username" class="form-control">
              <br>
              Password:<br>
              <input type="password" name="password" class="form-control">
              <br>
              First name:<br>
              <input type="text" name="firstname" class="form-control">
              <br>
              Middle name:<br>
              <input type="text" name="middlename" class="form-control">
              <br>
              Last name:<br>
              <input type="text" name="lastname" class="form-control">
              <br>
              Email:<br>
              <input type="email" name="emailaddress" class="form-control">
              <br>
             Phone Number:<br>
              <input type="tel" name="phonenumber" class="form-control">
              <br>
             Date of Birth:<br>
              <input type="date" name="dateofbirth" class="form-control">
              <br>
             City:<br>
              <input type="text" name="city" class="form-control">
              <br>
              Province:<br>
              <input type="text" name="province" class="form-control">
              <br>
              Gender:<br>
              <input type="text" name="gender" class="form-control">
              <br>
              Ethnicity:<br>
              <input type="text" name="ethnicity" class="form-control">
              <br>
              Cultural Considerations:<br>
              <input type="text" name="culturalconsiderations" class="form-control">
              <br>
              Indigenous Identity:<br>
              <input type="text" name="indigenousidentity" class="form-control">
              <br>
              Language Spoken:<br>
              <input type="text" name="languagespoken" class="form-control">
              <br>
              Housing Status:<br>
              <input type="text" name="housingstatus" class="form-control">
              <br>
              Living Arrangement:<br>
              <input type="text" name="livingarrangement" class="form-control">
              <br>
              Source Of Income:<br>
              <input type="text" name="sourceofincome" class="form-control">
              <br>
              Occupation:<br>
              <input type="text" name="occupation" class="form-control">
              <br>



              





              <!-- culturalconsiderations
languagespoken
housingstatus
livingarrangement
sourceofincome
occupation
registrationdate
lastlogin -->

              <br>
              <input type="submit" name="save" value="submit">
          </form></div>

</section>
</body>