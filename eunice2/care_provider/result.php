<div id="wrapper">
<?php    
session_start();
$title="result";
include "header.php";



if (isset($_GET['id'])){
$me=$_GET['id'];
$db=connect();
$sql="SELECT * from  disease WHERE digno_id='$me'";
$result=$db->query($sql);
if($row=$result->fetch_assoc()){
$_SESSION['id']= $row['id'];
$_SESSION['digno_id']=$row['digno_id'];
}
  
}


else{
   echo "error";
}
if(isset($_POST['submit'])){
$id=$_POST['id'];
echo "hello";
$db1=connect();
$sql1="update disease set `id`='$id',recomm='care_provider',status='okay'where digno_id='$_SESSION[digno_id]'";
$result=$db1->query($sql1);
if($result===TRUE){

header('Location:index.php');

}
else{
    echo "erro";
}



}
         
?>

     <div id="line1"></div>
        <div id="page-content-wrapper">
		<div id="inside">

<form name="form" method="post" action="result.php">
<h2>Enter Solution Number:</h2>
<input name="id" id="box" value="<?php echo $_SESSION['id'];?>"></input>
<input name="submit" value="SUBMIT" type="submit" id="btn1">


</form>
<?php





include "footer.php";


?>