<html>
  <head><title>Hello</title></head>
  <body>
	<?php 
	  $firstname = "Belinda";
	  $age = 30;
	  $eyesColor = "brown";
	  $family = array(
		  0 => 'Michel',
		  1 => 'Claudine',
		  2 => 'Deborah',
		  3 => 'Michael',
		  4 => 'Morgane');
	  $hungry = true;
   	?>
	   
	   <p>Hi! My name is <?php echo $firstname?></p>
	   <p>I am <?php echo $age?> years old.</p>
       <p>My eyes are <?php echo $eyesColor?></p>
	   <p>The first person in my family is <?php echo $family[0]?></p>
	   <p>Am I hungry? <?php echo $hungry?><p>
  </body>
</html>
