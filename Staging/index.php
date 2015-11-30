<html>
<head>
        <!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 <!--jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!--Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<form action="parse.php" method="POST">
		<table>
			<tr><th colspan="2"> General Information: </th></tr>
			<tr><td> First Name: </td><td><input type="text" required="required" name="firstname"></td></tr>
			<tr><td> Last Name: </td><td><input type="text" required="required" name="lastname"></td></tr>
			<tr><td> CWID: </td><td><input type="number" required="required" name="cwid"></td></tr>
			<tr><td> Year </td><td>
							<select name= "year" required="required">
								<option value= "">Select a Year</option>
								<option value="freshman">Freshman</option>
								<option value="sophomore">Sophomore</option>
								<option value="junior">Junior</option>
								<option value="senior"> Senior </option>
							</select>
							</td></tr>
			<tr><td>Gender</td><td>
					<select required="required" name="gender" id="gender">
					<option value="">Select a Gender</option>
					<option value="female">Female</option>
					<option value="male">Male</option>
					</select>
				</td></tr>
			<tr><td>Email:</td><td><input type="email" required="required" name="email"></td></tr>
			<tr><th colspan="2">Preferences:</th></tr>
			<tr><td> Laundry?: </td><td><input type="checkbox" name="laundry"></td></tr>
			<tr><td> Special Services?: </td><td><input type="checkbox" name="sservices"></td></tr>
			<tr><td> Kitchen?: </td><td><input type="checkbox" name="kitchen"></td></tr>
			<tr><th colspan="2">Residence Selection</th></tr>
			<tr><td>Where would you like to live?:</td><td>
															<select name="residence" required="required">
																<option value="">Select a residence</option>
																<option value="champagnat">Champagnat Hall</option>
																<option value="leo">Leo Hall</option>
																<option value="marian">Marian Hall</option>
																<option value="sheahan">Sheahan Hall</option>
																<option value="midrise">Midrise Hall</option>
																<option value="foy">Foy Townhouses</option>
																<option value="gartland">Gartland Commons</option>
																<option value="uppernew">Upper New Townhouses</option>
																<option value="lowernew">Lower New Townhouses</option>
																<option value="newfulton">New Fulton Townhouses</option>
																<option value="lowerwest">Lower West Cedar Townhouses</option>
																<option value="upperwest">Upper West Cedar Townhouses</option>
																<option value="fulton">Fulton Street Townhouses</option>
																<option value="talmadge">Talmadge Court</option>
																<option value="offcampus">Off Campus</option>
															</td></tr>
			<tr><th colspan="2"><input type="submit" value="Submit"></th></tr>
</body>
</html>

<?php
require_once("connect.php");

$sql="SELECT * FROM residence_halls";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<table>";
    echo "<tr><td>Champagnat: </td><td>".$row["champagnat"]."</td></tr>";
    echo "<tr><td>Leo:</td><td> ".$row["leo"]."</td></tr> ";
    echo "<tr><td>Marian:</td><td> ".$row["marian"]."</tr> ";
    echo "<tr><td>Sheahan:</td><td> ".$row["sheahan"]."</td></tr> ";
    echo "<tr><td>Midrise: </td><td>".$row["midrise"]."</td></tr> ";
    echo "<tr><td>Foy:</td><td> ".$row["foy"]."</td></tr> ";
    echo "<tr><td>Gartland: </td><td>".$row["gartland"]."</td></tr> ";
    echo "<tr><td>Uppernew:</td><td> ".$row["uppernew"]."</td></tr> ";
    echo "<tr><td>Lowernew:</td><td> ".$row["lowernew"]."</td></tr> ";
    echo "<tr><td>New Fulton:</td><td> ".$row["newfulton"]."</td></tr> ";
    echo "<tr><td>Lower West:</td><td> ".$row["lowerwest"]."</td></tr> ";
    echo "<tr><td>Upper West:</td><td> ".$row["upperwest"]."</td></tr> ";
    echo "<tr><td>Fulton:</td><td> ".$row["fulton"]."</td></tr> ";
    echo "<tr><td>Talmadge:</td><td> ".$row["talmadge"]."</td></tr>";
    echo "</table>";
    $champLeft=$row["champagnat"];
    $leoLeft=$row["leo"];
    $marianLeft=$row["marian"];
    $sheahanLeft=$row["sheahan"];
    $midriseLeft=$row["midrise"];
    $foyLeft=$row["foy"];
    $gartlandLeft=$row["gartland"];
    $uppernLeft=$row["uppernew"];
    $lowernLeft=$row["lowernew"];
    $newfLeft=$row["newfulton"];
    $lowerwLeft=$row["lowerwest"];
    $upperwLeft=$row["upperwest"];
    $fultonLeft=$row["fulton"];
    $talmadgeLeft=$row["talmadge"];
    
    #pass on the variables to different pages
    echo "<table>
    <input type='hidden' name='champagnat' value=$champLeft>
    <input type='hidden' name='leo' value=$leoLeft>
    <input type='hidden' name='marian' value=$marianLeft>
    <input type='hidden' name='sheahan' value=$sheahanLeft>
    <input type='hidden' name='midrise' value=$midriseLeft>
    <input type='hidden' name='foy' value=$foyLeft>
    <input type='hidden' name='gartland' value=$gartlandLeft>
    <input type='hidden' name='uppernew' value=$uppernLeft>
    <input type='hidden' name='lowernew' value=$lowernLeft>
    <input type='hidden' name='newfulton' value=$newfLeft>
    <input type='hidden' name='lowerwest' value=$lowerwLeft>
    <input type='hidden' name='upperwest' value=$upperwLeft>
    <input type='hidden' name='fulton' value=$fultonLeft>
    <input type='hidden' name='talmadge' value=$talmadgeLeft>
    </table>";
    }
} else {
    echo "0 results";
}
?>