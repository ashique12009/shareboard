<?php
/**
 * User model
 */
class UserModel extends Model {

  public function register() {
    // Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if (isset($post['submit'])) {
      $hash = password_hash($post['password'], PASSWORD_DEFAULT);
      // Insert
      $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
      $this->bind(':name', $post['name']);
      $this->bind(':email', $post['email']);
      $this->bind(':password', $hash);
      $this->execute();

      // Verify
      if ($this->lastInsertId()) {
        // Redirect
        header('Location: ' . ROOT_URL . 'users/login');
      }
    }
  }

  public function login() {
    // Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if (isset($post['submit'])) {
      // Plaintext password entered by the user
      $plaintext_password = $post['password'];

      // query
      $this->query('SELECT * FROM users WHERE email = :email');
      $this->bind(':email', $post['email']);
      $this->execute();

      $row = $this->single();
      
      if ($row) {
        // The hashed password retrieved from database
        $hash = $row['password'];
    
        // Verify the hash against the password entered
        $verify = password_verify($plaintext_password, $hash);

        if ($verify) {
          $_SESSION['is_logged_in'] = true;
          $_SESSION['user_data'] = [
            'id'    => $row['id'],
            'name'  => $row['name'],
            'email' => $row['email'],
          ];
          header('Location: ' . ROOT_URL . 'shares');
        }
      }      
      else {
        header('Location: ' . ROOT_URL . 'users/login');
      }
    }
  }
}
