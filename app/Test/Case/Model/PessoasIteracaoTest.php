<?php
App::uses('PessoasIteracao', 'Model');

/**
 * PessoasIteracao Test Case
 *
 */
class PessoasIteracaoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pessoas_iteracao', 'app.pessoa', 'app.ramo_atividade', 'app.tipo_pessoa', 'app.contrato', 'app.produto', 'app.conta_corrente', 'app.pessoas_conta_corrente', 'app.contato', 'app.pessoas_contato', 'app.documento', 'app.pessoas_documento', 'app.endereco', 'app.pessoas_endereco', 'app.iteracao', 'app.tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PessoasIteracao = ClassRegistry::init('PessoasIteracao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PessoasIteracao);

		parent::tearDown();
	}

}