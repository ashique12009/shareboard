<?php
/**
 * Shares controller
 */
class Shares extends Controller {
  protected function index() {
    $viewmodel = new ShareModel();
    $this->ReturnView($viewmodel->Index(), true);
  }

  protected function add() {
    $viewmodel = new ShareModel();
    $this->ReturnView($viewmodel->add(), true);
  }

}
