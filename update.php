<?php
require("./admin/layout/db.php");
session_start();
$no=$_POST["no"];
$pin=$_POST["pin"];

$result = $conn->query("SELECT * FROM card WHERE no='$no'");
if ($result->num_rows > 0) {
    while ($row=$result->fetch_assoc()) {
        $id=$row["id"];
        $conn->query("UPDATE card SET STATUS='ACTIVE' , pin='$pin' WHERE id='$id'");
        header("Location: /access.php?msg=Your Account is Unblocked!");
        die();
    }
} else {
    header("Location: /change.php?err=ATM No is incorrect!");
    die();
}
?>