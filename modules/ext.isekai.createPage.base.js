$(function(){
    if($('.isekai-create-page-panel').length > 0){
		mw.loader.using('ext.isekai.createPage', function(){
			var CreatePagePanel = isekai.CreatePagePanel;
			$('.isekai-create-page-panel').each(function(){
				new CreatePagePanel($(this));
			});
		});
	}
});