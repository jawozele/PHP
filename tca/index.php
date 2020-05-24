<!DOCTYPE html>
<html>
    <head>
        <title>University of Hampshire option selection</title>
    </head>
    <body>
        <h1>University of Hampshire option selection</h1>
        <p>
            <a href='addoption.html'>Add a new entry</a> | <a href='login.html'>Login</a> </p>
        <?php
// Connect to the database
        $conn = new PDO("mysql:host=localhost;dbname=tca20;", "root", "");

// Q1. Complete the SELECT statement below so that ALL options from the database
// are retrieved.

        $result = $conn->query("SELECT uh_options.* FROM `uh_options` ");
        ?>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Staff</th>
                    <th>Nstudents</th>
                    <th>li_mit</th>
                    <th>Questions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

<?php
while ($row = $result->fetch()) {
    // Q2. Add code inside the "while" loop to display the title, full details,
    // staff member, number of enrolled students so far, and limit, for the
    // current option
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['staff'] . "</td>";
    echo "<td>" . $row['nstudents'] . "</td>";
    echo "<td>" . $row['li_mit'] . "</td>";



    // Q14. Show all questions for the current option.
    $result_1 = $conn->query("SELECT uh_questions.* FROM `uh_questions` where option_id=" . $row['option_id']);
    echo "<td>";
    while ($row_1 = $result_1->fetch()) {
        echo "- ";
        echo $row_1['question'];
        echo '<br>';
    }
    echo "</td>";
    // Q3 Add a hyperlink to "enrol.php". This should include a query string 
    // containing the ID of the current option, to allow the user to 
    // enrol on the option 
    echo "<td><a href='enrol.php?id=" . $row['option_id'] . "'>Enrol</a></td>";
    // Q10 similar to Q3 but for question1.php
    echo "<td><a href='question1.php?id=" . $row['option_id'] . "'>Question</a></td>";
    // Q16 similar to Q3 but for edit1.php 
    echo "<td><a href='edit1.php?id=" . $row['option_id'] . "'>Edit</a></td>";

    echo "</tr>";
}
?>
                </body>
                </html>
