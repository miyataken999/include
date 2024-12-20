











































































































































































	

Runner.pages.PageSettings.addPageEvent('Eoc_nittsuu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______14';
	
	if ( !pageObj.buttonEventBefore['_______14'] ) {
		pageObj.buttonEventBefore['_______14'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
window.open('http://urlounge.co.jp/mailsystem/send_mail/all4/regist_mail_all.php',
'win',
'width=500,height=400,menubar=yes,status=yes,scrollbars=yes') ; return false ;

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

		}
	}
	
	if ( !pageObj.buttonEventAfter['_______14'] ) {
		pageObj.buttonEventAfter['_______14'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_______14"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______14" + "_" + Runner.genId();
		
		// create object
		var button________14 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______14"
		});
		
		// init
		button________14.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_nittsuu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '________6';
	
	if ( !pageObj.buttonEventBefore['________6'] ) {
		pageObj.buttonEventBefore['________6'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
window.open('http://urlounge.co.jp/mailsystem/send_mail/all5/regist_mail_all.php',
'win',
'width=500,height=400,menubar=yes,status=yes,scrollbars=yes') ; return false ;

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['________6'] ) {
		pageObj.buttonEventAfter['________6'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="________6"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "________6" + "_" + Runner.genId();
		
		// create object
		var button_________6 = new Runner.form.Button({
			id: this.id ,
			btnName: "________6"
		});
		
		// init
		button_________6.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_nittsuu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______A_4';
	
	if ( !pageObj.buttonEventBefore['_______A_4'] ) {
		pageObj.buttonEventBefore['_______A_4'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
window.open('http://urlounge.co.jp/include/fax/sagawa_shuuka_irai/sagawa_shuuka_pickup.php'); 

		}
	}
	
	if ( !pageObj.buttonEventAfter['_______A_4'] ) {
		pageObj.buttonEventAfter['_______A_4'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_______A_4"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______A_4" + "_" + Runner.genId();
		
		// create object
		var button________A_4 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______A_4"
		});
		
		// init
		button________A_4.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_nittsuu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_________33';
	
	if ( !pageObj.buttonEventBefore['_________33'] ) {
		pageObj.buttonEventBefore['_________33'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_________33'] ) {
		pageObj.buttonEventAfter['_________33'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_________33"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_________33" + "_" + Runner.genId();
		
		// create object
		var button__________33 = new Runner.form.Button({
			id: this.id ,
			btnName: "_________33"
		});
		
		// init
		button__________33.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_nittsuu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '____3';
	
	if ( !pageObj.buttonEventBefore['____3'] ) {
		pageObj.buttonEventBefore['____3'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['____3'] ) {
		pageObj.buttonEventAfter['____3'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.

window.open("https://urlounge.co.jp/include/henkyaku/create_fax.php?result="+result["txt"]);
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="____3"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "____3" + "_" + Runner.genId();
		
		// create object
		var button_____3 = new Runner.form.Button({
			id: this.id ,
			btnName: "____3"
		});
		
		// init
		button_____3.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_nittsuu', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____2211';
	
	if ( !pageObj.buttonEventBefore['_____2211'] ) {
		pageObj.buttonEventBefore['_____2211'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

window.open('https://urlounge.co.jp/include/csv/label/create_csv_shop5.php');

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____2211'] ) {
		pageObj.buttonEventAfter['_____2211'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____2211"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____2211" + "_" + Runner.genId();
		
		// create object
		var button______2211 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____2211"
		});
		
		// init
		button______2211.init( {args: [ pageObj, proxy, pageid ]} );
	});
});
















































	

Runner.pages.PageSettings.addPageEvent('Eoc_nittsuu', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
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
	

Runner.pages.PageSettings.addPageEvent('Eoc_nittsuu', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
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
	

Runner.pages.PageSettings.addPageEvent('Eoc_nittsuu', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
console.log('Eoc_view');

// Place event code here.
// Use "Add Action" button to add code snippets.;
});

//	AJAX snippets
