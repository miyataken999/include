































































































































































































































	

Runner.pages.PageSettings.addPageEvent('Eoc_speed', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	if($("#js_load_area").html() == ""){
		$("#js_load_area").load("/include/page_event/eoc/after_load_js.php",function(){
			js_load();
		});
	}else{
		js_load();
	};

// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('Eoc_speed', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	if($("#js_load_area").html() == ""){
		$("#js_load_area").load("/include/page_event/eoc/after_load_js.php",function(){
			js_load();
		});
	}else{
		js_load();
	};

// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('Eoc_speed', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
console.log('Eoc_view');

// Place event code here.
// Use "Add Action" button to add code snippets.;
});

//	AJAX snippets
