<?php include 'userinfo_admin.php'; ?>
<?php
$CourseId = $_GET['CourseId'];

$db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
if (!$db) {
  echo "<center><h1>Doesn't work =(</h1></center>";
} else {
  //echo "<center><h1>Good connection</h1></center>";  
}


 if(isset($_POST['update'])&&!empty($_POST['update'])){
      $RegisterSql = "UPDATE public.cmhauser 
                        SET firstname = '".$_POST['firstname']."'
                        , middlename = '".$_POST['middlename']."'
                        , lastname = '".$_POST['lastname']."'
                        
                        , phonenumber = '".$_POST['phonenumber']."'
                        , dateofbirth = '".$_POST['dateofbirth']."'
                        , city = '".$_POST['city']."'
                        , province = '".$_POST['province']."'
                        , gender = '".$_POST['gender']."'
                        , ethnicity = '".$_POST['ethnicity']."'
                        , culturalconsiderations = '".$_POST['culturalconsiderations']."'
                        , indigenousidentity = '".$_POST['indigenousidentity']."'
                        , languagespoken = '".$_POST['languagespoken']."'
                        , housingstatus = '".$_POST['housingstatus']."'
                        , livingarrangement = '".$_POST['livingarrangement']."'
                        , sourceofincome = '".$_POST['sourceofincome']."'
                        , occupation = '".$_POST['occupation']."' 
                        WHERE emailaddress = '".$StudentEmail."'";
      // (firstname, middlename, lastname, emailaddress, phonenumber, dateofbirth, city, province, gender, ethnicity, indigenousidentity, languagespoken, housingstatus, sourceofincome, occupation, username, password) VALUES ('".pg_escape_string($_POST['firstname'])."','".pg_escape_string($_POST['middlename'])."','".pg_escape_string($_POST['lastname'])."','".pg_escape_string($_POST['emailaddress'])."','".pg_escape_string($_POST['phonenumber'])."','".pg_escape_string($_POST['dateofbirth'])."','".pg_escape_string($_POST['city'])."','".pg_escape_string($_POST['province'])."','".pg_escape_string($_POST['gender'])."','".pg_escape_string($_POST['ethnicity'])."','".pg_escape_string($_POST['indigenousidentity'])."','".pg_escape_string($_POST['languagespoken'])."','".pg_escape_string($_POST['housingstatus'])."','".pg_escape_string($_POST['sourceofincome'])."','".pg_escape_string($_POST['occupation'])."','".pg_escape_string($_POST['username'])."','".pg_escape_string($_POST['password'])."')";
      $ret = pg_query($db, $RegisterSql);
      if($ret){
          echo '<script>alert("Account upated Successfully")</script>';
          echo "<script>setTimeout(\"location.href = 'StudentContact.php';\",1);</script>";
              //echo "Data upated Successfully";
      }else{
          
              echo "Soething Went Wrong";
      }
 }

if(isset($_POST['delete'])&&!empty($_POST['delete'])){
      $RegisterSql = "Delete FROM public.cmhauser 
                        
                        WHERE emailaddress = '".$StudentEmail."'";
      // (firstname, middlename, lastname, emailaddress, phonenumber, dateofbirth, city, province, gender, ethnicity, indigenousidentity, languagespoken, housingstatus, sourceofincome, occupation, username, password) VALUES ('".pg_escape_string($_POST['firstname'])."','".pg_escape_string($_POST['middlename'])."','".pg_escape_string($_POST['lastname'])."','".pg_escape_string($_POST['emailaddress'])."','".pg_escape_string($_POST['phonenumber'])."','".pg_escape_string($_POST['dateofbirth'])."','".pg_escape_string($_POST['city'])."','".pg_escape_string($_POST['province'])."','".pg_escape_string($_POST['gender'])."','".pg_escape_string($_POST['ethnicity'])."','".pg_escape_string($_POST['indigenousidentity'])."','".pg_escape_string($_POST['languagespoken'])."','".pg_escape_string($_POST['housingstatus'])."','".pg_escape_string($_POST['sourceofincome'])."','".pg_escape_string($_POST['occupation'])."','".pg_escape_string($_POST['username'])."','".pg_escape_string($_POST['password'])."')";
      $ret = pg_query($db, $RegisterSql);
      if($ret){
          echo '<script>alert("Account Deleted Successfully")</script>';
              echo "<script>setTimeout(\"location.href = 'StudentContact.php';\",1);</script>";
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
<section class="page-content">
  <section class ="grid">
    <article style="height: 800px">
      <div class="main__container">
        <div class="main__title">
            <div class="main__greeting">
              <h1>Edit Course Details</h1>
              <?php echo $CourseId; ?>
               <form  method="post">
              
        </form>
    </article>
  <footer class="page-footer">
  </footer>
</section>
</body>
</head>
</html>