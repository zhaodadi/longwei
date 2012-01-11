<?php
class IngredientsPricesController extends AppController {

	var $name = 'IngredientsPrices';

	function index() {
		$this->IngredientsPrice->recursive = 0;
		$this->set('ingredientsPrices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ingredients price', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ingredientsPrice', $this->IngredientsPrice->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->IngredientsPrice->create();
			if ($this->IngredientsPrice->save($this->data)) {
				$this->Session->setFlash(__('The ingredients price has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingredients price could not be saved. Please, try again.', true));
			}
		}
		$ingredients = $this->IngredientsPrice->Ingredient->find('list');
		$this->set(compact('ingredients'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ingredients price', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->IngredientsPrice->save($this->data)) {
				$this->Session->setFlash(__('The ingredients price has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingredients price could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->IngredientsPrice->read(null, $id);
		}
		$ingredients = $this->IngredientsPrice->Ingredient->find('list');
		$this->set(compact('ingredients'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ingredients price', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->IngredientsPrice->delete($id)) {
			$this->Session->setFlash(__('Ingredients price deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ingredients price was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
