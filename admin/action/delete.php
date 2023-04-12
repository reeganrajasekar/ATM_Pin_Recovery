<?php
require("../layout/db.php");

$id= $_GET['id'];

$sql = "DELETE FROM card WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/card.php?page=1&msg=User Deleted Successfully !");
    die();
} else {
    header("Location: /admin/card.php?page=1&err=Something went Wrong!");
    die();
}


?>