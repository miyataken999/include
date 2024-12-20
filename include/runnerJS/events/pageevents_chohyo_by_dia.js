






















































































































	

Runner.pages.PageSettings.addPageEvent('chohyo_by_dia', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__35';
	
	if ( !pageObj.buttonEventBefore['__35'] ) {
		pageObj.buttonEventBefore['__35'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
jQuery("#searchButton1").click();
// Put your code here.
params["txt"] = "searc";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__35'] ) {
		pageObj.buttonEventAfter['__35'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__35"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__35" + "_" + Runner.genId();
		
		// create object
		var button___35 = new Runner.form.Button({
			id: this.id ,
			btnName: "__35"
		});
		
		// init
		button___35.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('chohyo_by_dia', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___55';
	
	if ( !pageObj.buttonEventBefore['___55'] ) {
		pageObj.buttonEventBefore['___55'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
jQuery("#showAll1").click();
params["txt"] = "success";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___55'] ) {
		pageObj.buttonEventAfter['___55'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___55"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___55" + "_" + Runner.genId();
		
		// create object
		var button____55 = new Runner.form.Button({
			id: this.id ,
			btnName: "___55"
		});
		
		// init
		button____55.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('chohyo_by_dia', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________513';
	
	if ( !pageObj.buttonEventBefore['___________513'] ) {
		pageObj.buttonEventBefore['___________513'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________513'] ) {
		pageObj.buttonEventAfter['___________513'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________513"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________513" + "_" + Runner.genId();
		
		// create object
		var button____________513 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________513"
		});
		
		// init
		button____________513.init( {args: [ pageObj, proxy, pageid ]} );
	});
});









































































































//	AJAX snippets
