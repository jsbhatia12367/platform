<?php
include 'userinfo_user.php';
session_start();
$db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
if ($_POST['action'] == 'call_this') {
  pg_query(sprintf("UPDATE public.enroll SET completed = true WHERE course_id =" . $_POST['course_id'] . " AND emailaddress='" . $_POST['emailaddress'] . "' ;"));
}

if ($_POST['action'] == 'enroll_this') {
  pg_query(sprintf("insert into public.enroll(course_id,emailaddress) values(" . $_POST['course_id'] . ",'" . $_SESSION['EmailStudent'] . "');"));
  $sql = pg_query(sprintf("select currently_enrolled from courses where course_id = " . $_POST['course_id']));
  $currently_enrolled = $sql['currently_enrolled'] + 1;
  pg_query(sprintf("UPDATE public.courses SET currently_enrolled=" . $currently_enrolled . " WHERE course_id=" . $_POST['course_id']));
  pg_query(sprintf("DELETE FROM public.cart where emailaddress='" . $_SESSION['EmailStudent'] . "' AND course_id='".$_POST['course_id']."';"));
}

if ($_POST['action'] == 'add_to_cart') {
  pg_query(sprintf("insert into public.cart(course_id,emailaddress) values(" . $_POST['course_id'] . ",'" . $_SESSION['EmailStudent'] . "');"));
}

if ($_POST['action'] == 'enroll_all') {
  $sql = pg_query(sprintf("SELECT * FROM public.cart where emailaddress='" . $_SESSION['EmailStudent'] . "';"));
  while ($row = pg_fetch_assoc($sql)) {
    pg_query(sprintf("insert into public.enroll(course_id,emailaddress) values(" . $row['course_id'] . ",'" . $_SESSION['EmailStudent'] . "');"));
    $sql2 = pg_query(sprintf("select currently_enrolled from courses where course_id = " . $row['course_id']));
    $currently_enrolled = $sql2['currently_enrolled'] + 1;
    pg_query(sprintf("UPDATE public.courses SET currently_enrolled=" . $currently_enrolled . " WHERE course_id=" . $row['course_id']));
    pg_query(sprintf("DELETE FROM public.cart where emailaddress='" . $_SESSION['EmailStudent'] . "' AND course_id='".$row['course_id']."';"));
  }

}

if ($_POST['action'] == 'remove_from_cart') {
  $sql = pg_query(sprintf("DELETE FROM public.cart where emailaddress='" . $_SESSION['EmailStudent'] . "' AND course_id='".$_POST['course_id']."';"));
}

if ($_POST['action'] == 'delete_course_from_my_course') {
  $sql = pg_query(sprintf("DELETE FROM public.enroll where emailaddress='" . $_SESSION['EmailStudent'] . "' AND course_id='".$_POST['course_id']."';"));
  $sql2 = pg_query(sprintf("select currently_enrolled from courses where course_id = " . $_POST['course_id']));
  $currently_enrolled = $sql2['currently_enrolled'] - 1;
  pg_query(sprintf("UPDATE public.courses SET currently_enrolled=" . $currently_enrolled . " WHERE course_id=" . $_POST['course_id']));
}







?>