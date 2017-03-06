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

/* Find all the book's that the given author has written.

*/
$query = "SELECT ISBN13
          FROM writes w JOIN author a
          ON w.aid = a.aid
          WHERE w.aid IN (SELECT author.aid
                          FROM author
                          WHERE author.name = '" . $author_name . "')";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

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
echo "<tr> <td><b>title</b></td> 
<td><b>year</b></td> 
<td><b>category</b></td> 
<td><b>publisher</b></td> 
<td><b>price</b></td></tr>";

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
