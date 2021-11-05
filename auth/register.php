<?php
include('../layouts/auth/head.php');
session_start();
?>

<div class="container-fluid text-center"  style="background: cornflowerblue">
    <div class="row content" style="height:857px">
        <div class="col-lg-4 col-lg-offset-4">
            <h1>Register User</h1>
            <form class="form-horizontal" method="post" action="authenticate.php">
                <div class="form-group" >
                    <label class="control-label col-sm-4" for="first_name">First Name</label>
                    <div class="col-xs-4">
                        <div class="input-group ">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="first_name" type="text"
                                   class="form-control  <?= (isset($_SESSION['validate_errors']['first_name'])) ? 'is-invalid' : ''?>"
                                   name="first_name" placeholder="First Name" >

                        </div>
                        <?= (isset($_SESSION['validate_errors']['first_name'])) ? '<span class="error text-danger">' . $_SESSION['validate_errors']['first_name'] .'</span>' : ''?>
                    </div>
                </div>
                <div class="form-group"  >
                    <label class="control-label col-sm-4" for="last_name">Last Name</label>
                    <div class="col-xs-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="last_name" type="text"
                                   class="form-control <?= (isset($_SESSION['validate_errors']['last_name'])) ? 'is-invalid' : ''?>"
                                   name="last_name" placeholder="Last Name">
                        </div>
                        <?= (isset($_SESSION['validate_errors']['last_name'])) ? '<span class="error text-danger">' . $_SESSION['validate_errors']['last_name'] .'</span>' : ''?>
                    </div>
                </div>
                <div class="form-group"  >
                    <label class="control-label col-sm-4" for="email">Email</label>
                    <div class="col-xs-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="text"
                                   class="form-control <?= (isset($_SESSION['validate_errors']['email'])) ? 'is-invalid' : ''?>"
                                   name="email" placeholder="Email">
                        </div>
                        <?= (isset($_SESSION['validate_errors']['email'])) ? '<span class="error text-danger">' . $_SESSION['validate_errors']['email'] .'</span>' : ''?>

                    </div>
                </div>
                <div class="form-group" >
                    <label class="control-label col-sm-4" for="password">Password</label>
                    <div class="col-xs-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password"
                                   class="form-control <?= (isset($_SESSION['validate_errors']['password'])) ? 'is-invalid' : ''?>"
                                   name="password" placeholder="Password">
                        </div>
                        <?= (isset($_SESSION['validate_errors']['password'])) ? '<span class="error text-danger">' . $_SESSION['validate_errors']['password'] .'</span>' : ''?>
                    </div>
                </div>
                <div class="form-group" >
                    <label class="control-label col-sm-4" for="confirm_password">Confirm Password</label>
                    <div class="col-xs-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="confirm_password" type="password"
                                   class="form-control <?= (isset($_SESSION['validate_errors']['confirm_password'])) ? 'is-invalid' : ''?>"
                                   name="confirm_password" placeholder="Confirm Password">
                        </div>
                        <?= (isset($_SESSION['validate_errors']['confirm_password'])) ? '<span class="error text-danger">' . $_SESSION['validate_errors']['confirm_password'] .'</span>' : ''?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-7">
                        <div class="checkbox">
                            <label><input type="checkbox" name="remember"> Remember me</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        <button type="submit" name="Submit_Register" class="btn btn-default">Submit</button>

                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<?php
$_SESSION['validate_errors'] = [];
include('../layouts/auth/foot.php');
?>
