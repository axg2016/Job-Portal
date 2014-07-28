<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_job = "localhost";
$database_job = "job";
$username_job = "root";
$password_job = "";
$job = mysql_pconnect($hostname_job, $username_job, $password_job) or trigger_error(mysql_error(),E_USER_ERROR); 
?>