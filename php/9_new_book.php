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

$isbn13 = ($_POST['isbn13']);
echo "ISBN13 entered: <b><u>$isbn13</u></b><br>";

$title = ($_POST['title']);
echo "ISBN13 entered: <b><u>$title</u></b><br>";

$year = ($_POST['year']);
echo "ISBN13 entered: <b><u>$year</u></b><br>";

$category = ($_POST['category']);
echo "ISBN13 entered: <b><u>$category</u></b><br>";

$pname = ($_POST['pname']);
echo "ISBN13 entered: <b><u>$pname</u></b><br>";

$price = ($_POST['price']);
echo "ISBN13 entered: <b><u>$price</u></b><br>";

$name = ($_POST['name']);
echo "ISBN13 entered: <b><u>$name</u></b><br>";

$address = ($_POST['address']);
echo "ISBN13 entered: <b><u>$address</u></b><br>";

$state = ($_POST['state']);
echo "ISBN13 entered: <b><u>$state</u></b><br>";

$address = ($_POST['address']);
echo "ISBN13 entered: <b><u>$address</u></b><br>";

$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// this collects all of purchase history of the name provided
$query1 = "INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) 
VALUES ('$isbn13', '$title', '$year', '$category', '$pname', '$price')";

$query2 = "INSERT INTO `author` (`name`, `address`) VALUES ('". $name ."', '". $address ."')";

$query3 = "INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('". $pname ."', '". $state ."', '". $address ."')";

$result = mysqli_query($my_conn, $query1) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == FALSE) {
    echo "Sorry I couldn't insert the book " . $title . " :'(<br>";
    return 0;
}

$result = mysqli_query($my_conn, $query2) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == FALSE) {
    echo "Sorry I couldn't insert the author " . $name . " :'(<br>";
    return 0;
}

$result = mysqli_query($my_conn, $query3) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == FALSE) {
    echo "Sorry I couldn't insert the publisher " . $pname . " :'(<br>";
    return 0;
}

mysqli_free_result($result);
mysqli_close($my_conn);
