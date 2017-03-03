<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 3/2/17
 * Time: 11:34 AM
 * User input one author name, find all the books written by the author(s).
 *
 * Use this command to copy to htdocs
 * sudo cp -r . /opt/lampp/htdocs/Books
 */

/**
 * // Joining all these queries we get:
 *
 * SELECT author.aid
 * FROM author
 * WHERE author.name = 'Dan Brown' IN
 * (SELECT ISBN13
 * FROM writes
 * WHERE writes.aid = author.aid IN
 * (
 * SELECT *
 * FROM book
 * WHERE `ISBN13` = ISBN13
 * ))
 *
 * // Now we have all the info!
 * 9780385537858
 * Inferno
 * 2013-05-14
 * mystery thriller
 * Doubleday
 * 4.99
 */

$author_name = ($_POST['name']);
echo "name is $author_name <br>";

$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

/**
* // This will get the author's aid. 'Dan Brown' is a placeholder.
* SELECT author.aid
* FROM author
* WHERE author.name = 'Dan Brown'
    *
 * // This would equal: 1000000004
 *
 * // Now we can use this aid in a query on the writes table
 * SELECT ISBN13
* FROM writes
* WHERE writes.aid = '1000000004'
    *
 * // Now we have all the ISBN's that author has written. Let's find all their
 * SELECT *
 * FROM book
 * WHERE `ISBN13` = 9780385537858
*/

// First get AID
$query = "SELECT author.aid
          FROM author
          WHERE author.name = '" . $author_name . "'";
$result = mysqli_query($my_conn,$query) or die (mysqli_error($my_conn) . 'Query failed: ');

echo 'Aid<br>';

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $aid = $row["aid"];
    echo $aid;
    echo '<br>';
}

echo '<br> <br>';

// Now use aid to get ISBN13
$query = "SELECT ISBN13
          FROM writes
          WHERE writes.aid = '" . $aid . "'";
$result = mysqli_query($my_conn,$query) or die (mysqli_error($my_conn) . 'Query failed: ');

echo 'ISBN13<br>';

$ISBN13_array = array();    // make a new array for ISBN13 data
$index = 0;

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $ISBN13_array[$index] = $row;
    echo $ISBN13_array[$index];
    echo '<br>';
    $index++;
}

// Now we have an array of ISBN13 data, so let's get the book data now!

mysqli_free_result($result);
mysqli_close($my_conn);
?>
