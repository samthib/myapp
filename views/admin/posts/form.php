<h1>Modifier <?php echo $params['post']->title ?? 'Créer un nouvel article' ?></h1>


<form class="" action="<?php echo isset($params['post']) ? ROOT.'/admin/posts/edit/'.$params['post']->id : ROOT.'/admin/posts/create' ?>" method="post">
  <div class="form-group">
    <label for="title">Titre de l'article</label>
    <input class="form-control" type="text" name="title" id="title" value="<?php echo $params['post']->title ?? '' ?>">
  </div>
  <div class="form-group">
    <label for="title">Contenu de l'article</label>
    <textarea class="form-control" name="content" rows="8" cols="80"><?php echo $params['post']->content ?? '' ?></textarea>
  </div>

  <div class="form-group">
    <label for="tags">Tags de l'article</label>
    <select multiple class="form-control" id="tags" name="tags[]">
      <?php foreach ($params['tags'] as $key => $tag): ?>
        <option value="<?php echo $tag->id ?>"
          <?php if (isset($params['post'])): ?>
            <?php foreach ($params['post']->getTags() as $postTag):
              echo ($tag->id === $postTag->id) ? 'selected' : '';
            endforeach; ?>
          <?php endif; ?>
          ><?php echo $tag->name ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <button type="submit" class="btn btn-primary"><?php echo isset($params['post']) ? 'Enregistrer les modifications' : 'Enregistrer mon article' ?></button>
  </form>
