/**
 * 現在ページのURLがあるリンクへ
 * クラスを付加する。
 */
 
/*
	使い方：
	--------------------------------------------------------------
	$('プラグイン適用要素へのセレクタ').currentLinkMarkUp({
		markupClass : '現在ページ時に付加するクラス名（デフォルト：active）',
		markupObj : 'クラスを付加する要素へのセレクタ（デフォルト：a）'
	});
	--------------------------------------------------------------
	
	例：
	--------------------------------------------------------------
	【index.html】
	<ul id="navi">
		<li><a href="../../../../../../../pfw_set/inc/pfw/js/plugins/currentLinkMarkUp/index.html">トップページ</a></li>
		<li><a href="../../../../../../../pfw_set/inc/pfw/js/plugins/currentLinkMarkUp/contact.html">お問い合わせ</a></li>
		<li><a href="../../../../../../../pfw_set/inc/pfw/js/plugins/currentLinkMarkUp/sitemap.html">サイトマップ</a></li>
	</ul>
	<script src="text/javascript" src="/inc/js/jquery.js"></script>
	<script src="text/javascript" src="/inc/js/jquery.currentLinkMarkUp.js"></script>
	<script src="text/javascript" src="/inc/js/common.js"></script>
	
	【common.js】
	;(function(window, $)
	{
		// 同じURLの時、#navi内のli要素にonというクラスをつける
		$('#navi').currentLinkMarkUp({
			markupClass : 'on',
			markupObj : 'li'
		});
	})(window, jQuery);
	
	--------------------------------------------------------------
*/
(function($){
	
	var trimURL = function (val)
	{
		if (val.indexOf(location.protocol + '//' + location.hostname) >= 0)
		{
			val = val.replace(location.protocol + '//' + location.hostname, '');
		}
		if (location.hash.length > 0)
		{
			val = val.replace(location.hash, '');
		}
		if (val.indexOf('index.html') >= 0)
		{
			val = val.replace('index.html', '');
		}
		if (val.indexOf('index.php') >= 0)
		{
			val = val.replace('index.php', '');
		}
		
		if ('/' == val.slice(-1))
		{
			val = val.substring(0, val.length - 1);
		}
		
		return val;
	}
	
	$.fn.currentLinkMarkUp = function (options)
	{
		var defaults = {
			'markupClass' : 'active',
			'markupObj' : 'a'
		};
		var settings = $.extend(defaults, options);
		
		currentURL = trimURL(location.href);
		
		$.each($(this).find(settings.markupObj), function(i, v)
		{
			var linkObj = settings.markupObj == 'a' ? $(v) : $(v).find('a');
			
			if (linkObj.attr('href'))
			{
				var href = trimURL(linkObj.attr('href'));
				
				if (currentURL == href)
				{
					$(v).addClass(settings.markupClass);
				}
			}
		});
	};
})(jQuery);