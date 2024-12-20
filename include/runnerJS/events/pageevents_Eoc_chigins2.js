
























































	

Runner.pages.PageSettings.addPageEvent('Eoc_chigins2', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____21';
	
	if ( !pageObj.buttonEventBefore['_____21'] ) {
		pageObj.buttonEventBefore['_____21'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

window.open('https://urlounge.co.jp/include/csv/label/create_csv_shop5.php');

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____21'] ) {
		pageObj.buttonEventAfter['_____21'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____21"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____21" + "_" + Runner.genId();
		
		// create object
		var button______21 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____21"
		});
		
		// init
		button______21.init( {args: [ pageObj, proxy, pageid ]} );
	});
});






	

Runner.pages.PageSettings.addPageEvent('Eoc_chigins2', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'D_C';
	
	if ( !pageObj.buttonEventBefore['D_C'] ) {
		pageObj.buttonEventBefore['D_C'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['D_C'] ) {
		pageObj.buttonEventAfter['D_C'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);


window.location.reload();
		}
	}
	
	$('a[id="D_C"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "D_C" + "_" + Runner.genId();
		
		// create object
		var button_D_C = new Runner.form.Button({
			id: this.id ,
			btnName: "D_C"
		});
		
		// init
		button_D_C.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_chigins2', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______5';
	
	if ( !pageObj.buttonEventBefore['_______5'] ) {
		pageObj.buttonEventBefore['_______5'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_______5'] ) {
		pageObj.buttonEventAfter['_______5'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);


window.location.reload();
		}
	}
	
	$('a[id="_______5"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______5" + "_" + Runner.genId();
		
		// create object
		var button________5 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______5"
		});
		
		// init
		button________5.init( {args: [ pageObj, proxy, pageid ]} );
	});
});



	

Runner.pages.PageSettings.addPageEvent('Eoc_chigins2', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__________4';
	
	if ( !pageObj.buttonEventBefore['__________4'] ) {
		pageObj.buttonEventBefore['__________4'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__________4'] ) {
		pageObj.buttonEventAfter['__________4'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);


window.location.reload();
		}
	}
	
	$('a[id="__________4"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__________4" + "_" + Runner.genId();
		
		// create object
		var button___________4 = new Runner.form.Button({
			id: this.id ,
			btnName: "__________4"
		});
		
		// init
		button___________4.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_chigins2', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___7';
	
	if ( !pageObj.buttonEventBefore['___7'] ) {
		pageObj.buttonEventBefore['___7'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___7'] ) {
		pageObj.buttonEventAfter['___7'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);


window.location.reload();
		}
	}
	
	$('a[id="___7"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___7" + "_" + Runner.genId();
		
		// create object
		var button____7 = new Runner.form.Button({
			id: this.id ,
			btnName: "___7"
		});
		
		// init
		button____7.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_chigins2', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___8';
	
	if ( !pageObj.buttonEventBefore['___8'] ) {
		pageObj.buttonEventBefore['___8'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___8'] ) {
		pageObj.buttonEventAfter['___8'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);


window.location.reload();
		}
	}
	
	$('a[id="___8"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___8" + "_" + Runner.genId();
		
		// create object
		var button____8 = new Runner.form.Button({
			id: this.id ,
			btnName: "___8"
		});
		
		// init
		button____8.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_chigins2', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___9';
	
	if ( !pageObj.buttonEventBefore['___9'] ) {
		pageObj.buttonEventBefore['___9'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___9'] ) {
		pageObj.buttonEventAfter['___9'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);


window.location.reload();
		}
	}
	
	$('a[id="___9"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___9" + "_" + Runner.genId();
		
		// create object
		var button____9 = new Runner.form.Button({
			id: this.id ,
			btnName: "___9"
		});
		
		// init
		button____9.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('Eoc_chigins2', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________4';
	
	if ( !pageObj.buttonEventBefore['___________4'] ) {
		pageObj.buttonEventBefore['___________4'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________4'] ) {
		pageObj.buttonEventAfter['___________4'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________4"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________4" + "_" + Runner.genId();
		
		// create object
		var button____________4 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________4"
		});
		
		// init
		button____________4.init( {args: [ pageObj, proxy, pageid ]} );
	});
});




























































































































































	

Runner.pages.PageSettings.addPageEvent('Eoc_chigins2', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	

// Place event code here.
// Use "Add Action" button to add code snippets.



// Place event code here.
// Use "Add Action" button to add code snippets.

var ctrlPER_PRICE = Runner.getControl(pageid,'PER_PRICE');
var ctrlWEIGHT = Runner.getControl(pageid,'WEIGHT');
var ctrlAMOUNT_MONEY = Runner.getControl(pageid,'AMOUNT_MONEY');

function func() {
  ctrlAMOUNT_MONEY.setValue(Math.floor(ctrlPER_PRICE.getValue() * ctrlWEIGHT.getValue()));
};

ctrlPER_PRICE.on('keyup', func);
ctrlWEIGHT.on('keyup', func);

	$("[id*=value_AMOUNT_MONEY],[id*=value_PER_PRICE]").focusout(function(){
		//idの固有連番を取得、抜き出す
		$this_id_num = $(this).attr("id");
		$this_id_num = $this_id_num.split("_");
		$this_id_num = $this_id_num[$this_id_num.length-1];

		//計算、隠語作成
		price_keisan($this_id_num);
	});


/*********************************************************************
//販売額計算
**********************************************************************/
function price_keisan(id_num){
	$_price_res　=　$("#value_AMOUNT_MONEY_"+id_num).val();
	$_sales_price_res = $_price_res/0.4;
	$_sales_price_res = Math.floor($_sales_price_res);
	$("#value_sales_price_"+id_num).val($_sales_price_res);
}//END price_keisan;
});
	

Runner.pages.PageSettings.addPageEvent('Eoc_chigins2', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	

// Place event code here.
// Use "Add Action" button to add code snippets.

;
});
	

Runner.pages.PageSettings.addPageEvent('Eoc_chigins2', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	

// Place event code here.
// Use "Add Action" button to add code snippets.


var ctrlPER_PRICE = Runner.getControl(pageid,'PER_PRICE');
var ctrlWEIGHT = Runner.getControl(pageid,'WEIGHT');
var ctrlAMOUNT_MONEY = Runner.getControl(pageid,'AMOUNT_MONEY');

function func() {
  ctrlAMOUNT_MONEY.setValue(Math.floor(ctrlPER_PRICE.getValue() * ctrlWEIGHT.getValue()));
};

ctrlPER_PRICE.on('keyup', func);
ctrlWEIGHT.on('keyup', func);


	$("[id*=value_AMOUNT_MONEY],[id*=value_PER_PRICE]").focusout(function(){
		//idの固有連番を取得、抜き出す
		$this_id_num = $(this).attr("id");
		$this_id_num = $this_id_num.split("_");
		$this_id_num = $this_id_num[$this_id_num.length-1];

		//計算、隠語作成
		price_keisan($this_id_num);
	});


/*********************************************************************
//販売額計算
**********************************************************************/
function price_keisan(id_num){
	$_price_res　=　$("#value_AMOUNT_MONEY_"+id_num).val();
	$_sales_price_res = $_price_res/0.4;
	$_sales_price_res = Math.floor($_sales_price_res);
	$("#value_sales_price_"+id_num).val($_sales_price_res);
}//END price_keisan;
});

//	AJAX snippets
