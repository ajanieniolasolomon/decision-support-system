

	<div id="wrapper">
    	<?php
		 include"header.php"
		 ?>
         
         <div id="line1"></div>
        <div id="page-content-wrapper">
		<div id="inside">
     	<?php
session_start();
$title="Attend to user";

$db=connect();
$sql="SELECT * FROM `disease` WHERE status='not_okay'";
$result=$db->query($sql);
//if($result->)
 while($row=$result->fetch_assoc()){
     $username=$row['username']
       ?>
        
        
        
        
        
       <table>

<tr><th>DATE</th>
<th>ID</th>
<th>STATUS</th>
<th>RECOMMEND BY</th>

<th>VIEW MORE</th>
</tr>
<?php
   echo "<tr><td>".$row['date']."</td><td>".$row['digno_id']."</td><td>".$row['status']."</td><td>".$row['recomm']."</td><td><a href='result.php?id=$row[digno_id]'>details</a></td></tr>";
   
   

   }
   ?>
         </table>
   <?php
   



?>


</table>
</div>
</div>
</div>





<?php


include "footer.php";

?>