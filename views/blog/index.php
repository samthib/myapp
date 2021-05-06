<h1>Les derniers articles</h1>

<?php foreach ($params['posts'] as $key => $post): ?>
  <div class="card mb-3">
    <div class="card-body">
      <h2><?php echo $post->title ?></h2>
      <div>
        <?php foreach ($post->getTags() as $key => $tag): ?>
          <span class="badge badge-info">
            <a href="<?php echo ROOT ?>/tags/<?php echo $tag->id ?>" class="text-white">
              <?php echo $tag->name ?>
            </a>
          </span>
        <?php endforeach; ?>
      </div>
      <small class="text-info">Publié le <?php echo $post->getCreatedAt() ?></small>
      <p><?php echo $post->getExcerpt() ?></p>
      <?php echo $post->getButton(ROOT) ?>
    </div>
  </div>
<?php endforeach; ?>
