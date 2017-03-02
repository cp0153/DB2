<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 3/2/17
 * Time: 11:34 AM
 * User input one author name, find all the books written by the author(s).

Use this command to copy to htdocs
sudo cp -r . /opt/lampp/htdocs/Books

 */

/**
// This will get the author's aid. 'Dan Brown' is a placeholder.
SELECT author.aid
FROM author
WHERE author.name = 'Dan Brown'

// This would equal: 1000000004

// Now we can use this aid in a query on the writes table
SELECT ISBN13
FROM writes
WHERE writes.aid = '1000000004'

// Now we have all the ISBN's that author has written. Let's find all their
SELECT *
FROM book
WHERE `ISBN13` = 9780385537858

// Now we have all the info!
9780385537858
Inferno
2013-05-14
mystery thriller
Doubleday
4.99
*/

  $myconnection = mysql_connect('localhost', 'root', '')
  or die ('Could not connect: ' . mysql_error());

  $mydb = mysql_select_db ('bookdb') or die ('Could not select database');

  $query = "SELECT author.aid from author where author.name = 'Dan Brown'";
  $result = mysql_query($query) or die ('Query failed: ' . mysql_error());

  echo 'Aid<br>';

  while ($row = mysql_fetch_array ($result, MYSQL_ASSOC)) {
      echo $row["aid"];
      echo '<br>';
  }

  mysql_free_result($result);

?>
