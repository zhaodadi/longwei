<?php
class IngredientsController extends AppController {

	var $name = 'Ingredients';

	function index() {
		$this->Ingredient->recursive = 0;
		$this->set('ingredients', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ingredient', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ingredient', $this->Ingredient->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Ingredient->create();
			if ($this->Ingredient->save($this->data)) {
				$this->Session->setFlash(__('The ingredient has been saved', true));
				$this->redirect(array('action' => 'pinzhong'));
			} else {
				$this->Session->setFlash(__('The ingredient could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ingredient', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ingredient->save($this->data)) {
				$this->Session->setFlash(__('The ingredient has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingredient could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ingredient->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ingredient', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ingredient->delete($id)) {
			$this->Session->setFlash(__('Ingredient deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ingredient was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	//---
	//|||
	//---
	function pinzhong($userID = null) {
		$this->layout = 'tianjia';
		if(!$userID) {
			$this->set('ingredients',$this->Ingredient->find('all'));
		} else {
			$this->set('ingredients',$this->Ingredient->findAllByUserId($userID));
		}
	}
	
	function chakan($userID = null) {
		$this->layout = 'tianjia';
		if(!$userID) {
			$this->set('ingredients',$this->Ingredient->find('all'));
		} else {
			$this->set('ingredients',$this->Ingredient->findAllByUserId($userID));
		}
	}
}
