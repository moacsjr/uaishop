?>
<?php
/**
 * PessoaFixture
 *
 */
class PessoaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'ramo_atividade_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'tipo_pessoa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'nome' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fone1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fone2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'website' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'data_cadastro' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'data_alteracao' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_pessoas_ramos_atividades_idx' => array('column' => 'ramo_atividade_id', 'unique' => 0),
			'fk_pessoas_tipos_pessoas1_idx' => array('column' => 'tipo_pessoa_id', 'unique' => 0)
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
			'ramo_atividade_id' => 1,
			'tipo_pessoa_id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'fone1' => 'Lorem ip',
			'fone2' => 'Lorem ip',
			'email' => 'Lorem ipsum dolor sit amet',
			'website' => 'Lorem ipsum dolor sit amet',
			'data_cadastro' => '2013-04-05 15:12:26',
			'data_alteracao' => '2013-04-05 15:12:26'
		),
	);
}