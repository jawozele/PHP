<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php

// Connect to the database
 if (!isset($_SESSION["uh_user"])) {
      if (isset($_SESSION["uh_utype"])!=1) {
          echo "You are not allowed to visit this page";
          echo "<br><a href='index.php'>Home</a> ";
          exit();
      }
 }

$conn = new PDO ("mysql:host=localhost;dbname=tca20;", "root", "");

// Q16 continued. Complete edit1.php so that it shows a form allowing
// the administrator to alter the description of the option. 
// The current description must be included in
// the form. The script must be accessible to staff only.
// The form should send its details to edit2.php.
$id=$_GET['id'];

echo "<form action='edit2.php' method='post'>";
echo "Description: ";
echo "<input type='hidden' name='id' value='$id'  />";
echo "<input type='text' name='description' required />";
echo "<input type='submit' value='Go!' />";
echo "</form>";

// Q18 Modify your answer so that access is restricted to ONLY the member
// of staff who teaches this option.

echo "<br><a href='index.php'>Home</a> ";
?>
</body>
</html>
