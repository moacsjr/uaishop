<?php
App::uses('PessoasContasCorrentesController', 'Controller');

/**
 * TestPessoasContasCorrentesController *
 */
class TestPessoasContasCorrentesController extends PessoasContasCorrentesController {
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
 * PessoasContasCorrentesController Test Case
 *
 */
class PessoasContasCorrentesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pessoas_contas_corrente', 'app.pessoa', 'app.ramo_atividade', 'app.tipo_pessoa', 'app.contrato', 'app.produto', 'app.contas_corrente', 'app.contato', 'app.pessoas_contato', 'app.documento', 'app.pessoas_documento', 'app.endereco', 'app.pessoas_endereco', 'app.iteracao', 'app.pessoas_iteracao', 'app.tipo', 'app.tipos_pessoa');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PessoasContasCorrentes = 	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PessoasContasCorrentes);

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