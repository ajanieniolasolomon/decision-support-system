<?php  

$title="admin/home";
/*include "head.php";*/

?>
<script>
function validate(){
    var search=document.forms['form']['username'].value;
  if(search==''){
  alert('empty');
  return false;


}
else 
return true;
}


</script>

<div id="wrapper">
     	<?php
		 $title="admin/home";
			include("header.php")
        ?>
        <div id="line1"></div>
        <div id="page-content-wrapper">
		<div id="inside">
			<h1>SEARCH FOR PATIENTS</h1>
			<form name="form" method="post" action="index.php" onsubmit='return validate()'>
				<input name="username" type="text" id="box" placeholder="SEARCH FOR PATIENT/CARE PROVIDER">
				<input name="submit" type="submit" id="btn" value="Search">
        	</form>
			<?php
				if(isset($_POST['submit'])){
  				$username=$_POST['username'];
  				$db=connect();
  $sql="SELECT * FROM `info` WHERE username='$username'";
  				$result=$db->query($sql);
  				if($result->num_rows > 0){
    		?>
			<table>
				<tr>
					<th>name</th>
					<th>Blood group</th>
					<th>Phone no</th>
					<th>sex</th>
					

				</tr>



    			<?php
    			while($row = $result->fetch_assoc()) {
       echo "<tr>  <td>".$row['username']."</td><td>".$row['Blood_groups']."</td><td>".$row['phone_number']."</td><td>".$row['sex']."</td></tr>";
    }
     
   				 ?>
 			</table>
    		<?php
   
  				}


				else{
    				echo "no result found";
				}

				}

			?>



			</div>
			</div>
			</div>


			<?php

				include "footer.php";

			?>