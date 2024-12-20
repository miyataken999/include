






































































































































































































	

Runner.pages.PageSettings.addPageEvent('shouhin_for_labels', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__310';
	
	if ( !pageObj.buttonEventBefore['__310'] ) {
		pageObj.buttonEventBefore['__310'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
jQuery("#searchButton1").click();
// Put your code here.
params["txt"] = "searc";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__310'] ) {
		pageObj.buttonEventAfter['__310'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__310"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__310" + "_" + Runner.genId();
		
		// create object
		var button___310 = new Runner.form.Button({
			id: this.id ,
			btnName: "__310"
		});
		
		// init
		button___310.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_for_labels', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___510';
	
	if ( !pageObj.buttonEventBefore['___510'] ) {
		pageObj.buttonEventBefore['___510'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
jQuery("#showAll1").click();
params["txt"] = "success";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___510'] ) {
		pageObj.buttonEventAfter['___510'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___510"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___510" + "_" + Runner.genId();
		
		// create object
		var button____510 = new Runner.form.Button({
			id: this.id ,
			btnName: "___510"
		});
		
		// init
		button____510.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_for_labels', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________518';
	
	if ( !pageObj.buttonEventBefore['___________518'] ) {
		pageObj.buttonEventBefore['___________518'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________518'] ) {
		pageObj.buttonEventAfter['___________518'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________518"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________518" + "_" + Runner.genId();
		
		// create object
		var button____________518 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________518"
		});
		
		// init
		button____________518.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_for_labels', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____226';
	
	if ( !pageObj.buttonEventBefore['_____226'] ) {
		pageObj.buttonEventBefore['_____226'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

window.open('https://urlounge.co.jp/include/csv/label/create_csv_shop5.php');

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____226'] ) {
		pageObj.buttonEventAfter['_____226'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____226"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____226" + "_" + Runner.genId();
		
		// create object
		var button______226 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____226"
		});
		
		// init
		button______226.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_for_labels', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__________55';
	
	if ( !pageObj.buttonEventBefore['__________55'] ) {
		pageObj.buttonEventBefore['__________55'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['__________55'] ) {
		pageObj.buttonEventAfter['__________55'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__________55"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__________55" + "_" + Runner.genId();
		
		// create object
		var button___________55 = new Runner.form.Button({
			id: this.id ,
			btnName: "__________55"
		});
		
		// init
		button___________55.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_for_labels', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button55';
	
	if ( !pageObj.buttonEventBefore['New_Button55'] ) {
		pageObj.buttonEventBefore['New_Button55'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button55'] ) {
		pageObj.buttonEventAfter['New_Button55'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="New_Button55"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button55" + "_" + Runner.genId();
		
		// create object
		var button_New_Button55 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button55"
		});
		
		// init
		button_New_Button55.init( {args: [ pageObj, proxy, pageid ]} );
	});
});






















//	AJAX snippets
