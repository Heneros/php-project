
<?php
	ob_start();
	session_start();

define("DSN", "mysql:host=localhost;dbname=slotify");
define("USERNAME", "root");
define("PASSWORD", "");

$options = array(PDO::ATTR_PERSISTENT => true );


try{
$con = new PDO(DSN,  USERNAME, PASSWORD, $options);

$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "connection successful";

}catch(PDOException $ex){
  echo "A database error occured ".$ex->getMessage();
}



?>