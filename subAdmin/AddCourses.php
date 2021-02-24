<?php
include("userinfo_admin.php");
ob_start();
?>

<?php




// $session_email = "jsbhatia12367@gmail.com" ; 

// $dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");  
//connect to a database named "postgres" on the host "host" with a username and password  
// if (!$dbconn){  
// echo "<center><h1>Doesn't work =(</h1></center>";  
// }else
// {  
//  echo "<center><h1>Good connection</h1></center>";  
// }
// pg_close($dbconn);  

// $host = "localhost";
// $port = "5432";
// $dbname = "postgres";
// $user = "postgres";
// $password = "postgres"; 
// $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
// $dbconn = pg_connect($connection_string);
// if(isset($_POST['submit'])&&!empty($_POST['submit'])){

    
      // $sql = "insert into public.courses(course_name,owner_email)values('".$_POST['course_name']."','".$session_email."')";
    // $ret = pg_query($dbconn, $sql);
    // if($ret){
        
    //         echo "Data saved Successfully";
    // }else{
        
    //         echo "Something Went Wrong";
    // }
// }
// pg_close($dbconn);
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
  <form method="post" action="../logic.php">
  
     
    <div class="form-group">
      <label for="course">Course Name:</label>
      <input type="text" class="form-control" id="course_name" placeholder="Enter Course Name" name="course_name">
    </div>

    <input type="submit" name="submit2" class="btn btn-primary" value="Submit">

  </form>
</div>

<form method="post" action="../logic.php">
<input type="submit" class="btn btn-primary" name="logout" value="Logout">
</form>

</body>
</html>

