<?php
class IndexController extends AppController{

	public $uses=['Article'];

	public function index(){
		$data=$this->Article->find('all');
		$this->set('articles',$data);
	}
}