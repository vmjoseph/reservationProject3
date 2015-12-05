<?php
include_once("connect.php");
$id=$_POST['idValue'];
$firstName= $_POST['editfName'];
$residence=$_POST['residence'];
$lastName=$_POST['editlName'];
$year=$_POST['editYear'];
$gender=$_POST['editGender'];
$cwid=$_POST['editCWID'];
$email=$_POST['editEmail'];

$sql="UPDATE residence_areas SET first_name = '$firstName', last_name= '$lastName' , year= '$year', cwid = '$cwid', hall = '$residence' , email='$email' WHERE id = $id ";
if ($conn->query($sql) === TRUE) {
    echo "<br> $firstName's record has been updated successfully.";
} else {
    echo "<br> Error updating $firstName's record:<br> " . $conn->error;
}
?>