<?php
class UsersController extends AppController {

	var $name = 'Users';

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function login() {
    	//Auth Magic
		if ($this->Session->read('Auth.User')) {
			//$this->Session->setFlash('You are logged in!');
			$this->Session->setFlash($this->Session->read('Auth.User'));
			$this->redirect(array('controller' => 'groups', 'action' => 'index'), null, false);
		}
    }
	
    function logout() {
    	//Leave empty for now.
		$this->Session->setFlash('Good-Bye');
    	$this->redirect($this->Auth->logout());
    }
	
	function beforeFilter() {
    	parent::beforeFilter();
    	$this->Auth->allow(array('*'));
    }
	
//--------------------------------to delete ------------------------------
    function initDB() {
    $group =& $this->User->Group;
    //Allow admins to everything
	$this->Acl->allow(array( 'model' => 'Group', 'foreign_key' => 1), 'controllers');
    echo "all done";
    exit;
    }

}
