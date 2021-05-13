<h1>Administration des articles</h1>

<?php if (isset($_GET['success'])): ?>
  <div class="alert alert-success">
    Vous êtes connecté
  </div>
<?php endif; ?>

<a href="<?php echo ROOT ?>/admin/posts/create" class="btn btn-success my-3">Créer un nouvel article</a>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Titre</th>
      <th>Publié le</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($params['posts'] as $key => $post): ?>
      <tr>
        <th><?php echo $post->id ?></th>
        <td><?php echo $post->title ?></td>
        <td><?php echo $post->getCreatedAt() ?></td>
        <td>
          <a href="<?php echo ROOT ?>/admin/posts/edit/<?php echo $post->id ?>" class="btn btn-warning">Modifier</a>
          <form class="d-inline" action="<?php echo ROOT ?>/admin/posts/delete/<?php echo $post->id ?>" method="post">
            <button type="submit" name="button"class="btn btn-danger">Supprimer</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
