<?php
$title="login";
include "head.php";
session_start();
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $db=connect();
    $sql="select id,username,password,status from info where username='$username' and password='$password'";
    $result=$db->query($sql);
   if ($row=$result->fetch_assoc()){
           $_SESSION['username']=$username;
           $_SESSION['password']=$password;
           $_SESSION['id']=$row['id'];
           $status=$row['status'];
           if($status==0){
                header("Location:admin/index.php");
           }
           elseif ($status==1){
     header("Location:care_provider/index.php");
           }
          
            else{
                 header("Location:patients/index.php");
            }   
            
       
        
        }
        else{
            $_GET['mess']='incorrect information';
        }

}


?>
<script>
function vaildate()
{
var username=document.forms['myForm']['username'].value;
var password=document.forms['myForm']['password'].value;
if(username=="" && password== ""){
    alert("pls fill all");
    return false;
}
else if(username==''){
    alert('fill username');
    return false;
}
else if(password==''){
    alert('enter password');
    return false;
    
}
else
return true;

}



</script>
<?php
if(isset($_GET['mess'])){
    echo "<h1>".$_GET['mess']."</h1>";
}




?>

<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/eunice.css">
    <link rel="stylesheet" href="css/back.css">
    
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
	
</head>
<body>
	<div id="center">
    	<div id="form">
			<h1>login</h1>
			<form name="myForm" method="post" action="login.php" onsubmit="return vaildate()">
			<input name="username" type="text" id="box" placeholder="USERNAME"><br />
			<input name="password" type="password" id="box" placeholder="*****"><br />
			<input type="submit" name="submit" value="LOGIN" id="btn1">
			</form>
    	</div>
	</div>

<?php


include "footer.php";


?>