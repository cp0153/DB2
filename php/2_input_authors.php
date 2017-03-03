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
 *
 *
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

$my_connection = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The bookdb database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($my_connection) . PHP_EOL;

/*
$query = "SELECT author.aid
            FROM author
            WHERE author.name = '" . $author_name . "'";
$result = mysqli_query($query) or die ('Query failed: ' . mysqli_error());

echo 'Aid<br>';

while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    echo $row["aid"];
    echo '<br>';
}

mysqli_free_result($result);
*/

mysqli_close($my_connection);
?>
