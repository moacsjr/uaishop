<?php
App::uses('AppModel', 'Model');
/**
 * Caracteristica Model
 *
 * @property TipoDado $TipoDado
 * @property Classe $Classe
 * @property Valor $Valor
 */
class Caracteristica extends AppModel {
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
		'TipoDado' => array(
			'className' => 'TipoDado',
			'foreignKey' => 'tipo_dado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * Associações hasMany
 *
 * @var array
 */
	public $hasMany = array(
		'Classe' => array(
			'className' => 'Classe',
			'foreignKey' => 'caracteristica_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Valor' => array(
			'className' => 'Valor',
			'foreignKey' => 'caracteristica_id',
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