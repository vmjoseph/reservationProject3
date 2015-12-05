<html>
<head>
     <!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 <!--jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <!--Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<script>
    $(document).ready(function(){
       $("#create").click(function(){
           window.location.replace("index.php");
       });
       $("#viewReservations").click(function(){
           window.location.replace("viewReservations.php");
       });
       $("#deleteReservation").click(function(){
           window.location.replace("viewReservations.php");
       });
    });
</script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class='glyphicon glyphicon-home'></span> FoxTrot Reservation System  </a>
    </div>
    <div>
      <!--<ul class="nav navbar-nav">-->
      <!--  <li class="active"><a href="#">Home</a></li>-->
      <!--  <li><a href="#">Page 1</a></li>-->
      <!--  <li><a href="#">Page 2</a></li> -->
      <!--  <li><a href="#">Page 3</a></li> -->
      <!--</ul>-->
    </div>
  </div>
</nav>

<body>
<div class='row'>
    <div class='col-sm-4'> </div>
    <div class='col-sm-4 jumbotron'><center><h1>Welcome!</h1><h3><small>Please select one of the following options:</small></h3></center></div>
    <div class='col-sm-4'></div>
</div>

<div class='row'>
    <div class='col-sm-3'> </div>
   <div class='col-sm-6'> 
        <center><div class='btn-group'>
            <button type="button" id='create' class="btn btn-success"><span class='glyphicon glyphicon-plus-sign'></span><br>Create Reservation</button>
            <button type="button" id='viewReservations'  class="btn btn-info"><span class='glyphicon glyphicon-eye-open'></span><br>View/Modify Reservation</button>
            <button type="button" id='deleteReservation'  class="btn btn-warning"><span class='glyphicon glyphicon-remove-sign'></span><br>Delete Reservation</button>
        </div></center>
    </div>
<div class='col-sm-3'> </div>
</div>

</body>
</html>
