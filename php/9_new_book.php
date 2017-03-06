<?php
/**
 * Created by PhpStorm.
 * User: cpmacbook
 * Date: 2/23/17
 * Time: 11:34 AM
 * Add a new book to the database. If the author and/or the publisher of the new book is not in the database, insert
 * all information about the author and/or publisher as well.
 *
 */

$name = ($_POST['year']);
echo "The words the user entered is: <b><u>$name</u></b> <br><br>";

$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// this collects all of purchase history of the name provided
$query1 = "INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) 
VALUES ('$', '$', '$', '$', '$', '$')";

$query2 = "INSERT INTO `author` (`aid`, `name`, `address`) VALUES ('$', '$', '$')";

$query3 = "INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('$', '$', '$')";

$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "Sorry I couldn't find anyone under $name :'(<br>";
    return 0;
}

// Results table
echo "<br><table>";

echo "<tr> <td><b>best seller</b></td> 
<td><b>year</b></td> ";

// If the query worked, return name, ISBN, book tile, Category, and price
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr><td>" . $row["bst"] . "</td>";
    echo "<td>" . $row["year"] . "</td>";
    echo '</tr>';
}

echo '</table>';        // End of results table

mysqli_free_result($result);
mysqli_close($my_conn);
