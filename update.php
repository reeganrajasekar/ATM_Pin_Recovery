<?php
require("./admin/layout/db.php");
session_start();
$no=$_POST["no"];
$pin=$_POST["pin"];

$image = $_FILES['file']['tmp_name']; 
$imgContent = hash_file('md5', $image);

$result = $conn->query("SELECT * FROM card WHERE no='$no'");
if ($result->num_rows > 0) {
    while ($row=$result->fetch_assoc()) {
        if ($imgContent==$row["file"]) {
            $id=$row["id"];
            $conn->query("UPDATE card SET STATUS='ACTIVE' , pin='$pin' WHERE id='$id'");
            header("Location: /access.php?msg=Your Account is Unblocked!");
            die();
        } else {
            header("Location: /change.php?err=Fingerprint Not Matched!");
            die();
        }
    }
} else {
    header("Location: /change.php?err=ATM No is incorrect!");
    die();
}
?>