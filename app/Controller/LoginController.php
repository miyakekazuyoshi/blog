<?php
class LoginController extends AppController{

	public function logout(){
		$this->Session->delete('auth');
	}

	public function beforeFiltre(){
			
	}

	public $uses=['User'];

	public function index(){
		if($this->request->is('post')){
			$data=$this->request->data;
			$user=$this->User->findByPassword($data['User']['password']);
				if($user&&$user['User']['password']==$data['User']['password']){
					$this->Session->write('auth',true);
					
					$this->redirect(['controller'=>'menu','action'=>'index']);
				}
		}
	}
}
