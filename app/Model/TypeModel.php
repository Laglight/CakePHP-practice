<?php

App::uses('Model', 'Model');


class Type extends AppModel {
	
	// Model Table validation:
	public $validate = array(
		'type_index' =>,
		'type_name' => array(
			'maxlimit' => array(
				'rule' => array('maxLength', 50),
				'message' => 'error: type_name length > 50',
			),
			'required' => array(
				'required' => true,
				'message' => 'error: Type_name is null',
			),
		),
		'type_frq' =>array(
			'number' => array(
				'rule' => 'numeric',
				'message' => 'error: type_freq needs to be a number',
			),
			'required' => array(
				'required' => true,
				'message' => 'error: Type_frq is null',
			),
		),
	);
	
}