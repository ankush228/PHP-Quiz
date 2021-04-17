

<?php 

include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>
<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body background="img5.png">

	<header>
		<div style="margin-top:50px; margin-left:150px;">
			<p style="font-size: 40px;color:#DAF7A6;"><b>PHP Quiz</b></p>
		</div>
		<hr>
	</header>

	<main>
			<div style="margin-left:300px; color:#F0F3F4; font-size:18px;">
				<h2>Test Your PHP Knowledge</h2>
				<p>
					This is a multiple choise quiz to test your PHP Knowledge.
				</p>
				<ul>
					<li><strong>Number of Questions:</strong><?php echo $total_questions; ?> </li>
					<li><strong>Type:</strong> Multiple Choise</li>
					<li><strong>Estimated Time:</strong> <?php echo $total_questions*1.5; ?></li>

				</ul>
					<div style=" background:#5DADE2;border:none; color:white; font-family:georgia; font-size:17.5px; height: 25px; width: 100px; padding-left:20px; padding-right:20px; padding-top:20px; padding-bottom:20px; border-radius:5px; position:relative; left: 10px; top: 10px;border-style:solid;border-color:black">
					<a href="question.php?n=1"><b>Start Quiz</b></a></div>
					<div style=" background:#5DADE2;border:none; color:white; font-family:georgia; font-size:19px; height: 25px; width: 100px; padding-left:20px; padding-right:10px; padding-top:20px; padding-bottom:20px; border-radius:5px; position:relative; left: 200px; top: -55px;border-style:solid;border-color:black;margin-top:-6px; ">
					<a href="signin.php"><b>Logout</b></a></div>
					
			</div>

	</main>


	
