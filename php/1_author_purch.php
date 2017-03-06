<?php
/**
 * Created by PhpStorm.
 * User: cpmacbook
 * Date: 2/23/17
 * Time: 11:34 AM
 * Find the names of authors who have purchased a book written by themselves. (aid and cid will not be the same).
 */

$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// returns the name of the authors who purchased their own book from this store
$query = "SELECT a.name
from writes w join author a
ON w.aid = a.aid
where a.name in (SELECT name from customer)";
$result = mysqli_query($my_conn,$query) or die (mysqli_error($my_conn) . 'Query failed: ');

echo '<b>Name</b><br>';
$name_array = array();    // make a new array for ISBN13 data
$index = 0;
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $name_array[$index] = $row["name"];
    echo $name_array[$index];
    echo '<br>';
    $index++;
}

mysqli_free_result($result);

mysqli_close($my_conn);
?>