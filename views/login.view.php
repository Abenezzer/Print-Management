<?php partial('header.php') ?>

<body style="height: 100vh;" class="">

    <header class="hero is-small is-link mb-4">
        <div class="hero-body has-text-centered">
            <p class="title has-text-info">BIS Printing Request System</p>
            <p class="subtitle">Submit, Approve, and Track School Print Requests Efficiently</p>
        </div>
    </header>

    <div class="container">
        <div style="height: 60vh;" class="is-fullheight">
            <form action="" class="">
                <div style="max-width: 500px;" class="box mx-auto p-5">
                    <div class="field ">
                        <label class="label">Username</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">
                            <input class="input is-danger" type="password" placeholder="password" value="password">
                        </div>
                        <p class="help is-danger">This email is invalid</p>
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