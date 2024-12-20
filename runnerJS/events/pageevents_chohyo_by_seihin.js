



















































































































	

Runner.pages.PageSettings.addPageEvent('chohyo_by_seihin', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__34';
	
	if ( !pageObj.buttonEventBefore['__34'] ) {
		pageObj.buttonEventBefore['__34'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
jQuery("#searchButton1").click();
// Put your code here.
params["txt"] = "searc";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__34'] ) {
		pageObj.buttonEventAfter['__34'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__34"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__34" + "_" + Runner.genId();
		
		// create object
		var button___34 = new Runner.form.Button({
			id: this.id ,
			btnName: "__34"
		});
		
		// init
		button___34.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('chohyo_by_seihin', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___54';
	
	if ( !pageObj.buttonEventBefore['___54'] ) {
		pageObj.buttonEventBefore['___54'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
jQuery("#showAll1").click();
params["txt"] = "success";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___54'] ) {
		pageObj.buttonEventAfter['___54'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___54"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___54" + "_" + Runner.genId();
		
		// create object
		var button____54 = new Runner.form.Button({
			id: this.id ,
			btnName: "___54"
		});
		
		// init
		button____54.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('chohyo_by_seihin', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________512';
	
	if ( !pageObj.buttonEventBefore['___________512'] ) {
		pageObj.buttonEventBefore['___________512'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________512'] ) {
		pageObj.buttonEventAfter['___________512'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________512"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________512" + "_" + Runner.genId();
		
		// create object
		var button____________512 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________512"
		});
		
		// init
		button____________512.init( {args: [ pageObj, proxy, pageid ]} );
	});
});















	

Runner.pages.PageSettings.addPageEvent('chohyo_by_seihin', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______1_';
	
	if ( !pageObj.buttonEventBefore['_______1_'] ) {
		pageObj.buttonEventBefore['_______1_'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
$("select[name^='value_location']").val(1);

		}
	}
	
	if ( !pageObj.buttonEventAfter['_______1_'] ) {
		pageObj.buttonEventAfter['_______1_'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_______1_"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______1_" + "_" + Runner.genId();
		
		// create object
		var button________1_ = new Runner.form.Button({
			id: this.id ,
			btnName: "_______1_"
		});
		
		// init
		button________1_.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('chohyo_by_seihin', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_2_';
	
	if ( !pageObj.buttonEventBefore['_2_'] ) {
		pageObj.buttonEventBefore['_2_'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
$("select[name^='value_location']").val(2);

		}
	}
	
	if ( !pageObj.buttonEventAfter['_2_'] ) {
		pageObj.buttonEventAfter['_2_'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_2_"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_2_" + "_" + Runner.genId();
		
		// create object
		var button__2_ = new Runner.form.Button({
			id: this.id ,
			btnName: "_2_"
		});
		
		// init
		button__2_.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('chohyo_by_seihin', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_3_';
	
	if ( !pageObj.buttonEventBefore['_3_'] ) {
		pageObj.buttonEventBefore['_3_'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
$("select[name^='value_location']").val(3);

		}
	}
	
	if ( !pageObj.buttonEventAfter['_3_'] ) {
		pageObj.buttonEventAfter['_3_'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_3_"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_3_" + "_" + Runner.genId();
		
		// create object
		var button__3_ = new Runner.form.Button({
			id: this.id ,
			btnName: "_3_"
		});
		
		// init
		button__3_.init( {args: [ pageObj, proxy, pageid ]} );
	});
});




























































































//	AJAX snippets
