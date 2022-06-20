<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search And Show</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <a href="index.php" class="item" >Home</a>
    <form method="POST"  style="margin-top: 25px;">
    Search: <input type="text" name="Searchbybook" id="Searchbybook">
     <input type="submit" name="Search" id="Search" value="Search">
     <br><br> 
    Show All Book: <input type="submit" name="ShowAllBook" id="ShowAllBook" value="Show All Book">
    </form>
</body>
</html>

<?php
require "connect.php";
$result = $dbhandle->query("SELECT id_t,name_b,category FROM book");

if(isset($_POST['ShowAllBook'])){
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<br>ID: " . $row["id_t"]. "<br>Name : " . $row["name_b"]. "<br>Category : " . $row["category"]."<br>--------------". "<br>";
      }
    }
  }
  if(isset($_POST['Search'])){
    if ($result->num_rows > 0) {
      // output data of each row
      $searchByName = $_POST['Searchbybook'];
      while($row = $result->fetch_assoc()) {
        if($searchByName == $row["name_b"]) {
            echo "<br>ID: " . $row["id_t"]. "<br>Name : " . $row["name_b"]. "<br>Category : " . $row["category"]."<br>--------------". "<br>";
        }
      }
    }
  }
?>