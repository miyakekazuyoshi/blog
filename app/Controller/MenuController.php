<?php
class MenuController extends AppController{

	public function index(){
		$msg='マイページ';
		$this->set('msg',$msg);
		
	}
}