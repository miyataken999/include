



	

Runner.pages.PageSettings.addPageEvent('Eoc', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '________';
	
	if ( !pageObj.buttonEventBefore['________'] ) {
		pageObj.buttonEventBefore['________'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
window.open('http://urlounge.co.jp/mailsystem/send_mail/all5/regist_mail_all.php',
'win',
'width=500,height=400,menubar=yes,status=yes,scrollbars=yes') ; return false ;

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['________'] ) {
		pageObj.buttonEventAfter['________'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="________"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "________" + "_" + Runner.genId();
		
		// create object
		var button_________ = new Runner.form.Button({
			id: this.id ,
			btnName: "________"
		});
		
		// init
		button_________.init( {args: [ pageObj, proxy, pageid ]} );
	});
});




	

Runner.pages.PageSettings.addPageEvent('Eoc', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______1';
	
	if ( !pageObj.buttonEventBefore['_______1'] ) {
		pageObj.buttonEventBefore['_______1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
window.open('http://urlounge.co.jp/mailsystem/send_mail/all4/regist_mail_all.php',
'win',
'width=500,height=400,menubar=yes,status=yes,scrollbars=yes') ; return false ;

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

		}
	}
	
	if ( !pageObj.buttonEventAfter['_______1'] ) {
		pageObj.buttonEventAfter['_______1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_______1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______1" + "_" + Runner.genId();
		
		// create object
		var button________1 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______1"
		});
		
		// init
		button________1.init( {args: [ pageObj, proxy, pageid ]} );
	});
});









































	

Runner.pages.PageSettings.addPageEvent('Eoc', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_________3';
	
	if ( !pageObj.buttonEventBefore['_________3'] ) {
		pageObj.buttonEventBefore['_________3'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_________3'] ) {
		pageObj.buttonEventAfter['_________3'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_________3"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_________3" + "_" + Runner.genId();
		
		// create object
		var button__________3 = new Runner.form.Button({
			id: this.id ,
			btnName: "_________3"
		});
		
		// init
		button__________3.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '____';
	
	if ( !pageObj.buttonEventBefore['____'] ) {
		pageObj.buttonEventBefore['____'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['____'] ) {
		pageObj.buttonEventAfter['____'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.

window.open("https://urlounge.co.jp/include/henkyaku/create_fax.php?result="+result["txt"]);
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="____"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "____" + "_" + Runner.genId();
		
		// create object
		var button_____ = new Runner.form.Button({
			id: this.id ,
			btnName: "____"
		});
		
		// init
		button_____.init( {args: [ pageObj, proxy, pageid ]} );
	});
});














































































































	

Runner.pages.PageSettings.addPageEvent('Eoc', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____221';
	
	if ( !pageObj.buttonEventBefore['_____221'] ) {
		pageObj.buttonEventBefore['_____221'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

window.open('https://urlounge.co.jp/include/csv/label/create_csv_shop5.php');

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____221'] ) {
		pageObj.buttonEventAfter['_____221'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____221"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____221" + "_" + Runner.genId();
		
		// create object
		var button______221 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____221"
		});
		
		// init
		button______221.init( {args: [ pageObj, proxy, pageid ]} );
	});
});




































































	

Runner.pages.PageSettings.addPageEvent('Eoc', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
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
	

Runner.pages.PageSettings.addPageEvent('Eoc', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
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
	

Runner.pages.PageSettings.addPageEvent('Eoc', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
console.log('Eoc_view');

// Place event code here.
// Use "Add Action" button to add code snippets.;
});

//	AJAX snippets
