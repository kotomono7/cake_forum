<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		// $this->Auth->allow();
	}

	// initialize ACL for each groups
	public function initDB() {
		$group = $this->User->Group;

		// Allow admin to everything
		$group->id = 1;
		$this->Acl->allow($group, 'controllers');

		// allow member to forums, topics and post
		$group->id = 2;
		$this->Acl->deny($group, 'controllers');
		$this->Acl->allow($group, 'controllers/Forums');
		$this->Acl->allow($group, 'controllers/Topics');
		$this->Acl->allow($group, 'controllers/Posts');

		// allow basic users to log out
		$this->Acl->allow($group, 'controllers/Users/logout');

		// add an exit to avoid an ugly "missing views" error message
		echo "All done!";
		exit;
	}

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * User profile
 *
 */

	public function profile() {

	}

/**
 * login and logout method
 *
 */
	public function login() {
		// redirect logged user
		if ($this->Session->read('Auth.User')) {
			$this->Session->setFlash(__('You are logged in!'), 'flash/success');
			$this->redirect($this->Auth->redirectUrl());
		}

		if($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Session->setFlash(__('Welcome '.$this->Session->read('Auth.User.first_name').' '.$this->Session->read('Auth.User.last_name').'!'), 'flash/success');
				$this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Session->setFlash(__('Invalid username or password! Please, try again.'), 'flash/error');
			}
		}
	}

	public function logout() {
		$this->Session->setFlash(__('Goodbye, see you later.'), 'flash/success');
		$this->redirect($this->Auth->logout());
	}

}
?>
