<?php
 /*
 *  Need to test if the Add or Delete has been clicked. 
 *  if they haven't, then display the default page.
 */


// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

if($_POST['delete'])
{ 
    $teamID = $_POST['delete'];
    echo "teamID: $teamID";

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