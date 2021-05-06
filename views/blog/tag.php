<h1><?php echo $params['tag']->name ?></h1>

<?php foreach ($params['tag']->getPosts() as $key => $post): ?>
  <div class="card mb-3">
    <div class="card-body">
      <a href="<?php echo ROOT ?>/posts/<?php echo $post->id ?>"><?php echo $post->title ?></a>
    </div>
  </div>
<?php endforeach; ?>
