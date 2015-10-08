<?php
App::uses('AppController', 'Controller');

class ForumsController extends AppController {

  public $components = array('Paginator');

  public function beforeFilter() {
  	parent::beforeFilter();
  	$this->Auth->allow('index', 'view');
  }

  public function index() {
    $this->Paginator->settings['contain'] = array('Topic', 'Post' => array('User', 'Topic'));
    $this->set('forums', $this->Paginator->paginate());
  }

}
?>
