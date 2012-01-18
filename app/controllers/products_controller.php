<?php
class ProductsController extends AppController {

	var $name = 'Products';

	function index() {
		$this->Product->recursive = -1;
		$this->set('products', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

	function add() {
		$this->layout = 'tianjia';
		if (!empty($this->data)) {
			$this->Product->create();
			if ($this->Product->saveAll($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		$ingredients = $this->Product->Receipt->Ingredient->find('list');
		$this->set(compact('products', 'ingredients'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for product', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->delete($id)) {
			$this->Session->setFlash(__('Product deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Product was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	//---
	//|||
	//---
	function chakan() {
		$this->layout = 'tianjia';
		$this->set('products',$this->Product->find('all'));
		
		$options['joins'] = array(
			array('table' => 'ingredients',
				  'alias' => 'Ingredient',
				  'type' => 'LEFT',
				  'conditions' => array(
				      'Ingredient.id = Receipt.ingredient_id')
			));
		$options['fields'] = array('Receipt.product_id','Ingredient.name','Receipt.amount');
		$options['recursive'] = -1; 
		$this->set('receipts',$this->Product->Receipt->find('all',$options));
	}
}
