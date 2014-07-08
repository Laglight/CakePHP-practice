<?php

App::uses('Model', 'Model');

class Keyword extends AppModel {

	public $belongsTo = array(
		'category' => array(
			'className' => 'category',
			'foreignKey' => 'category_id',
		)
	);
	
}
