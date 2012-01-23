<?php
class SalesSchedulesController extends AppController {

	var $name = 'SalesSchedules';

	function index() {
		$this->SalesSchedule->recursive = 0;
		$this->set('salesSchedules', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sales schedule', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('salesSchedule', $this->SalesSchedule->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SalesSchedule->create();
			if ($this->SalesSchedule->save($this->data)) {
				$this->Session->setFlash(__('The sales schedule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sales schedule could not be saved. Please, try again.', true));
			}
		}
		$sales = $this->SalesSchedule->Sale->find('list');
		$users = $this->SalesSchedule->User->find('list');
		$this->set(compact('sales', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sales schedule', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SalesSchedule->save($this->data)) {
				$this->Session->setFlash(__('The sales schedule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sales schedule could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SalesSchedule->read(null, $id);
		}
		$sales = $this->SalesSchedule->Sale->find('list');
		$users = $this->SalesSchedule->User->find('list');
		$this->set(compact('sales', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sales schedule', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SalesSchedule->delete($id)) {
			$this->Session->setFlash(__('Sales schedule deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sales schedule was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
