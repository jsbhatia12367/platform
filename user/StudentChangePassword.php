<?php
include("userinfo_user.php");
ob_start();
?>

<?php
// Initialize the session
//session_start();
 $dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
 if (!$dbconn){  
echo "<center><h1>Doesn't work =(</h1></center>";  
}else  
 // echo "<center><h1>Good connection</h1></center>"; 
 if(isset($_POST['change'])&&!empty($_POST['change'])){
    //console.log("testing1");
    $hashpassword = md5($_POST['password']);
    $sql ="select * from public.cmhauser where emailaddress = '".$EmailStudent."' and password ='".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    //console.log("testing2");
    if($login_check > 0){ 
      //  console.log("testing3");
        //session_start();
        //$_SESSION["EmailStudent"] = $_POST['email'];

                $sql = "UPDATE public.cmhauser 
                        SET password = '".md5($_POST['new_password'])."' WHERE emailaddress = '".$EmailStudent."'";
            $ret = pg_query($dbconn, $sql);
            if($ret){
                
                    echo '<script>alert("Password Change Successfully")</script>';
                    //header('Location: SubAdminLogin.php');
            }else{
                
                    echo "Something Went Wrong";
            }

       // header('Location: SubAdminLogin.php');    
    }else{
        //console.log("testing4");
        echo '<script>alert("Entered Old Password Is Wrong")</script>';
        // echo "Invalid Details";
    }
}


pg_close($dbconn); 
// Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//   header("location: StudentDashboard.php");
//   exit;
//}
 
// Include config file
// require_once "../php/config.php";

 
// Define variables and initialize with empty values
// $username = $password = "";
// $username_err = $password_err = "";
 

// if($_SERVER["REQUEST_METHOD"] == "POST"){

  
//     if(empty(trim($_POST["username"]))){
//         $username_err = "Please enter username.";
//     } else{
//         $username = trim($_POST["username"]);
//     }

//     if(empty(trim($_POST["password"]))){
//         $password_err = "Please enter your password.";
//     } else{
//         $password = trim($_POST["password"]);
//     }
    
    
//     if(empty($username_err) && empty($password_err)){




//         require_once "../php/sql.php";
        
//         $statement = pg_query($db_connection, $LoginSql);

//         $login_check = pg_num_rows($statement);
//     if($login_check > 0){ 
        
    
//                             session_start();
                            
                         
//                             $_SESSION["loggedin"] = true;
//                             $_SESSION["username"] = $username;                            
                            
                          
//                             header("location: StudentDashboard.php");

//     }else{
       
//                             $password_err = "Invalid password or username";

//     }
    
  
//     pg_close($db_connection);
// }
// }
?>


<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en-CA" class="no-js">

<head>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='../css/studentStyle.css' rel='stylesheet' type="text/css" />
  <link href='../css/admin_table.css' rel='stylesheet' type="text/css" />
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <svg style="display:none;">
  </svg>
  <script type="text/javascript">
    function validateInputDate() {
      var startDate = new Date(document.getElementById('start_date').value);
      var endDate = new Date(document.getElementById('end_date').value);
        if (isNaN(startDate.getTime()) || isNaN(endDate.getTime())) {
        } else {
          if(startDate>endDate)
          {
            alert("Please ensure that the End Date is greater than or equal to the Start Date.");
            document.getElementById('start_date').value = '';
            document.getElementById('end_date').value = '';
          }
        }
    }

    function courseFileAlreadyExistCheck(id) {
      var files = document.getElementById(id).files;

      if (files.length > 0) {

        var formData = new FormData();
        formData.append("file", files[0]);
        formData.append("action", "checkcoursefilealreadyexist")
        var xhttp = new XMLHttpRequest()
        xhttp.open("POST", "sub_admin_ajax.php", true);

        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            if (response == 1) {
              alert("File Already Exist");
              document.getElementById(id).value = "";
            }
          }
        };

        // Send request with data
        xhttp.send(formData);

      } else {
        alert("Please select a file");
      }

    }
  </script>
</head>

<body>
  <header class="page-header">
    <?php include 'LeftMenu.php'; ?>

  </header>
  <section class="page-content">
    <section class="grid">
      <article style="height: 800px">
        <div class="main__container">
          <div class="main__title">
            <div class="main__greeting">
              <h1>Change Password</h1>
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
                      <td>Old Password : </td>
                      <td><input type="password" id="password" name="password" class="form-control" required></td>
                    </tr>
                    
                    <tr>
                      <td>New Password :  </td>
                      <td><input type="password" id="new_password" name="new_password" class="form-control" required></td>
                    </tr>
                    <tr>
                    <td colspan="2">
                      <center> <input type="submit" class="btn btn-primary" name="change" value="Change Password"></center>
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