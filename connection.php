<?php
$server_name="localhost";
$username="root";
$password="";
$connection=mysql_connect($server_name,$username,$password);
//if($connection==true)
if($connection)
{
$mydb=mysql_select_db("connectionpractice");
if($mydb)
{
//echo "conneted";
return true;

}
else
{
echo "database  connection error";
return false;
}
}
else
{
echo "server connection error";
return false;
}

?>