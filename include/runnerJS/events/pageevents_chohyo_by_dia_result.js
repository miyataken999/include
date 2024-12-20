































































































































	

Runner.pages.PageSettings.addPageEvent('chohyo_by_dia_result', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__351';
	
	if ( !pageObj.buttonEventBefore['__351'] ) {
		pageObj.buttonEventBefore['__351'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
jQuery("#searchButton1").click();
// Put your code here.
params["txt"] = "searc";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__351'] ) {
		pageObj.buttonEventAfter['__351'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__351"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__351" + "_" + Runner.genId();
		
		// create object
		var button___351 = new Runner.form.Button({
			id: this.id ,
			btnName: "__351"
		});
		
		// init
		button___351.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('chohyo_by_dia_result', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___551';
	
	if ( !pageObj.buttonEventBefore['___551'] ) {
		pageObj.buttonEventBefore['___551'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
jQuery("#showAll1").click();
params["txt"] = "success";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___551'] ) {
		pageObj.buttonEventAfter['___551'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___551"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___551" + "_" + Runner.genId();
		
		// create object
		var button____551 = new Runner.form.Button({
			id: this.id ,
			btnName: "___551"
		});
		
		// init
		button____551.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('chohyo_by_dia_result', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________5131';
	
	if ( !pageObj.buttonEventBefore['___________5131'] ) {
		pageObj.buttonEventBefore['___________5131'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________5131'] ) {
		pageObj.buttonEventAfter['___________5131'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________5131"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________5131" + "_" + Runner.genId();
		
		// create object
		var button____________5131 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________5131"
		});
		
		// init
		button____________5131.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('chohyo_by_dia_result', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '________41';
	
	if ( !pageObj.buttonEventBefore['________41'] ) {
		pageObj.buttonEventBefore['________41'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['________41'] ) {
		pageObj.buttonEventAfter['________41'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="________41"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "________41" + "_" + Runner.genId();
		
		// create object
		var button_________41 = new Runner.form.Button({
			id: this.id ,
			btnName: "________41"
		});
		
		// init
		button_________41.init( {args: [ pageObj, proxy, pageid ]} );
	});
});































































































//	AJAX snippets
