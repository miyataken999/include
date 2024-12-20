









	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '______2';
	
	if ( !pageObj.buttonEventBefore['______2'] ) {
		pageObj.buttonEventBefore['______2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['______2'] ) {
		pageObj.buttonEventAfter['______2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="______2"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "______2" + "_" + Runner.genId();
		
		// create object
		var button_______2 = new Runner.form.Button({
			id: this.id ,
			btnName: "______2"
		});
		
		// init
		button_______2.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '______3';
	
	if ( !pageObj.buttonEventBefore['______3'] ) {
		pageObj.buttonEventBefore['______3'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['______3'] ) {
		pageObj.buttonEventAfter['______3'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="______3"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "______3" + "_" + Runner.genId();
		
		// create object
		var button_______3 = new Runner.form.Button({
			id: this.id ,
			btnName: "______3"
		});
		
		// init
		button_______3.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '______4';
	
	if ( !pageObj.buttonEventBefore['______4'] ) {
		pageObj.buttonEventBefore['______4'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['______4'] ) {
		pageObj.buttonEventAfter['______4'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="______4"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "______4" + "_" + Runner.genId();
		
		// create object
		var button_______4 = new Runner.form.Button({
			id: this.id ,
			btnName: "______4"
		});
		
		// init
		button_______4.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______2';
	
	if ( !pageObj.buttonEventBefore['_______2'] ) {
		pageObj.buttonEventBefore['_______2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_______2'] ) {
		pageObj.buttonEventAfter['_______2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_______2"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______2" + "_" + Runner.genId();
		
		// create object
		var button________2 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______2"
		});
		
		// init
		button________2.init( {args: [ pageObj, proxy, pageid ]} );
	});
});



	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______3';
	
	if ( !pageObj.buttonEventBefore['_______3'] ) {
		pageObj.buttonEventBefore['_______3'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_______3'] ) {
		pageObj.buttonEventAfter['_______3'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_______3"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______3" + "_" + Runner.genId();
		
		// create object
		var button________3 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______3"
		});
		
		// init
		button________3.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___UP';
	
	if ( !pageObj.buttonEventBefore['___UP'] ) {
		pageObj.buttonEventBefore['___UP'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___UP'] ) {
		pageObj.buttonEventAfter['___UP'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___UP"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___UP" + "_" + Runner.genId();
		
		// create object
		var button____UP = new Runner.form.Button({
			id: this.id ,
			btnName: "___UP"
		});
		
		// init
		button____UP.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '____UP';
	
	if ( !pageObj.buttonEventBefore['____UP'] ) {
		pageObj.buttonEventBefore['____UP'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['____UP'] ) {
		pageObj.buttonEventAfter['____UP'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="____UP"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "____UP" + "_" + Runner.genId();
		
		// create object
		var button_____UP = new Runner.form.Button({
			id: this.id ,
			btnName: "____UP"
		});
		
		// init
		button_____UP.init( {args: [ pageObj, proxy, pageid ]} );
	});
});




	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____UP';
	
	if ( !pageObj.buttonEventBefore['_____UP'] ) {
		pageObj.buttonEventBefore['_____UP'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____UP'] ) {
		pageObj.buttonEventAfter['_____UP'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____UP"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____UP" + "_" + Runner.genId();
		
		// create object
		var button______UP = new Runner.form.Button({
			id: this.id ,
			btnName: "_____UP"
		});
		
		// init
		button______UP.init( {args: [ pageObj, proxy, pageid ]} );
	});
});























	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____3';
	
	if ( !pageObj.buttonEventBefore['_____3'] ) {
		pageObj.buttonEventBefore['_____3'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____3'] ) {
		pageObj.buttonEventAfter['_____3'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____3"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____3" + "_" + Runner.genId();
		
		// create object
		var button______3 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____3"
		});
		
		// init
		button______3.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__UP1';
	
	if ( !pageObj.buttonEventBefore['__UP1'] ) {
		pageObj.buttonEventBefore['__UP1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__UP1'] ) {
		pageObj.buttonEventAfter['__UP1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__UP1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__UP1" + "_" + Runner.genId();
		
		// create object
		var button___UP1 = new Runner.form.Button({
			id: this.id ,
			btnName: "__UP1"
		});
		
		// init
		button___UP1.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_________________UP';
	
	if ( !pageObj.buttonEventBefore['_________________UP'] ) {
		pageObj.buttonEventBefore['_________________UP'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
params["st_val"] = $("#all_st").val();
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_________________UP'] ) {
		pageObj.buttonEventAfter['_________________UP'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_________________UP"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_________________UP" + "_" + Runner.genId();
		
		// create object
		var button__________________UP = new Runner.form.Button({
			id: this.id ,
			btnName: "_________________UP"
		});
		
		// init
		button__________________UP.init( {args: [ pageObj, proxy, pageid ]} );
	});
});

































































































	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_________7';
	
	if ( !pageObj.buttonEventBefore['_________7'] ) {
		pageObj.buttonEventBefore['_________7'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_________7'] ) {
		pageObj.buttonEventAfter['_________7'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_________7"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_________7" + "_" + Runner.genId();
		
		// create object
		var button__________7 = new Runner.form.Button({
			id: this.id ,
			btnName: "_________7"
		});
		
		// init
		button__________7.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__ID___';
	
	if ( !pageObj.buttonEventBefore['__ID___'] ) {
		pageObj.buttonEventBefore['__ID___'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__ID___'] ) {
		pageObj.buttonEventAfter['__ID___'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__ID___"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__ID___" + "_" + Runner.genId();
		
		// create object
		var button___ID___ = new Runner.form.Button({
			id: this.id ,
			btnName: "__ID___"
		});
		
		// init
		button___ID___.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '______UP';
	
	if ( !pageObj.buttonEventBefore['______UP'] ) {
		pageObj.buttonEventBefore['______UP'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['______UP'] ) {
		pageObj.buttonEventAfter['______UP'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="______UP"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "______UP" + "_" + Runner.genId();
		
		// create object
		var button_______UP = new Runner.form.Button({
			id: this.id ,
			btnName: "______UP"
		});
		
		// init
		button_______UP.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__IDUP';
	
	if ( !pageObj.buttonEventBefore['__IDUP'] ) {
		pageObj.buttonEventBefore['__IDUP'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "GoodMorning!";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__IDUP'] ) {
		pageObj.buttonEventAfter['__IDUP'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__IDUP"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__IDUP" + "_" + Runner.genId();
		
		// create object
		var button___IDUP = new Runner.form.Button({
			id: this.id ,
			btnName: "__IDUP"
		});
		
		// init
		button___IDUP.init( {args: [ pageObj, proxy, pageid ]} );
	});
});
















	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______13';
	
	if ( !pageObj.buttonEventBefore['_______13'] ) {
		pageObj.buttonEventBefore['_______13'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_______13'] ) {
		pageObj.buttonEventAfter['_______13'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_______13"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______13" + "_" + Runner.genId();
		
		// create object
		var button________13 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______13"
		});
		
		// init
		button________13.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '____UP2';
	
	if ( !pageObj.buttonEventBefore['____UP2'] ) {
		pageObj.buttonEventBefore['____UP2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['____UP2'] ) {
		pageObj.buttonEventAfter['____UP2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="____UP2"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "____UP2" + "_" + Runner.genId();
		
		// create object
		var button_____UP2 = new Runner.form.Button({
			id: this.id ,
			btnName: "____UP2"
		});
		
		// init
		button_____UP2.init( {args: [ pageObj, proxy, pageid ]} );
	});
});








	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button6';
	
	if ( !pageObj.buttonEventBefore['New_Button6'] ) {
		pageObj.buttonEventBefore['New_Button6'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button6'] ) {
		pageObj.buttonEventAfter['New_Button6'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="New_Button6"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button6" + "_" + Runner.genId();
		
		// create object
		var button_New_Button6 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button6"
		});
		
		// init
		button_New_Button6.init( {args: [ pageObj, proxy, pageid ]} );
	});
});



	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_________8';
	
	if ( !pageObj.buttonEventBefore['_________8'] ) {
		pageObj.buttonEventBefore['_________8'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_________8'] ) {
		pageObj.buttonEventAfter['_________8'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_________8"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_________8" + "_" + Runner.genId();
		
		// create object
		var button__________8 = new Runner.form.Button({
			id: this.id ,
			btnName: "_________8"
		});
		
		// init
		button__________8.init( {args: [ pageObj, proxy, pageid ]} );
	});
});




	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '______9';
	
	if ( !pageObj.buttonEventBefore['______9'] ) {
		pageObj.buttonEventBefore['______9'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['______9'] ) {
		pageObj.buttonEventAfter['______9'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="______9"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "______9" + "_" + Runner.genId();
		
		// create object
		var button_______9 = new Runner.form.Button({
			id: this.id ,
			btnName: "______9"
		});
		
		// init
		button_______9.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


























	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__IDUP1';
	
	if ( !pageObj.buttonEventBefore['__IDUP1'] ) {
		pageObj.buttonEventBefore['__IDUP1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "GoodMorning!";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__IDUP1'] ) {
		pageObj.buttonEventAfter['__IDUP1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__IDUP1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__IDUP1" + "_" + Runner.genId();
		
		// create object
		var button___IDUP1 = new Runner.form.Button({
			id: this.id ,
			btnName: "__IDUP1"
		});
		
		// init
		button___IDUP1.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '______91';
	
	if ( !pageObj.buttonEventBefore['______91'] ) {
		pageObj.buttonEventBefore['______91'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['______91'] ) {
		pageObj.buttonEventAfter['______91'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="______91"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "______91" + "_" + Runner.genId();
		
		// create object
		var button_______91 = new Runner.form.Button({
			id: this.id ,
			btnName: "______91"
		});
		
		// init
		button_______91.init( {args: [ pageObj, proxy, pageid ]} );
	});
});









	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____UP1';
	
	if ( !pageObj.buttonEventBefore['_____UP1'] ) {
		pageObj.buttonEventBefore['_____UP1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____UP1'] ) {
		pageObj.buttonEventAfter['_____UP1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____UP1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____UP1" + "_" + Runner.genId();
		
		// create object
		var button______UP1 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____UP1"
		});
		
		// init
		button______UP1.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '______UP1';
	
	if ( !pageObj.buttonEventBefore['______UP1'] ) {
		pageObj.buttonEventBefore['______UP1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['______UP1'] ) {
		pageObj.buttonEventAfter['______UP1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="______UP1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "______UP1" + "_" + Runner.genId();
		
		// create object
		var button_______UP1 = new Runner.form.Button({
			id: this.id ,
			btnName: "______UP1"
		});
		
		// init
		button_______UP1.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '________7';
	
	if ( !pageObj.buttonEventBefore['________7'] ) {
		pageObj.buttonEventBefore['________7'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['________7'] ) {
		pageObj.buttonEventAfter['________7'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="________7"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "________7" + "_" + Runner.genId();
		
		// create object
		var button_________7 = new Runner.form.Button({
			id: this.id ,
			btnName: "________7"
		});
		
		// init
		button_________7.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_________9';
	
	if ( !pageObj.buttonEventBefore['_________9'] ) {
		pageObj.buttonEventBefore['_________9'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_________9'] ) {
		pageObj.buttonEventAfter['_________9'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_________9"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_________9" + "_" + Runner.genId();
		
		// create object
		var button__________9 = new Runner.form.Button({
			id: this.id ,
			btnName: "_________9"
		});
		
		// init
		button__________9.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______UP1';
	
	if ( !pageObj.buttonEventBefore['_______UP1'] ) {
		pageObj.buttonEventBefore['_______UP1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_______UP1'] ) {
		pageObj.buttonEventAfter['_______UP1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_______UP1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______UP1" + "_" + Runner.genId();
		
		// create object
		var button________UP1 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______UP1"
		});
		
		// init
		button________UP1.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__________6';
	
	if ( !pageObj.buttonEventBefore['__________6'] ) {
		pageObj.buttonEventBefore['__________6'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__________6'] ) {
		pageObj.buttonEventAfter['__________6'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__________6"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__________6" + "_" + Runner.genId();
		
		// create object
		var button___________6 = new Runner.form.Button({
			id: this.id ,
			btnName: "__________6"
		});
		
		// init
		button___________6.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '____IDUP2';
	
	if ( !pageObj.buttonEventBefore['____IDUP2'] ) {
		pageObj.buttonEventBefore['____IDUP2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['____IDUP2'] ) {
		pageObj.buttonEventAfter['____IDUP2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="____IDUP2"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "____IDUP2" + "_" + Runner.genId();
		
		// create object
		var button_____IDUP2 = new Runner.form.Button({
			id: this.id ,
			btnName: "____IDUP2"
		});
		
		// init
		button_____IDUP2.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '____IDUP3';
	
	if ( !pageObj.buttonEventBefore['____IDUP3'] ) {
		pageObj.buttonEventBefore['____IDUP3'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['____IDUP3'] ) {
		pageObj.buttonEventAfter['____IDUP3'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="____IDUP3"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "____IDUP3" + "_" + Runner.genId();
		
		// create object
		var button_____IDUP3 = new Runner.form.Button({
			id: this.id ,
			btnName: "____IDUP3"
		});
		
		// init
		button_____IDUP3.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '____ID____';
	
	if ( !pageObj.buttonEventBefore['____ID____'] ) {
		pageObj.buttonEventBefore['____ID____'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['____ID____'] ) {
		pageObj.buttonEventAfter['____ID____'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="____ID____"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "____ID____" + "_" + Runner.genId();
		
		// create object
		var button_____ID____ = new Runner.form.Button({
			id: this.id ,
			btnName: "____ID____"
		});
		
		// init
		button_____ID____.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '____ID___';
	
	if ( !pageObj.buttonEventBefore['____ID___'] ) {
		pageObj.buttonEventBefore['____ID___'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['____ID___'] ) {
		pageObj.buttonEventAfter['____ID___'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="____ID___"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "____ID___" + "_" + Runner.genId();
		
		// create object
		var button_____ID___ = new Runner.form.Button({
			id: this.id ,
			btnName: "____ID___"
		});
		
		// init
		button_____ID___.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '____IDUP21';
	
	if ( !pageObj.buttonEventBefore['____IDUP21'] ) {
		pageObj.buttonEventBefore['____IDUP21'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['____IDUP21'] ) {
		pageObj.buttonEventAfter['____IDUP21'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="____IDUP21"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "____IDUP21" + "_" + Runner.genId();
		
		// create object
		var button_____IDUP21 = new Runner.form.Button({
			id: this.id ,
			btnName: "____IDUP21"
		});
		
		// init
		button_____IDUP21.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('shouhin_batch', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '____ID____1';
	
	if ( !pageObj.buttonEventBefore['____ID____1'] ) {
		pageObj.buttonEventBefore['____ID____1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['____ID____1'] ) {
		pageObj.buttonEventAfter['____ID____1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="____ID____1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "____ID____1" + "_" + Runner.genId();
		
		// create object
		var button_____ID____1 = new Runner.form.Button({
			id: this.id ,
			btnName: "____ID____1"
		});
		
		// init
		button_____ID____1.init( {args: [ pageObj, proxy, pageid ]} );
	});
});










//	AJAX snippets
