

























	

Runner.pages.PageSettings.addPageEvent('awazu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__1';
	
	if ( !pageObj.buttonEventBefore['__1'] ) {
		pageObj.buttonEventBefore['__1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

val_33();

function val_33(){
	$("select[name^='value_status']").val(33);
}
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__1'] ) {
		pageObj.buttonEventAfter['__1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);


		}
	}
	
	$('a[id="__1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__1" + "_" + Runner.genId();
		
		// create object
		var button___1 = new Runner.form.Button({
			id: this.id ,
			btnName: "__1"
		});
		
		// init
		button___1.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('awazu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___2';
	
	if ( !pageObj.buttonEventBefore['___2'] ) {
		pageObj.buttonEventBefore['___2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(32);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___2'] ) {
		pageObj.buttonEventAfter['___2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___2"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___2" + "_" + Runner.genId();
		
		// create object
		var button____2 = new Runner.form.Button({
			id: this.id ,
			btnName: "___2"
		});
		
		// init
		button____2.init( {args: [ pageObj, proxy, pageid ]} );
	});
});












	

Runner.pages.PageSettings.addPageEvent('awazu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__________1';
	
	if ( !pageObj.buttonEventBefore['__________1'] ) {
		pageObj.buttonEventBefore['__________1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__________1'] ) {
		pageObj.buttonEventAfter['__________1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__________1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__________1" + "_" + Runner.genId();
		
		// create object
		var button___________1 = new Runner.form.Button({
			id: this.id ,
			btnName: "__________1"
		});
		
		// init
		button___________1.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('awazu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________2';
	
	if ( !pageObj.buttonEventBefore['___________2'] ) {
		pageObj.buttonEventBefore['___________2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________2'] ) {
		pageObj.buttonEventAfter['___________2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________2"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________2" + "_" + Runner.genId();
		
		// create object
		var button____________2 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________2"
		});
		
		// init
		button____________2.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


























































































































































































	

Runner.pages.PageSettings.addPageEvent('awazu', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
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
	

Runner.pages.PageSettings.addPageEvent('awazu', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
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
