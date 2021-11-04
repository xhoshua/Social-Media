<?php include('../layouts/auth.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Media</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    h1{
        margin-top: 3rem;
        margin-left: 28rem;
    }
</style>
<body>

<div class="container" style="background: cornflowerblue " >
    <div class="row">
        <div class="col-sm-12">
    <h1 >Login</h1>
 <form class="form-horizontal" action="register.php">

     <div class="form-group" >
         <label class="control-label col-sm-2" for="username">Username</label>
         <div class="col-xs-3">
             <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                 <input id="username" type="text" class="form-control" name="username" placeholder="Username">
             </div>
         </div>
     </div>
     <div class="form-group" >
         <label class="control-label col-sm-2" for="password">Password</label>
         <div class="col-xs-3">
             <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                 <input id="password" type="password" class="form-control" name="password" placeholder="Password">
             </div>
         </div>
     </div>
     <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
             <div class="checkbox">
                 <label><input type="checkbox" name="remember"> Remember me</label>
             </div>
         </div>
     </div>
     <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
             <button type="submit" class="btn btn-default">Submit</button>
         </div>
     </div>
 </form>
    </div>
</div>
</div>
</body>
</html>