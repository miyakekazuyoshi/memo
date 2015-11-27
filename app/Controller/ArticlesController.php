<?php
class ArticlesController extends AppController{

	public $components=array('Paginator');

	public $paginator=array(
		'limit'=>5,
		'order'=>array('id'=>'asc'),
	);

	public function index(){		
		$this->set('articles',$this->paginate());
		$data=$this->request->data;
		
			$this->Article->find(array('conditions'=>array('Article.title LIKE'=>'%'.'検索したいワード'.'%')));
			$this->set('Articles',$data);			
						
	}


	public function add(){
		if($this->request->is('post')){
			
			$this->Article->save($this->request->data);

			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'index']);
		}
		
		$this->set('users',$this->Article->User->find('list'));
		$this->set('items',$this->Article->Item->find('list',array(
			'fields'=>array('Item.type'))));		
	}

	public function edit($id){
		$article=$this->Article->findById($id);

		if($this->request->is(['post','put'])){
			$this->Articlre->id=$id;
				if($this->Article->save($this->request->data)){
					$this->Flash->set('保存に成功しました。');
					$this->redirect(['action'=>'index']);
				}
		}
	}

	public function delete($id){
		$this->Article->id=$id;
		$this->Article->delete();

		$this->Flash->set('データの削除が完了しました。');
		$this->redirect(['action'=>'index']);
	}
	
	public function view($id){
		$article=$this->Article->findById($id);
		$this->set('article',$article);
			
	}

	public function search(){
		
	}
}