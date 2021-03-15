<?php
if ($_POST['action'] == 'checkfilealreadyexist') { // file already exist check
   $filename = $_FILES['file']['name'];

   $location = '../admin/certificates/' . $filename;

   $response = 0;
   if (file_exists($location)) {
      $response = 1;
   }
   echo $response;
   exit;
}

if ($_POST['action'] == 'checkcoursefilealreadyexist') { // Course file already exist check
   $filename = $_FILES['file']['name'];

   $location = '../admin/uploads/' . $filename;

   $response = 0;
   if (file_exists($location)) {
      $response = 1;
   }
   echo $response;
   exit;
}

if ($_POST['action'] == 'uploadfile') {

if (isset($_FILES['file']['name'])) {  // upload file
   $filename = $_FILES['file']['name'];
   $course_id = $_POST['course_id'];
   $emailaddress = $_POST['emailaddress'];

   $location = '../admin/certificates/' . $filename;

   $response = 0;
   if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
      $response = 1;
      $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
      pg_query(sprintf("UPDATE public.enroll SET certificate_generated=TRUE, certificate='" . $filename . "' WHERE course_id =" . $course_id . " AND emailaddress='" . $emailaddress . "';"));
      pg_close($db);
   }

   echo $response;
   exit;
}
echo 0;
}

?>