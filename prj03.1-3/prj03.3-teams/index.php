<?php

include 'database/db-conn.php';



// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

if($_POST['delete'])
{ 
    $teamID = $_POST['delete'];
    //echo "teamID: $teamID";

    $db = dbConnect();
    // use underscores for database fields
    // use camelCase for PHP variables
    $query = "DELETE FROM teams WHERE team_id = :teamID";
    
    $stmt = $db->prepare($query);
    $stmt->bindParam(':teamID', $teamID, PDO::PARAM_INT);  
    
    // if successful let the user know
    if ($stmt->execute())
    {
        echo "Record was successfully delted"; 
        echo '<p><a href="views/teams.view.php">Return to the teams page</a></p>';       
    }
    
    else
    {
        echo "The record was not deleted";
    }

    
}

elseif ($_POST['add'])
{
    $action = $_POST['add'];
    echo "<p>action: $action</p>";
}

else
{
    echo '<h1><a href="views/teams.view.php">Teams</a></h1>';
}


?>