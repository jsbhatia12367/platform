<?php  
$dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");  
//connect to a database named "postgres" on the host "host" with a username and password  
if (!$dbconn){  
echo "<center><h1>Doesn't work =(</h1></center>";  
}else
{  
 echo "<center><h1>Good connection</h1></center>";  
}
// pg_close($dbconn);  

// $host = "localhost";
// $port = "5432";
// $dbname = "postgres";
// $user = "postgres";
// $password = "postgres"; 
// $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
// $dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
      $sql = "insert into public.student(first_name,last_name,email,password,mobile_no,roll_no)values('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['email']."','".md5($_POST['password'])."','".$_POST['mobile_no']."','".$_POST['roll_no']."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        
            echo "Data saved Successfully";
    }else{
        
            echo "Soething Went Wrong";
    }
}
pg_close($dbconn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP PostgreSQL Registration & Login Example </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="../js/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Register Here </h2>
  <form method="post">
  
    <div class="form-group">
      <label for="first_name">First Name:</label>
      <input type="text" class="form-control" id="first_name" placeholder="Enter First name" name="first_name" required>
    </div>

    <div class="form-group">
      <label for="last_name">Last Name:</label>
      <input type="text" class="form-control" id="last_name" placeholder="Enter Last name" name="last_name" required>
    </div>

     <div class="form-group">
      <label for="roll_no">Roll Number:</label>
      <input type="text" class="form-control" id="roll_no" placeholder="Enter Roll Number" name="roll_no" required>
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
    <div class="form-group">
      <label for="mobile_no">Mobile No:</label>
      <input type="number" class="form-control" maxlength="10" id="mobile_no" placeholder="Enter Mobile Number" name="mobile_no">
    </div>
    
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  </form>
</div>
</body>
</html>