<?php
include_once 'database.php';
$sql = "DELETE FROM adddoctor WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
 	header("Location: deleteuser.html"); 

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>