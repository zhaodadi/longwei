<?php
class Ingredient extends AppModel {
	var $name = 'Ingredient';
	var $hasOne = array(
			'IngredientsStock' => array(
				'className' => 'IngredientsStock',
			'foreignKey' => 'ingredient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '此项必填',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'IngredientsPrice' => array(
				'className' => 'IngredientsPrice',
			'foreignKey' => 'ingredient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
