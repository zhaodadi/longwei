<?php
class IngredientsStocksController extends AppController {

	var $name = 'IngredientsStocks';

	function index() {
		$this->IngredientsStock->recursive = 0;
		$this->set('ingredientsStocks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ingredients stock', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ingredientsStock', $this->IngredientsStock->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->IngredientsStock->create();
			if ($this->IngredientsStock->save($this->data)) {
				$this->Session->setFlash(__('The ingredients stock has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingredients stock could not be saved. Please, try again.', true));
			}
		}
		$ingredients = $this->IngredientsStock->Ingredient->find('list');
		$this->set(compact('ingredients'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ingredients stock', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->IngredientsStock->save($this->data)) {
				$this->Session->setFlash(__('The ingredients stock has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingredients stock could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IngredientsStock->read(null, $id);
		}
		$ingredients = $this->IngredientsStock->Ingredient->find('list');
		$this->set(compact('ingredients'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ingredients stock', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IngredientsStock->delete($id)) {
			$this->Session->setFlash(__('Ingredients stock deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ingredients stock was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
