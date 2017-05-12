








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
$title="test";
include "header.php";


session_start();
if (isset($_POST['submit'])){
$a=$_POST['eh'];
$b=$_POST['fu'];
$c=$_POST['fbo'];
$d=$_POST['bw'];
$e=$_POST['wl'];
$f=$_POST['bo'];
$g=$_POST['if'];
$h=$_POST['is'];
$i=$_POST['pwh'];
$j=$_POST['bv'];
$k=$_POST['fi'];
$db=connect();
$date=Date("Y/m/d");
$status1='okay';
$status2='not_okay';
$diabete1='type1';
$diabete2='type2';	

//echo $date;

if($a=='yes' and $b=='yes' and $c=='yes' and $d=='yes'and $e=='yes' and $f=='yes'){



$sql="insert into disease values('','$_SESSION[username]','$date','$status1','system','1')";
if($db->query($sql)===TRUE){
     $_GET['mess']="patient".$_SESSION['username']." you have".$diabete1." diabete";
}


}
else if($a=='yes' and $b=='yes' and $c=='yes' and $d=='yes'and $e=='yes' and $f=='yes'and $g=='yes' and $h=='yes' and $i=='yes' and $j=='yes'and  $k=='yes'){
   
$sql="insert into disease values('','$_SESSION[username]','$date','$status1','system','2')";
if($db->query($sql)===TRUE){
       $_GET['mess']= "patient ".$_SESSION['username']." you have".$diabete2." diabete";
}
}
else if($a=='yes' and $b=='yes' and $c=='yes' and $d=='yes'and $e=='yes' and $f=='yes' or $g=='yes' or $h=='yes' or $i=='yes' or $j=='yes'or $k=='yes'){

$sql="insert into disease values('','$_SESSION[username]','$date','$status1','system','2')";
if($db->query($sql)===TRUE){
    $_GET['mess']= "patient ".$_SESSION['username']." you have".$diabete1." diabete";
}
}
 else if ($a=='yes' or $b=='yes' or $c=='yes' or $d=='yes'or $e=='yes' or $f=='yes'or $g=='yes' or $h=='yes' or $i=='yes' or $j=='yes'or  $k=='yes'){

$sql="insert into disease values('','$_SESSION[username]','$date','$status2','system','3')";
if($db->query($sql)===TRUE){
   $_GET['mess']=$_SESSION['username']."have been recommended to a doctor ";
}
 }

else{
    $_GET['mess']="$_SESSION[username] is  okay";
}
}






?>

  </script>   	
     

<div id="line1"></div>
        <div id="page-content-wrapper">
		<div id="inside">


<br />

<br />
<h1> ANSWER ALL QUESTIONS</h1>
<div id="cover">
<form name="form" method="post" action="test.php">
<h2>Excess hunger</h2><select name="eh" id="box">
<option value="yes">yes</option>
<option value="no">no</option>
</select><br />

<h2>Frequent urination</h2><select name="fu" id="box">


<option value="yes">yes</option>
<option value="no">no</option>

</select><br />

<h2>Fruity breath odor</h2><select name="fbo" id="box">

<option value="yes">yes</option>
<option value="no">no</option>
</select><br />



<h2>Bedwetting</h2><select name="bw" id="box">

<option value="yes">yes</option>
<option value="no">no</option>
</select><br />

<h2>Weight loss</h2><select name="wl" id="box">

<option value="no">no</option>
<option value="yes">yes</option>
</select><br />



<h2>Being overweight</h2><select name="bo" id="box">
<option value="yes">yes</option>
<option value="no">no</option>
</select><br />


<h2>Increased fatigue</h2>  <select name="if" id="box">

<option value="yes">yes</option>
<option value="no">no</option>
</select><br />



<h2>Itchy skin</h2> <select name="is" id="box">

<option value="yes">yes</option>
<option value="no">no</option>
</select><br />

<h2>Poor wound healing</h2> <select name="pwh" id="box">

<option value="yes">yes</option>
<option value="no">no</option>
</select><br />


<h2>Blurred vision</h2><select name="bv" id="box">

<option value="yes">yes</option>
<option value="no">no</option>
</select><br />

<h2>Frequent infections</h2><select name="fi" id="box">

<option value="yes">yes</option>
<option value="no">no</option>
</select><br />


<input name="submit" type="submit" value="SUBMIT" id="btn1">
</form>
</div>
<?php
if (isset($_GET['mess'])){
    echo "<h5>".$_GET['mess']."</h5>";
}



?>

</div>
</div>
</div>

<?php

include "footer.php";

?>