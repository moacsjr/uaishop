<?php
App::uses('PessoasContasCorrente', 'Model');

/**
 * PessoasContasCorrente Test Case
 *
 */
class PessoasContasCorrenteTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pessoas_contas_corrente', 'app.pessoa', 'app.ramos_atividade', 'app.tipos_pessoa', 'app.contrato', 'app.produto', 'app.pessoas_contato');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PessoasContasCorrente = ClassRegistry::init('PessoasContasCorrente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PessoasContasCorrente);

		parent::tearDown();
	}

}