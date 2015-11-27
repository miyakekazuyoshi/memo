<?php
class Article extends AppModel{
	public $belongsTo=['Item','User'];

	public $hasMany=['Comment'];

	public $validate=[
		'title'=>[
			'rule'=>'notblank',
			'message'=>'タイトルを入力してください。'
		],
		
		'content'=>[
			'rule'=>'notBlank',
			'message'=>'本文を入力してください。'
			]
	];

}