



























































































































	

Runner.pages.PageSettings.addPageEvent('chohyo_by_seihin_result', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__341';
	
	if ( !pageObj.buttonEventBefore['__341'] ) {
		pageObj.buttonEventBefore['__341'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
jQuery("#searchButton1").click();
// Put your code here.
params["txt"] = "searc";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__341'] ) {
		pageObj.buttonEventAfter['__341'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__341"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__341" + "_" + Runner.genId();
		
		// create object
		var button___341 = new Runner.form.Button({
			id: this.id ,
			btnName: "__341"
		});
		
		// init
		button___341.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('chohyo_by_seihin_result', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___541';
	
	if ( !pageObj.buttonEventBefore['___541'] ) {
		pageObj.buttonEventBefore['___541'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
jQuery("#showAll1").click();
params["txt"] = "success";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___541'] ) {
		pageObj.buttonEventAfter['___541'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___541"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___541" + "_" + Runner.genId();
		
		// create object
		var button____541 = new Runner.form.Button({
			id: this.id ,
			btnName: "___541"
		});
		
		// init
		button____541.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('chohyo_by_seihin_result', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________5121';
	
	if ( !pageObj.buttonEventBefore['___________5121'] ) {
		pageObj.buttonEventBefore['___________5121'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________5121'] ) {
		pageObj.buttonEventAfter['___________5121'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________5121"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________5121" + "_" + Runner.genId();
		
		// create object
		var button____________5121 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________5121"
		});
		
		// init
		button____________5121.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('chohyo_by_seihin_result', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______101';
	
	if ( !pageObj.buttonEventBefore['_______101'] ) {
		pageObj.buttonEventBefore['_______101'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_______101'] ) {
		pageObj.buttonEventAfter['_______101'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_______101"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______101" + "_" + Runner.genId();
		
		// create object
		var button________101 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______101"
		});
		
		// init
		button________101.init( {args: [ pageObj, proxy, pageid ]} );
	});
});



































































































//	AJAX snippets
