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
   // header('Location: show_messages.php');  

 
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["course_data"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES["course_data"]["tmp_name"], $target_file)) {
      $dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
      $sql="";
      if(basename($_FILES["course_data"]["name"])==null)
  {
      
    $sql = "update public.courses set 
      course_name = '" . $_POST['course_name'] . " ',
      owner_email = '" . $_POST['owner_email'] . " ',
       course_data = '". htmlspecialchars($row['hidden_data']) ."', 
       start_date =' " . $_POST['start_date'] . "',
      end_date = '" . $_POST['end_date'] . "',
      description = '" . $_POST['description'] . "',
      capacity = '" . $_POST['capacity'] . " '
      where course_id = '".$CourseId."';";

  }
  else
  {
    $sql = "update public.courses set 
      course_name = '" . $_POST['course_name'] . " ',
      owner_email = '" . $_POST['owner_email'] . " ',
       course_data = '" . basename($_FILES['course_data']['name']) . " ', 
       start_date =' " . $_POST['start_date'] . "',
      end_date = '" . $_POST['end_date'] . "',
      description = '" . $_POST['description'] . "',
      capacity = '" . $_POST['capacity'] . " '
      where course_id = '".$CourseId."';";

  }
      

      
      $ret = pg_query($dbconn, $sql);
      if ($ret) {
        echo '<script>alert("Course Updated Successfully")</script>';
        // echo "Data saved Successfully";
      } else {

        echo "Something Went Wrong";
      }
      pg_close($dbconn);
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
 }

if(isset($_POST['delete'])&&!empty($_POST['delete'])){
   header('Location: show_messages2.php');
      // $RegisterSql = "Delete FROM public.cmhauser 
                        
      //                   WHERE emailaddress = '".$StudentEmail."'";
      // // (firstname, middlename, lastname, emailaddress, phonenumber, dateofbirth, city, province, gender, ethnicity, indigenousidentity, languagespoken, housingstatus, sourceofincome, occupation, username, password) VALUES ('".pg_escape_string($_POST['firstname'])."','".pg_escape_string($_POST['middlename'])."','".pg_escape_string($_POST['lastname'])."','".pg_escape_string($_POST['emailaddress'])."','".pg_escape_string($_POST['phonenumber'])."','".pg_escape_string($_POST['dateofbirth'])."','".pg_escape_string($_POST['city'])."','".pg_escape_string($_POST['province'])."','".pg_escape_string($_POST['gender'])."','".pg_escape_string($_POST['ethnicity'])."','".pg_escape_string($_POST['indigenousidentity'])."','".pg_escape_string($_POST['languagespoken'])."','".pg_escape_string($_POST['housingstatus'])."','".pg_escape_string($_POST['sourceofincome'])."','".pg_escape_string($_POST['occupation'])."','".pg_escape_string($_POST['username'])."','".pg_escape_string($_POST['password'])."')";
      // $ret = pg_query($db, $RegisterSql);
      // if($ret){
      //     echo '<script>alert("Account Deleted Successfully")</script>';
      //         echo "<script>setTimeout(\"location.href = 'StudentContact.php';\",1);</script>";
      // }else{
          
      //         echo "Soething Went Wrong";
      // }
 }


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
             <!--  <?php echo $CourseId; ?> -->
              <form method="post" enctype="multipart/form-data">
              <table class="content-table">
                  <thead>
                    <tr>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Course Name : </td>

                      <?php
                  $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
                  $sql = pg_query(sprintf("SELECT * FROM public.courses where course_id='".$CourseId."';"));
                  while ($row = pg_fetch_assoc($sql)) {
                      echo"<td><input type='text' class='form-control' id='course_name' value='".htmlspecialchars($row['course_name'])."' name='course_name' required></td>";
                    echo"</tr>";
                    echo"<tr>";
                      echo"<td>Owner Email : </td>";
                      echo"<td>";
                        echo"<select class='form-control' id='owner_email' name='owner_email'>";
                          
                         
                            $sql22 = pg_query(sprintf("SELECT * FROM public.sub_admin "));
                          while ($row22 = pg_fetch_assoc($sql22)) {
                            if(htmlspecialchars($row22['email'])==htmlspecialchars($row['owner_email']))
                            {

                            echo '<option value="'. htmlspecialchars($row22['email']). '" >' . htmlspecialchars($row22['email']). '</option>';
                          }
                          else
                          {
                            echo '<option value="'. htmlspecialchars($row22['email']). '">' . htmlspecialchars($row22['email']). '</option>';
                          }
                          }
                         
                        echo"</select>";
                      echo"</td>";
                    echo"</tr>";
                    echo"<tr>";
                    echo"<tr>";
                      echo"<td>Data File : </td>";
                      echo"<td><input type='file'  class='form-control' id='course_data' placeholder='Insert Data File' name='course_data'    onchange='courseFileAlreadyExistCheck(this.id)'><p >Initial Selected course = ".htmlspecialchars($row['course_data'])."</p></td>";
                      // <input type="file" name="uploadfile" id="img" style='display:none;'/>

                    echo"</tr>";
                    echo"<tr>";
                      echo"<td>Start Date : </td>";
                     echo" <td><input type='date' class='form-control' id='start_date' placeholder='dd/mm/yyyy' name='start_date' value = '". htmlspecialchars($row['start_date'])."' required onchange='validateInputDate()'></td>";
                    echo"</tr>";
                    echo" <td><input type='hidden' class='form-control' id='hidden_data' placeholder='dd/mm/yyyy' name='hidden_data' value = '". htmlspecialchars($row['course_data']) ."' required onchange='validateInputDate()'></td>";
                    echo"</tr>";
                    echo"<tr>";
                      echo"<td>End Date : </td>";
                      echo"<td><input type='date' class='form-control' id='end_date' placeholder='dd/mm/yyyy' name='end_date' value = '". htmlspecialchars($row['end_date'])."' required onchange='validateInputDate()'></td>";
                    echo"</tr>";
                    echo"<tr>";
                      echo"<td>Description : </td>";
                      echo"<td><textarea rows='4' cols='50' name='description' class='form-control' id='description'  required>". htmlspecialchars($row['description'])."</textarea></td>";
                    echo"</tr>";
                    echo"<tr>";
                      echo"<td>Capacity : </td>";
                      echo"<td><input type='number' class='form-control' id='capacity' value='". htmlspecialchars($row['capacity'])."' name='capacity' min='1' required></td>";
                      }
                ?>
                    </tr>
                    <td>
                      <center><input type="submit" name="update" class="btn btn-primary" value="Update"></center>
                    </td>
                    <td >
                      <center><input type="submit" name="delete" class="btn btn-primary" value="Delete"></center>
                    </td>

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