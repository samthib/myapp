<?php

namespace App\Models;

use DateTime;
/**
*
*/
class Post extends Model
{
  protected $table = 'posts';

  public function getCreatedAt(): string
  {
    return (new DateTime($this->created_at))->format('d/m/Y à H:i');
  }

  public function getExcerpt(): string
  {
    return substr($this->content, 0, 170) . '...';
  }

  public function getButton(string $root): string
  {
    return <<<HTML
    <a href="$root/posts/$this->id" class="btn btn-primary">Lire l'article</a>
HTML;
  }

  public function getTags()
  {
    return $this->query("SELECT t.* FROM tags t
      INNER JOIN post_tag pt ON pt.tag_id = t.id
      INNER JOIN posts p ON pt.post_id = p.id
      WHERE p.id = ?", [$this->id]);
    }

    public function update(int $id, array $data, ?array $relations = null): bool
    {
      parent::update($id, $data);

      $stmt = $this->db->getPDO()->prepare("DELETE FROM post_tag WHERE post_id = ?");
      $result = $stmt->execute([$id]);

      foreach ($relations as $key => $tagId) {
        $stmt = $this->db->getPDO()->prepare("INSERT post_tag (post_id, tag_id) VALUES (?, ?)");
        $stmt->execute([$id, $tagId]);
      }

      if ($result) {
        return true;
      }
    }
}
