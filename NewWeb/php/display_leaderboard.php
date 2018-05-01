<?php
// dynamically generates the leaderboard table, taking values from the database
function display_leaderboard($conn)
{
    $select_all_users = "SELECT EMAIL FROM Users";
    $users = $conn->query($select_all_users)->fetch_all();
    foreach ($users as $user) {
        echo "<tr> <td scope='col'> $user[0]</td> </tr>";
    }
}

?>