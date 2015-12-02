function ajaxLoadArchives(){
	var st = $(document).scrollTop(), sb = $(document).height() - $(window).height();
	if(st+160>sb){
		ajaxLoad.load();
	}
}
var ajaxLoad = {
		isLoad:false,
		isEnd:false,
		load:function(){
			if(ajaxLoad.isLoad || ajaxLoad.isEnd){
				return;
			}
			ajaxLoad.isLoad = true;
			ajaxLoad.loadContent();
		},
		loadContent:function(){
			var url = $('#ajax-page').find('a').attr('href');
			$('#main-container').find('#ajax-page').remove();
			if(url===undefined || url=='#'){
				ajaxLoad.setEnd();
				return false;
			}
			$.get(url).success(function(rs){
				var main = $(rs).find('#main-container').html();
				$(main).appendTo($('#main-container'));
				ajaxLoad.isLoad = false;
			});
		},
		setEnd:function(){
			ajaxLoad.isEnd = true;
			$('<div id="ajax-page" class="page-navigator"><a>没有更多内容了</a></div>').appendTo($('#main-container'));
		}
}