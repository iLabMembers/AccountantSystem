<?php
namespace App\Controller;
use App\Controller\AppController;
class MailsController extends AppController
{
  function index()
  {
    $data = $this -> Mails -> find('all');
    $this->set('data', $data);
  }
}
?>