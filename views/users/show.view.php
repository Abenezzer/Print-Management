<?php partial("header.php", ["title" => "User Management"]) ?>

<body>
    <?php partial("admin/navbar.php") ?>
    <div style="min-height:75vh; overflow:hidden" class="">
        <div class="container">
            <div class="is-flex  is-justify-content-center mt-4 is-align-tiem-center ">

                <div class="ml-5">
                    <div class="">
                        <form action="/users" method="GET">
                            <div class="field is-flex is-justify-content-flex-end">
                                <div class="control">
                                    <input name="fullName" class="input is-small" type="text" placeholder="Serach by fullname">
                                </div>
                                <div class="div">
                                    <button type="submit" class="button is-primary has-text-white is-small">Search...</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <table class="table is-striped is-fullwidth is-hoverable">
                        <thead>
                            <th>ID No</th>
                            <th>Role</th>
                            <th>Full Name</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php if(isset($users)):  ?>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <th><?= $user['id'] ?></th>
                                    <td><span class="tag is-success"><?= $user['role'] ?></span></td>
                                    <td><?= $user['full_name'] ?></td>
                                    <td class="is-flex is-justify-content-between">
                                        <a href="/delte" class="button is-warning is-small mr-3">Update</a>
                                        <a href="/delte" class="button is-danger is-small">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>

                   <?php if(isset($page)): ?>
                       <?php  partial('pagination.php', ["page" => $page, "totalPage" => $totalPage]) ?>
                    <?php endif ?>

                </div>
            </div>

        </div>
    </div>
    <?php partial('footer.php') ?>
</body>

</html>