<?php
App::uses('TipoPessoa', 'Model');

/**
 * TipoPessoa Test Case
 *
 */
class TipoPessoaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tipo_pessoa', 'app.pessoa', 'app.ramo_atividade', 'app.contrato', 'app.produto', 'app.conta_corrente', 'app.pessoas_conta_corrente', 'app.contato', 'app.pessoas_contato', 'app.documento', 'app.pessoas_documento', 'app.endereco', 'app.pessoas_endereco', 'app.iteracao', 'app.pessoas_iteracao', 'app.tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoPessoa = ClassRegistry::init('TipoPessoa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoPessoa);

		parent::tearDown();
	}

}