<?php require("includes/head.php"); ?>
 <?php require("includes/top_nav.php"); ?>


<div class="container login">
    <div class="row">
        <div class="col-md-6 offset-3">
        <!-- Login form -->
        <form action="login.php" method="POST">
                <h1 class="text-center">Login</h1>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" value="<?php if(isset($email)) echo $email; ?>">
                <label for="floatingInput">Email address</label>
            </div>
            <?php if(isset($email_error)): ?>
                <p class="alert alert-light text-danger p-0 d-inline-block"><?php echo $email_error; ?></p>
            <?php endif; ?>
            <div class="form-floating">
                <input type="password" class="form-control mb-3" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <?php if(isset($password_error)): ?>
                <p class="alert alert-light text-danger p-0 d-inline-block"><?php echo $password_error; ?></p>
            <?php endif; ?>

            <?php if(isset($wrong)): ?>
                <p class="alert alert-light text-danger text-center"><?php echo $wrong; ?></p>
            <?php endif; ?>
            <button type="submit" class="form-control btn btn-grad mt-3">Login</button>
            </form>
            <!-- End of Login form -->
        </div>
    </div>
</div>
