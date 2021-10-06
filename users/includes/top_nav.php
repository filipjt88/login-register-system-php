<body>
        <div class="container-fluid header g-0">
            <!-- Navigation -->
            <ul class="nav justify-content-end">
            <li class="nav-item">
            <a class="nav-link text-light" href="index.php">Back</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="logout.php">Logout</a>
            <li class="nav-item">
            <a class="nav-link disabled"><?php echo $user["first_name"] . " " . $user["last_name"]; ?></a>
        </li>
        </li>
</ul>
            <!-- End of Navigation -->
</div>