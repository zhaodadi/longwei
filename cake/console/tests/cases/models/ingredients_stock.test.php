<?php
/* IngredientsStock Test cases generated on: 2012-01-14 17:25:46 : 1326533146*/
App::import('Model', 'IngredientsStock');

class IngredientsStockTestCase extends CakeTestCase {
	var $fixtures = array('app.ingredients_stock', 'app.ingredient', 'app.user');

	function startTest() {
		$this->IngredientsStock =& ClassRegistry::init('IngredientsStock');
	}

	function endTest() {
		unset($this->IngredientsStock);
		ClassRegistry::flush();
	}

}
