<?php
App::uses('AppModel', 'Model');
/**
 * TipoDado Model
 *
 * @property Caracteristica $Caracteristica
 */
class TipoDado extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descricao';

	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

/**
 * Associações hasMany
 *
 * @var array
 */
	public $hasMany = array(
		'Caracteristica' => array(
			'className' => 'Caracteristica',
			'foreignKey' => 'tipo_dado_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}