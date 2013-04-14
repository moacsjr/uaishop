<?php
App::uses('PessoasDocumento', 'Model');

/**
 * PessoasDocumento Test Case
 *
 */
class PessoasDocumentoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pessoas_documento', 'app.tipo_documento', 'app.pessoa', 'app.ramo_atividade', 'app.tipo_pessoa', 'app.contrato', 'app.produto', 'app.conta_corrente', 'app.pessoas_conta_corrente', 'app.contato', 'app.pessoas_contato', 'app.documento', 'app.endereco', 'app.pessoas_endereco', 'app.iteracao', 'app.pessoas_iteracao', 'app.tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PessoasDocumento = ClassRegistry::init('PessoasDocumento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PessoasDocumento);

		parent::tearDown();
	}

}