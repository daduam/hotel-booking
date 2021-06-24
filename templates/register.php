<div class="d-flex flex-column align-items-center">
    <h1 class="h6 my-2 pb-4 fw-normal">SIGN UP</h1>

    <small class="mb-2 text-danger"><?= $error ?? '&#8205;' ?></small>

    <form action="" method="post" class="col-3">
        <div class="mb-2">
            <input name="user[email]" class="form-control" type="email" value="<?= $user['email'] ?? '' ?>" placeholder="Email" required>
        </div>

        <div class="mb-2">
            <input name="user[password]" class="form-control" type="password" value="<?= $user['password'] ?? '' ?>" placeholder="Password" required>
        </div>

        <div class="mb-2">
            <input name="user[repeat_password]" class="form-control" type="password" value="<?= $user['repeat_password'] ?? '' ?>" placeholder="Repeat password">
        </div>

        <div class="mb-2">
            <input name="user[name]" class="form-control" type="text" value="<?= $user['name'] ?? '' ?>" placeholder="Name" required>
        </div>

        <div class="mb-2">
            <input name="user[phone_number]" class="form-control" type="tel" value="<?= $user['phone_number'] ?? '' ?>" placeholder="Phone number" required>
        </div>

        <div>
            <input type="submit" class="btn btn-dark w-100" value="Register now">
        </div>

        <div class="text-center my-2">
            <small class="small text-muted">
                Already have an account? <a href="/login">Login</a>
            </small>
        </div>
    </form>
</div>