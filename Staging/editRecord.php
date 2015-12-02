<?php
include_once("connect.php");
$id=$_POST['editId'];
$firstName= $_POST['editFirstName'];
$residence=$_POST['editResidence'];
$lastName=$_POST['editLastName'];
$year=$_POST['editYear'];
$gender=$_POST['editGender'];
$cwid=$_POST['editCWID'];
$email=$_POST['editEmail'];
echo "You are editing $firstName. Edit their informaiton below: ";
echo "<br> The residence was: $residence <br>";
echo"<script>
        // document.getElementById('residenceSelect').value='$residence';
    </script>";
echo "
<form action='updateTables.php' method='POST'>
<table>
<tr><td>ID:</td><td><input type='text' readonly value='$id'></td>
<td>First Name: </td><td><input name='editfName' type='text' value='$firstName'></td>
<td>Last Name: </td><td><input name='editlName' type='text' value='$lastName'></td>
<td>Year: </td><td><input name='editYear' type='text' value='$year'></td></tr><tr>
<td>Gender:</td><td><input name='editGender' type='text' value='$gender'></td>
<td>CWID: </td><td><input name='editCWID'type='numbers' value='$cwid'></td>
<td>Residence Hall:</td><td>
	<select name='residence' id='residenceSelect'>
		<option value=''>Select a residence</option>
		<option value='champagnat'>Champagnat Hall</option>
		<option value='leo'>Leo Hall</option>
		<option value='marian'>Marian Hall</option>
		<option value='sheahan'>Sheahan Hall</option>
		<option value='midrise'>Midrise Hall</option>
		<option value='foy'>Foy Townhouses</option>
		<option value='gartland'>Gartland Commons</option>
		<option value='uppernew'>Upper New Townhouses</option>
		<option value='lowernew'>Lower New Townhouses</option>
		<option value='newfulton'>New Fulton Townhouses</option>
		<option value='lowerwest'>Lower West Cedar Townhouses</option>
		<option value='upperwest'>Upper West Cedar Townhouses</option>
		<option value='fulton'>Fulton Street Townhouses</option>
		<option value='talmadge'>Talmadge Court</option>
		<option value='offcampus'>Off Campus</option>
		</select></td>
<td>Email</td> <td> <input name='editEmail' type='text' value='$email'></td></tr>
</table>
<input type='submit'>
</form>";

// $sql = "DELETE FROM users WHERE id='$id'";

// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . $conn->error;
// }

// $conn->close();
//Loop to generate row names
// $query = mysql_query("SELECT * FROM mytable");

// while ($row = mysql_fetch_assoc($query)) {
//     foreach($row as $key => $value) {
//         print "$key = $value <br />";
//      }
// }
echo "<br><br>";

$sql = "SELECT * FROM residence_areas";
$result = mysql_query($sql) or die(mysql_error());

// Print the column names as the headers of a table
echo "<table><tr>";
for($i = 0; $i < mysql_num_fields($result); $i++) {
    $field_info = mysql_fetch_field($result, $i);
    echo "<th>{$field_info->name}</th>";
}

// Print the data
while($row = mysql_fetch_row($result)) {
    echo "<tr>";
    foreach($row as $_column) {
        echo "<td>{$_column}</td>";
    }
    echo "</tr>";
}

echo "</table>";

// if ($result->num_rows > 0) {
//     // output data of each row
//     while ($row = mysql_fetch_assoc($sql)) {
//     foreach($row as $key => $value) {
//         print "$key = $value <br />";
//      }
// }
// } else {
//     echo "0 results";
// }


?>