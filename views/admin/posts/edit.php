<h1>Modifier <?php echo $params['post']->title ?></h1>


<form class="" action="<?php echo ROOT ?>/admin/posts/edit/<?php echo $params['post']->id ?>" method="post">
  <div class="form-group">
    <label for="title">Titre de l'article</label>
    <input class="form-control" type="text" name="title" id="title" value="<?php echo $params['post']->title ?>">
  </div>
  <div class="form-group">
    <label for="title">Contenu de l'article</label>
    <textarea class="form-control" name="content" rows="8" cols="80"><?php echo $params['post']->content ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
</form>
