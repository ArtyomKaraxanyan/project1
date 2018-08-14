<?php include_once ('Layouts/heder.php')  ?>
<body>
<div class="col-md-4">

</div>
<div class="col-md-4">
    <div class="text-center">
        <h3><b>Log In</b></h3></div>
    <form id="ajax-login-form" action="functions/functionlogin.php" method="post" role="form" autocomplete="off">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password"  class="form-control" placeholder="Password" autocomplete="off">
        </div>

        <div class="form-group">
            <div class="row">
                <div class="form-group center">
                    <input type="checkbox" tabindex="3" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                </div>
                <div class="form-group ">
                    <input type="submit" name="login" id="login"  class="form-control btn btn-success" value="Log In">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <a href=""  class="forgot-password">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
    </form>
</div>


























