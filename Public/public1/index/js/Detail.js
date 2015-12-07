define(function(require) {
	var pro = require('pro');
	var Detail = require('hd/common/Detail');
    var Msgbox = require('ui/Msgbox');
    var Location = require('common/Location');

	/**
	 * 占卜送红包 详情页活动类
	 */
	return Detail.extend(null, {
		init: fInit,
		showDivineBox: fShowDivineBox,  // 占卜弹框
		random: fRandom // 随机数方法
	});

	/**
	 * 初始化
	 */
	function fInit() {
		
		// url带tag参数时弹框
		/*if(Location.getParam('action') == this.tag){
			this.showDivineBox();
		}*/

		if(Location.getParam('action') == 'divine'){
			this.showDivineBox();
		}
	}

	function fShowDivineBox(){
		var me = this;
		/*var nThreshold = Location.getHashValue('threshold') || 0; // 满减阈值
		var nValue = Location.getHashValue('value') || 0; // 满减金额
		var nLuck = Location.getHashValue('luck') || 0; // 幸运指数（预留）0-宜 1-中 2-凶*/

		var nThreshold = 0; // 满减阈值
		var nValue = 0; // 满减金额
		var nLuck = 0; // 幸运指数（预留）0-宜 1-中 2-凶

		// var aBonusName = nThreshold == 0 ? '直减' + nValue + '夺宝币' : '满' + nThreshold + '减' + nValue;

		// var aBonusWord = [ // 随机赠言（预留数组）
		// 	'我再送你<span style="color:#f25b00">一个红包</span>（' + aBonusName  + '）<br/>助你一臂之力！'
		// ];
		// var nWordPos = me.random(aBonusWord.length);

		var oData = {
			// hasBonus : nValue > 0 ? true : false,
			hasBonus : false,
			// bonusWord : aBonusWord[nWordPos],
			bonusWord: "",
			luckyIcon : function(){ // （预留）
				switch(nLuck - 0){
					case 0:
						return '<span style="position:absolute;top:20px;right:66px;width:42px;padding-top:42px;height:0;overflow:hidden;background:url(' + G.url + 'hd/150709_divine/mix-bg.png) 0 -306px no-repeat;background-size:300px 426px;">宜</span>'
					case 1:
						return '<span style="position:absolute;top:20px;right:66px;width:42px;padding-top:42px;height:0;overflow:hidden;background:url(' + G.url + 'hd/150709_divine/mix-bg.png) -42px -306px no-repeat;background-size:300px 426px;">中</span>'
					case 2:
						return '<span style="position:absolute;top:20px;right:66px;width:42px;padding-top:42px;height:0;overflow:hidden;background:url(' + G.url + 'hd/150709_divine/mix-bg.png) -84px -306px no-repeat;background-size:300px 426px;">凶</span>'
				}
			}
		};

		var sHtml = [
			'<style>',
				'.w-msgbox-special{width:300px;}',
				'.w-msgbox-special .w-msgbox-bd{padding:0}',
				'.w-msgbox-special-btn{margin:24px 6px 0;display:inline-block;width:110px;height:35px;text-align:center;line-height:35px;background:#f45145;font-weight:bold;color:#fff;font-size:14px;border-radius:6px;}',
			'</style>',
			'<a style="position:absolute;width:25px;height:25px;right:0;top:0" data-pro="close" href="javascript:void(0);"></a>',
			'<div style="padding:0 7px;background:url(' + G.url + 'hd/150709_divine/mix-bg.png) no-repeat;background-size:300px 426px;color:#666666">',
				'<div style="padding:25px 0 15px;border-bottom:1px solid #f09b7d;_zoom:1">',
					'<img width="100" height="75" style="float:left;margin:18px 0 0 10px;" src="' + window.DETAIL.picUrl + '" />',
					'{{{luckyIcon}}}',
					'<div style="margin-left:120px;padding:45px 10px 0;border-left:1px solid #f5a28a;">',
						'{{#hasBonus}}',
							'<p style="font-size:14px;">这位客官：</p>',
							'<p style="font-size:12px;">您今儿要走大运啊，<br/>适合参加这个夺宝</p>',
						'{{/hasBonus}}',
						'{{^hasBonus}}',
							'<p style="font-size:14px;">这位客官：</p>',
							'<p style="font-size:12px;">今日您适合参加这个夺宝，<br/>赶紧去试试吧！</p>',
						'{{/hasBonus}}',
					'</div>',
				'</div>',
				'{{#hasBonus}}',
					'<div style="padding-left:120px;height:78px;border-bottom:1px solid #f09b7d;color:#9d6f00;font-size:12px;background:#ede4b5 url(' + G.url + 'hd/150709_divine/mix-bg.png) 0 -348px no-repeat;background-size:300px 426px;">',
						'<table style="width:100%;height:100%;"><tbody><tr><td valign="middle">',
							'{{{bonusWord}}}',
						'</td></tr></tbody></table>',
					'</div>',
				'{{/hasBonus}}',
			'</div>',
			'<div style="height:80px;background:url(' + G.url + 'hd/150709_divine/mix-bg.png) 0 -226px no-repeat;background-size:300px 426px;text-align:center">',
				'{{#hasBonus}}',
					'<a class="w-msgbox-special-btn" href="' + G.host + '/user/bonus.do">查看红包</a>',
					'<a class="w-msgbox-special-btn" href="' + G.host + '/cart/index.do?gid=' + DETAIL.goods.gid + '&num=' + 1 + '">立即参加</a>',
				'{{/hasBonus}}',
				'{{^hasBonus}}',
					'<a class="w-msgbox-special-btn" href="' + G.host + '/cart/index.do?gid=' + DETAIL.goods.gid + '&num=1">立即参加</a>',
					'<a class="w-msgbox-special-btn" data-pro="cancel" href="javascript:void(0);">日后再说</a>',
				'{{/hasBonus}}',
			'</div>'
		].join('');

		Msgbox.show({
			className: 'w-msgbox-special',
			text: pro.template(sHtml, oData),
            ok: false
        });
	}

	function fRandom(nLength){
		return Math.floor(nLength * Math.random());
	}
});
