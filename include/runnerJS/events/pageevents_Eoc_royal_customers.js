
























































































































































































































	

Runner.pages.PageSettings.addPageEvent('Eoc_royal_customers', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______15';
	
	if ( !pageObj.buttonEventBefore['_______15'] ) {
		pageObj.buttonEventBefore['_______15'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
window.open('http://urlounge.co.jp/mailsystem/send_mail/all4/regist_mail_all.php',
'win',
'width=500,height=400,menubar=yes,status=yes,scrollbars=yes') ; return false ;

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

		}
	}
	
	if ( !pageObj.buttonEventAfter['_______15'] ) {
		pageObj.buttonEventAfter['_______15'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_______15"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______15" + "_" + Runner.genId();
		
		// create object
		var button________15 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______15"
		});
		
		// init
		button________15.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_royal_customers', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '________8';
	
	if ( !pageObj.buttonEventBefore['________8'] ) {
		pageObj.buttonEventBefore['________8'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
window.open('http://urlounge.co.jp/mailsystem/send_mail/all5/regist_mail_all.php',
'win',
'width=500,height=400,menubar=yes,status=yes,scrollbars=yes') ; return false ;

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['________8'] ) {
		pageObj.buttonEventAfter['________8'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="________8"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "________8" + "_" + Runner.genId();
		
		// create object
		var button_________8 = new Runner.form.Button({
			id: this.id ,
			btnName: "________8"
		});
		
		// init
		button_________8.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_royal_customers', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_________34';
	
	if ( !pageObj.buttonEventBefore['_________34'] ) {
		pageObj.buttonEventBefore['_________34'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_________34'] ) {
		pageObj.buttonEventAfter['_________34'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_________34"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_________34" + "_" + Runner.genId();
		
		// create object
		var button__________34 = new Runner.form.Button({
			id: this.id ,
			btnName: "_________34"
		});
		
		// init
		button__________34.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_royal_customers', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '____4';
	
	if ( !pageObj.buttonEventBefore['____4'] ) {
		pageObj.buttonEventBefore['____4'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['____4'] ) {
		pageObj.buttonEventAfter['____4'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.

window.open("https://urlounge.co.jp/include/henkyaku/create_fax.php?result="+result["txt"]);
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="____4"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "____4" + "_" + Runner.genId();
		
		// create object
		var button_____4 = new Runner.form.Button({
			id: this.id ,
			btnName: "____4"
		});
		
		// init
		button_____4.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_royal_customers', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____2212';
	
	if ( !pageObj.buttonEventBefore['_____2212'] ) {
		pageObj.buttonEventBefore['_____2212'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

window.open('https://urlounge.co.jp/include/csv/label/create_csv_shop5.php');

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____2212'] ) {
		pageObj.buttonEventAfter['_____2212'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____2212"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____2212" + "_" + Runner.genId();
		
		// create object
		var button______2212 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____2212"
		});
		
		// init
		button______2212.init( {args: [ pageObj, proxy, pageid ]} );
	});
});




	

Runner.pages.PageSettings.addPageEvent('Eoc_royal_customers', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	if($("#js_load_area").html() == ""){
		$("#js_load_area").load("/include/page_event/eoc/after_load_js.php",function(){
			js_load();
		});
	}else{
		js_load();
	};

// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('Eoc_royal_customers', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	if($("#js_load_area").html() == ""){
		$("#js_load_area").load("/include/page_event/eoc/after_load_js.php",function(){
			js_load();
		});
	}else{
		js_load();
	};

// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('Eoc_royal_customers', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
console.log('Eoc_view');

// Place event code here.
// Use "Add Action" button to add code snippets.;
});

//	AJAX snippets
