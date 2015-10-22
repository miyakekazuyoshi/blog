<?php
class ArticlesController extends AppController{

	public $uses=['Article','User','Comment'];

	public function beforeFiltre(){
		if(!$this->Session->check('auth')){

		}
	}

	public function index(){
		$this->set('articles',$this->Article->find('all'));
		
	}

	public function add(){
		if($this->request->is('post')){
			$user=$this->Session->read('user');			

			$this->request->data['Article']['user_id']=$user['User']['id'];


			$this->Article->save($this->request->data);
			$this->Session->setFlash('保存に成功しました。');		
			$this->redirect(['controller'=>'menu']);
		}
	
	}
	public function edit($id){
		$article=$this->Article->findById($id);

		if($this->request->is(['put','post'])){
			$this->Article->id=$id;
				if($this->Article->save($this->request->data)){
					$this->Session->setFlash('保存に成功しました。');
					$this->redirect(['action'=>'index']);
				}
		}
		if(empty($this->request->data)){
			$this->request->data=$article;
		}
	
		//$this->set('users',$this->Article->User->find('list'));
		//$this->render('add');

	}
	public function view($id){
		$article=$this->Article->findById($id);

		$this->set('article',$article);
	
		$comment=$this->Comment->findById($id);

		$this->set('comment',$comment);
	
	}

	public function delete($id){
		
		$this->Article->id=$id;
		$this->Article->delete();

		$this->Session->setFlash('データの削除が完了しました。');
		$this->redirect(['action'=>'index']);

	}
}