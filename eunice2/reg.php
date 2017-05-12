<?php    
$title="Registration";
include "head.php";
if(isset($_POST['submit'])){
$username=$_POST['username'];
$lastname=$_POST['lastname'];
$firstname=$_POST['firstname'];
$password=$_POST['password'];
$password1=$_POST['password1'];
$sex=$_POST['sex'];
$country=$_POST['country'];
$date=$_POST['date'];
$bg=$_POST['bg'];
$occ=$_POST['occ'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$stauts=1;
if($password1==$password){
$db=connect();
$sql="insert into info values('','$firstname','$lastname','$username','$password','$sex','$bg','$country','$occ','$address','$email','$phone','$stauts')";
if($db->query($sql)==TRUE){
    $_GET['mess']="sucessful";
}
else{
     $_GET['mess']="unable to complete";
}}
else{
     $_GET['mess']="password dont match";
}
}

?>
<script>
function validateForm() {
        var lastname = document.forms["myForm"]["lastname"].value;
        var firstname = document.forms["myForm"]["firstname"].value;
        var password = document.forms["myForm"]["password"].value;
         var password1 = document.forms["myForm"]["password1"].value;
        var sex = document.forms["myForm"]["sex"].value;
        var dob = document.forms["myForm"]["date"].value;
        var bg = document.forms["myForm"]["bg"].value;
        var occ = document.forms["myForm"]["occ"].value;
        var address = document.forms["myForm"]["address"].value;
        var phone = document.forms["myForm"]["phone"].value;
       
    if (lastname == "" && firstname == "" && password=="" && password1=="" && dob== "" && address=="" && phone =="" ) {
        alert("fill all");
    
        return false;
    }
    else
    return true;
   
}
</script>
<?php
if(isset($_GET['mess'])){
    echo $_GET['mess'];
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
	<div id="center1">
		<h1>REGISTRATION</h1>
        <h2>Please fill out the boxes below</h2>
		<form name="myForm" action="reg.php" method="post" onsubmit="validateForm()">
			<input name="lastname" type="text" id="box" placeholder="LAST NAME">			
			<input name="firstname" type="text" id="box" placeholder="FIRST NAME">
            <input name="username" type="text" id="box" placeholder="USERNAME" >
			<input name="password" type="password" id="box" placeholder="PASSWORD">
			<input name="password1" type="password" id="box" placeholder="RE-TYPE PASSWORD">
			<select name="sex" id="box">
            	<option value="" selected>SEX</option>
  				<option value="male">Male</option>
  				<option value="female">Female</option>
			</select>
			<input name="country" type="text" id="box" placeholder="COUNTRY">
			<input name="date" type="date" id="box" placeholder="DATE">
			<select name="bg" id="box">
            	<option value="" selected>BLOOD GROUP</option>
  				<option value="O">O</option>
  				<option value="A">A</option>
   				<option value="B">B</option>
    			<option value="AB">AB</option>
     		</select>
			<input name="occ" type="text" id="box" placeholder="OCCUPATION">
			<textarea name="address" type="text" placeholder="ADDRESS" id="ta"></textarea>
			<input name="email" type="text" id="box" placeholder="E-MAIL">
			<input name="phone" type="text" id="box" placeholder="PHONE NUMBER">


				<input type="submit" name="submit" value="REGISTER" id="btn1" />
        </form>
	</div>




<?php

include "footer.php";

?>