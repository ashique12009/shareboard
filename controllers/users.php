<?php
/**
 * Users controller
 */
class Users extends Controller {

  protected function index() {

  }

  public function register() {
    $viewmodel = new UserModel();
    $this->returnView($viewmodel->register(), true);
  }

}
