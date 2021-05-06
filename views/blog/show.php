<h1>Post n° <?php echo $params['post']->title ?></h1>

<div>
  <?php foreach ($params['post']->getTags() as $key => $tag): ?>
    <span class="badge badge-info"><?php echo $tag->name ?></span>
  <?php endforeach; ?>
</div>

<p><?php echo $params['post']->content ?></p>

<a class="btn btn-secondary" href="<?php echo ROOT.'/posts' ?>" role="button">Retourner en arrière</a>
