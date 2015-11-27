<?php
class LoginController extends AppController{

	public $uses=['User'];

	public function logout(){
		$this->Session->delete('auth');
	}

	public function beforeFilter(){

	}

	public function index(){
		if($this->request->is(['post','put'])){
			$data=$this->request->data;

			$user=$this->User->findByPassword($data['User']['password']);
				if($user&&$user->User['User']['password']==$data['User']['password'])
					$this->Session->write('auth',true);
					$this->redirect(['controller'=>'home','action'=>'index']);
		}
	}
}