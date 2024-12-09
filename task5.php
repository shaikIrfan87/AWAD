<?php
ini_set("display_errors",1);
ini_set("log_errors",1);
ini_set("error_log","temp/error_log.php");
$x=5;
$y=0;
if($y==0)
{
trigger_error("Cannot divide by zero",E_USER_ERROR);
}
try
{
$value=$x%$y;
}
catch(Exception $e)