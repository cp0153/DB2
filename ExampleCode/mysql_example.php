<?php
 
  $myconnection = mysql_connect('localhost', 'root', '') 
    or die ('Could not connect: ' . mysql_error());

  $mydb = mysql_select_db ('movie') or die ('Could not select database');

  $query = 'SELECT DISTINCT title, year FROM movies order by year';
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

?>
