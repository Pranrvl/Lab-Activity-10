<h2 class="text-center mb-2">User Registration</h2>

<?php


$errors = session()->getFlashData('errors');
$result = session()->getFlashData('success');
$inputs = session()->getFlashData('inputs');

if(!empty($errors)){
?>

<div class="alert alert-danger" role="alert">
    <ul>
    <?php foreach ($errors as $error) : ?>
        <li><?= esc($error) ?></li>
    <?php endforeach; ?>
    </ul>
</div>

<?php


}
?>

<form method="post" action="registrasi">
  <div class="mb-3">
    User Name
    <input type="text" class="form-control" name="username" value="<?php if(isset($inputs['username'])) echo $inputs['username'];?>" />
  </div>
  <div class="mb-3">
    Password
    <input type="password" class="form-control" name="password" value="<?php if(isset($inputs['password'])) echo $inputs['password'];?>" />
  </div>
  <div class="mb-3">
    Confirm Password
    <input type="password" class="form-control" name="password2" value="<?php if(isset($inputs['password2'])) echo $inputs['password2'];?>" />
  </div>
  
  <input type="submit" class="btn btn-primary" value=Submit />
  <input type="submit" class="btn btn-primary" value=Cancel />

</form>