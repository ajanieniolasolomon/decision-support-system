

<!doctype html>
<html>
<head>


<?php 




include ('config/connection.php'); ?>
		
		
	<meta charset="utf-8">
		<link href="../css/bootstrap.min.css"rel="stylesheet">
 		
        
 		<script src="../js/jquery.js"></script>
 		<script src="../js/bootstrap.min.js"></script>
        <link href="../css/simple-sidebar.css" rel="stylesheet">
        <link href="../css/eunice.css" rel="stylesheet">
        
        
        
</head>

<body>

        <!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<div align="left" class="top">
       			<!--<a href="../../home.php"><img src="icons/logo1.png" width="190" /></a>-->
      		</div>
      
    		<a href="index.php"><li> &nbsp; &nbsp; Patients Records</li></a>
            <a href="add.php"><li> &nbsp; &nbsp; Add Diagnostics Base</li></a>
            
            <a href="loggout.php"><li>&nbsp; &nbsp; Log Out</li></a>
            
            
		</ul>
	</div>
        <!-- /#sidebar-wrapper -->
        
    <a href="#meu-toggle" class="btn" id="menu-toggle"></a>
   
</body>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</html> 