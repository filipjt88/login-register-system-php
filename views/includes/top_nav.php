<body>
        <div class="container-fluid header g-0">
            <!-- Navigation -->
<ul class="nav justify-content-end">
    <?php if(!isLogged()): ?>
        <li class="nav-item">
            <a class="nav-link text-light" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="register.php">Register</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
            <a class="nav-link text-light" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="users/home.php">Back to user page</a>
        </li>
        <?php endif; ?>
</ul>
            <!-- End of Navigation -->
</div>