<?php
require("./admin/layout/db.php");
session_start();
$no=$_POST["no"];
$pin=$_POST["pin"];

$result = $conn->query("SELECT * FROM card WHERE no='$no'");
if ($result->num_rows > 0) {
    while ($row=$result->fetch_assoc()) {
        $_SESSION["id"] = $row["id"];
        if ($row["pin"]==$pin) {
            if ($row["status"]=="ACTIVE") {
                header("Location: /access.php?msg=Now, You have Access");
                die();
            } else {
                header("Location: /?err=Your Account is Blocked , Change Your Pin!");
                die();
            }
        } else {
            $id=$row["id"];
            $conn->query("UPDATE card SET STATUS='INACTIVE' WHERE id='$id'");
            header("Location: /?err=Your Account is Blocked!");
            die();
        }
        
    }
} else {
    header("Location: /?err=ATM No is incorrect!");
    die();
}
?>