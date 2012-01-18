<?php
class IngredientsController extends AppController {

	var $name = 'Ingredients';

	function index() {
		$this->Ingredient->recursive = 2;
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
				$newId = $this->Ingredient->id;
				$this->Ingredient->IngredientsStock->create();
				$this->Ingredient->IngredientsStock->save(array('IngredientsStock' => 
																	array ('ingredient_id' => $newId)));

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
		$this->set('ingredients',$this->Ingredient->find('all'));
	}
	
	function chakan($userID = null) {
		$this->layout = 'tianjia';
		
		$this->set('ingredients',$this->Ingredient->find('all'));
		
		/*$options['joins'] = array(
			array('table' => 'ingredients_prices',
				  'alias' => 'IngredientsPrice',
				  'type' => 'LEFT',
				  'conditions' => array(
				      'Ingredient.id = IngredientsPrice.ingredient_id')
			));*/
		$options['fields'] = array('IngredientsPrice.id','IngredientsPrice.price','IngredientsPrice.ingredient_id','IngredientsPrice.supplier','IngredientsPrice.month');
		$options['recursive'] = -1; 
		$options['conditions'] = array ("DATE_FORMAT(IngredientsPrice.month,'%y-%m') >" => date('y-m', strtotime("-2 months")));
		$options['order'] = array('IngredientsPrice.month');
		$this->set('ingredients_prices',$this->Ingredient->IngredientsPrice->find('all', $options));
	}
	
	function zengjiakucun() {
		$this->layout = 'tianjia';
		
		if (!empty($this->data)) {
			$ingredientId = $this->data['Ingredient']['ingredient_id'];
			
			// first update the stock
		    $old_stocks = $this->Ingredient->IngredientsStock->findAllByIngredientId($ingredientId);
			$newStock = $old_stocks [0]['IngredientsStock']['stock'] + $this->data['IngredientsStock']['stock'];
			
			
			// then update the price for this month
			$newPrice = array (
						   	'IngredientsPrice' => array (
										'supplier' => $this->data['IngredientsPrice'][0]['supplier'],
										'ingredient_id' => $ingredientId,
										'month' => date('Y-m-d', strtotime("now")),
										'price' => $this->data['IngredientsPrice'][0]['price']
							));
							
			if($this->Ingredient->IngredientsPrice->save($newPrice) && 
			$this->Ingredient->IngredientsStock->updateAll(array('IngredientsStock.stock' => "$newStock"),array('IngredientsStock.ingredient_id =' => "$ingredientId"))) {
				$this->Session->setFlash(__('The ingredients stock has been saved', true));
				$this->redirect(array('action' => 'chakan'));
			} else {
				$this->Session->setFlash(__('The ingredients stock could not be saved. Please, try again.', true));
			}
		}
		$ingredients = $this->Ingredient->find('list');
		$this->set(compact('ingredients'));
	}
}
