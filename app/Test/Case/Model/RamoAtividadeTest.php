<?php
App::uses('RamoAtividade', 'Model');

/**
 * RamoAtividade Test Case
 *
 */
class RamoAtividadeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ramo_atividade', 'app.pessoa', 'app.tipo_pessoa', 'app.contrato', 'app.produto', 'app.conta_corrente', 'app.pessoas_conta_corrente', 'app.contato', 'app.pessoas_contato', 'app.documento', 'app.pessoas_documento', 'app.endereco', 'app.pessoas_endereco', 'app.iteracao', 'app.pessoas_iteracao', 'app.tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RamoAtividade = ClassRegistry::init('RamoAtividade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RamoAtividade);

		parent::tearDown();
	}

}