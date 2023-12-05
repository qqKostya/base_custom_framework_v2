<?php require_once VIEWS . '/incs/header.php'; ?>
    <main class="main py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h3>Register page</h3>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Name"
                                   value="<?= old('name') ?>">
                            <?= isset($validation) ? $validation->listError('name') : '' ?>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email"
                                   value="<?= old('email') ?>">
                            <?= isset($validation) ? $validation->listError('email') : '' ?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="password"
                                   placeholder="Password"
                                   value="<?= old('password') ?>">
                            <?= isset($validation) ? $validation->listError('password') : '' ?>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php require_once VIEWS . '/incs/footer.php'; ?>