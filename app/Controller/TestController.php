<?php

class TestController extends AppController {
	
	public $helpers = array('Html', 'Form');
	public $uses = 'Type'; // Change to do a different test.
	
	public function index() {
		$this->set('data', $this->Type->find('all'));
	}
	
	

}