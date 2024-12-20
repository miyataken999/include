






































































































	

Runner.pages.PageSettings.addPageEvent('Eoc_transfer_confirm', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '______7';
	
	if ( !pageObj.buttonEventBefore['______7'] ) {
		pageObj.buttonEventBefore['______7'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['______7'] ) {
		pageObj.buttonEventAfter['______7'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"];
ctrl.setMessage(message);

if(message == 'OK'){
	location.reload();
}

		}
	}
	
	$('a[id="______7"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "______7" + "_" + Runner.genId();
		
		// create object
		var button_______7 = new Runner.form.Button({
			id: this.id ,
			btnName: "______7"
		});
		
		// init
		button_______7.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_transfer_confirm', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'kinkai___';
	
	if ( !pageObj.buttonEventBefore['kinkai___'] ) {
		pageObj.buttonEventBefore['kinkai___'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['kinkai___'] ) {
		pageObj.buttonEventAfter['kinkai___'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);
location.href='/mailsystem/send_mail/transfer_confirm/regist_mail_all.php?tpl=20';

		}
	}
	
	$('a[id="kinkai___"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "kinkai___" + "_" + Runner.genId();
		
		// create object
		var button_kinkai___ = new Runner.form.Button({
			id: this.id ,
			btnName: "kinkai___"
		});
		
		// init
		button_kinkai___.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_transfer_confirm', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'kin____';
	
	if ( !pageObj.buttonEventBefore['kin____'] ) {
		pageObj.buttonEventBefore['kin____'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['kin____'] ) {
		pageObj.buttonEventAfter['kin____'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);
location.href='/mailsystem/send_mail/transfer_confirm/regist_mail_all.php?tpl=91';

		}
	}
	
	$('a[id="kin____"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "kin____" + "_" + Runner.genId();
		
		// create object
		var button_kin____ = new Runner.form.Button({
			id: this.id ,
			btnName: "kin____"
		});
		
		// init
		button_kin____.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_transfer_confirm', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'bra___';
	
	if ( !pageObj.buttonEventBefore['bra___'] ) {
		pageObj.buttonEventBefore['bra___'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['bra___'] ) {
		pageObj.buttonEventAfter['bra___'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);
location.href='/mailsystem/send_mail/transfer_confirm/regist_mail_all.php?tpl=21';

		}
	}
	
	$('a[id="bra___"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "bra___" + "_" + Runner.genId();
		
		// create object
		var button_bra___ = new Runner.form.Button({
			id: this.id ,
			btnName: "bra___"
		});
		
		// init
		button_bra___.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_transfer_confirm', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'bra____';
	
	if ( !pageObj.buttonEventBefore['bra____'] ) {
		pageObj.buttonEventBefore['bra____'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['bra____'] ) {
		pageObj.buttonEventAfter['bra____'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);
location.href='/mailsystem/send_mail/transfer_confirm/regist_mail_all.php?tpl=90';

		}
	}
	
	$('a[id="bra____"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "bra____" + "_" + Runner.genId();
		
		// create object
		var button_bra____ = new Runner.form.Button({
			id: this.id ,
			btnName: "bra____"
		});
		
		// init
		button_bra____.init( {args: [ pageObj, proxy, pageid ]} );
	});
});























































































































//	AJAX snippets
