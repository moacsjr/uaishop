<?php
App::uses('RamosAtividade', 'Model');

/**
 * RamosAtividade Test Case
 *
 */
class RamosAtividadeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ramos_atividade');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RamosAtividade = ClassRegistry::init('RamosAtividade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RamosAtividade);

		parent::tearDown();
	}

}