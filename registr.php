
<?php include_once 'functions/pdo.php' ?>

<?php include_once ('Layouts/heder.php')  ?>


<div class="col-md-4"">

</div>
<div class="col-md-4">
    <div class="text-center">
        <h2><b>Create new account</b></h2>
    </div>
    <form action="functions/functionregistr.php" method="post" role="form" >
        <div class="form-group">
            <input type="text" name="Firstname" id="Firstname"  class="form-control" placeholder="Firstname" >
        </div>

        <div class="form-group">
            <input type="text" name="Lastname" id="Lastname"  class="form-control" placeholder="Lastname" >
        </div>


        <div class="form-group">
            <input type="text" name="Username" id="Username"  class="form-control" placeholder="Username">
        </div>

        <div class="form-group">
            <input type="email" name="email" id="email"  class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <input type="password" name="password" id="password"  class="form-control" placeholder="Password" >
        </div>

        <div class="form-group">
            <input type="password" name="re_password" id="re_password"  class="form-control" placeholder="Confirm Password" >
        </div>
        <div class="form-group">
            <label class="form-group">Country</label>
            <select type="country" name="country" id="country" class="form-group col-md-12">
                <option></option>
                <?php
                $countries = $conn->query("SELECT * FROM countrys ORDER BY ordering,name ASC  ");

                while ($result = $countries->fetch(PDO::FETCH_ASSOC)){
                    echo '<option >'.$result['name'].'</option>';
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-xs-offset-3">
                    <input type="submit" name="register" id="register"  class="form-control btn btn-info" value="register">
                </div>
            </div>
        </div>
        <input type="hidden" class="hide" name="token" id="token" value="7c6f19960d63f53fcd05c3e0cbc434c0">
    </form>
</div>