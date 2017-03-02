<?php
/**
 * Created by PhpStorm.
 * User: cpmacbook
 * Date: 2/23/17
 * Time: 11:34 AM
 * Find the names of authors who have purchased a book written by themselves. (aid and cid will not be the same).
 */

  $myconnection = mysql_connect('localhost', 'root', '')
  or die ('Could not connect: ' . mysql_error());

  $mydb = mysql_select_db ('bookdb') or die ('Could not select database');

  $query = 'SELECT name from people where ';
  $result = mysql_query($query) or die ('Query failed: ' . mysql_error());

  echo 'Title &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Year<br>';

  while ($row = mysql_fetch_array ($result, MYSQL_ASSOC)) {
      echo $row["title"];
      echo "&nbsp;&nbsp;&nbsp;";
      echo $row["year"];
      echo '<br>';
  }

  mysql_free_result($result);

  mysql_close($myconnection);
