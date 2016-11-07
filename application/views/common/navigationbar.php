<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>  

<!-- <nav class="navbar navbar-inverse"> -->
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">BMCPI</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= site_url('home') ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-group"></span> Employee <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?= site_url('insert_user') ?>">Employee and User Registration</a></li>
            <li><a href="<?= site_url('employee_list') ?>">Employees and Users</a></li>
          </ul>

    <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-file"></span> Application forms<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Leave Form</a></li>
            <li><a href="#">Claims Form</a></li>
            <li><a href="#">Activity Form</a></li>
          </ul>


   <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-list-alt"></span> Reports<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">-</a></li>
            <li><a href="#">-</a></li>
            <li><a href="#">-</a></li>
          </ul>

      </ul>
      <ul class="nav navbar-nav navbar-right">
       <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
        <li><a href="<?= site_url('home/logout'); ?>"> <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  


</body>
</html>

