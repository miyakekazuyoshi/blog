<?php
class CommentsController extends AppController{

	public function index(){
		$this->set('comments',$this->Comment->find('all'));
	}

	public function add(){
		if($this->request->is('post')){
			$this->Comment->save($this->request->data);
			$this->Session->setFlash('保存に成功しました。');
			$this->redirect(['Controller'=>'Menu','action'=>'index']);
		}
	}

	public function edit($id){
		$comment=$this->Comment->findById($id);

			if($this->request->is('put','post')){
				$this->Comment->is=$id;

					if($this->Coomment->save($this->request->data)){
						$this->Session->setFlash('保存に成功しました。');
					}
			}		
	}

	public function view($id){
		$comment=$this->Comment->findById($id);
		$this->set('comment',$comment);
	}

	public function delete($id){
		$this->Comment->id=$id;
		$this->Comment->delete();

		$this->Session->setFlash('データの削除に成功しました。');
		$this->redirect(['action'=>'index']);
	}
}