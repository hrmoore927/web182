<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Bowling</title>
        <meta name="description" content="Bowling database for WEB 182">
    </head>
    <body>
<?php

// create a new database object

// We need to put this 'include' line here temporarily to 
// get the program to work. Eventually we will
// move all of our database code to the databases folder

include '../database/db-conn.php';

$db = dbConnect();

// query is "select all from teams"
$query = "SELECT * from teams";

$stmt = $db->prepare($query);
$stmt->execute();

echo '<h1><a href="../index.php">Teams</a></h1>';

//echo  '<p><input type="submit" name=addTeam value="Add a Team"></p>';
echo '<form action="../index.php" method="post" >';

echo '<p><button name="add" value="true">Add a Team</button></p>';

echo '<table border="1" width="50%">';

while($result = $stmt->fetch(PDO::FETCH_OBJ)) {
	//echo "<tr><td>" . $result->team_name . '</td> <td><button name="'. $result->team_name . '" value="delete" action=../index.php"><input type="hidden" name="teamID" value="'. $result->team_id . '"></td></tr>';
     echo '<tr><td>' . $result->team_name . '</td><td><button name="delete" type="submit" value="' . $result->team_id . '">Delete</button></td></tr>';

	//echo "<tr><td>" . $result->team_name . '</td> <td><button name="'. $result->team_name . '" value="delete" action=../index.php"><input type="hidden" name="teamID" value="'. $result->team_id . '"></td></tr>';
}

echo '</table>';
echo '</form>';
?>
    </body>
</html>