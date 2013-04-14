<?php
App::uses('AppModel', 'Model');
/**
 * Produto Model
 *
 * @property Classe $Classe
 * @property Marca $Marca
 */
class Produto extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nome';

	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

/**
 * Associações belongsTo
 *
 * @var array
 */
	public $belongsTo = array(
		'Classe' => array(
			'className' => 'Classe',
			'foreignKey' => 'classe_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Marca' => array(
			'className' => 'Marca',
			'foreignKey' => 'marca_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}