
<html> 
    <head> 
       <!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 <!--jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!--Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign-Up</title> 
    </head> 
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index2.php"><span class='glyphicon glyphicon-home'></span> FoxTrot Reservation System  </a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="main_login.php"><span class="glyphicon glyphicon-user"> Login</span></a></li>
        <li><a href="register.php"><span class="glyphicon glyphicon-plus"> Register</span></a></li> 
      </ul>
     <script>
    function autoEmail(){
        var firstname= document.getElementById("firstname").value;
        var lastname= document.getElementById("lastname").value;
        var emailPre=document.getElementById("email");
        // emailPre=firstname+"."+lastname+"1@marist.edu";
        emailPre.value=firstname+"."+lastname+"1@marist.edu";
    }
</script>
    </div>
  </div>
</nav>
    <body> 
        <div id="Sign-Up"> 
            <!--<fieldset style="width:30%">-->
               <div class="well">
  <h1>Registration Form</h1></div> 
                <table border="0"> <tr> 
                    <!--<form method="POST" action="connectivity-sign-up.php"> -->
                     <form method="POST" class="form" action="checkregister.php"> 
                <td> First Name</td><td> 
                    <input type="text" class="form-control" id="firstname" required name="firstname"></td> </tr>
                <td> Last Name</td><td> 
                    <input type="text" class="form-control"id="lastname"  required name="lastname"></td> 
                <tr><td>Year</td><td>
                    <select class="form-control" required name="year">
                        <option value=""> Selct an Option Below</option>
                        <option value="freshman">Freshman</option>
                        <option value="sophomore">Sophomore</option>
                        <option value="junior">Junio</option>
                        <option value="senior">Senior</option>
                    </td></tr>
                <tr><td>Gender</td><td>
                    <select class="form-control" required name="gender">
                        <option value=" ">Select an Option Below</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </td></tr>
                <tr><td>CWID</td><td>
                    <input type="number"  class="form-control" required name="cwid"></td></tr>
                <tr> <td>Email</td><td> <input onfocus="autoEmail()" id="email" class="form-control" required type="email" name="email"></td> </tr> 
                <tr> <td>UserName</td><td> 
                    <input type="text" class="form-control" required name="username"></td> </tr> 
                <tr> <td>Password</td><td> 
                    <input type="password"  class="form-control" required name="password"></td> </tr> 
                <tr> <td>Confirm Password </td><td>
                    <input type="password" class="form-control" required  name="cpass"></td> </tr> 
                <tr> <td><input id="button" class="form-control" required type="submit" name="submit" value="Sign-Up"></td> </tr> 
                    </form> 
                </table>
            <!--</fieldset> -->
        </div> 
    </body> 
</html>