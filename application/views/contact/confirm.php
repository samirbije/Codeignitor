<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<!--[if IE 6]> <html class="no-js ie6" lang="ja"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7" lang="ja"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8" lang="ja"> <![endif]-->
<html class="no-js" lang="ja-JP"><!-- InstanceBegin template="/Templates/contact.dwt" codeOutsideHTMLIsLocked="false" --> <!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">

<title>お問い合わせ｜株式会社ALLアセットパートナーズ</title>
<meta name="keywords" content="キーワード1,キーワード2,キーワード3,キーワード4,キーワード5,">
<meta name="description" content="">
<link rel="shortcut icon" href="/pfw_view/inc/images/common/ico/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>form/inc/pfw/css/pfw.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>form/inc/css/base.css">







<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>form/inc/css/l2_1column.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>form/inc/css/contents/form.css">
<!-- InstanceBeginEditable name="head" -->
<script type="text/javascript">
addEventListener('touchstart', function(e) {
	if(e.target.tagName == 'img') e.preventDefault();
}, false);
</script>
<!-- InstanceEndEditable -->


</head>
<body  id="pfw-form">
<div id="container">
	<!-- ヘッダー -->
	<header id="header">
		<div class="content-inner">
			
			<div id="logo"><a href="<?php echo base_url();?>/index.html"><img src="<?php echo base_url();?>form/inc/images/common/header/img_logo.png" alt="ALLアセットパートナーズ"></a></div>
			<!-- ヘッダーナビ -->
				<!-- /header -->
				<!-- グローバルナビ　-->
				<nav id="gnavi">
			<ul>
				<li class="nav01 "><a href="<?php echo base_url();?>a/index.html">HOME</a></li>
				<li class="nav02 "><a href="<?php echo base_url();?>b/index.html">トップメッセージ</a></li>
				<li class="nav03 "><a href="<?php echo base_url();?>c/index.html">事業紹介</a></li>
				<li class="nav04 "><a href="<?php echo base_url();?>d/index.html">チーム紹介</a></li>
				<li class="nav05 "><a href="<?php echo base_url();?>e/index.html">会社概要</a></li>
				<li class="nav06 "><a href="<?php echo base_url();?>e/index.html">採用情報</a></li>
				<!--<li class="nav07 "><a href="/e/index.html">IR情報</a></li>	-->										
			</ul>	
				</nav>
				
				<div class="header-contact">
			<a href="#" target="_blank" class="pure-button pure-button-primary"><i class="fa fa-envelope"></i>お問い合わせ</a>
				</div>
		</div>
	
	</header>

	<div id="main">
	
	
	<!--パンくず-->
	<nav id="topicspath">
		<ul>
			<li><a href="/">ホーム</a></li>
			<!-- InstanceBeginEditable name="topicspath" --><!-- InstanceEndEditable -->
			<li>お問い合わせ</li>
		</ul>
	<!-- / #topicspath --></nav>
	
	<h1>お問い合わせ</h1>

	<!--コンテンツエリア-->
	<div id="contents">
	<!-- InstanceBeginEditable name="contents" -->
	<div class="page_wrap">
		<div class="step clearfix">
			<p>入力内容をご確認ください</p>
			<ul class="clearfix">
				<li><strong><span>1</span>お問い合わせ内容の入力</strong></li>
				<li class="active"><strong><span>2</span>入力内容の確認</strong></li>
				<li class="last"><strong><span>3</span>お問い合わせ完了</strong></li>
			</ul>
		</div>
		<form action="<?php echo base_url('contact/send')?>" method="post" accept-charset="utf-8" id="main_form" novalidate="novalidate" autocomplete="off"><div style="display:none">
