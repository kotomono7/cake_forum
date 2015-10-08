<?php
App::uses('AppController', 'Controller');

class PostsController extends AppController {

	public $components = array('Paginator');

  public function beforeFilter() {
  	parent::beforeFilter();
  	$this->Auth->allow('index', 'view');
  }

  public function add($topicId=null) {
    if ($this->request->is('post')) {
      $this->request->data['Post']['user_id'] = $this->Auth->user('id');

      if ($this->Post->save($this->request->data)) {
        $this->Session->setFlash(__('Post has been created.'), 'flash/success');
        $this->redirect(array('controller' => 'topics', 'action' => 'view', $this->request->data['Post']['topic_id']));
      }

    } else {
      if (!$this->Post->Topic->exists($topicId)) {
        throw new NotFoundException(__('Invalid topic!'), 'flash/error');
      }

      $this->Post->Topic->recursive = -1;
      $topic = $this->Post->Topic->read(null, $topicId);
      $this->set('topic', $topic);

      $this->Post->Forum->recursive = -1;
      $forum = $this->Post->Forum->read(null, $topic['Topic']['forum_id']);
      $this->set('forum', $forum);
    }
  }

}
?>
