<!DOCTYPE html>
<html>
<body>
<?php


// Q8. Complete the code below to read in the title, description, and
// staff member from the form
$ti = $_POST['option_name'];
$des = $_POST['option_desc'];
$staff = $_POST['option_staff'];
$lim = 40; // assume limit is 40

// Connect to the database

$conn = new PDO ("mysql:host=localhost;dbname=tca20;", "root", "");

// Q9. Complete the SQL statement to add the option to the uh_options table.
// Assume the limit is always 40. 

$conn->query ("insert into uh_options (name,description,staff,li_mit,nstudents)values('$ti','$des','$staff','$lim',0)");
//print_r($conn->errorInfo());
echo "Option inserted";
echo "<br><a href='index.php'>Home</a> ";
?>
</body>
</html>

