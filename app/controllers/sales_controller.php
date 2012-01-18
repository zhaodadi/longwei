<?php
class SalesController extends AppController {

	var $name = 'Sales';

	function index() {
		$this->redirect(array('action' => 'chakan'));
		$this->Sale->recursive = 0;
		$this->set('sales', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sale', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sale', $this->Sale->read(null, $id));
	}

	function add() {
		//$this->layout = 'tianjia';
		//load receipt model and calculate ingredients stuff.
		$this->loadModel('Receipt');
		$receipts = $this->Receipt->findAllByProductId(4);
		foreach($receipts as $receipt):  
			$ingredient_id = $receipt['Receipt']['ingredient_id'];
			$ingredient_amount = $receipt['Receipt']['amount'];
		    $ingredient_stocks = $this->Receipt->Ingredient->IngredientsStock->findAllByIngredientId($ingredient_id);
			//print_r($ingredient_stocks);
			//$newConsume = $ingredient_stocks[0]['IngredientsStock']['consume'] + $ingredient_amount * $this->data['Sale']['amount'];// new consumption
			//$newStock = $ingredient_stocks[0]['IngredientsStock']['stock'] - $ingredient_amount * $this->data['Sale']['amount'];
			$newConsume = $ingredient_stocks[0]['IngredientsStock']['consume'] + $ingredient_amount * 100;// new consumption
			$newStock = $ingredient_stocks[0]['IngredientsStock']['stock'] - $ingredient_amount * 100;
			//$newDifference = $newStock - $newConsume; 
			echo  $newConsume." ".$newStock;
			//$this->Receipt->Ingredient->IngredientsStock->saveField('stock', $newStock);
			//$this->Receipt->Ingredient->IngredientsStock->saveField('consume', $newConsume);
			//$this->Receipt->Ingredient->IngredientsStock->saveField('difference', $newDifference);

			echo "\nneed ingredient ".$ingredient_id."-- ".$ingredient_amount." tons   \n";
		endforeach;
		if (!empty($this->data)) {
			$this->Sale->create();
			print_r($this->data);
			echo "产品ID：".$this->data['Sale']['product_id']."; 数量:".$this->data['Sale']['amount'];
			/*if ($this->Sale->save($this->data)) {
				$this->Session->setFlash(__('The sale has been saved', true));
				$this->redirect(array('action' => 'chakan'));
			} else {
				$this->Session->setFlash(__('The sale could not be saved. Please, try again.', true));
			}*/
		}
		$products = $this->Sale->Product->find('list');
		$users = $this->Sale->User->find('list');
		$this->set(compact('products', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sale', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sale->save($this->data)) {
				$this->Session->setFlash(__('The sale has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sale->read(null, $id);
		}
		$products = $this->Sale->Product->find('list');
		$users = $this->Sale->User->find('list');
		$this->set(compact('products', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sale', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sale->delete($id)) {
			$this->Session->setFlash(__('Sale deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sale was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	//---
	//|||
	//---
	function chakan($userID = null) {
		$this->layout = 'tianjia';
		if(!$userID) {
			$this->set('orders',$this->Sale->find('all'));
		} else {
			$this->set('orders',$this->Sale->findAllByUserId($userID));
		}
	}
}
