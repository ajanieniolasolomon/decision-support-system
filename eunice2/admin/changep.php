<?php
$title="change.php";
/*include "head.php";*/
 session_start();

?>
<script>
function vaildate(){
var current=document.forms['form']['current'].value;
var old=document.forms['form']['current'].value;
if (current != old){
    alert('password dont match');
    return false;
}
else if(current==''){
    alert("empty");
    return false;

}
else if(old==''){
    alert("empty");
    return false;

}
else
return true;


}




</script>


<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    
    
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/simple-sidebar.css">
    <link rel="stylesheet" href="../css/eunice.css">
    
    
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
	
</head>
<body>

	<div id="wrapper">
     	<?php
			include("header.php")
        ?>
        <div id="line1"></div>
        <div id="page-content-wrapper">
		<div id="inside">



			<h1>CHANGE PASSWORD</h1>
			<form name="form" method="post" action="changep.php" onclick="return vaildate() ">

				<input name="current" type="password" id="box" placeholder="CURRENT PASSWORD" /><br/>

				<input name="old" type="password" placeholder="NEW PASSWORD" id="box" /><br/>
				<input name="submit" type="submit" id="btn1" value="SUBMIT">

 


		</form>

	</div>
	</div>
	</div>




<?php
if(isset($_POST['submit'])){
    $current=$_POST['current'];
    $old=$_POST['old'];
    $db=connect();
    $sql="update info set password='$old' where username='$_SESSION[username]'";
    if($db->query($sql)===TRUE){
 echo "succesfull";
    }
    else {
        echo "unable to complete";
    }

}
include "footer.php";



?>