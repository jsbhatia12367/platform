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
        echo '<script>alert("Sub Admin Added Successfully")</script>';
            echo "Data saved Successfully";
    }else{
        
            echo "Something Went Wrong";
    }
}
pg_close($dbconn);
?>


<!DOCTYPE html>
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
              <h1>Add Sub Admin</h1>
              <form  method="post">
              <table class="content-table">
            <thead>
              <tr>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>*First Name : </td>
                <td><input type="text"  name="first_name" class="form-control"  required></td>
              </tr>
              <tr>
                <td>*Last Name : </td>
                <td><input type="text"  name="last_name" class="form-control"  required></td>
              </tr>
              <tr>
              <tr>
                <td>*Email : </td>
                <td><input type="text"  name="email" class="form-control"  required></td>
              </tr>
              <tr>
                <td>*Mobile No : </td>
                <td><input type="text"  name="mobile_no" class="form-control"  required></td>
              </tr>
              <tr>
                <td>*Password : </td>
                <td><input type="text"  name="password" class="form-control"  required></td>
              </tr>
                <td colspan="2"><center><input type="submit" class="btn btn-primary" name="register" value="register"></center></td>
                
              </tr>
            </tbody>
          </table>
          </form>
    </article>
  <footer class="page-footer">
  </footer>
</section>
</body>
</head>
</html>