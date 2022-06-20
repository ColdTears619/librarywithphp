<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <a href="index.php" class="item" >Home</a>
        <form method="post" style="margin-top: 25px;">
            <title> ID Group </title>
            <br>
            Old ID: <input type="text" name="old_id">
            <br>
            New ID: <input type="text" name="new_id">
            <br>
            <input type="submit" name="editID">
            <title> Name Group </title>
            <br>
            Old Name: <input type="text" name="old_name">
            <br>
            New Name: <input type="text" name="new_name">
            <br>
            <input type="submit" name="editName">
            <br> 
            <title> Edit Category </title>
            <br>
            ID: <input type="text" name="newid">
            <br> 
            New Category: <input type="text" name="category">
            <br> 
            <input type="submit" name="editCategory">
        </form>
</body>
</html>

<?php
require "connect.php";

if(isset($_POST['editID'])) {
    $oldid = $_POST['old_id'];
    $newid = $_POST['new_id'];
    $sql = "UPDATE library.book 
              SET id_t = '$newid'
              WHERE id_t = '$oldid'";
}

if(isset($_POST['editName'])) {
    $oldname = $_POST['old_name'];
    $newname = $_POST['new_name'];
    $sql = "UPDATE library.book 
              SET name_b = '$newname'
              WHERE name_b = '$oldname'";
}

if(isset($_POST['editCategory'])) {
    $id = $_POST['newid'];
    $category = $_POST['category'];
    $sql = "UPDATE library.book 
              SET category = '$category'
              WHERE id_t = '$id'";
}

?>