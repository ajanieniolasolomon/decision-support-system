<?php
$title="view.php";
include "head.php";
if (isset($_GET['id'])){
    $id=$_GET['id'];
$db=connect();
$sql="select * from patient_history where hist_id='$id'";
$result=$db->query($sql);
if($row = $result->fetch_assoc()){

    echo $row['id'];
}
else{
    echo "error";
}




}


?>





<?php

include "footer.php";

?>