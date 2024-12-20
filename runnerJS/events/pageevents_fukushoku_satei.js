


































































































	

Runner.pages.PageSettings.addPageEvent('fukushoku_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__6';
	
	if ( !pageObj.buttonEventBefore['__6'] ) {
		pageObj.buttonEventBefore['__6'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(33);
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__6'] ) {
		pageObj.buttonEventAfter['__6'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);


		}
	}
	
	$('a[id="__6"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__6" + "_" + Runner.genId();
		
		// create object
		var button___6 = new Runner.form.Button({
			id: this.id ,
			btnName: "__6"
		});
		
		// init
		button___6.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('fukushoku_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___16';
	
	if ( !pageObj.buttonEventBefore['___16'] ) {
		pageObj.buttonEventBefore['___16'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(32);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 //return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___16'] ) {
		pageObj.buttonEventAfter['___16'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___16"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___16" + "_" + Runner.genId();
		
		// create object
		var button____16 = new Runner.form.Button({
			id: this.id ,
			btnName: "___16"
		});
		
		// init
		button____16.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('fukushoku_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___17';
	
	if ( !pageObj.buttonEventBefore['___17'] ) {
		pageObj.buttonEventBefore['___17'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(34);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___17'] ) {
		pageObj.buttonEventAfter['___17'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___17"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___17" + "_" + Runner.genId();
		
		// create object
		var button____17 = new Runner.form.Button({
			id: this.id ,
			btnName: "___17"
		});
		
		// init
		button____17.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('fukushoku_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____43';
	
	if ( !pageObj.buttonEventBefore['_____43'] ) {
		pageObj.buttonEventBefore['_____43'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____43'] ) {
		pageObj.buttonEventAfter['_____43'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____43"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____43" + "_" + Runner.genId();
		
		// create object
		var button______43 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____43"
		});
		
		// init
		button______43.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('fukushoku_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________7';
	
	if ( !pageObj.buttonEventBefore['___________7'] ) {
		pageObj.buttonEventBefore['___________7'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________7'] ) {
		pageObj.buttonEventAfter['___________7'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________7"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________7" + "_" + Runner.genId();
		
		// create object
		var button____________7 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________7"
		});
		
		// init
		button____________7.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('fukushoku_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_________6';
	
	if ( !pageObj.buttonEventBefore['_________6'] ) {
		pageObj.buttonEventBefore['_________6'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_________6'] ) {
		pageObj.buttonEventAfter['_________6'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_________6"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_________6" + "_" + Runner.genId();
		
		// create object
		var button__________6 = new Runner.form.Button({
			id: this.id ,
			btnName: "_________6"
		});
		
		// init
		button__________6.init( {args: [ pageObj, proxy, pageid ]} );
	});
});
















	

Runner.pages.PageSettings.addPageEvent('fukushoku_satei', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
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
	

Runner.pages.PageSettings.addPageEvent('fukushoku_satei', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
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
	

Runner.pages.PageSettings.addPageEvent('fukushoku_satei', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
console.log('satei_view');
// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('fukushoku_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
// Place event code here.
// Use "Add Action" button to add code snippets.;
});

//	AJAX snippets
