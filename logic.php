<?php
// session_start();
// $session_email = $_SESSION["email"];  
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
    $sql ="select * from public.admin where email = '".pg_escape_string($_POST['email'])."' and password ='".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    if($login_check > 0){ 
        session_start();
        $_SESSION["Email"] = $_POST['email'];
        header('Location: admin/add_courses.php');

    }else{
        
        echo "Invalid Details";
    }
}

if(isset($_POST['submit2'])&&!empty($_POST['submit2'])){
    session_start();
    if(isset($_SESSION['Email'])) 
    {
        $session_email = $_SESSION["Email"];
    }
    else
    {
        $session_email = "error value";
    }
    
    $sql = "insert into public.courses(course_name,owner_email)values('".$_POST['course_name']."','".$session_email."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        
            echo "Data saved Successfully";
    }else{
        
            echo "Something Went Wrong";
    }
}


if(isset($_POST['logout'])&&!empty($_POST['logout'])){
    // session_start();
    // session_unset();
    // session_destroy(); 
    //  session_start();
    // if(isset($_SESSION['Email'])) 
    // {
    //     echo "False";
    // }
    // else
    // {
    //     echo "Successfully";
    // }
    header('Location: admin/logout_admin.php');

    }

if(isset($_POST['submit_enroll_courses'])&&!empty($_POST['submit_enroll_courses'])){
    session_start();
    // if(isset($_SESSION['Roll_no'])) 
    // {
    //     $session_email = $_SESSION["Email"];
    // }
    // else
    // {
    //     $session_email = "error value";
    // }
    
    $sql = "insert into public.enroll(course_id,emailaddress)values('".$_POST['selected_course']."','".$_SESSION['Email']."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        
            echo "Data saved Successfully";
    }else{
        
            echo "Something Went Wrong";
    }
}




pg_close($dbconn);  
?>  