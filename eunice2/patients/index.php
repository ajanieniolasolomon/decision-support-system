

<body>

	<div id="wrapper">
    	
         <?php
session_start();

$title="index";
include "header.php";
 $db=connect() ;
 $sql="SELECT * FROM `disease` WHERE `username`='$_SESSION[username]' ";
 $result=$db->query($sql);


 ?>
     	
        <div id="line1"></div>
        <div id="page-content-wrapper">
		<div id="inside">
<table>

<tr><th>Date</th>
<th>id</th>
<th>status</th>
<th>recomm</th>

<th>Solution</th>
</tr>


 <?php
   while ($row=$result->fetch_assoc()){
       ?>
       
<?php
   echo "<tr><td>".$row['date']."</td><td>".$row['id']."</td><td>".$row['status']."</td><td>".$row['recomm']."</td><td><a href='result.php?id=$row[id]'>details</a></td></tr>";
   
   
   }
   


?>

                
</table>
</div>
</div>
</div>










<?php

include "footer.php";

?>