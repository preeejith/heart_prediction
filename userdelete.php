<?php
		include_once 'database.php';
		$sql = "DELETE FROM register1 WHERE id='" . $_GET["id"] . "'";
		if (mysqli_query($conn, $sql)) {
    			header("Location: userdeletetag.html"); 
		}
			 else {
   						 echo "Error deleting record: " . mysqli_error($conn);
				  }
					mysqli_close($conn);
?>