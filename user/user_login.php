<?php  
$dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");  
//connect to a database named "postgres" on the host "host" with a username and password  
if (!$dbconn){  
echo "<center><h1>Doesn't work =(</h1></center>";  
}else  
 echo "<center><h1>Good connection</h1></center>"; 

// $host = "localhost";
// $port = "5432";
// $dbname = "test";
// $user = "postgres";
// $password = "postgres"; 
// $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
// $dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
    $hashpassword = md5($_POST['password']);
    $sql ="select * from public.student where roll_no = '".pg_escape_string($_POST['roll_no'])."' and password ='".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    if($login_check > 0){ 
        session_start();
        $_SESSION["Roll_no"] = $_POST['roll_no'];
        header('Location: user_dashboard.php');    
    }else{
        
        echo "Invalid Details";
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Login Here </h2>
  <form method="post">
  
     
    <div class="form-group">
      <label for="roll_no">Roll Number:</label>
      <input type="text" class="form-control" id="roll_no" placeholder="Enter Roll Number" name="roll_no">
    </div>
    
     
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  </form>
</div>
</body>
</html>