<head>
     <!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 <!--jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!--Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
$firstname = ucfirst(trim($_POST["firstname"]));
$lastname= ucfirst(trim($_POST["lastname"]));
$cwid= trim($_POST["cwid"]);
$year= $_POST["year"];
$laundry= isset($_POST["laundry"]);
$sservices= isset($_POST["sservices"]);
$kitchen=isset($_POST["kitchen"]);
$residence= ($_POST["residence"]);
$gender=$_POST["gender"];
#Placing each group of residence halls (halls for seniors/juniors, halls for freshman ect) into an array
$seniorJunior= array("newfulton", "lowerwest","upperwest","fulton","talmadge");
$freshman=array("sheahan","leo","marian","champagnat");
$sophomore=array("midrise","gartland","foy","uppernew","lowernew");
$email=$_POST["email"];
$laundryChoice=$_POST["laundry"];
$kitchenChoice=$_POST["kitchen"];
$sservicesChoice=$_POST["sservices"];
$roomsRemaining=$_POST["roomsRemaining"];
$subtractRoom=$roomsRemaining-1;

#checks room availability from the residence hall table
if ($subtractRoom==-1){
    echo "Sorry, there are no more rooms remaining in $residence<br>
    Please return and choose a new room <a href='index.php'>Return</a>";
}else{
	#displays number of remaining rooms for the chosen residence hall
echo "Rooms remaining in <span class='label label-info'>$residence</span> is <span class='label label-default'>$roomsRemaining </span><br>";
	   // echo "<script>alert('Your submission has a few errors, please return to the form');</script>";
	    
 echo "Are you sure you want to reserve a room in <span class='label label-info'>$residence</span>?<br> 
There will be <span class='label label-default'>$subtractRoom </span>rooms left after you submit.<br>";
	   // echo "<script>alert('Your submission has a few errors, please return to the form');</script>";
	    echo "<button onclick='window.history.back()';>Go Back</button>";
	    echo "<form action='submit.php' method='post'>
	    <input type='hidden' name='firstname' value=$firstname></input>
	    <input type='hidden' name='lastname' value=$lastname></input>
	    <input type='hidden' name='cwid' value=$cwid></input>
	    <input type='hidden' name='year' value=$year></input>
	    <input type='hidden' name='gender' value=$gender></input>
	    <input type='hidden' name='laundry' value=$laundryChoice></input>
	    <input type='hidden' name='kitchen' value=$kitchenChoice></input>
	    <input type='hidden' name='sservices' value=$sservicesChoice></input>
	    <input type='hidden' name='residence' value=$residence></input>
	    <input type='hidden' name='email' value=$email></input>
	    <input type='hidden' name='roomsRemaining' value=$roomsRemaining></input>
	    <input type='hidden' name='subtractRoom' value=$subtractRoom></input>
	    <input type='submit' value='Submit for Submission'>
	    </form>";

}


	    
 
?>