<input type="hidden" name="name" value="<?php echo $post['name']; ?>" />
<input type="hidden" name="address" value="<?php echo $post['address']; ?>" />
<input type="hidden" name="name_kana" value="<?php echo $post['name_kana']; ?>" />
<input type="hidden" name="tel" value="<?php echo $post['tel']; ?>" />
<input type="hidden" name="email" value="<?php echo $post['email']; ?>" />
<input type="hidden" name="message" value="<?php echo $post['message']; ?>" />
<input type="hidden" name="fax" value="<?php echo $post['fax']; ?>" />
<input type="hidden" name="building" value="<?php echo $post['building']; ?>" />
<input type="hidden" name="agree" value="上記内容に同意する" />
</div>			<div class="section">
				<h3>お問い合わせ内容</h3>
				<div class="form_wrap"  data-form-group="name">
					<div class="form_title_wrap">
						<h4 class="typeA">
							<label for="name">法人名(お名前)</label>
							
						</h4>
					</div>
					<div class="form_group_wrap">
						<div class="form_group_inner type_postal_code">
							<div class="form_txt type_name long">
								<?php echo $post['name']; ?>
							</div>
						</div>
					</div>
					<!-- /form_wrap --> 
				</div>
				<div class="form_wrap"  data-form-group="address">
					<div class="form_title_wrap">
						<h4 class="typeA">
							<label for="address">住所</label>
							
						</h4>
					</div>

					<div class="form_group_wrap">
						<div class="form_group_inner type_postal_code">
							<div class="form_txt type_address long">
								<?php echo $post['address']; ?>
							</div>
						</div>
					</div>
					<!-- /form_wrap --> 
				</div>
				<div class="form_wrap"  data-form-group="name">
					<div class="form_title_wrap">
						<h4 class="typeA">
							<label for="name">担当者名</label>
							
						</h4>
					</div>
					<div class="form_group_wrap">
						<div class="form_group_inner type_postal_code">
							<div class="form_txt type_name long">
							<?php echo $post['name_kana']; ?>
							</div>
						</div>
					</div>
					<!-- /form_wrap --> 
				</div>
				<div class="form_wrap"  data-form-group="tel">
					<div class="form_title_wrap">
						<h4 class="typeA">
							<label for="tel">電話番号<br class="newline">
								（携帯電話可） </label>
							
						</h4>
					</div>
					<div class="form_group_wrap">
						<div class="form_group_inner type_tel">
							<div class="form_txt type_tel long">
								<?php echo $post['tel']; ?>
							</div>
						</div>
					</div>
					<!-- /form_wrap --> 
				</div>
				<div class="form_wrap"  data-form-group="fax">
					<div class="form_title_wrap">
						<h4 class="typeA">
							<label for="fax">FAX番号<br class="newline">
								 </label>
							
						</h4>
					</div>

					<div class="form_group_wrap">
						<div class="form_group_inner type_fax">
							<div class="form_txt type_fax long">
								<?php echo $post['fax']; ?>
							</div>
						</div>
					</div>
					<!-- /form_wrap --> 
				</div>
				<div class="form_wrap"  data-form-group="email">
					<div class="form_title_wrap">
						<h4 class="typeA">
							<label for="email">メールアドレス</label>
							
						</h4>
					</div>
					<div class="form_group_wrap">
						<div class="form_group_inner">
							<?php echo $post['email']; ?>
						</div>
					</div>
					<!-- /form_wrap -->
				</div>
				<div class="form_wrap">
					<div class="form_title_wrap">
						<h4 class="typeA">
							<label for="banchi">お問い合わせ内容</label>
							</h4>
					</div>
					<?php
					if($post['building']=='1')
					{
						$building='お取引のご相談';	
					}
					else if($post['building']=='2')
					{
						$building='リクルートについて';	
					}
					else if($post['building']=='3')
					{
						$building='その他';
					}
					
					?>
					<div class="form_group_wrap">
						<div class="form_group_inner radio-check_normal">
							<?php echo $building; ?>
							<!-- /form_group_wrap --> 
						</div>
					</div>
					<!-- /form_wrap --> 
				</div>
				<div class="form_wrap"  data-form-group="message">
					<div class="form_title_wrap">
						<h4 class="typeA">
							<label for="message">お問い合わせ詳細</label>
						</h4>
					</div>
					<div class="form_group_wrap">
						<div class="form_group_inner">
							<div class="form_txt long">
							<?php echo htmlspecialchars($post['message']); ?>
						</div>
					</div>
					<!-- /form_wrap --> 
				</div>
			</div>
			<!-- /section --> 
			<!--▼NEW　PARTS　ボタンエリア-->
			<div class="btn_area">
				<div class="btn_wrap_back">
					<button class="btn_back" name="back" type="button"  onclick="location.href='<?php echo base_url('contact/input')?>';"  >前に戻る</button>
				</div>
				<div class="btn_wrap_next">
					<button class="btn point" type="submit">上記内容で送信 <i class="fa fa-play"></i></button>
				</div>
			<!-- / .btn_area --></div>
		</form>	<!-- /page_wrap --></div>
	<!-- InstanceEndEditable -->
	<!-- / #contents -->
	</div>
	
	<!-- / #main -->
	</div>

	<div id="totop"><a href="#container">ページトップへ戻る</a></div>
	
	<!-- フッター -->
	<footer id="footer">
		<div class="content-inner">
			<div class="clearfix">
				<div class="footer-left">
					<a href="/dummyurl.html" class="logo"><img src="http://placehold.jp/300x50.png?text=ロゴ"></a>
					<address>広島県広島市中区中町７番４１号　三栄ビル6階</address>
					
					<div class="footer-number tel"><span class="category-icon">TEL</span>082-545-7008</div>
					<div class="footer-number fax"><span class="category-icon">FAX</span>082-545-7009</div>
					
					<div class="footer-contact">
						<a href="#" target="_blank" class="pure-button pure-button-primary"><i class="fa fa-envelope"></i>お問い合わせはこちら</a>
					</div>
				</div>
				<!-- フッターナビ -->
				<div class="footer-right">
					<nav id="fnavi">
						<ul>
							<li class="nav01 "><a href="/a/index.html">HOME</a></li>
							<li class="nav02 "><a href="/b/index.html">トップメッセージ</a></li>
							<li class="nav03 "><a href="/c/index.html">事業紹介</a></li>
							<li class="nav04 "><a href="/d/index.html">チーム紹介</a></li>
							<li class="nav05 "><a href="/e/index.html">会社概要</a></li>
							<li class="nav06 "><a href="/e/index.html">採用情報</a></li>
							<!--<li class="nav07 "><a href="/e/index.html">IR情報</a></li>	-->										
						</ul>	
					<!-- / #fnavi -->
					</nav>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
				<div class="content-inner">
					<ul>
						<li><a href="#">サイトマップ</a></li>
						<li><a href="#">プライバシーポリシー</a></li>
					</ul>
					<small id="copyright">Copyright © ALL-asset-partners. All rights Reserved</small>
								</div>
				</div>
	</footer>

<!-- / #container -->
</div>

<div id="totop"><a href="#container">ページトップへ戻る</a></div>
	


<!-- / #container -->
</div>
<script>
function goBack()
  {
  window.history.back();
  }
</script>
<!-- JS -->
<script type="text/javascript" src="<?php echo base_url();?>form/inc/js/lib/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>form/inc/js/lib/modernizr.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>form/inc/js/lib/jquery.currentLinkMarkUp.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>form/inc/js/common.js"></script>
<!--[if (gte IE 6)&(lte IE 8)]><script type="text/javascript" src="/inc/js/lib/selectivizr-min.js"></script><![endif]-->
<!-- InstanceBeginEditable name="JSArea" -->
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>