<?php
/**
 * User model
 */
class UserModel extends Model {

  public function register() {
    // Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if (isset($post['submit'])) {
      $password = sha1($post['password']);
      // Insert
      $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
      $this->bind(':name', $post['name']);
      $this->bind(':email', $post['email']);
      $this->bind(':password', $password);
      $this->execute();

      // Verify
      if ($this->lastInsertId()) {
        // Redirect
        header('Location: ' . ROOT_URL . 'users/login');
      }
    }
  }
}
