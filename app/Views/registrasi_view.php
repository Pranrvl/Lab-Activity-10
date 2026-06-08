<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-2">User Registration</h2>

            <?php
            $errors = session()->getFlashData('errors');
            $result = session()->getFlashData('success');
            $inputs = session()->getFlashData('inputs');

            if (!empty($errors)) { ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php }

            if (!empty($result)) { ?>
                <div class="alert alert-primary" role="alert">
                    <?php echo $result; ?>
                </div>
            <?php } ?>

            <form class="justify-content-center" method="post" action="registrasi">

                <h5>Username</h5>
                <input class="form-group col-12" type="text" name="username"
                    value="<?php if (isset($inputs['username'])) echo $inputs['username']; ?>" size="50" />

                <h5>Password</h5>
                <input class="form-group col-12" type="text" name="password"
                    value="<?php if (isset($inputs['password'])) echo $inputs['password']; ?>" size="50" />

                <h5>Password Confirm</h5>
                <input class="form-group col-12" type="text" name="password2"
                    value="<?php if (isset($inputs['password2'])) echo $inputs['password2']; ?>" size="50" />

                <h5>Email Address</h5>
                <input class="form-group col-12" type="text" name="email"
                    value="<?php if (isset($inputs['email'])) echo $inputs['email']; ?>" size="50" />

                <div class="mt-3">
                    <input type="submit" class="btn btn-primary" value="Submit" />
                    <input type="button" class="btn btn-secondary" value="Cancel"
                        onclick="window.location.href='<?= base_url('/') ?>'">
                </div>

            </form>
        </div>
    </div>
</div>
