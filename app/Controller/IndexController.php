<?php
class IndexController extends AppController{
	public $uses=['Article'];

	public function index(){
		$data=$this->Article->find('all',['order'=>'created DESC','limit'=>10]);
		$this->set('articles',$data);
		
	}

}