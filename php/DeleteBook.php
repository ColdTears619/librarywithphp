<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove a new Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <a href="index.php" class="item" >Home</a>
        <form method="post" style="margin-top: 25px;">
            ID: <input type="text" name="id">
            <br>
            <input type="submit" name="submit">
        </form>
</body>
</html>

<?php
require "connect.php";

if(isset($_POST['submit'])){
        
    $id = $_POST['id'];
    // $name = $_POST['name'];
    $sql = "DELETE FROM library.book 
            WHERE id_t = '$id'";
    if (mysqli_query($dbhandle, $sql)) {
        echo "New record has been added Remove !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>