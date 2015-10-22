<?php

class User extends AppModel{
	
	public $hasMany=['Article'];

	public $validate=[
		'password'=>[
			'rule1'=>[
				'rule'=>'notEmpty'
			],

			'rule2'=>[
				'rule'=>['minLength',8],
					'message'=>'パスワードは８文字以上です。'
			]
		],

		'age'=>[
			'rule'=>'notEmpty',
				'message'=>'年齢は必須です。'
		],

		'name'=>[
			'rule'=>'notEmpty',
				'message'=>'名前は必須です。'
		]

	];
}