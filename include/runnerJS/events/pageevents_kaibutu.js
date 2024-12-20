
































	

Runner.pages.PageSettings.addPageEvent('kaibutu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___111';
	
	if ( !pageObj.buttonEventBefore['___111'] ) {
		pageObj.buttonEventBefore['___111'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(34);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___111'] ) {
		pageObj.buttonEventAfter['___111'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___111"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___111" + "_" + Runner.genId();
		
		// create object
		var button____111 = new Runner.form.Button({
			id: this.id ,
			btnName: "___111"
		});
		
		// init
		button____111.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('kaibutu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________11';
	
	if ( !pageObj.buttonEventBefore['___________11'] ) {
		pageObj.buttonEventBefore['___________11'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________11'] ) {
		pageObj.buttonEventAfter['___________11'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________11"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________11" + "_" + Runner.genId();
		
		// create object
		var button____________11 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________11"
		});
		
		// init
		button____________11.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('kaibutu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_________11';
	
	if ( !pageObj.buttonEventBefore['_________11'] ) {
		pageObj.buttonEventBefore['_________11'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_________11'] ) {
		pageObj.buttonEventAfter['_________11'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_________11"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_________11" + "_" + Runner.genId();
		
		// create object
		var button__________11 = new Runner.form.Button({
			id: this.id ,
			btnName: "_________11"
		});
		
		// init
		button__________11.init( {args: [ pageObj, proxy, pageid ]} );
	});
});



















































































































	

Runner.pages.PageSettings.addPageEvent('kaibutu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button3';
	
	if ( !pageObj.buttonEventBefore['New_Button3'] ) {
		pageObj.buttonEventBefore['New_Button3'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button3'] ) {
		pageObj.buttonEventAfter['New_Button3'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="New_Button3"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button3" + "_" + Runner.genId();
		
		// create object
		var button_New_Button3 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button3"
		});
		
		// init
		button_New_Button3.init( {args: [ pageObj, proxy, pageid ]} );
	});
});






	

Runner.pages.PageSettings.addPageEvent('kaibutu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____25';
	
	if ( !pageObj.buttonEventBefore['_____25'] ) {
		pageObj.buttonEventBefore['_____25'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

window.open('https://urlounge.co.jp/include/csv/label/create_csv_shop5.php');

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____25'] ) {
		pageObj.buttonEventAfter['_____25'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____25"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____25" + "_" + Runner.genId();
		
		// create object
		var button______25 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____25"
		});
		
		// init
		button______25.init( {args: [ pageObj, proxy, pageid ]} );
	});
});







































































	

Runner.pages.PageSettings.addPageEvent('kaibutu', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	if($("#js_load_area").html() == ""){
		$("#js_load_area").load("/include/page_event/satei/after_load_js.php",function(){
			js_load();
		});
	}else{
		js_load();
	};

// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('kaibutu', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	if($("#js_load_area").html() == ""){
		$("#js_load_area").load("/include/page_event/satei/after_load_js.php",function(){
			js_load();
		});
	}else{
		js_load();
	};
// Place event code here.
// Use "Add Action" button to add code snippets.;
});

//	AJAX snippets
