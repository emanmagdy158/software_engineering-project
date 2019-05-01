<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Play general Quiz</title>
</head>
<body>
<div id="container">
<h1 align="center"> PLAY THE Quiz !</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$db="quiz-app";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully"."<br>";

$sql = "SELECT quizID,question,choice1,choice2,choice3,answer FROM quiz";
$result = mysqli_query($conn, $sql);



?>

<?php 
$choices = "SELECT quizID,question,choice1,choice2,choice3,answer FROM quiz";
//var_dump($ans_array);
$ans_array =array($row->choice1,$row->choice2,$row->choice3,$row->answer);
shuffle($ans_array);?>
<?php if (mysqli_num_rows($result) > 0) {?>
    
   <?php while($questions = mysqli_fetch_assoc($result)) { 
      echo  $questions["quizID"]. " question: " . $questions["question"]. "<br>";   
	  echo  $row->quizID.$row->question ?>
<input type="radio" name="<?php echo $row->quizID;?>" value="<?php echo $ans_array[0];?> "> <?php echo $ans_array[0]."<br>";?> 
<input type="radio" name="<?php echo $row->quizID;?>" value="<?php echo $ans_array[1];?> "> <?php echo $ans_array[1]."<br>";?>
<input type="radio" name="<?php echo $row->quizID;?>" value="<?php echo $ans_array[2];?> "> <?php echo $ans_array[2]."<br>";?>
<input type="radio" name="<?php echo $row->quizID;?>" value="<?php echo $ans_array[3];?> "> <?php echo $ans_array[3]."<br>";?>

   <?php  }?>
   <input type="submit" formaction="addQuiz.php" >
<?php } else {
    echo "0 results";
}
mysqli_close($conn);

?>



</div>
</body>
</html>
<?php /*foreach($questions as $row) {*/ ?>