<?php
function connect(){ header("Access-Control-Allow-Origin: *");
$db=new mysqli("localhost","root","","ds");//function that connect php the database
return $db;

}

?>