?>
<?php
/**
 * PessoasDocumentoFixture
 *
 */
class PessoasDocumentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'numero' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipo_documento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'pessoa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_pessoas_documentos_tipos_documentos1_idx' => array('column' => 'tipo_documento_id', 'unique' => 0),
			'fk_pessoas_documentos_pessoas1_idx' => array('column' => 'pessoa_id', 'unique' => 0)
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
			'numero' => 'Lorem ipsum dolor sit amet',
			'tipo_documento_id' => 1,
			'pessoa_id' => 1
		),
	);
}