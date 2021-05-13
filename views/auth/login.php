<?php if (isset($_SESSION['errors'])): ?>
  <?php foreach ($_SESSION['errors'] as $errorsArray): ?>
    <?php foreach ($errorsArray as $key => $errors): ?>
      <div class="alert alert-danger" role="alert">
        <?php foreach ($errors as $key => $error): ?>
          <li><?php echo $error ?></li>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  <?php endforeach; ?>

<?php endif; ?>


<h1>Se connecter</h1>

<form class="" action="<?php echo ROOT.'/login' ?>" method="POST">
  <div class="form-group">
    <label for="username">Nom d'utilisateur</label>
    <input class="form-control" type="text" name="username" id="username">
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input class="form-control" type="password" name="password" id="password">
  </div>

  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>
