<?php
class EntrysController extends AppController{

	public $uses=['User'];

	public function index(){
		$this->redirect(['controller'=>'users','action'=>'add']);
	}
}