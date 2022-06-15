<?php

  include 'connect.php';
  echo '<h3>Search and Show Books</h3>';
  
 $result = $dbhandle->query("SELECT title,number_title,publish_date,author_name FROM books.book");

 echo "Number of rows: $result->num_rows \n";

 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Book ID: " . $row["number_title"]. "\nTitle Book: " . $row["title"]. " " ."\npublish_date: ". $row["publish_date"].
    "\nauthor name: ".$row["author_name"]."\n--------------". "\n";
  }
  } else {
  echo "0 results";
  }

 $result->close();

 $dbhandle->close();
?>