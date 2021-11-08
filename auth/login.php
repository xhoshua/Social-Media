<?php include('../layouts/auth/head.php'); ?>
    <div class="container-fluid text-center" style="background: cornflowerblue"  >
        <div class="row content" style="height:857px">
            <div class="col-lg-4 col-lg-offset-4">

                <h1 >Login</h1>
                <form class="form-horizontal" method="post" action="authenticate.php">
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
                            <button type="submit" name="Submit_Login" class="btn btn-default">Submit</button>
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