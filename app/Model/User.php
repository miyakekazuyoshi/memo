<?php
class User extends AppModel{

	public $hasMany=['Article'];

	public $validate=[
		'password'=>[
			'rule1'=>[
				'rule'=>'notBlank'
			],
			'rule2'=>[
				'rule'=>['minLength',8],
				'message'=>'パスワードは8文字以上です。'
			]
		],

		'name'=>[
			'rule'=>'notBlank',
				'message'=>'名前を入力してください。'
		]

	];
}