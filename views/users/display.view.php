<?php partial('header.php', ["title" => "User Info"]) ?>
<body style="height: 100vh;" class="">
<?php partial('admin/navbar.php') ?>
    <div style="min-height: 70vh;" class="container">
        <div style="max-width: 600px;" class="box mx-auto mt-4">
            <p class="subtitle is-4 mt-4 block">User Info</p>
            <p class="block">
                <span class="">Username:</span>
                <span class=""><?= $user['username'] ?></span>
            </p>
             <p class="block">
                <span class="">Password:</span>
                <span class=""><?= $user['password'] ?></span>
            </p>
            <p class="block has-text-warning">
                copy username and password and give it the approprate person only.
            </p>
            <div>
                <a href="/register" class="button is-primary has-text-white">Back...</a>
            </div>
        </div>
    </div>
   

    <?php partial('footer.php') ?>
</body>

</html>