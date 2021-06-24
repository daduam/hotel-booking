<div class="d-flex flex-column align-items-center">
    <h1 class="h6 my-2 pb-4 fw-normal">LOGIN</h1>

    <small class="mb-2 text-danger"><?= $error ?? '&#8205;' ?></small>

    <form action="" method="post" class="col-3">
        <div class="mb-2">
            <input name="email" class="form-control" type="email" value="<?= $email ?? '' ?>" placeholder="Email">
        </div>

        <div class="mb-2">
            <input name="password" class="form-control" type="password" value="<?= $password ?? '' ?>" placeholder="Password">
        </div>

        <div>
            <input type="submit" class="btn btn-dark w-100" value="Login">
        </div>

        <div class="text-center my-2">
            <small class="small text-muted">
                Don't have an account? <a href="/register">Signup</a>
                <div class="text-center my-2">
            </small>
        </div>
    </form>
</div>