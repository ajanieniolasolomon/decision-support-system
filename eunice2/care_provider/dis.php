

<?php    
session_start();
$title="result";
include "header.php";



if (isset($_GET['id'])){
  $me=$_GET['id'];
$db=connect();
$sql="SELECT * from  di WHERE id='$me'";
$result=$db->query($sql);
if($row=$result->fetch_assoc()){
$_SESSION['id']= $row['id'];
$_SESSION['name']=$row['name'];
$_SESSION['solution']=$row['solution'];
}
  
}


else{
   echo "error";
}
         
?>
<div id="wrapper">
     <div id="line1"></div>
        <div id="page-content-wrapper">
		<div id="inside"

<form name="form" method="post" action="result.php">
<h2>Enter Solution Number:</h2>
<input name="id" id="box" value="<?php echo $_SESSION['id'];?>" readonly></input>
<input name="id2" id="box" value="<?php echo $_SESSION['name'];?>" readonly></input>
<textarea  name="solu" id="ta"  value=""><?php echo $_SESSION['solution'];?></textarea>

<input name="submit" value="SUBMIT" type="submit" id="btn1">


</form>
<?php


if(isset($_POST['submit'])){
$solu=$_POST['solu'];
$id=$_POST['id'];
$db1=connect();
$sql1="update di set `solution`='$solu'   where id='$id'";
$result=$db1->query($sql1);
if($result===TRUE){
echo "medical record update";
header('Location:index.php');

}
else{
    echo "erro";
}
}
?>