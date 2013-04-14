<?php
App::uses('Produto', 'Model');

/**
 * Produto Test Case
 *
 */
class ProdutoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.produto', 'app.contrato', 'app.pessoa', 'app.ramo_atividade', 'app.tipo_pessoa', 'app.conta_corrente', 'app.pessoas_conta_corrente', 'app.contato', 'app.pessoas_contato', 'app.documento', 'app.pessoas_documento', 'app.endereco', 'app.pessoas_endereco', 'app.iteracao', 'app.pessoas_iteracao', 'app.tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Produto = ClassRegistry::init('Produto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Produto);

		parent::tearDown();
	}

}