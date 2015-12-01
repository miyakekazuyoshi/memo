<?php
class LoginController extends AppController{

	public $components=array('Auth');

	public function logout(){
		$this->Session->delete('auth');
	}

	public function beforeFilter(){

	}

	public $uses=['User'];

	public function index(){
		if($this->request->is(['post','put'])){
			$data=$this->request->data;


			$user=$this->User->findByPassword($data['User']['password']);
				if($user&&$user['User']['password']==$data['User']['password'])
					

				$this->redirect(['controller'=>'Menu','action'=>'index']);
		}
	}
}