<?php
include_once("connect.php");
$id=$_POST['rowName'];
$firstName= $_POST['rowFirstname'];
$residenceChoice=$_POST['rowResidence'];
echo "You are deleting $firstName. Their user id was: ".$id;
echo "<br> Residence Choice $residenceChoice <br>";

$sql = "SELECT * FROM residence_halls";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $updatingResidence=$row[$residenceChoice];
        $updatedResidence= $updatingResidence++;
        echo $updatedResidence;
} 
}else {
    echo "0 results";
}

$sql2= "UPDATE $residenceChoice WHERE $residenceChoice='$updatedResidence'";
$result= $conn->query($sql2);

if ($conn->query($sql2) === TRUE) {
    echo "<br>Record updated successfully";
} else {
    echo "<br>Error updating record: " . $conn->error;
}


$conn->close();

?>