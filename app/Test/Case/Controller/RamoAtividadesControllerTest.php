<?php
App::uses('RamoAtividadesController', 'Controller');

/**
 * TestRamoAtividadesController *
 */
class TestRamoAtividadesController extends RamoAtividadesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * RamoAtividadesController Test Case
 *
 */
class RamoAtividadesControllerTestCase extends CakeTestCase {
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
		$this->RamoAtividades = 	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RamoAtividades);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}