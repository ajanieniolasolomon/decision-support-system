<div id="wrapper">

<?php    
session_start();
$title="result";
include "header.php";
?>


<div id="line1"></div>
        <div id="page-content-wrapper">
		<div id="inside">


<?php

if (isset($_GET['id'])){
$db=connect();
$sql="SELECT `name`, `id`, `solution` FROM `di` WHERE id='$_GET[id]'";
$result=$db->query($sql);
while ($row=$result->fetch_assoc()){
echo "NAME:",$row['name']."<br />SOLUTION:".$row['solution'];;

}

}


else{
    header("Location:./error.php");
}

         
?>

<?php

include "footer.php";


?>