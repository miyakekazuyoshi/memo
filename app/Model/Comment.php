<?php
class Comment extends AppModel{
	
	public $belongsTo=['Article'];

	

	public $validate=[
		'content'=>[
			'rule'=>'notBlank',
			'message'=>'本文を入力してください。'
		]
	];

}