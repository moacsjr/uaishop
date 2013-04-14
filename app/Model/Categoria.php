<?php
App::uses('AppModel', 'Model');
/**
 * Categoria Model
 *
 * @property Classe $Classe
 */
class Categoria extends AppModel {
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
		'Classe' => array(
			'className' => 'Classe',
			'foreignKey' => 'categoria_id',
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