<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
// enrol.php
// allows a student to enrol on an option 
// Q6 complete the 'if' statement to prevent non-logged-in users from
// accessing this script.
        if (isset($_SESSION["uh_user"])) {

            // Connect to the database
            $conn = new PDO("mysql:host=localhost;dbname=tca20;", "root", "");
                
            // Q4. Complete the statement below to read the ID from the query string into $id.

            $id = $_GET["id"];

            // Q15. Add error checking to enrol.php so that a student cannot
            // enrol onn the option if the limit has been reached.
             $result = $conn->query("select nstudents from uh_options WHERE option_id= $id");
            
             $row = $result->fetch();
             if($row['nstudents']==40){
                 echo "Max Enroll limit has been reached";
                 echo "<br><a href='index.php'>Home</a> ";
                 exit();
             }

            // Connect to the database
            // Q5. Complete the SQL statement below to increase the number of enrolled
            // students on this option by one. 

            $conn->query("UPDATE uh_options SET nstudents = nstudents + 1 WHERE option_id= $id");

            // Q7a) Complete this to set '$u' equal to the currently logged in
            // user.
            $u = $_SESSION["uh_user"];

            // Q7b) Complete the SQL statement to add an entry to the uh_enrolments
            // table.
            $conn->query("insert into uh_enrolments values('','$u',$id)");

            echo 'You are enrolled';

            echo "<br><a href='index.php'>Home</a> ";
        } else {
            echo "You're not logged in";
        }
        ?>

    </body>
</html>
