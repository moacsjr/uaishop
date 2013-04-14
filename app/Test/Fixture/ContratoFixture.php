?>
<?php
/**
 * ContratoFixture
 *
 */
class ContratoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'pessoa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'produto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'data_contrato' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'data_vencimento' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dia_pagamento' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ativo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cancelado' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'data_cancelamento' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'motivo_cancelamento' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_contratos_pessoas1_idx' => array('column' => 'pessoa_id', 'unique' => 0),
			'fk_contratos_produtos1_idx' => array('column' => 'produto_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'pessoa_id' => 1,
			'produto_id' => 1,
			'data_contrato' => 'Lorem ipsum dolor sit amet',
			'data_vencimento' => 'Lorem ipsum dolor sit amet',
			'dia_pagamento' => 'Lorem ipsum dolor sit amet',
			'descricao' => 'Lorem ipsum dolor sit amet',
			'ativo' => 'Lorem ipsum dolor sit amet',
			'cancelado' => 'Lorem ipsum dolor sit amet',
			'data_cancelamento' => 'Lorem ipsum dolor sit amet',
			'motivo_cancelamento' => 'Lorem ipsum dolor sit amet'
		),
	);
}