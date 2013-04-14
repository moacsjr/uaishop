<?php
App::uses('AppModel', 'Model');
/**
 * Valor Model
 *
 * @property Caracteristica $Caracteristica
 */
class Valor extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descricao';

	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

/**
 * Associações belongsTo
 *
 * @var array
 */
	public $belongsTo = array(
		'Caracteristica' => array(
			'className' => 'Caracteristica',
			'foreignKey' => 'caracteristica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}