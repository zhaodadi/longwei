<?php
/* IngredientsStock Fixture generated on: 2012-01-14 17:25:46 : 1326533146 */
class IngredientsStockFixture extends CakeTestFixture {
	var $name = 'IngredientsStock';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'primary'),
		'ingredient_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 100),
		'stock' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'consume' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'difference' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'modifier' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 400, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'extra' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 400, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'ingredient_id' => 1,
			'stock' => 1,
			'consume' => 1,
			'difference' => 1,
			'modifier' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-01-14 17:25:46',
			'modified' => '2012-01-14 17:25:46',
			'extra' => 'Lorem ipsum dolor sit amet'
		),
	);
}
