<?php

class BasketsController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
	 }
	public function admin_index(){
		$data = $this->Basket->find('all');
		$this->set(compact('data'));
	}

	public function index(){

	}

	public function send(){
		debug($this->request->data);
	}
}