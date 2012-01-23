<?php
class IngredientsStock extends AppModel {
	var $name = 'IngredientsStock';
	var $displayField = 'ingredient_id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Ingredient' => array(
			'className' => 'Ingredient',
			'foreignKey' => 'ingredient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
