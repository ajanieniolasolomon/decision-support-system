<?php
$title="add admin";
/*include "head.php";*/


?>
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




			<h1>ADD ADMINISTRATOR</h1>
			<form name="form" method="post" action="add.php">
				<?php
					$db=connect();
					$sql="select username from info";
					$result=$db->query($sql);

				?>
				<select name="username" id="box">
  				<option value="">SELECT USER</option>
  				<?php
  					while($row = $result->fetch_array()){


				?>
  				<option value="<?php echo $row['username'];  ?>"><?php echo $row['username']; ?></option>
  				<?php  } ?>
				</select><br/>
				<input type="submit" name="submit" id="btn1" value="SUBMIT" >



			</form>


		</div>
		</div>
		</div>


<?php
if(isset($_POST['submit'])){
    $username=$_GET['username'];
    $db1=connect();
    $sql1="update info set status=1 where username='$username'";
 if ($db1->query($sql1) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: ";
}


}

include "footer.php";


?>