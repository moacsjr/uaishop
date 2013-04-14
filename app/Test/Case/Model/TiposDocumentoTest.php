<?php
App::uses('TiposDocumento', 'Model');

/**
 * TiposDocumento Test Case
 *
 */
class TiposDocumentoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tipos_documento');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TiposDocumento = ClassRegistry::init('TiposDocumento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TiposDocumento);

		parent::tearDown();
	}

}