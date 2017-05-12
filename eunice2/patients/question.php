<?php
$title="index";
/*include "head.php";*/
if (isset($_POST['submit'])){



session_start();
$db=connect();
$sql="update info set status=3 where username='$_SESSION[username]'";
 if($db->query($sql)===TRUE){
header('Location:test.php');
    }
   
}
?>

<script>
function valid(){

var ab=document.forms['form']['ab'].value;
var cd=document.forms['form']['cd'].value;
var ef=document.forms['form']['ef'].value;
var gh=document.forms['form']['gh'].value;
var bo=document.forms['form']['bo'].value;
var ij=document.forms['form']['ij'].value;
var ys=document.forms['form']['y/s'].value;
var sy=document.forms['form']['s/y'].value;

if (bo=='yes'&& y/s=='yes' )
{
return true
}
else if(bo=='' && y/s='yes'){
    alert('fill all');
    return false;
}
else{
    alert('fill all');
    return false;
}


}




</script>



<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/simple-sidebar.css">
    <link rel="stylesheet" href="../css/eunice.css">
    
    
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
	
</head>
<body>

	<div id="wrapper">
    	<?php
		 include"header.php"
		 ?>
     	
        <div id="line1"></div>
        <div id="page-content-wrapper">
		<div id="inside">


<br />

<br />
<h1> ANSWER ALL QUESTIONS</h1>
<div id="cover">
<form name="form" onclick="return valid()">
<h2>How often do you see your healthcare provider in a month</h2><select name="ab" id="box">
<option>None</option>
<option value="a">1-6 month</option>
<option value-"b">other</option>
</select><br />

<h2>How often do you see your dentist in a month</h2><select name="cd" id="box">

<option>None</option>
<option value="c">1-6 month</option>
<option value="d">other</option>
</select><br />

<h2>how often do you see your foot exam in a month</h2><select name="ef" id="box">
<option>None</option>
<option name="e">1-6 month</option>
<option value="f">other</option>
</select><br />



<h2>how often do you see your doctor in a month</h2><select name="gh" id="box">
<option>None</option>
<option value="g">1-6 month</option>
<option value="h"> other</option>
</select><br />


<h2>is it easy to get appointment with a care provider(doctor)</h2><select name="bo" id="box">
<option>None</option>
<option value="no">no</option>
<option value="yes">yes</option>
</select><br />



<h2>how many times in a day , you check your blood sugar</h2><select name="ij" id="box">
<option>None</option>
<option value="i">1</option>
<option value="j">1 0r more</option>
<option value="k">None</option>
</select><br />



<h2>what change in life do you experience due to diabetes</h2>
<textarea name="change" id="ta">




</textarea><br />
<h2>Do you feel any difficulty to visit doctor</h2> <select name="y/s" id="box">

<option value="yes">yes</option>
<option value="no">no</option>
</select><br />



<h2>Do you feel any problem in managing your daily life</h2> <select name="s/y" id="box">

<option value="yes">yes</option>
<option value="no">no</option>
</select><br />


<input name="submit" type="submit" value="SUBMIT" id="btn1">
</form>
</div>

</div>
</div>
</div>


<?php

include "footer.php";

?>