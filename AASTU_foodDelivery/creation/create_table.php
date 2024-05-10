<?php
include("../connection/connect.php");
$sql = "CREATE TABLE `users` (
    `u_id` int NOT NULL,
    `username` varchar(222) NOT NULL,
    `f_name` varchar(222) NOT NULL,
    `l_name` varchar(222) NOT NULL,
    `email` varchar(222) NOT NULL,
    `phone` varchar(222) NOT NULL,
    `password` varchar(222) NOT NULL,
    `address` text NOT NULL,
    `status` int NOT NULL DEFAULT '1',
    `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
  ";
if ($db->query($sql) === TRUE) {
    echo "Table 'users' created successfully<br>";
} else {
    echo "Error creating table: " . $db->error;
}

// Close connection
$db->close();
