<?php  
$dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");  
//connect to a database named "postgres" on the host "host" with a username and password  
if (!$dbconn){  
echo "<center><h1>Doesn't work =(</h1></center>";  
}else
{  
 
}

if(isset($_POST['register'])&&!empty($_POST['register'])){
    
      $sql = "insert into public.sub_admin(first_name,last_name,email,password,mobile_no)values('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['email']."','".md5($_POST['password'])."','".$_POST['mobile_no']."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        
            echo "Data saved Successfully";
            header('Location: ../subAdmin/SubAdminLogin.php');
    }else{
        
            echo "Something Went Wrong";
    }
}
pg_close($dbconn);
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

        <h2>Register</h2>
        <p>Please fill Details</p>
        <form  method="post">
          <div class="form-group">
      <label for="first_name">First Name:</label>
      <input type="text" class="form-control" id="first_name" placeholder="Enter First name" name="first_name" required>
    </div>

    <div class="form-group">
      <label for="last_name">Last Name:</label>
      <input type="text" class="form-control" id="last_name" placeholder="Enter Last name" name="last_name" required>
    </div>
            <div class="form-group ">
                <label>Email</label>
                <input type="text" id="email" name="email" class="form-control" >
                <span class="help-block"></span>
            </div>  
            <div class="form-group">
            <label for="mobile_no">Mobile No:</label>
            <input type="number" class="form-control" maxlength="10" id="mobile_no" placeholder="Enter Mobile Number" name="mobile_no">
          </div>  
            <div class="form-group ">
                <label>Password</label>
                <input type="password" id="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>

            <div class="form-group">

                <input type="submit" class="btn btn-primary" name="register" value="register">
            </div>
           
        </form>
     

</section>
</body>