<?php
$db_host = "localhost";
$db_name = "test";
$db_user = "joe";
$db_pass = "123";

try{

    $db_con = new PDO("mysqli:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
	//$con = mysqli_connect("127.0.0.1","root","pass","your_database");
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo $e->getMessage();
}

?>