<?php
class Comment extends AppModel{

	public $belongsTo=['Article'];

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