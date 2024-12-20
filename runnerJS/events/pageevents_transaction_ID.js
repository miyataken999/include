
















































































































	

Runner.pages.PageSettings.addPageEvent('transaction_ID', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__33';
	
	if ( !pageObj.buttonEventBefore['__33'] ) {
		pageObj.buttonEventBefore['__33'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
jQuery("#searchButton1").click();
// Put your code here.
params["txt"] = "searc";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__33'] ) {
		pageObj.buttonEventAfter['__33'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__33"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__33" + "_" + Runner.genId();
		
		// create object
		var button___33 = new Runner.form.Button({
			id: this.id ,
			btnName: "__33"
		});
		
		// init
		button___33.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('transaction_ID', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___53';
	
	if ( !pageObj.buttonEventBefore['___53'] ) {
		pageObj.buttonEventBefore['___53'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
jQuery("#showAll1").click();
params["txt"] = "success";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___53'] ) {
		pageObj.buttonEventAfter['___53'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___53"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___53" + "_" + Runner.genId();
		
		// create object
		var button____53 = new Runner.form.Button({
			id: this.id ,
			btnName: "___53"
		});
		
		// init
		button____53.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('transaction_ID', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________511';
	
	if ( !pageObj.buttonEventBefore['___________511'] ) {
		pageObj.buttonEventBefore['___________511'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________511'] ) {
		pageObj.buttonEventAfter['___________511'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________511"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________511" + "_" + Runner.genId();
		
		// create object
		var button____________511 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________511"
		});
		
		// init
		button____________511.init( {args: [ pageObj, proxy, pageid ]} );
	});
});















































































































//	AJAX snippets
