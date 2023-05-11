<?php
$dbMechine="localhost";
$userName="root";
$password="";
$dbName="ecommarce_webiste";
$con="";

try{

    $con=mysqli_connect($dbMechine, $userName, $password, $dbName);
    echo " database is connected";
}catch(mysqli_sql_exception)
{
   echo "database is not connected";
}
?>