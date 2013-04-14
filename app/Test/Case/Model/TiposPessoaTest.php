<?php
App::uses('TiposPessoa', 'Model');

/**
 * TiposPessoa Test Case
 *
 */
class TiposPessoaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tipos_pessoa');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TiposPessoa = ClassRegistry::init('TiposPessoa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TiposPessoa);

		parent::tearDown();
	}

}