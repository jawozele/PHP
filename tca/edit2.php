<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php

// Connect to the database

$conn = new PDO ("mysql:host=localhost;dbname=tca20;", "root", "");

// Q17. Complete edit2.php to actually change the option's description
//  in the database
$id=$_POST['id'];
$des=$_POST['description'];
// Q18 Modify your answer so that access is restricted to ONLY the member
// of staff who teaches this option.
$conn->query("update uh_options set description= '$des' where option_id=$id ");

echo "Opton successfully updated";
echo "<br><a href='index.php'>Home</a> ";
?>
</body>
</html>
