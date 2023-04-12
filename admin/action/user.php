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
$image = $_FILES['file']['tmp_name']; 
$imgContent = hash_file('md5', $image);

$sql = "INSERT INTO card (name , mobile , pin , no,status,file)
VALUES ('$name' ,'$mobile','$pin','$no','ACTIVE','$imgContent')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/card.php?page=1&msg=User Added Successfully !");
    die();
} else {
    header("Location: /admin/card.php?page=1&err=Something went Wrong!");
    die();
}


?>