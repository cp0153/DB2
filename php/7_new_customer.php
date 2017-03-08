<?php
/**
 * Created by PhpStorm.
 * User: cpmacbook
 * Date: 2/23/17
 * Time: 11:34 AM
 * Add a new customer to the database.
 */

$name = ($_POST['name']);
$address = ($_POST['address']);
$telephone = ($_POST['telephone']);
$email = ($_POST['email']);
echo "The words the user entered is: <b><u>$name</u></b> <b><u>$address</u></b><br><br>";

$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// generate new cid
$cid_query = "SELECT FLOOR(RAND() * 99999) AS cid
        FROM customer
        WHERE cid NOT IN (SELECT cid FROM customer)
        LIMIT 1";
$cid_result = mysqli_query($my_conn, $cid_query) or die (mysqli_error($my_conn) . 'CID Query failed: ');

// check if new customer is already in the people database, if not create entry
$people_check = "SELECT '" . $name . "' FROM PEOPLE";
$people_result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'People Query failed: ');

// if empty, create a new people entry first
if (mysqli_num_rows($people_result) == 0) {

}

// this collects all of purchase history of the name provided
$query = "INSERT INTO `customer` (`cid`, `name`, `address`) VALUES ('" . $cid . "', '" . $name . "', '" . $address . "')";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Customer insert Query failed: ');

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
