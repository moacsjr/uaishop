<?php
App::uses('PessoasEndereco', 'Model');

/**
 * PessoasEndereco Test Case
 *
 */
class PessoasEnderecoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pessoas_endereco', 'app.pessoa', 'app.ramo_atividade', 'app.tipo_pessoa', 'app.contrato', 'app.produto', 'app.conta_corrente', 'app.pessoas_conta_corrente', 'app.contato', 'app.pessoas_contato', 'app.documento', 'app.pessoas_documento', 'app.endereco', 'app.iteracao', 'app.pessoas_iteracao', 'app.tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PessoasEndereco = ClassRegistry::init('PessoasEndereco');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PessoasEndereco);

		parent::tearDown();
	}

}