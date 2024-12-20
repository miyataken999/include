





















































	

Runner.pages.PageSettings.addPageEvent('shouhin', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__3';
	
	if ( !pageObj.buttonEventBefore['__3'] ) {
		pageObj.buttonEventBefore['__3'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
jQuery("#searchButton1").click();
// Put your code here.
params["txt"] = "searc";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__3'] ) {
		pageObj.buttonEventAfter['__3'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__3"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__3" + "_" + Runner.genId();
		
		// create object
		var button___3 = new Runner.form.Button({
			id: this.id ,
			btnName: "__3"
		});
		
		// init
		button___3.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___5';
	
	if ( !pageObj.buttonEventBefore['___5'] ) {
		pageObj.buttonEventBefore['___5'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
jQuery("#showAll1").click();
params["txt"] = "success";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___5'] ) {
		pageObj.buttonEventAfter['___5'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___5"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___5" + "_" + Runner.genId();
		
		// create object
		var button____5 = new Runner.form.Button({
			id: this.id ,
			btnName: "___5"
		});
		
		// init
		button____5.init( {args: [ pageObj, proxy, pageid ]} );
	});
});






























	

Runner.pages.PageSettings.addPageEvent('shouhin', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________51';
	
	if ( !pageObj.buttonEventBefore['___________51'] ) {
		pageObj.buttonEventBefore['___________51'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________51'] ) {
		pageObj.buttonEventAfter['___________51'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________51"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________51" + "_" + Runner.genId();
		
		// create object
		var button____________51 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________51"
		});
		
		// init
		button____________51.init( {args: [ pageObj, proxy, pageid ]} );
	});
});





























































	

Runner.pages.PageSettings.addPageEvent('shouhin', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____22';
	
	if ( !pageObj.buttonEventBefore['_____22'] ) {
		pageObj.buttonEventBefore['_____22'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

window.open('https://urlounge.co.jp/include/csv/label/create_csv_shop5.php');

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____22'] ) {
		pageObj.buttonEventAfter['_____22'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____22"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____22" + "_" + Runner.genId();
		
		// create object
		var button______22 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____22"
		});
		
		// init
		button______22.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__________5';
	
	if ( !pageObj.buttonEventBefore['__________5'] ) {
		pageObj.buttonEventBefore['__________5'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['__________5'] ) {
		pageObj.buttonEventAfter['__________5'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__________5"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__________5" + "_" + Runner.genId();
		
		// create object
		var button___________5 = new Runner.form.Button({
			id: this.id ,
			btnName: "__________5"
		});
		
		// init
		button___________5.init( {args: [ pageObj, proxy, pageid ]} );
	});
});







	

Runner.pages.PageSettings.addPageEvent('shouhin', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button5';
	
	if ( !pageObj.buttonEventBefore['New_Button5'] ) {
		pageObj.buttonEventBefore['New_Button5'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button5'] ) {
		pageObj.buttonEventAfter['New_Button5'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="New_Button5"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button5" + "_" + Runner.genId();
		
		// create object
		var button_New_Button5 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button5"
		});
		
		// init
		button_New_Button5.init( {args: [ pageObj, proxy, pageid ]} );
	});
});











































































//	AJAX snippets
