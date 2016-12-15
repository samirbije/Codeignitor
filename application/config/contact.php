<?php

$config['contact'] = array(
	// バリデーション
	'validation' => array(
		array(
			'field' => 'name',
			'label' => '法人名(お名前)',
			'rules' => 'trim|required'
		),
		/*array(
			'field' => 'name_kana',
			'label' => '担当者名',
			'rules' => 'trim|required'
		),*/
		array(
			'field' => 'tel',
			'label' => '電話番号（携帯電話可）',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'email',
			'label' => 'メールアドレス',
			'rules' => 'trim|required|valid_email'
		),		
		array(
			'field' => 'building',
			'label' => 'お問い合わせ内容',
			'rules' => 'trim|is_numeric'
		),
		array(
			'field' => 'message',
			'label' => 'お問い合わせ詳細',
			'rules' => 'trim|required|xss_clean'
		),		
		
	),
);
