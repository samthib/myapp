<h1>Les derniers articles</h1>


<?php foreach ($params['posts'] as $key => $post): ?>
<div class="card mb-3">
  <div class="card-body">
    <h2><?php echo $post->title ?></h2>
    <small><?php echo $post->created_at ?></small>
    <p><?php echo $post->content ?></p>
    <a href="<?php echo ROOT.'/posts/'.$post->id ?>" class="btn btn-primary">Lire plus</a>
  </div>
</div>
<?php endforeach; ?>
