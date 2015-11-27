<?php
class Item extends AppModel{
	
	public $hasMany=['Article'];

	

	public $validate=[
		'type'=>[
			'rule'=>'notEmpty',
			'message'=>'入力は必須です。'
		]
	];
}