<?php include 'userinfo_user.php';?>
<?php
 $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
 if (!$db){  
  echo "<center><h1>Doesn't work =(</h1></center>";  
  }else
  {  
   //echo "<center><h1>Good connection</h1></center>";  
  }
 if(isset($_POST['update'])&&!empty($_POST['update'])){
      $RegisterSql = "UPDATE public.cmhauser 
                        SET firstname = '".$_POST['firstname']." 
                        , middlename = '".$_POST['middlename']."'
                        , lastname = '".$_POST['lastname']."'
                        , username = '".$_POST['username']."'
                        , emailaddress = '".$_POST['emailaddress']."'
                        , phonenumber = '".$_POST['firstname']."'
                        , dateofbirth = '".$_POST['firstname']."'
                        , city = '".$_POST['firstname']."'
                        , province = '".$_POST['firstname']."'
                        , gender = '".$_POST['firstname']."'
                        , ethnicity = '".$_POST['firstname']."'
                        , culturalconsiderations = '".$_POST['firstname']."'
                        , indigenousidentity = '".$_POST['firstname']."'
                        , languagespoken = '".$_POST['firstname']."'
                        , housingstatus = '".$_POST['firstname']."'
                        , livingarrangement = '".$_POST['firstname']."'
                        , sourceofincome = '".$_POST['firstname']."'
                        , occupation = '".$_POST['firstname']."' 
                        WHERE emailaddress = '".$Email."'";
      // (firstname, middlename, lastname, emailaddress, phonenumber, dateofbirth, city, province, gender, ethnicity, indigenousidentity, languagespoken, housingstatus, sourceofincome, occupation, username, password) VALUES ('".pg_escape_string($_POST['firstname'])."','".pg_escape_string($_POST['middlename'])."','".pg_escape_string($_POST['lastname'])."','".pg_escape_string($_POST['emailaddress'])."','".pg_escape_string($_POST['phonenumber'])."','".pg_escape_string($_POST['dateofbirth'])."','".pg_escape_string($_POST['city'])."','".pg_escape_string($_POST['province'])."','".pg_escape_string($_POST['gender'])."','".pg_escape_string($_POST['ethnicity'])."','".pg_escape_string($_POST['indigenousidentity'])."','".pg_escape_string($_POST['languagespoken'])."','".pg_escape_string($_POST['housingstatus'])."','".pg_escape_string($_POST['sourceofincome'])."','".pg_escape_string($_POST['occupation'])."','".pg_escape_string($_POST['username'])."','".pg_escape_string($_POST['password'])."')";
      $ret = pg_query($db, $RegisterSql);
      if($ret){
          
              echo "Data upated Successfully";
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
      <article style="height: 650px">
        <div class="main__container">
          <div class="main__title">
              <div class="main__greeting">
                <h1>Personal details</h1>
              </div>
              </div>
            <table class="content-table">
              <thead>
                <tr>
                <th>Personal Info:</th>
                <th></th>
                <th></th>
                <th></th>
                </tr>
              </thead>
             <tbody>
              <form  method="post">
              <tr>
                <td>Username :</td>
                <td><input type="text" name="username" class="form-control" disabled="true"></td>
               
                <td>Email Address :</td>
                <td>  <input type="email" name="emailaddress" class="form-control" disabled="true"></td>
               </tr>
               <tr>
                <td>First Name :</td>
                <td> <input type="text" name="firstname" class="form-control"></td>
               
                <td>Middle Name :</td>
                <td> <input type="text" name="middlename" class="form-control"></td>
               </tr>
               <tr>
                <td>Last Name :</td>
                <td> <input type="text" name="lastname" class="form-control"></td>
               
               
                <td>Phone Number :</td>
                <td> <input type="tel" name="phonenumber" class="form-control" ></td>
               </tr>
               <tr>
                <td>Date Of Birth :</td>
                <td> <input type="date" name="dateofbirth" class="form-control" ></td>
              
                <td>City :</td>
                <td> <input type="text" name="city" class="form-control" ></td>
               </tr>
               <tr>
                <td>Province :</td>
                <td> <input type="text" name="province" class="form-control" ></td>
               
                <td>Gender :</td>
                <td> <input type="text" name="gender" class="form-control" ></td>
               </tr>
               <tr>
                <td>Ethnicity :</td>
                <td> <input type="text" name="ethnicity" class="form-control" ></td>
               
                <td>Cultural Considerations :</td>
                <td>  <input type="text" name="culturalconsiderations" class="form-control" ></td>
               </tr>
               <tr>
                <td>Indigenous Identity :</td>
                <td><input type="text" name="indigenousidentity" class="form-control" ></td>
               
                <td>Language Spoken :</td>
                <td>  <input type="text" name="languagespoken" class="form-control"></td>
               </tr>
               <tr>
                <td>Housing Status :</td>
                <td> <input type="text" name="housingstatus" class="form-control"></td>
               
                <td>Living Arrangement :</td>
                <td> <input type="text" name="livingarrangement" class="form-control"></td>
               </tr>
               <tr>
                <td>Source Of Income :</td>
                <td> <input type="text" name="sourceofincome" class="form-control" ></td>
               
                <td>Occupation :</td>
                <td> <input type="text" name="occupation" class="form-control"></td>
               </tr>
               <tr>
                
                <td> <input type="submit" class="btn btn-primary" name="update" value="Update"></td>
                <td> </td>
               </tr>
               </form>
               
             </tbody>
            </table>
      </article>
    </section>
  </section>
</body>
  <footer class="page-footer">
  </footer>