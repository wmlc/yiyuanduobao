define(function(require) {
	var pro = require('pro');
	var Detail = require('hd/common/Detail');
    var Msgbox = require('ui/Msgbox');
    var Location = require('common/Location');

	/**
	 * 榴莲苹果随机推广活动类
	 */
	return Detail.extend(null, {
		init: fInit,
		showRandomBox: fShowRandomBox  // 随机弹框
	});

	/**
	 * 初始化
	 */
	function fInit() {
		// url带tag参数时弹框
		if(Location.getParam('action') == this.tag){
			this.showRandomBox();
		}
	}

	function fShowRandomBox(){
		var sHtml = '';

		if(DETAIL.goods.gid == 420){
			// 榴莲
			sHtml = [
				'<style>.w-msgbox-special{width:302px;height:383px;}.w-msgbox-special .w-msgbox-bd{padding:0}.w-msgbox-ft-1{position:absolute;right:10px;top:0;}.w-msgbox-ft-1 .pro-btn{width:30px;height:30px;line-height:0;font-size:0;}</style>',
				'<div style="width:302px;height:383px;background:url(' + G.url + 'hd/150521_ranprompt/ranprompt_durin.png) no-repeat;background-size:100%">',
					'<a href="' + G.host + '/cart/index.do?gid=' + DETAIL.goods.gid + '&num=1" style="display:block;width:122px;height:36px;position:absolute;top:345px;left:93px;"></a>',
				'</div>'
			].join('');
		}else{
			// 苹果产品（id不再做判断）
			sHtml = [
				'<style>.w-msgbox-special{width:302px;height:383px;}.w-msgbox-special .w-msgbox-bd{padding:0}.w-msgbox-ft-1{position:absolute;right:10px;top:0;}.w-msgbox-ft-1 .pro-btn{width:30px;height:30px;line-height:0;font-size:0;}</style>',
				'<div style="width:302px;height:383px;background:url(' + G.url + 'hd/150521_ranprompt/ranprompt_apple.png) no-repeat;background-size:100%">',
					'<p class="f-txtabb" style="position:absolute;top:246px;left:117px;width:130px;font-size:13px;font-weight:bold;line-height:20px;color:#FDE230;font-family:Microsoft Yahei;padding-bottom:1px;border-bottom:1px solid #FDE230">' + DETAIL.goods.gname + '</p>',
					'<a href="' + G.host + '/cart/index.do?gid=' + DETAIL.goods.gid + '&num=1" style="display:block;width:122px;height:36px;position:absolute;top:345px;left:93px;"></a>',
				'</div>'
			].join('');
		}

		Msgbox.show({
			className: 'w-msgbox-special',
			text: sHtml,
            ok: false,
            cancel: true
        });
	}
});