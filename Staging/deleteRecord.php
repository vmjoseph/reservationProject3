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
        if ($updatingResidence>=5){
            echo "Sorry there has been in error: database error $residenceChoice has too many spots left. Please contact your system administrator.<br>
            < a href='mailto:somone@google.com'> This guy </a>";
        }else{
            $updatedResidence= $updatingResidence+1;
            echo "<br> $updatingResidence<br>";
            echo $updatedResidence;
            $sql2= "UPDATE residence_halls SET $residenceChoice='$updatedResidence' WHERE $residenceChoice= $updatingResidence ";
            $result2= $conn->query($sql2);
            
            if ($conn->query($sql2) === TRUE) {
            echo "<br>Record updated successfully <br>";
            } else {
            echo "<br>Error updating record: " . $conn->error;
            }
            
            $sql3 = "DELETE FROM residence_areas WHERE id = $id";
            
            if ($conn->query($sql3) === TRUE) {
            echo "Record deleted successfully";
            } else {
            echo "Error deleting record: " . $conn->error;
}
        }
        
} 
}else {
    echo "0 results";
}




$conn->close();

?>