<?php

namespace App\Controllers;

use \Core\View;
use \App\Auth;
use \App\Flash;

class Mainsite extends Authenticated
{
  public $user;

  public function indexAction()
  {
    View::renderTemplate('Home/mainsite.html', [
      'user' => $this->user
    ]);
  }
}