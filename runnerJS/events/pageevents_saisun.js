



































	

Runner.pages.PageSettings.addPageEvent('saisun', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____2';
	
	if ( !pageObj.buttonEventBefore['_____2'] ) {
		pageObj.buttonEventBefore['_____2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

window.open('https://urlounge.co.jp/include/csv/label/create_csv_shop5.php');

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____2'] ) {
		pageObj.buttonEventAfter['_____2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____2"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____2" + "_" + Runner.genId();
		
		// create object
		var button______2 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____2"
		});
		
		// init
		button______2.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('saisun', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__________';
	
	if ( !pageObj.buttonEventBefore['__________'] ) {
		pageObj.buttonEventBefore['__________'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['__________'] ) {
		pageObj.buttonEventAfter['__________'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__________"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__________" + "_" + Runner.genId();
		
		// create object
		var button___________ = new Runner.form.Button({
			id: this.id ,
			btnName: "__________"
		});
		
		// init
		button___________.init( {args: [ pageObj, proxy, pageid ]} );
	});
});









	

Runner.pages.PageSettings.addPageEvent('saisun', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__2';
	
	if ( !pageObj.buttonEventBefore['__2'] ) {
		pageObj.buttonEventBefore['__2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
$("select[name^='value_status']").val(33);
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__2'] ) {
		pageObj.buttonEventAfter['__2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__2"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__2" + "_" + Runner.genId();
		
		// create object
		var button___2 = new Runner.form.Button({
			id: this.id ,
			btnName: "__2"
		});
		
		// init
		button___2.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('saisun', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___3';
	
	if ( !pageObj.buttonEventBefore['___3'] ) {
		pageObj.buttonEventBefore['___3'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
$("select[name^='value_status']").val(34);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___3'] ) {
		pageObj.buttonEventAfter['___3'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___3"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___3" + "_" + Runner.genId();
		
		// create object
		var button____3 = new Runner.form.Button({
			id: this.id ,
			btnName: "___3"
		});
		
		// init
		button____3.init( {args: [ pageObj, proxy, pageid ]} );
	});
});




















































































































































































//	AJAX snippets
