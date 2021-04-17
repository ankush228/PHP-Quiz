<?php 

session_start();

?>

<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background="img5.png">

	<header>
		<div style="margin-top:50px; margin-left:150px;">
			<p style="font-size: 40px;color:#DAF7A6">PHP Quiz</p>
		</div>
	</header>

	<main>
			<div style="margin-left:300px;font-size:20px;color:#F0F3F4;">
				<h2>Your Result</h2>
				<p>Congratulations! You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
				<?php unset($_SESSION['score']); ?>
			<div style=" background:#5DADE2;border:none;color:white; font-family:georgia; font-size:17px; height: 25px; width: 100px; padding-left:20px; padding-right:20px; padding-top:20px; padding-bottom:20px; border-radius:5px; position:relative; left: 10px; top: 10px;border-style:solid;border-color:black">
					<a href="question.php?n=1"><b>Start Again</b></a></div>
					<div style=" background:#5DADE2;border:none; color:white; font-family:georgia; font-size:19px; height: 25px; width: 100px; padding-left:20px; padding-right:10px; padding-top:20px; padding-bottom:20px; border-radius:5px; position:relative; left: 200px; top: -55px;border-style:solid;border-color:black;margin-top:-6px; ">
					<a href="signin.php"><b>Logout</b></a></div>	
			</div>
			
	</main>


	








</body>
</html>