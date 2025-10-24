<?php partial('header.php', ["title" => "login"]) ?>

<body style="height: 100vh;" class="">

    <header class="hero is-small is-link mb-4">
        <div class="hero-body has-text-centered">
            <p class="title has-text-info">BIS Printing Request System</p>
            <p class="subtitle">Submit, Approve, and Track School Print Requests Efficiently</p>
        </div>
    </header>

    <div class="container">
        <div style="height: 60vh;" class="is-fullheight">
            <?php if (isset($errors['notfound'])): ?>
                <div style="max-width:500px ;" class="box mx-auto has-background-danger ">
                    <p class=" has-text-centered text-is-bold has-text-white"><?= $errors["notfound"] ?></p>
                </div>
            <?php endif; ?>
            <form method="POST" action="/login">
                <div style="max-width: 500px;" class="box mx-auto p-5">
                    <div class="field ">
                        <label class="label">Username</label>
                        <div class="control">
                            <input class="input <?= isset($errors['username']) ? "is-danger" : "" ?> " type="text" name="username" placeholder="Text input">
                        </div>
                        <p class="help is-danger"><?= $errors['username'] ?? "" ?></p>
                    </div>
                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">
                            <input class="input <?= isset($errors['password']) ? "is-danger" : "" ?> " type="password" name="password" placeholder="password">
                        </div>
                        <p class="help is-danger"><?= $errors['password'] ?? "" ?></p>
                    </div>
                    <div class="control">
                        <button class="button is-link">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php partial('footer.php') ?>
</body>

</html>