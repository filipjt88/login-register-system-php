 <?php require("includes/head.php"); ?>
 <?php require("includes/top_nav.php"); ?>

        <div class="container register">
           <div class="row">
        <div class="col-md-6 offset-3">
            <!-- Register form -->
        <form action="register.php" method="POST">
            <h1 class="text-center">Register</h1>
        <div class="form-floating mb-3">
                <select name="title" class="form-control">
                    <option value="mr">MR.</option>
                    <option value="mr">MS.</option>
                </select>
                <label for="floatingInput">Gender</label>
            </div>
        <div class="form-floating mb-3">
                <input type="text" class="form-control" name="first_name" id="floatingInput" placeholder="First name" value="<?php if(isset($first_name)) echo $first_name; ?>">
                <label for="floatingInput">First name</label>
            </div>
            <?php if(isset($first_name_error)): ?>
                <p class="alert alert-light text-danger p-0 d-inline-block"><?php echo $first_name_error; ?></p>
            <?php endif; ?>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="last_name" id="floatingInput" placeholder="Last name" value="<?php if(isset($last_name)) echo $last_name; ?>">
                <label for="floatingInput">Last name</label>
            </div>
            <?php if(isset($last_name_error)): ?>
                <p class="alert alert-light text-danger p-0 d-inline-block"><?php echo $last_name_error; ?></p>
            <?php endif; ?>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" value="<?php if(isset($email)) echo $email; ?>">
                <label for="floatingInput">Email address</label>
            </div>
            <?php if(isset($email_error)): ?>
                <p class="alert alert-light text-danger p-0 d-inline-block"><?php echo $email_error; ?></p>
            <?php endif; ?>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <?php if(isset($password_error)): ?>
                <p class="alert alert-light text-danger p-0 d-inline-block"><?php echo $password_error; ?></p>
            <?php endif; ?>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password_repeat" id="floatingPassword" placeholder="Password repeat">
                <label for="floatingPassword">Password repeat</label>
            </div>
            <?php if(isset($password_repeat_error)): ?>
                <p class="alert alert-light text-danger p-0 d-inline-block"><?php echo $password_repeat_error; ?></p>
            <?php endif; ?>
            <?php if(isset($password_dont_match)): ?>
                <p class="alert alert-light text-danger p-0 d-inline-block"><?php echo $password_dont_match; ?></p>
            <?php endif; ?>
                <button type="submit" class="form-control btn btn-grad1 mt-3">Register</button>
     </form>
     <!-- End of Register form -->
            </div>
        </div>
    </div>
</div>
