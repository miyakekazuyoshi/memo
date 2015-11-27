<?php
class CommentsController extends AppController{



	public function index(){
		$this->set('comments',$this->Comment->find('all'));
		
	}

	public function add(){
		if($this->request->is('post')){
			$this->Comment->save($this->request->data);

			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'index']);
		}
			$this->set('articles',$this->Comment->Article->find('list',array(
				'fields'=>array('Article.title'))));	
	}

	public function edit($id){
		$comment=$this->Comment->findById($id);

		if($this->request->is(['post','put'])){
			$this->Comment->is=$id;

				if($this->Comment->save($this->request->data)){
					$this->Flash->set('保存に成功しました。');
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

		$this->Flash->set('データの削除が完了しました。');
		$this->redirect(['action'=>'index']);
	}
	
}
