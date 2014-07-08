<?php

App::uses('Controller', 'Controller');

class KeywordsController extends AppController {
	
	public function generate() {
		
		$this->set('data', $this->Keyword->find('all'));
		
	}
	
	public function add() {
		
		
		
	}
	
}