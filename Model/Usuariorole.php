<?php
App::uses('AppModel', 'Model');
/**
 * Usuariorole Model
 *
 * @property Users $Users
 * @property Rols $Rols
 */
class Usuariorole extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'users_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'rols_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Users' => array(
			'className' => 'Users',
			'foreignKey' => 'users_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Rols' => array(
			'className' => 'Rols',
			'foreignKey' => 'rols_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
