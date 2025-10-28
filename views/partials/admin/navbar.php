<nav style="min-height: 10vh;" class="navbar is-info" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <p class="title is-3 mr-5"><a href="/" class="has-text-primary">BIS</a></p>
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item is-active is-selected">
                    Dashboard
                </a>
                <a class="navbar-item">
                    Update Stats
                </a>
                <a class="navbar-item">
                    manage requests
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        User management
                    </a>
                    <div class="navbar-dropdown">
                        <a href="/register" class="navbar-item">
                            Create new User
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            Manage Users
                        </a>


                    </div>
                </div>
                <!--  -->

            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <a class="button is-danger has-text-white" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>