<?php

require(dirname(dirname(__FILE__)) . '/' . basename(__FILE__));

// メール
$config['contact']['mail'] = array(
		// 資料請求フォーム - 管理者向け
	'send' => array(
		'subject'		=> 'Webからお問い合わせがありました。',
		'to'			=> 'system@phonogram.co.jp',
		'from'			=> 'system@phonogram.co.jp',
		'from_name'		=> '株式会社フォノグラム',
		'envelope_from'	=> NULL,
	),
	// 資料請求フォーム - 一般ユーザー向け
	'reply' => array(
		'subject'		=> '【ALLアセットパートナーズ】お問い合わせを受け付けました。',
		'from'			=> 'system@phonogram.co.jp',
		'from_name'		=> '株式会社ALLアセットパートナーズ　',
		'envelope_from'	=> NULL,
	),
);
