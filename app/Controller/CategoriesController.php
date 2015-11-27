<?php
class CategoriesController extends AppController{

	public function index(){
		$this->set('categories',$this->Category->find('all'));
	}

	public function add(){
		if($this->request->is('post')){
			$this->Category->save($this->request->data);
			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'index']);
		}
	}
	public function group($id){
		$this->set('article',$this->Category->Article->findByCategoriesId($id));	
	}
}