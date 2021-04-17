<?php 


	include 'db.php';
	 
	//Set Question Number
	$number = $_GET['n'];

	//Query for the Question
	$query = "SELECT * FROM questions WHERE question_number = $number";

	// Get the question
	$result = mysqli_query($connection,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$query = "SELECT * FROM options WHERE question_number = $number";
	$choices = mysqli_query($connection,$query);
	// Get Total questions
	$query = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
 	
	
?>
<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background="img.jpg">

	<header>
		<div style="margin-top:50px; margin-left:150px;">
			<p style="font-size: 40px;color:#DAF7A6;"><b>PHP Quiz</b></p>
			
		</div>
	</header>
	<br>
	<main>
			<div style="margin-left:300px;">
				<div style="font-size:25px; border-style:solid;margin-right:600px;padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;">Question <?php echo $number; ?> of <?php echo $total_questions; ?> </div>
				<p style="font-size:20px;"><?php echo $question['question_text']; ?> </p>
				<form method="POST" action="process.php">
					
					<ul>
						<?php while($row=mysqli_fetch_assoc($choices)){ ?>
						<li><input type="radio" name="choice" required=""value=" <?php echo $row['id']; ?>"><?php echo $row['coption']; ?></li>
						<?php } ?>
						
						
					</ul>
				
					<input type="hidden" name="number" value="<?php echo $number; ?>">
					<input style="background:#3AD17D; font-size:18px; padding:10px 10px 10px 10px;border-style:solid;border-color:black"; type="submit" name="submit" value="Submit">


				</form>
				

			</div>
			<div  style="background:#3AD17D; font-size:18px; padding-left:19px;padding-right:10px;padding-top:9px;padding-bottom:6px;margin-left:420px;margin-right:840px;margin-top:-58.9px;border-style:solid">
			<a href="main.php"><b>Exit</b></a></div>
	</main>


	








</body>
</html>