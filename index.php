<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/> <!-- code này là phần cho mấy cái icon hoặc hình nhỏ -->		
		<link  rel="stylesheet" href="L_Hai/header.css"/>
		<link  rel="stylesheet" href="H_Tho/footer.css"/>
		<link rel="stylesheet" href="T_Tho/main.css">
	</head>
<body>
	<?php
		include 'L_Hai/header.php';
	?>
<main>
    <?php
	    include 'T_Tho/course.php';
		include 'T_Tho/lecturers.php';
	?>

</main>

<!--<footer>-->
	<?php
		include 'H_Tho/footer.php';
	?>
<!--</footer -->
</body>	
</html>