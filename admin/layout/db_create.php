<?php 
require("./db.php");

$sql = "CREATE TABLE card(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    no VARCHAR(500) NOT NULL,
    pin VARCHAR(500) NOT NULL,
    file VARCHAR(500) NOT NULL,
    mobile VARCHAR(500) NOT NULL,
    status VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table card created successfully<br>";
} else {
    echo "Error creating table: ";
}

?>