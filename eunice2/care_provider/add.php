<?php

?>

<script>
function vaild(){

var case=document.forms['form']['case'].value;
var solution=document.forms['form']['solution'].value;
if(case=='' ){
    alert("case is empty");
return false;

}
else if(solution ==''){
    alert("solution is empty ");
    return false;

}
else if(solution=='' && case==''){
 alert("solution is empty ");
    return false;

}
else
return true;



}




</script>

<div id="wrapper">
    <?php 
        session_start();
$title="insert";
    include "header.php" ;


if (isset($_POST['submit'])){
$name=$_POST['case'];
$solution=$_POST['solution'];
$db=connect();
$sql="INSERT INTO `di`(`name`, `id`, `solution`) VALUES ('$name','','$solution')";
if($db->query($sql)===TRUE){
    $_GET['mess']="successful ";
}
else{
      $_GET['mess']="error";
}

}

    
    
    
    ?>
       <div id="line1"></div>
        <div id="page-content-wrapper">
		<div id="inside">

<form name="form" method="post" action="add.php" onclick="return vaild()">
<input name="case" type="text" id="box" placeholder="NAME"><br />
<textarea name="solution" type="text" id="ta" placeholder="SOLUTION"></textarea>
<input type="submit" name="submit" id="btn1" value="SUBMIT">


</form> 


<?php
if(isset($_GET['mess'])){
    echo "<h4>".$_GET['mess']."</h4>";
}

?>
<?php
$db=connect();
$sql="select * from di ";
$result=$db->query($sql);

?>
 <table>

<tr><th>DATE</th>
<th>ID</th>
<th>STATUS</th>

</tr>
<?php
while($row=$result->fetch_assoc()){

?>

  
      

<?php
echo "<tr><td>".$row['name']."</td><td>".$row['id']."</td><td><a href='dis.php?id=$row[id]'>details</a></td></tr>";
   
}

?>
</table>
</div>
</div>
</div>


<?php

include "footer.php";

?>