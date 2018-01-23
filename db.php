
<?php  
 
$db_host = "localhost"; //Database host

$db_username = "root";  //Database user name 

$db_pass = "password";  //Database password 

$db_name = "ajuz";     //Database Name 

mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("no database");   

   //website visitors ip address viewer 
   //Author Ajmal ajuzz
  //script by ajmalajuzz
 //https://github.com/ajmalajuz/
?>