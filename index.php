<?php include ('Config/setup.php');?>

<!DOCTYPE html>
<html>
	
	<head>
		
		<meta name="viewpont" content="width=device-width, initial-scale=1.0"/>
		<?php include ('Config/Css.php');	?>
		<?php include ('Config/js.php');	?>
			
			
	</head>
	<body>
	  <div id="wrap">
	  	
	  	<?php include ('Template/navigation.php');?>
	  		
		<div class="container">
				<h1> <?php echo $page['Header']; ?></h1>
				<p><?php echo $page['Body']; ?></p>
		</div>
	  
      </div>
      	<?php include ('Template/footer.php');?>
      
	</body>	
		
</html>