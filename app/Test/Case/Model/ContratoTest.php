<?php
App::uses('Contrato', 'Model');

/**
 * Contrato Test Case
 *
 */
class ContratoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.contrato', 'app.pessoa', 'app.produto');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contrato = ClassRegistry::init('Contrato');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contrato);

		parent::tearDown();
	}

}