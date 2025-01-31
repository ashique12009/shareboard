<?php
/**
 * Home model
 */
class ShareModel extends Model {
  
  public function Index() {
    $this->query("SELECT * FROM shares");
    $rows = $this->resultSet();
    return $rows;
  }

  public function add() {
    // Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if (isset($post['submit'])) {
      // Insert
      $this->query('INSERT INTO shares (title, body, link, user_id) VALUES(:title, :body, :link, :user_id)');
      $this->bind(':title', $post['title']);
      $this->bind(':body', $post['body']);
      $this->bind(':link', $post['link']);
      $this->bind(':user_id', 1);
      $this->execute();

      // Verify
      if ($this->lastInsertId()) {
        // Redirect
        header('Location: ' . ROOT_URL . 'shares');
      }
    }
  }
}
