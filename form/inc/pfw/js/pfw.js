// common script
(function($)
{
	$.pfw = {};

	$LAB.script("/inc/js/pfwConfig.js")
	.wait(function(){
		$.pfw =
		{
			// デフォルトのスクリプトを実行
			init : function ()
			{
				var deferred = $.Deferred();
				deferred
					.then($.pfw.readLibs())
					.then($.pfw.EasyListSplitter())
					.then($.pfw.LiveUpdate())
					.then($.pfw.Orbit())
					.then($.pfw.GoogleMap())
					.then($.pfw.FixHeight())
					.then($.pfw.Fresco())
					.then($.pfw.TabGroup())
					.then($.pfw.CurrentLinkMarkUp())
			},

			// ライブラリ読み込み
			readLibs : function ()
			{
				if (PFW_CONFIG.LOADONLY.length > 0)
				{
					$.each(PFW_CONFIG.LOADONLY, function(i, v)
					{
						$LAB.script(v).wait();
					});
				}
			},

			/**
			 * リストを等分に区切る
			 */
			EasyListSplitter : function ()
			{
				var opt = PFW_CONFIG.pluginOption("EasyListSplitter");
				
				if ($(opt.target).length > 0)
				{
					$LAB
					.script(PFW_CONFIG.pluginPath("EasyListSplitter"))
					.wait(function()
					{
						$(opt.target).each(function(){
							var thisEl = $(this),
							count = thisEl.data('split-count');
							thisEl.easyListSplitter({
								colNumber : parseInt(count)
							});
						});
					});
				}
			},

			/**
			 * 文字列からリスト検索
			 */
			LiveUpdate : function ()
			{
				var opt = PFW_CONFIG.pluginOption("LiveUpdate");

				if ($(opt.searchText).length > 0 && $(opt.searchList).length > 0)
				{
					$LAB
					.script(PFW_CONFIG.pluginPath("QuickSilver"))
					.wait()
					.script(PFW_CONFIG.pluginPath("LiveUpdate"))
					.wait(function()
					{
						$(opt.searchText).liveUpdate(opt.searchList);
					});
				}
			},

			/**
			 * スライドショー
			 */
			Orbit : function ()
			{
				var opt = PFW_CONFIG.pluginOption("Orbit");

				if ($(opt.target).length > 0)
				{
					// 並列処理にしたらいけない（予感）
					$.when(
						$.each(PFW_CONFIG.PLUGINS.PATH.OrbitCss.split(','), function(i, path)
						{
							$("body").append($('<link>'));
							$("body").children(':last').attr({
								rel: "stylesheet",
								type: "text/css",
								href: PFW_CONFIG.PLUGIN_DIR + path
							});
						})
					)
					.done(
						$LAB
						.script(PFW_CONFIG.pluginPath("Orbit"))
						.wait(function()
						{
							$(opt.target)
								.removeClass(opt.loaderClass)
								.orbit(opt.params)
								.on('orbit.change', opt.onSlideChange)
						})
					);
				}
			},

			/**
			 * Map
			 */
			GoogleMap : function ()
			{
				var opt = PFW_CONFIG.pluginOption("GoogleMap");

				if ($(opt.target).length > 0)
				{
					$LAB
					.script(PFW_CONFIG.pluginPath("GoogleMap"))
					.wait()
					.script(PFW_CONFIG.pluginPath("GoogleMapTab"))
					.wait()
					.script(PFW_CONFIG.pluginPath("GoogleMapUI"))
					.wait(function()
					{
						$(opt.target).googlemap();
					});
				}
			},

			/**
			 * タブ
			 */
			TabGroup : function ()
			{
				var opt = PFW_CONFIG.pluginOption("TabGroup");

				if ($(opt.target).length > 0)
				{
					$LAB
					.script(PFW_CONFIG.pluginPath("TabGroup"))
					.wait(function(){
						$(opt.target)
							.tab_group(opt.params);
					});
				}
			},

			/**
			 * 高さ揃奴
			 */
			FixHeight : function ()
			{
				var opt = PFW_CONFIG.pluginOption("FixHeight");

				if ($(opt.target).length > 0)
				{
					$LAB
					.script(PFW_CONFIG.pluginPath("FixHeight"))
					.wait(function(){
						$(opt.target).fixHeight();
					});
				}
			},

			/**
			 * Fresco
			 */
			Fresco : function ()
			{
				var opt = PFW_CONFIG.pluginOption("Fresco");
				
				if ($('.fresco').length > 0)
				{
					$LAB.script(PFW_CONFIG.pluginPath("Fresco"))
					.wait(function()
					{
						$("body").append($('<link>'));
						$("body").children(':last').attr({
							rel: "stylesheet",
							type: "text/css",
							href: PFW_CONFIG.pluginPath("FrescoCss")
						});
							
						Fresco.show(opt.options ? opt.options : null);
					});
				}
			},
			
			/**
			 * CurrentLinkMarkUp
			 */
			CurrentLinkMarkUp : function ()
			{
				var opt = PFW_CONFIG.pluginOption("CurrentLinkMarkUp");
				
				if ($(opt.target).length > 0)
				{
					$LAB.script(PFW_CONFIG.pluginPath("CurrentLinkMarkUp"))
					.wait(function()
					{
						$(opt.target).currentLinkMarkUp(opt.params ? opt.params : null);
					});
				}
			}
		};
		
		if (PFW_CONFIG.AUTOLOAD)
		{
			$.pfw.init();
		}
	});
})(jQuery);