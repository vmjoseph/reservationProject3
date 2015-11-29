<?php
include_once("connect.php");
$id=$_POST['rowName'];
$firstName= $_POST['rowFirstname'];
$residenceChoice=$_POST['rowResidence'];
echo "You are deleting $firstName. Their user id was: ".$id;
echo "<br> Residence Choice $residenceChoice";

// $sql = "DELETE FROM users WHERE id='$id'";

// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . $conn->error;
// }
// $sql = "UPDATE FROM users WHERE id='$id'";

// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . $conn->error;
// }

// $conn->close();

?>