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

// check if new customer is already in the people database, if not create entry
$people_check = "SELECT name 
                 FROM people 
                 WHERE name = '" . $name . "'";
$people_result = mysqli_query($my_conn, $people_check) or die (mysqli_error($my_conn) . 'People Query failed: ');

if (!$people_result) {
    echo "ERROR: SELECT name query failed.";
    return -1;
}

// if empty, create a new people entry first
if (mysqli_num_rows($people_result) == 0) {
    $insert_people = "INSERT INTO `people` (`name`, `address`, `telephone`, `email`)
                      VALUES  ('". $name ."', '". $address . "', '". $telephone ."',  '". $email ."')";
    $people_insert_result = mysqli_query($my_conn, $insert_people) or die (mysqli_error($my_conn) . 'Customer insert Query failed: ');

    if (!$people_insert_result) {
        echo "ERROR: unable to insert person into the people table.";
        return -1;
    }
}

// Then insert into customer
$cust_insert = "INSERT INTO `customer` (`name`, `address`) VALUES ('" . $name . "', '" . $address . "')";
$cust_insert_result = mysqli_query($my_conn, $cust_insert) or die (mysqli_error($my_conn) . '<br>Customer insert Query failed! ');

if (!$cust_insert_result) {
    echo "ERROR: unable to insert customer into the customer table.";
    return -1;
}

echo "Entered data successfully\n";

mysqli_close($my_conn);
