<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `products` WHERE ID = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: index.php?msg=User deleted successful");
}
else {
    echo "failed" . mysqli_error($conn);
}

?>