<?php
class ItemsController extends AppController{

	public function index(){
		$this->set('items',$this->Item->find('all'));
	}

	public function add(){
		if($this->request->is('post')){
			

			$this->Item->save($this->request->data);
			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'index']);
		}
		
	}

	public function edit(){
		$item=$this->Item->find('all');
		if($this->request->is('post','put')){
			$this->Item->id=$id;
				if($this->Item->save($this->request->data)){
					$this->Flash->set('保存に成功しました。');
					$this->redirect(['action'=>'index']);
				}
		}
	}

	public function delete($id){
		$this->Item->id=$id;
		$this->Item->delete();

		$this->Flash->set('データの削除が完了しました。');
		$this->redirect(['action'=>'index']);
	}

	public function view($id){
		$item=$this->Item->findByid($id);
		$this->set('item',$item);

	}
}