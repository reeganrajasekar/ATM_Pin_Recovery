<?php
require("../layout/db.php");
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = test_input($_POST['name']);
$mobile = test_input($_POST['mobile']);
$pin = test_input($_POST['pin']);
$no = test_input($_POST['no']);

$sql = "INSERT INTO card (name , mobile , pin , no,status)
VALUES ('$name' ,'$mobile','$pin','$no','ACTIVE')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/home.php?page=1&msg=User Added Successfully !");
    die();
} else {
    header("Location: /admin/home.php?page=1&err=Something went Wrong!");
    die();
}


?>