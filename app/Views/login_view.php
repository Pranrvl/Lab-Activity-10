<div class="row">
    <div class="col-4 offset-4 my-4">

        <h2 class="my-2">User Login</h2>

        <?php
        $errors = session()->getFlashData('errors');
        if (!empty($errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <?= esc($errors) ?>
            </div>
        <?php } ?>

        <form method="post" action="<?= base_url('User/doLogin') ?>">
            <div class="form-group my-2">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group my-2">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <input type="submit" class="form-control btn btn-primary my-2" value="Sign in">
        </form>

    </div>
</div>
