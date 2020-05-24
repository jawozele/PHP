<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php


// Connect to the database

$conn = new PDO ("mysql:host=localhost;dbname=tca20;", "root", "");

// Q13. Complete question2.php so that it:
// - reads the option ID and the question from the form on question1.php;
// - adds an entry to the uh_questions table containing the option ID, 
//   the question, and the user who asked the question. 
$id=$_POST['id'];
$question=$_POST['question'];
$username=$_SESSION["uh_user"];
$conn->query("insert into uh_questions values(NULL,'$username',$id,'$question')");
///print_r($conn->errorInfo());
echo "Question inserted";

echo "<br><a href='index.php'>Home</a> ";
?>
</body>
</html>
