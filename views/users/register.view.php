<?php partial('header.php', ["title" => "Regester Users"]) ?>
<?php partial('admin/navbar.php') ?>;

<body>
    <div style="min-height: 80vh;" class="container">
      <div class="is-flex is-justify-content-center is-align-content-center">
        <p class="has-text-centered has-text-primary subtitle is-4 mt-2">
          Register New User
</p>
            </div>
            <div style="max-width: 500px" class="fields mx-auto mt-5 box">
        <form action="/register" method="POST">

        
          <!-- fullname -->
          <div class="field">
            <label class="label">Full-Name:</label>
            <div class="control">
              <input class="input" type="text" name="fullname" />
            </div>
            <p class="help has-text-danger"> <?= $errors['fullname'] ?? "" ?></p>
          </div>
          <!-- username -->
           <div class="field">
            <label class="label">Username:</label>
            <div class="control">
              <input class="input" type="text" name="username" />
            </div>
            <p class="help has-text-danger"> <?= $errors['username'] ?? "" ?></p>
          </div>
          <!-- password -->
           <div class="field">
            <label class="label">Password:</label>
            <div class="control">
              <input class="input" type="password" name="password" />
            </div>
            <p class="help has-text-danger"><?=$errors['password']?? "" ?></p>
          </div>
          <!-- ConfPassword -->
           <div class="field">
            <label class="label">Comfirm Password:</label>
            <div class="control">
              <input class="input" type="password" name="comfPassword" />
            </div>
            <p class="help has-text-danger"><?=$errors['comfPassword'] ?? "" ?></p>
          </div>
          <!-- role -->
          <div class="control">
            <div class="select">
        
              <select name="role">
                <p></p>
                <option value="">Select User Role</option>
                <option value="Teacher" >Teacher</option>
                <option value="Approver">Approver</option>
                <option value="Printer">Printer</option>
                <option value="Admin">Admin</option>
              </select>
            </div>
            <p class="help has-text-danger"><?=$errors['role'] ?? "" ?></p>
          </div>
          <div class="mt-5 is-fullwidth">
            <button class="button is-fullwidth is-info has-text-white" type="submit">Register</button>
          </div>
        </form>
      </div>
    </div>
</body>