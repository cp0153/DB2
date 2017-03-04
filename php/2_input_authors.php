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

$author_name = ($_POST['name']);
echo "The name the user entered is: <b><u>$author_name</u></b> <br><br>";

$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// This will get the author's aid. 'Dan Brown' is an example
$query = "SELECT author.aid
          FROM author
          WHERE author.name = '" . $author_name . "'";
$result = mysqli_query($my_conn,$query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "Sorry, I couldn't find any books by $author_name :'(<br>";
    return 0;
}

echo '<b>Aid</b><br>';

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $aid = $row["aid"];
    echo $aid;
    echo '<br>';
}

echo '<br>';

// Now we can use the aid in a query on the writes table to get an ISBN13.
$query = "SELECT ISBN13
          FROM writes
          WHERE writes.aid = '" . $aid . "'";
$result = mysqli_query($my_conn,$query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "Query failed, couldn't find any ISBN13's for $author_name! <br>";
    return 0;
}

echo '<b>ISBN13</b><br>';

$ISBN13_array = array();    // make a new array for ISBN13 data
$index = 0;

// Testing output of the ISBN's we found
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $ISBN13_array[$index] = $row["ISBN13"];
    echo $ISBN13_array[$index];
    echo '<br>';
    $index++;
}

// Results table
echo "<br><table>";
echo "<tr> <td><b>title</b></td> <td><b>year</b></td> <td><b>category</b></td> <td><b>publisher</b></td> <td><b>price</b></td></tr>";

/*  Now we have all the ISBN's that author has written. Let's find all the books they wrote.
    We'll put this into an array of ISBN13 data.  */
for($i = 0; $i < sizeof($ISBN13_array); $i++) {
    $query = "SELECT *
              FROM book
              WHERE book.ISBN13 = '" . $ISBN13_array[$i] . "'";
    $result = mysqli_query($my_conn,$query) or die (mysqli_error($my_conn) . 'Query failed: ');

    // See if the query failed
    if (mysqli_num_rows($result) == 0) {
        echo "Query failed, couldn't find any books for ISBN13: $ISBN13_array[$i]! <br>";
        return 0;
    }

    // If the query worked, we can print out all the info for this book! Includes: title, year, category, pname, price
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<tr><td>" . $row["title"] . "</td>";
        echo "<td>" . $row["year"] . "</td>";
        echo "<td>" . $row["category"] . "</td>";
        echo "<td>" . $row["pname"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo '</tr>';
    }
}

echo '</table>';        // End of results table

mysqli_free_result($result);
mysqli_close($my_conn);
