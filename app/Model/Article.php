<?php
class Article extends AppModel{

	public $belongsTo=['User'];

	public $validate=[

		'title'=>[
			'rule'=>'notEmpty',
			'message'=>'タイトルは必須です。'
		],

		'body'=>[
			'rule'=>'notEmpty',
			'message'=>'本文は必須です。'
		],
	];

}