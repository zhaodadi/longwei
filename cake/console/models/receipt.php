<?php
class Receipt extends AppModel {
	var $name = 'Receipt';
	var $displayField = 'product_id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasOne = array(
		'product' => array(
			'className' => 'Product',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Ingredient' => array(
			'className' => 'Ingredient',
			'foreignKey' => 'id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
